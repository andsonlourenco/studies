type Props = {
  title: string
}

export default function Home({ title = 'Boilerplate' }: Props) {
  return <h1>{title}</h1>
}
