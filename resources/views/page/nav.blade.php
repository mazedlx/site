<nav class="flex flex-col justify-end pb-4">
    <div class="py-2 border-b-2 border-transparent w-2/3 text-2xl font-serif text-teal-700">mazedlx.net webproductions</div>
    <div class="md:hidden">
        <button id="nav_btn" type="button">@svg('menu', 'h-6 w-6 fill-current')</button>
    </div>
    <div class="hidden flex md:flex flex-col md:flex-row md:justify-around md:w-2/3" id="nav_links">
        <div class="flex-auto py-2 px-1 text-center nav-item border border-t-0 border-l-0 border-r-0 border-b-2 border-transparent">
            <a class="no-underline text-gray-700 text-lg font-serif" title="__('Leistungen')" href="#services">{{ __('Leistungen') }}</a>
        </div>
        <div class="flex-auto py-2 px-1 text-center nav-item border border-t-0 border-l-0 border-r-0 border-b-2 border-transparent">
            <a class="no-underline text-gray-700 text-lg font-serif" title="__('Referenzen')" href="#portfolio">{{ __('Referenzen') }}</a>
        </div>
        <div class="flex-auto py-2 px-1 text-center nav-item border border-t-0 border-l-0 border-r-0 border-b-2 border-transparent">
            <a class="no-underline text-gray-700 text-lg font-serif" title="__('Kontakt')" href="#contact">{{ __('Kontakt') }}</a>
        </div>
        <div class="flex-auto py-2 px-1 text-center nav-item border border-t-0 border-l-0 border-r-0 border-b-2 border-transparent">
            <a class="no-underline text-gray-700 text-lg font-serif" title="__('Impressum')" href="#imprint">{{ __('Impressum') }}</a>
        </div>
        <div class="flex-auto py-2 px-1 text-center nav-item border border-t-0 border-l-0 border-r-0 border-b-2 border-transparent">
            <a class="no-underline text-gray-700 text-lg font-serif" title="__('Blog')" href="https://blog.mazedlx.net/" target="_blank">{{ __('Blog') }}</a>
        </div>
        <div class="flex-auto py-2 px-1 text-center nav-item">
            <a class="no-underline text-gray-700 text-lg font-serif" title="__('GitHub')" href="https://github.com/mazedlx/" target="_blank">{{ __('GitHub') }}</a>
        </div>
        <div class="flex-auto py-2 px-1 text-center nav-item">
            <a class="no-underline text-gray-700 text-lg font-serif" title="__('English')" href="/{{ $changeLocaleTo }}">{{ __('English') }}</a>
        </div>
    </div>
</nav>
