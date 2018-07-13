<div class="menufooter">
	<div class="container">
		<div class="row">
			<div class="col-dl-10">
				<div class="search" style="float: left;">
					<form action="http://hocvientienganh.com/tim-kiem.html" method="get">
						<input type="text" name="keyword" class="txtSearch" />
						<input type="image" src="{{asset('assets/images/forum/icon-search.png') }}" class="btnSearch" style="top: 7px;" />
					</form>
				</div>
			</div>
			<div class="col-dl-2 social" align="right">
				<a href="https://www.facebook.com/" target="_blank" rel="nofollow"></a>
				<a href="https://plus.google.com/" target="_blank" rel="nofollow" class="social-google"></a>
				<a href="https://www.facebook.com/" target="_blank" rel="nofollow" class="social-twitter"></a>
				<a href="https://www.youtube.com/" target="_blank" rel="nofollow" class="social-youtube"></a>
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<h1>DIỄN ĐÀN TIẾNG ANH <span>Nơi chia sẻ các phương pháp học tiếng Anh</span></h1>
		<strong>THÔNG TIN LIÊN HỆ: </strong><br />
		Điện thoại: 0929 006 280<br />
		Email: vulongepu@gmail.com
		<div>Phiên bản thử nghiệm</div>
	</div>
</div>
<div id="goTop" class="gotoppage"><img src="{{asset('assets/images/forum//icon-back.png') }}" alt="Len dau trang" /></div>
{{--<script defer src="{!! Theme::script('hv/js/jquery.flexslider.js') !!}" type="text/javascript"></script>--}}
<script type="text/javascript">
    $(document).ready(function(){
        $('.flexslider').flexslider({ animation: "fade", });
        var hei = $('#headertop').height();
        if($(window).width() > 992){
            $(window).scroll(function () {
                if ($(this).scrollTop() > ($('#headertop').height() + $('.topweb').height())){ $('.navmenus').addClass('scroll');$('body').css('padding-top',$('.navmenus').height()) }else{ $('.navmenus').removeClass('scroll');$('body').removeAttr('style') }
            });
        }
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) $('#goTop').fadeIn();
            else $('#goTop').fadeOut();
        });
        $('#goTop').click(function () {
            $('body,html').animate({ scrollTop: 0 }, 'slow');
        });
        $('.fanpagef .fb-like-box').attr('data-width',$('.fanpagef').width()-1);
    });
</script>