import fs from "fs"; // ES6
import { v4 as uuid } from "uuid";
// const fs = require("fs"); - CommonJS
const DB_FILE_PATH = "./core/db";

type UUID = string;

interface Todo {
  id: UUID;
  date: string;
  content: string;
  done: boolean;
}

export function create(content: string): Todo {
  const todo: Todo = {
    id: uuid(),
    date: new Date().toISOString(),
    content: content,
    done: false,
  };

  const todos: Array<Todo> = [...read(), todo];

  fs.writeFileSync(
    DB_FILE_PATH,
    JSON.stringify(
      {
        todos,
      },
      null,
      2
    )
  );
  return todo;
}

export function read(): Array<Todo> {
  const dbString = fs.readFileSync(DB_FILE_PATH, "utf-8");
  const db = JSON.parse(dbString || "{}");
  if (!db.todos) {
    // Fail fast validations
    return [];
  }
  return db.todos;
}

export function update(id: UUID, partialTodo: Partial<Todo>): Todo {
  let updateTodo;
  const todos = read();

  todos.forEach((currentTodo) => {
    const isToUpdate = currentTodo.id === id;
    if (isToUpdate) {
      updateTodo = Object.assign(currentTodo, partialTodo);
    }
  });

  fs.writeFileSync(
    DB_FILE_PATH,
    JSON.stringify(
      {
        todos,
      },
      null,
      2
    )
  );

  if (!updateTodo) {
    throw new Error("Please, provider another ID!");
  }

  return updateTodo;
}

export function updateContentById(id: UUID, content: string): Todo {
  return update(id, {
    content,
  });
}

export function deleteById(id: UUID) {
  const todos = read();

  const todosWithoutOne = todos.filter((todo) => {
    if (id === todo.id) {
      return false;
    }

    return true;
  });

  fs.writeFileSync(
    DB_FILE_PATH,
    JSON.stringify(
      {
        todos: todosWithoutOne,
      },
      null,
      2
    )
  );
}

export function CLEAN_DB() {
  fs.writeFileSync(DB_FILE_PATH, "");
}

//SIMULATION
// CLEAN_DB();

// create("Primeira TODO");
// const secondTodo = create("Primeira TODO");
// deleteById(secondTodo.id);
// const thirdTodo = create("Segundo TODO");
// // update(thirdTodo.id, {
// //     content: "Atualizada!",
// //     done: true
// // })
// updateContentById(thirdTodo.id, "Atualizada");
