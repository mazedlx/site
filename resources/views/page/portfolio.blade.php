<section class="bg-primary" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">Portfolio</h2>
                <hr class="light">
                <p class="text-faded">

                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            @foreach ($portfolios as $portfolio)
                @include('page._portfolio')
            @endforeach
        </div>
    </div>
</section>
