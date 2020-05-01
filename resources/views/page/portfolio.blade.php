<div id="portfolio" class="section">
    <h1 class="heading">{{ __('Referenzen') }}</h1>
    <div class="portfolio-container">
        @each('page.portfolio_single', $portfolios, 'portfolio')
    </div>
</div>
