<nav class="nav">
    <div class="nav-title">mazedlx.net webproductions</div>
    <div class="nav-button">
        <button id="nav_btn" type="button">@svg('menu', 'h-6 w-6 fill-current')</button>
    </div>
    <div class="nav-links" id="nav_links">
        <div class="nav-item"><a title="__('Leistungen')" href="#services">{{ __('Leistungen') }}</a></div>
        <div class="nav-item"><a title="__('Referenzen')" href="#portfolio">{{ __('Referenzen') }}</a></div>
        <div class="nav-item"><a title="__('Kontakt')" href="#contact">{{ __('Kontakt') }}</a></div>
        <div class="nav-item"><a title="__('Impressum')" href="#imprint">{{ __('Impressum') }}</a></div>
        <div class="nav-item"><a title="__('Blog')" href="https://blog.mazedlx.net/" target="_blank">{{ __('Blog') }}</a></div>
        <div class="nav-item"><a title="__('GitHub')" href="https://github.com/mazedlx/" target="_blank">{{ __('GitHub') }}</a></div>
        <div class="nav-item"><a title="__('English')" href="/{{ $changeLocaleTo }}">{{ __('English') }}</a></div>
    </div>
</nav>
