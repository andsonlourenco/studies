const repositoryName = 'unform';

export function RepositoryList() {
  return (
    <section className="repository-list">
      <h1>Lista de repositorios</h1>

      <ul>
        <li>
          <strong>{repositoryName}</strong>
          <p>Forms in React</p>

          <a href="">Acessar repositorios</a>
        </li>

        <li>
          <strong>unform</strong>
          <p>Forms in React</p>

          <a href="">Acessar repositorios</a>
        </li>

        <li>
          <strong>unform</strong>
          <p>Forms in React</p>

          <a href="">Acessar repositorios</a>
        </li>
      </ul>
    </section>
  )
}