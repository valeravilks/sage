<div data-component='{{ $componentName }}'>
  <a href="{{ $siteUrl }}">
    @if($isSiteIcon())
      <img class="h-[50px]" src="{{ $siteIcon }}" alt="{{ $siteName }}">
    @else
      <span>{{ $siteName }}</span>
    @endif
  </a>
</div>
