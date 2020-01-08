<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('questions.layouts.top')
</head>

<body>

<header class="uk-background-primary uk-background-norepeat uk-background-cover uk-background-center-center uk-light"
        style="background-image: url(https://via.placeholder.com/0000FF/808080);">
    @include('questions.layouts.header')
</header>


@yield('content')

<footer class="uk-section uk-text-center uk-text-muted">
    @include('questions.layouts.footer')
</footer>

<script src="{{ asset('js/awesomplete.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>


</body>

</html>