@include('template.layout')
<main>
    <div id="jumbotron"></div>
    <div class="container">
      <div id="etichetta">CURRENT SERIES</div>
      {{-- <CardSerie
        v-for="item in series"
        :key="item.thumb"
        :img="item.thumb"
        :serie="item.series"
      /> --}}
    </div>
    <button>LOAD MORE</button>
  </main>