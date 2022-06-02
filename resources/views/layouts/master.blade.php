 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- hier wird der Wert von der section "title" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <!-- Scripts SASS-->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <!-- Styles SASS-->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   <title>@yield('title')</title>
 </head>

 <body>
 <img src="{{ asset('img/twit.png')}}">
   <!-- hier wird auch der Wert von der section "title" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   <h1><a href="/messages">@yield('title')</a></h1>
   <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   @yield('content')
   <!-- hier wird die php Funktion date() aufgerufen mit dem Format-Pattern 'd.m.Y'
    und im html ausgegeben-->
   <div><b>Today is {{date('D, M Y')}}</b></div>
 </body>

 </html>