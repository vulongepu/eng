@extends('layouts.master')

@section('title')
    {{ $post->title }} | @parent
@stop

@section('content')
    <div class="container">
        <div class="col-lg-9" style="background: #fff">
            <h1 style="background: #4065d0;padding: 15px;color: #fff;font-size: 23px;">Diễn đàn tiếng anh
                <a href=""><img src="{{asset('assets/images/iconsRef12ix.png')}}" style="float:right" alt=""></a></h1>

            {{-- Phân trang --}}


        <span class="linkBack">
            <a href="{{ URL::route($currentLocale . '.blog') }}" class="ipSubBox1"><i class="glyphicon glyphicon-chevron-left"></i> Bài trước</a>
        </span>
        <h1>{{ $post->title }}</h1>
        <span class="date" style="width: 100%;overflow: hidden;display: block;margin-bottom: 14px;border-bottom: 1px solid #ccc;";>Ngày đăng: {{ $post->created_at->format('d-m-Y') }}</span>

        {!! $post->content !!}

            <p style="margin-top: 10px">
                <?php if ($previous = $post->present()->previous): ?>
                    <a href="{{ route(locale() . '.blog.slug', [$previous->slug]) }}" class="ipSubBox1">Bài trước</a>
                <?php endif; ?>
                <?php if ($next = $post->present()->next): ?>
                    <a href="{{ route(locale() . '.blog.slug', [$next->slug]) }}" class="ipSubBox1">Bài tiếp</a>
                <?php endif; ?>
            </p>
            <a style="border: 1px solid;padding: 4px;float: right;margin-bottom: 10px;" href="https://www.facebook.com/sharer/sharer.php?u=http://hocvientienganh.com/forum/{{ $post->slug }}" target="_blank">
                <i class="fa fa-share"></i> Chia sẻ
            </a>

    </div>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="fb-comments" data-href="http://hocvientienganh.com/forum/{{ $post->slug }}" data-numposts="5"></div>

    </div>

    <div class="col-lg-3">
    </div>


@stop

<style>
    .ipSubBox1 {
        display: inline-block;
        color: #fff;
        padding: 3px;
        border-radius: 3px;
        background: #4065d0;
        border: #ddd solid 1px;
        margin-right: 5px;
        margin-bottom: 5px;
        font-size: 11px;
    }
</style>