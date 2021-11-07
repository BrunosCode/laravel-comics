<footer class="c-footerTop">
    <div class="l-container l-row l-row--spacebetween">
        <nav class="c-footerTop__nav l-col l-wrap">
            @foreach (config('footerNav') as $list)
            <ul class="c-footerTop__list h-listReset">
                <li>
                    <h3 class="c-footerTop__subtitle">{{ $list["title"] }}</h3>
                </li>
                @foreach ($list["links"] as $link)
                <li>
                    <a href="{{ $link["url"] }}" class="c-footerTop__link c-link l-row">{{ $link["text"] }}</a>
                </li>
                @endforeach
            </ul>
            @endforeach
      </nav>
      <img class="c-footerTop__img" src="{{ asset('/images/dc-logo-bg.png') }}" alt="">
  </div>
</footer>