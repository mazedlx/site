<div id="portfolio" class="section">
    <h1 class="heading">@lang('Referenzen')</h1>
    <div class="portfolio-container">
        @each('page.portfolio_single', $portfolios, 'portfolio')
    </div>
</div>
