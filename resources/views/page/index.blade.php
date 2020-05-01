@extends('layouts.page')

@section('content')
<div id="app" class="bg-teal-100 h-full bg-no-repeat bg-cover bg-fixed">
    <div class="container bg-white border border-transparent mx-auto px-8 py-6 shadow-lg">

        @include('page.nav')

        @include('page.services')

        @include('page.portfolio')

        @include('page.contact')

        @include('page.imprint')

        @include('page.copyright')

    </div>
</div>
@endsection
