<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- SITE TITLE -->
    <title>Hilux - Real Estate HTML Template</title>
    @include("landing.components.styles-head")
</head>

<body data-spy="scroll" data-offset="80">

    <!-- START PRELOADER -->
    <div class="preloader">
        <div class="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->
    @include('landing.components.navbar')

    @include('landing.components.hero')


    {{-- @include('landing.components.search') --}}

    @include('landing.components.card-property', ['destinations' => $destinations])

    {{-- @include('landing.components.portfolio') --}}

    {{-- @include('landing.components.team') --}}

    @include('landing.components.testimonials')

    {{-- @include('landing.components.newsletter') --}}

    {{-- @include('landing.components.blog') --}}

    @include('landing.components.footer')

    @include('landing.components.js')
</body>

</html>
