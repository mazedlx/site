<div id="portfolio" class="pb-8">
    <h1 class="text-4xl py-4 text-right font-serif font-normal text-teal-700">{{ __('Referenzen') }}</h1>
    <div class="flex flex-col md:flex-row md:flex-wrap  justify-between">
        @each('page.portfolio_single', $portfolios, 'portfolio')
    </div>
</div>
