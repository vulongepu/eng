<!DOCTYPE html>
<html>
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
    <meta property="og:site_name" content="hocvientienganh.com" />
    <meta property="fb:app_id" content="1494823557436209" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://hocvientienganh.com/dien-dan.html" />
    <meta property="og:title" content="Diễn đàn" />
    <meta property="og:description" content="Kho tài liệu luyện thi TOIEC, IELTS,TOEFL, Diễn đàn trao đổi, chia sẻ các phương pháp học tiếng Anh hiệu quả, sinh động." />
    <meta property="og:image" content="http://hocvientienganh.com/styles/website/images/logo.png" />
    <meta property="hocvientienganhcom:full_image" content="http://hocvientienganh.com/styles/website/images/logo.png" />
    <meta name="description" content="Kho tài liệu luyện thi TOIEC, IELTS,TOEFL, Diễn đàn trao đổi, chia sẻ các phương pháp học tiếng Anh hiệu quả, sinh động." />
    <meta name="keywords" content="hocvientienganh.com | Nơi chia sẻ các phương pháp học tiếng Anh" />
    <meta name="google-site-verification" content=""/>
    <link rel="canonical" href="http://hocvientienganh.com/dien-dan.html"/>
    {!! Theme::style('hv/css/bootstrap.min.css') !!}
    {!! Theme::style('hv/css/font-awesome.min.css') !!}
    {!! Theme::style('hv/css/flexslider.css') !!}
{{--    {!! Theme::style('hv/css/alertify.bootstrap.core.css') !!}--}}
    {!! Theme::style('hv/css/style.css') !!}
{{--    {!! Theme::style('hv/css/animate.min.css') !!}--}}
    {!! Theme::style('hv/css/main.css') !!}

</head>
<body>

@include('partials.forum.header')

    @yield('content')

@include('partials.forum.footer')

{!! Theme::script('hv/js/bootstrap.min.js') !!}
{!! Theme::script('hv/js/dropdowns-enhancement.js') !!}
{!! Theme::script('hv/js/jquery.min.js') !!}



</body>
</html>
