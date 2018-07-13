<?php
//echo '<pre>';print_r($categories);die;
?>
@extends('layouts.master')

@section('title')
    Diễn đàn tiếng anh | @parent
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9" style="background: #fff">
                <h1 style="background: #4065d0;padding: 15px;color: #fff;font-size: 23px;">Diễn đàn tiếng anh
                    <a href=""><img src="{{asset('assets/images/iconsRef12ix.png')}}" style="float:right" alt=""></a></h1>

                {{-- Start post--}}
                <?php if (isset($posts)): ?>
                <?php foreach ($posts as $post): ?>
                <article>
                    <div class="col-sm-1 col-md-1">
                        <figure class="ta_2144">
                            <img src="{{asset('assets/images/avatar_blog.jpg')}}">
                        </figure>
                    </div>
                    <div class="col-sm-11 col-md-11">
                        {{--<span class="label label-default pull-right"><i class="glyphicon glyphicon-comment"></i>11</span>--}}
                        <h4><a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}">{{ $post->title }}</a></h4>
                        {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>--}}
                        <section>
                            <i class="glyphicon glyphicon-folder-open"></i>Tiếng anh
                            <?php
                            $ran = array('hương giang','trà my','hữu hòa','girl_xinh','hvta_123','nyc_tere','nguoi_la_oi','wtf_123','quang_sang','trung*quan','hương mai');
                            $name_k = array_rand($ran);
                            $name = $ran[$name_k];
                            ?>

                            <i class="glyphicon glyphicon-user"></i>{{ $name }}
                            <i class="glyphicon glyphicon-calendar"></i>{{ $post->created_at->format('d-m-Y') }}
                            <i class="glyphicon glyphicon-eye-open"></i>{{ rand(20, 200) }}
                            <a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}" class="btn btn-default btn-sm pull-right">Xem bài viết ... </a>
                        </section>
                    </div>
                </article>
                <?php endforeach; ?>
                <?php endif; ?>
                {!! $posts->links() !!}
            </div>
            <div class="col-md-3" style="background: #fff;border-left:1px solid #ddd;padding-top: 15px">
                <div class="btnMid_subBox" id="PrefixList" style="margin-top:15px;font-size:12px">Chủ đề&nbsp;&nbsp;&nbsp;
                    <?php if (isset($categories)): ?>
                    <?php foreach ($categories as $category): ?>
                    <a href="{{ route('blog.category',['slug' => $category->slug]) }}" class="ipSubBox" title="{{ $category->name }}" style="text-decoration: none">{{ $category->name }}</a>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            {{-- end --}}
        </div>
    </div>

@stop
