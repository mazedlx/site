<section class="section-divider textdivider divider3">
    <div class="container">
        <h1>{{ strtoupper('Portfolio') }}</h1>
        <hr>
        <p>Viele zufriedene KundInnen.</p>
    </div>
</section>

<div class="container" id="portfolio" name="portfolio">
    <br>
    <div class="row">
        <br>
        <h1 class="centered">{{ strtoupper('Wir erschaffen coole Dinge') }}</h1>
        <hr>
        <br>
        <br>
    </div><!-- /row -->
    <div class="container">
        <div class="row">
    @foreach($portfolios as $portfolio)
        @include('page._portfolio')
    @endforeach
        </div>
    </div><!-- /row -->
</div><!-- /container -->
