<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="@setting('core::site-description')" />
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')@setting('core::site-name')@show
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">
    {!! Theme::style('css/bootstrap.min.css') !!}
    {!! Theme::style('css/owl.carousel.min.css') !!}
    {!! Theme::style('css/animated.css') !!}
    {!! Theme::style('css/font-awesome.css') !!}
    {!! Theme::style('css/ui.css') !!}
    {!! Theme::style('css/jquery.mmenu.all.css') !!}
    {!! Theme::style('css/flaticon.css') !!}
    {!! Theme::style('css/style.css') !!}
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i;Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    @stack('css-stack')
</head>
