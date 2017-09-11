<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <head>
        <title>{{ config('app.name', 'Portfolio') }}</title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CMS based Portfolio">
        <meta name="author" content="Mahip Kaushal">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="">  
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,500,700" rel="stylesheet">
        <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
        @yield('style')
    </head> 
    <body>

        <div class="app" id="app">
            
            @yield('content')
            
        </div>


        <script type="text/javascript" src="{{ asset('admin/js/app.js') }}"></script>

        @yield('script')

    </body>
</html>