   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <meta http-equiv="refresh" content="5" /> -->

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Title') }}</title>
   <link rel="icon" href="{{ asset('#') }}" type="image/icon type">

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   
   <!-- Styles -->
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/dataTables.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
   @yield('css')

