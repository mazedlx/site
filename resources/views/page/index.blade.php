@extends('layouts.page')

@section('content')
<div id="app" class="page-background">
    <div class="container wrapper shadow-lg">

        @include('page.nav')

        @include('page.services')

        @include('page.portfolio')

        @include('page.contact')

        @include('page.imprint')

        @include('page.copyright')

    </div>
</div>
@endsection
