@component('mail::message')
  # {{ $nomeSerie }} criada

  A série {{ $nomeSerie }} com {{ $qtdTemporadas }} temporadas e {{ $episodiosPorTemporada }} episodios por temporada foi criada

  Acesse aqui:
  @component('mail::button', ['url' => route('seasons.index', $idSerie)])
    Ver Série
  @endcomponent
@endcomponent