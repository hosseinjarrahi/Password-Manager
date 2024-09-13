<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="rtl">
    <head>
        @include ('layouts.molecules.head')
    </head>

    <body class="h-screen text-base text-grey-darkest font-normal relative body-{{ str_replace('.', '-', $ROUTE) }}">
        @yield ('body')

        @include ('layouts.molecules.footer')
    </body>
</html>
