
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @if(isset($styles))
        {{$styles}}
    @endif
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    </head>
<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    @include('layouts.navigation')

    <!-- Text Header -->
    @if(isset($header))
        {{$header}}
    @endif
    
    @if(isset($categorynav))
        {{$categorynav}}
    @endif


    <div class="flex items-center justify-center" style="min-height: 1024px"> 
        {{$maincontent}}
    </div>

    @include('layouts.footer')

    @if(@isset($scripts))
        {{$scripts}}
    @endisset

</body>
</html>