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
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://hocvientienganh.com" />
    <meta property="og:title" content="Diễn đàn" />
    <meta property="og:description" content="Kho tài liệu luyện thi TOIEC, IELTS,TOEFL, Diễn đàn trao đổi, chia sẻ các phương pháp học tiếng Anh hiệu quả, sinh động." />
    <meta property="og:image" content="{{asset('assets/images/logo.png') }}" />
    <meta property="hocvientienganhcom:full_image" content="{{asset('assets/images/logo.png') }}" />
    <meta name="description" content="Kho tài liệu luyện thi TOIEC, IELTS,TOEFL, Diễn đàn trao đổi, chia sẻ các phương pháp học tiếng Anh hiệu quả, sinh động." />
    <meta name="keywords" content="hocvientienganh.com | Nơi chia sẻ các phương pháp học tiếng Anh" />

    {!! Theme::style('css/bootstrap.min.css') !!}
    {!! Theme::style('css/font-awesome.min.css') !!}
    {!! Theme::style('css/bootstrap-social.css') !!}
    {!! Theme::style('css/alertify.bootstrap.core.css') !!}
    {!! Theme::style('css/jBox.css') !!}
    {!! Theme::style('css/ModalBorder.css') !!}
    {!! Theme::style('css/sign.css') !!}
    {!! Theme::style('css/style.css') !!}
    {!! Theme::style('css/jquery.qtip.min.css') !!}
    {!! Theme::style('css/animate.min.css') !!}
    {!! Theme::style('css/main.css') !!}

    @stack('css-stack')
</head>
<body>

@include('partials.navigation')

    @yield('content')
@include('partials.footer')

{!! Theme::script('js/all.js') !!}
@yield('scripts')

<?php if (Setting::has('core::analytics-script')): ?>
    {!! Setting::get('core::analytics-script') !!}
<?php endif; ?>
@stack('js-stack')
</body>
</html>
