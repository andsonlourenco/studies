import { prisma } from "../src/lib/prisma";

async function seed() {
  await prisma.event.create({
    data: {
      id: '4c044a3b-f9fd-4346-b02f-71e539c6af9b',
      title: "Unite Summit",
      slug: "unite-summit",
      details:
        "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
      maximumAttendees: 120,
    },
  });
}

seed().then(() => {
  console.log("Database seeded!");
  prisma.$disconnect();
});
