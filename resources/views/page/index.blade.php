<!DOCTYPE html>
<html lang="de">
    @include('page.head')

    <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
        <div id="app">
            @include('page.nav')

            @include('page.header')

            @include('page.about')

            @include('page.services')

            @include('page.portfolio')

            @include('page.handmade')

            @include('page.contact')

            @include('page.footer')
        </div>
    </body>
</html>
