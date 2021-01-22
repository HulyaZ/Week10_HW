<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>@yield('title',config('app.name'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    @include('front.layouts.inc.head')

</head>
<body>
<header>
    @include('front.layouts.inc.header')
</header>

@include('front.layouts.inc.banner')

<div id="mainBody">
    <div class="container">
        <div class="row">
            @if (Request::path() == '/about' )
                @include('front.about')
            @elseif (Request::path() == '/contact' )
                @include('front.contact')
            @endif
            @yield('content')
        </div>
    </div>
</div>


@include('front.layouts.inc.footer')
@include('front.layouts.inc.footer_script')

</body>
</html>
