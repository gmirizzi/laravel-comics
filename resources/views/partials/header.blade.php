<header>
    <div class="container">
      <img src="{{asset('images/dc-logo.png')}}" alt="Logo DC Comics" />
      <nav>
        <ul>
          {{-- <li
            v-for="(link, index) in links"
            :key="link.text"
            :class="{ active: index == activeIndex }"
            @click.stop.prevent="activeIndex = index"
          >
            <a href="link.href">{{ link.text }}</a>
          </li> --}}
        </ul>
      </nav>
    </div>
  </header>