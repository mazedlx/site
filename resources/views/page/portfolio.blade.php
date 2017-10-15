<section class="p-0" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            @foreach ($portfolios as $portfolio)
                @include('page._portfolio')
            @endforeach
        </div>
    </div>
</section>
