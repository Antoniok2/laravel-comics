<header>
    <header>
        <img src="{{ asset('/storage/assets/img/DC_Comics_logo.svg.png') }}">
          <nav>
            <ul>
              @foreach ($menu as $item)
                  <li>
                    {{ $item }}
                  </li>
              @endforeach
            </ul>
          </nav>
    </header>
</header>