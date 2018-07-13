@extends('layouts.forum.master')

@section('title')
	Diễn đàn tiếng anh | @parent
@stop

@section('content')
	<div class="container">
		<div class="breadcrumb">
			<a href="http://hocvientienganh.com" class="homeico">Trang chủ</a><a href="http://hocvientienganh.com/dien-dan.html">Diễn đàn</a>
			<div class="clearfix"></div>
		</div>
		<div class="row">
			<div class="col-dl-9">
				<div class="col-left color5">
					<div class="title-cate">
						<div class="row">
							<div class="col-dl-12"><a href="http://hocvientienganh.com/chuyen-muc/bai-hoc.html">Bài học</a></div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/giaotiepicon.png') }}" alt="Tiếng Anh Giao Tiếp" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/tieng-anh-giao-tiep.html">Tiếng Anh Giao Tiếp</a></h3>
						<p>Học tiếng Anh qua các tình huống giao tiếng hàng ngày, phỏng vấn xin việc và giao tiếp tại nơi công sở.</p>
						<div class="subcate">
							<ul class="news_related">
								<li><a href="http://hocvientienganh.com/forum/danh-muc/phong-van-xin-viec">Phỏng vấn xin việc</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/giao-tiep-hang-ngay">Giao tiếp hàng ngày</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/giao-tiep-van-phong">Giao tiếp văn phòng</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/tinh-huong-giao-tiep">Tình huống giao tiếp</a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Tieng-Anh-hoi-thoai-chon-cong-so_3696.html">Tiếng Anh hội thoại chốn công sở</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/consult.png') }}" alt="Tiếng Anh Thương Mại" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/tieng-anh-thuong-mai.html">Tiếng Anh Thương Mại</a></h3>
						<p>Thảo luận và chia sẻ bài học &amp; tài liệu về tiếng Anh chuyên ngành kinh tế</p>
						<div class="subcate">
							<ul class="news_related">
								<li><a href="http://hocvientienganh.com/forum/danh-muc/tai-chinh---ngan-hang">Tài chính - ngân hàng</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/quan-tri-kinh-doanh">Quản trị kinh doanh</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/ke-toan">Kế toán</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/du-lich">Du lịch</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/cong-nghe-thong-tin">Công nghệ thông tin</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/marketing">Marketing</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/chuyen-nganh-khac">Chuyên ngành khác</a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Mot-so-cum-tu-tieng-Anh-thong-dung-khi-du-lich_3678.html">Một số cụm từ tiếng Anh thông dụng khi du lịch</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/kidicon.png') }}" alt="Tiếng Anh Thiếu Nhi" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/tieng-anh-thieu-nhi.html">Tiếng Anh Thiếu Nhi</a></h3>
						<p>Mở cửa thế giới tiếng Anh của trẻ</p>
						<div class="subcate">
							<ul class="news_related">
								<li><a href="http://hocvientienganh.com/forum/danh-muc/hoc-tieng-anh-qua-kenh-youtube">Học tiếng Anh qua kênh Youtube</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/hoc-tieng-anh-qua-phim-hoat-hinh">Học tiếng Anh qua phim hoạt hình</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/hoc-tieng-anh-qua-bai-hat">Học tiếng Anh qua bài hát</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/hoc-tieng-anh-qua-truyen">Học tiếng Anh qua truyện</a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/3-mau-truyen-cuoi-hay-nhat-cho-hoc-sinh_3691.html">3 mẩu truyện cười hay nhất cho học sinh</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-left color1">
					<div class="title-cate">
						<div class="row">
							<div class="col-dl-12"><a href="http://hocvientienganh.com/chuyen-muc/luyen-thi.html">Luyện Thi</a></div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/IELTSicon.png') }}" alt="Luyện Thi IELTS" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/luyen-thi-ielts.html">Luyện Thi IELTS</a></h3>
						<p>Thảo luận và chia sẻ những bài học, kinh nghiệm &amp; tài liệu bổ ích cho luyện thi IELTS </p>
						<div class="subcate">
							<ul class="news_related">
								<li><a href="http://hocvientienganh.com/forum/danh-muc/ielts-listening">IELTS Listening</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/ielts-speaking">IELTS Speaking </a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/ielts-reading">IELTS Reading </a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/ielts-vocabulary-grammar">IELTS Vocabulary/ Grammar</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/ielts-general-writing">IELTS General Writing</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/ielts-writing-task-1">IELTS Writing Task 1</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/ielts-writing-task-2">IELTS Writing Task 2</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/bi-quyet-ielts">Bí Quyết IELTS</a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/5-bi-quyet-giup-ban-chinh-phuc-tu-vung-IELTS_3640.html">5 bí quyết giúp bạn chinh phục từ vựng IELTS</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/Toeicicon.png') }}" alt="Luyện Thi TOEIC" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/luyen-thi-toeic.html">Luyện Thi TOEIC</a></h3>
						<p>Thảo luận và chia sẻ những bài học, kinh nghiệm &amp; tài liệu bổ ích cho luyện thi TOEIC </p>
						<div class="subcate">
							<ul class="news_related">
								<li><a href="http://hocvientienganh.com/forum/danh-muc/toeic-listening">TOEIC Listening </a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/toeic-speaking">TOEIC Speaking </a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/toeic-reading">TOEIC Reading </a></li>
								{{--<li><a href="http://hocvientienganh.com/chuyen-muc/toeic-writing.html">TOEIC Writing </a></li>--}}
								<li><a href="http://hocvientienganh.com/forum/danh-muc/toeic-vocabulary-grammar">TOEIC Vocabulary/ Grammar</a></li>
								{{--<li><a href="http://hocvientienganh.com/chuyen-muc/bi-quyet-toeic.html">Bí quyết TOEIC</a></li>--}}
							</ul>
							<div class="clearfix"></div>
						</div>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Uu-diem-cua-chung-chi-TOEIC-4-ky-nang_3606.html">Ưu điểm của chứng chỉ TOEIC 4 kỹ năng</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/Toeflicon.png') }}" alt="Luyện Thi TOEFL" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/luyen-thi-toefl.html">Luyện Thi TOEFL</a></h3>
						<p>Thảo luận và chia sẻ những bài học, kinh nghiệm &amp; tài liệu bổ ích cho luyện thi TOEFL</p>
						<div class="subcate">
							<ul class="news_related">
								<li><a href="http://hocvientienganh.com/chuyen-muc/toefl-listening.html">TOEFL Listening </a></li>
								<li><a href="http://hocvientienganh.com/chuyen-muc/toefl-speaking.html">TOEFL Speaking</a></li>
								<li><a href="http://hocvientienganh.com/chuyen-muc/toefl-reading.html">TOEFL Reading </a></li>
								<li><a href="http://hocvientienganh.com/chuyen-muc/toefl-writing.html">TOEFL Writing </a></li>
								<li><a href="http://hocvientienganh.com/chuyen-muc/toefl-vocabulary-grammar.html">TOEFL Vocabulary/ Grammar</a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Su-khac-nhau-giua-TOELF-ITP--va-TOEFL-iBT_3541.html">​Sự khác nhau giữa TOELF ITP  và TOEFL iBT</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/GREGMATSAT.png') }}" alt="Luyện Thi GRE, GMAT, SAT" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/luyen-thi-gre-gmat-sat.html">Luyện Thi GRE, GMAT, SAT</a></h3>
						<p>Thảo luận và chia sẻ những bài học, kinh nghiệm &amp; tài liệu bổ ích cho luyện thi GRE, GMAT, SAT</p>
						<div class="subcate">
							<ul class="news_related">
								<li><a href="http://hocvientienganh.com/forum/danh-muc/luyen-thi-gre">Luyện thi GRE</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/luyen-thi-gmat">Luyện thi GMAT</a></li>
								<li><a href="http://hocvientienganh.com/forum/danh-muc/luyen-thi-sat">Luyện thi SAT</a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Loi-khuyen-de-dat-diem-cao-cho-ki-thi-SAT_2651.html">Lời khuyên để đạt điểm cao cho kì thi SAT</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-left color2">
					<div class="title-cate">
						<div class="row">
							<div class="col-dl-12"><a href="http://hocvientienganh.com/chuyen-muc/hoc-qua-video.html">Học qua video</a></div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/youtube.png') }}" alt="YOUTUBE" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/youtube">YOUTUBE</a></h3>
						<p>Học tiếng Anh qua các kênh Youtube nổi tiếng</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Hoc-tieng-Anh-qua-bai-hat--Nothings-Gonna-Change-My-Love-For-You_2314.html">Học tiếng Anh qua bài hát : Nothing's Gonna Change My Love For You</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/VOAicon.png') }}" alt="VOA" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/voa">VOA</a></h3>
						<p>Học tiếng Anh qua các bản tin video của đài phát thanh Mỹ VOA </p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/VOA-English-In-A-Minute-to-have-butterflies_2215.html">VOA English In A Minute: to have butterflies</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/CNNicon.png') }}" alt="CNN" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/cnn">CNN</a></h3>
						<p> Học tiếng Anh qua các bản tin video của kênh CNN</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/CNN-First-Hillary-Clinton-vs-Donald-Trump-debate_2565.html">CNN: First Hillary Clinton vs Donald Trump debate </a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/BBCicon(1).png') }}" alt="BBC NEWS" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/bbc-news.html">BBC NEWS</a></h3>
						<p> Học tiếng Anh qua các bản tin của kênh BBC News</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/TIN-TUC-BBC--Ban-sach-Harry-Potter-dau-tien-hiem-hoi-bi-danh-cap_3670.html">TIN TỨC BBC - Bản sách Harry Potter đầu tiên hiếm hoi bị đánh cắp</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/Phimanhnhacicon.png') }}" alt="PHIM &amp; NHẠC" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/phim-amp-nhac.html">PHIM &amp; NHẠC</a></h3>
						<p>Nơi chia sẻ và thảo luận phim ảnh và âm nhạc </p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/forum/danh-muc/hoc-tieng-anh-qua-bai-hat">Học tiếng Anh với bài hát Let it go</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-left color4">
					<div class="title-cate">
						<div class="row">
							<div class="col-dl-12"><a href="http://hocvientienganh.com/chuyen-muc/tu-vung-amp-ngu-phap.html">Từ vựng &amp; Ngữ pháp</a></div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/Iconchude(1).png') }}" alt="Từ Vựng Theo Chủ Đề" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/tu-vung-theo-chu-de">Từ Vựng Theo Chủ Đề</a></h3>
						<p>Chia sẻ những từ vựng tiếng Anh thông qua từng chủ đề </p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Tu-vung-tieng-Anh-chu-de-phim-anh_3699.html">Từ vựng tiếng Anh chủ đề phim ảnh</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/Books.png') }}" alt="Thành Ngữ " /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/thanh-ngu">Thành Ngữ </a></h3>
						<p>Chia sẻ những Thành ngữ - Idiom tiếng Anh thông dụng</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Thanh-ngu-tieng-Anh-lien-quan-den-thoi-tiet_3698.html">Thành ngữ tiếng Anh liên quan đến thời tiết</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/calendar_icon_flat1.png') }}" alt="Phrasal Verb" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/phrasal-verb">Phrasal Verb</a></h3>
						<p>Chia sẻ những Cụm động từ - Phrasal Verb thông dụng </p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Cum-dong-tu-tieng-Anh-voi-PUT_3686.html">Cụm động từ tiếng Anh với PUT</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/grammaricon.png') }}" alt="Ngữ Pháp Cơ Bản &amp; Nâng Cao" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/ngu-phap-co-ban--nang-cao">Ngữ Pháp Cơ Bản &amp; Nâng Cao</a></h3>
						<p>Chia sẻ Ngữ pháp tiếng Anh từ cơ bản đến nâng cao</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Hai-danh-tu-tieng-Anh-dung-canh-nhau_3669.html">Hai danh từ tiếng Anh đứng cạnh nhau</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-left color3">
					<div class="title-cate">
						<div class="row">
							<div class="col-dl-12"><a href="http://hocvientienganh.com/chuyen-muc/ky-nang.html">Kỹ năng</a></div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/pixel77-free-vector-broadcast-icon-2306.jpg') }}" alt="Pronunciation" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/pronunciation">Pronunciation</a></h3>
						<p>Chia sẻ những kiến thức về rèn luyện kỹ năng phát âm</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/5-meo-luyen-phat-am-tieng-Anh-cho-be_3681.html">5 mẹo luyện phát âm tiếng Anh cho bé</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/cate-2.png') }}" alt="Listening " /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/listening">Listening </a></h3>
						<p>Chia sẻ những kiến thức về rèn luyện kỹ năng nghe</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Ky-nang-note-taking-can-thiet-de-nghe-tieng-Anh-hieu-qua_3592.html">Kỹ năng note taking cần thiết để nghe tiếng Anh hiệu quả</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/cate-4.png') }}" alt="Speaking " /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/speaking.html">Speaking </a></h3>
						<p>Chia sẻ những kiến thức về rèn luyện kỹ năng nói</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/3-buoc-cai-thien-kha-nang-noi-tieng-Anh_3697.html">3 bước cải thiện khả năng nói tiếng Anh</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/cate-3.png') }}" alt="Reading " /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/reading.html">Reading </a></h3>
						<p>Chia sẻ những kiến thức về rèn luyện kỹ năng đọc</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Ky-nang-Skimming-va-Scanning-cho-viec-doc-hieu-tieng-Anh-hieu-qua_3510.html">Kỹ năng Skimming và Scanning cho việc đọc hiểu tiếng Anh hiệu quả</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/writing.png') }}" alt="Writing " /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/writing.html">Writing </a></h3>
						<p>Chia sẻ những kiến thức về rèn luyện kỹ năng viết</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/5-bi-quyet-cai-thien-kha-nang-viet-tieng-Anh_3695.html">5 bí quyết cải thiện khả năng viết tiếng Anh</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-left color7">
					<div class="title-cate">
						<div class="row">
							<div class="col-dl-12"><a href="http://hocvientienganh.com/chuyen-muc/bi-quyet.html">Bí quyết</a></div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/Philosophy-Thinking-Magenta-Flat-Icon-by-Rockin-Monkey-Designs-of-San-Antonio.png') }}" alt="Phương pháp học Tiếng Anh hiệu quả" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/phuong-phap-hoc-tieng-anh-hieu-qua">Phương pháp học Tiếng Anh hiệu quả</a></h3>
						<p>Thảo luận và chia sẻ những phương pháp học tiếng Anh hiệu quả </p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/10-meo-giup-hoc-tieng-Anh-nhanh-chong--phan-2_3693.html">10 mẹo giúp học tiếng Anh nhanh chóng - phần 2</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/book_flat_book_png_book_icon_web_icon_png.png') }}" alt="Lỗi thường gặp" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/loi-thuong-gap">Lỗi thường gặp</a></h3>
						<p>Thảo luận và chia sẻ về lỗi thường gặp trong khi học tiếng Anh</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Nhung-loi-thuong-gap-khi-tu-luyen-thi-TOEIC--P1_3671.html">Những lỗi thường gặp khi tự luyện thi TOEIC - P1</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/28070513-round-concept-of-international-education-with-a-globe-and-a-graduation-cap.jpg') }}" alt="Kinh nghiệm Du học &amp; săn Học bổng " /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/kinh-nghiem-du-hoc--san-hoc-bong">Kinh nghiệm Du học &amp; săn Học bổng </a></h3>
						<p>Mở cửa con đường cho ước mơ du học</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Nhung-kinh-nghiem-quy-bau-khi-san-hoc-bong_3690.html">Những kinh nghiệm quý báu khi săn học bổng </a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-left color8">
					<div class="title-cate">
						<div class="row">
							<div class="col-dl-12"><a href="http://hocvientienganh.com/chuyen-muc/giai-tri.html">Giải trí</a></div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/News-Mic-iPhone-icon.png') }}" alt="Đọc Báo " /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/doc-bao">Đọc Báo </a></h3>
						<p>Cập nhật những tin tức hàng ngày qua các trang tin tức và báo song ngữ</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Diem-giong-va-khac-nhau-giua-IELTS-va-TOEIC_3645.html">Điểm giống và khác nhau giữa IELTS và TOEIC</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/pencil-flat-icon.gif') }}" alt="Quotes" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/quotes.html">Quotes</a></h3>
						<p>Chia sẻ những câu quotes hay trong tiếng Anh</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Hoc-tieng-Anh-qua-loi-thoai-phim-Three-Idiots_3688.html">Học tiếng Anh qua lời thoại phim "Three Idiots"</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/download.png') }}" alt="Truyện &amp; Thơ" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/forum/danh-muc/truyen--tho">Truyện &amp; Thơ</a></h3>
						<p>Nơi thảo luận và chia sẻ những câu chuyện, tủ sách và thơ hay</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Taylor-Swift-tung-ra-bai-tho-Why-She-Disappeared-trong-album-moi_3682.html">Taylor Swift tung ra bài thơ Why She Disappeared trong album mới</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/flat_icons-graficheria_it-13.png') }}" alt="Trò Chơi" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/tro-choi.html">Trò Chơi</a></h3>
						<p>Vui học tiếng Anh qua các trò chơi thú vị</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Thu-tai-dung-dong-tu-khiem-khuyet-trong-tieng-Anh_3675.html">Thử tài dùng động từ khiếm khuyết trong tiếng Anh</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-left color6">
					<div class="title-cate">
						<div class="row">
							<div class="col-dl-12"><a href="http://hocvientienganh.com/chuyen-muc/tai-lieu.html">Tài liệu</a></div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/bigstock-E-book-icon-48391736.jpg') }}" alt="E-Book" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/ebook.html">E-Book</a></h3>
						<p>Chia sẻ những tài liệu e-book học tiếng Anh</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/20GB-tai-lieu-hoc-Effortless-English_3627.html"> 20GB tài liệu học Effortless English</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="row-forum">
						<div class="row-forum-img"><img src="{{asset('assets/images/forum/Dslr-Camera-icon.png') }}" alt="Từ Điển Hình Ảnh" /></div>
						<h3 class="row-forum-name"><a href="http://hocvientienganh.com/chuyen-muc/tu-dien-hinh-anh.html">Từ Điển Hình Ảnh</a></h3>
						<p>Chia sẻ từ điển hình ảnh</p>
						<ul class="news_related">
							<li><a href="http://hocvientienganh.com/bai-viet/Tu-dien-tieng-Anh-bang-hinh-chu-de-cay-coi_3612.html">Từ điển tiếng Anh bằng hình chủ đề cây cối</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-dl-3 ">
				<div class="rightsub" style="overflow: hidden">
					<h4 class="title-right">chia sẻ cho bạn bè</h4>
					<ul class="statics">
						<li style="margin-left: 52px;float: left;clear: none"><a href="https://www.facebook.com/hocvientienganhcom"><i class="fa fa-facebook icon-share"></i></a></li>
						<li style="margin-left: 52px;float: left;clear: none"><a href="https://plus.google.com/share?url=http://hocvientienganh.com"><i class="fa fa-google icon-share" style="background: #f4511e"></i></a></li>
					</ul>
				</div>

					<div class="fanpagef" style="background:#fff;">
					<div class="fb-like-box" data-href="https://www.facebook.com/hocvientienganhcom" data-width="230" data-height="240" data-show-faces="true" data-stream="false" data-show-border="true" data-header="false"></div>
				</div>
				<div class="rightsub">
					<h4 class="title-right">Quan tâm nhiều nhất</h4>
					<ul class="rightsub-list">
						<li>
							<a href="http://hocvientienganh.com/forum/hoc-thanh-ngu-face-the-music-qua-phim-yes-man">Học Thành ngữ 'Face the music' qua phim 'Yes man'</a>
							<span class="author-list" style="cursor:pointer;color:#ff9e47;">chutran0009</span> - <span>31/07/2015</span>
						</li>
						<li>
							<a href="http://hocvientienganh.com/forum/hoc-thanh-ngu-youve-gotta-be-kidding-me-qua-phim-bedtime-stories">Học Thành ngữ 'You've gotta be kidding me' qua phim 'Bedtime Stories'</a>
							<span class="author-list" style="cursor:pointer;color:#ff9e47;">chutran0009</span> - <span>31/07/2015</span>
						</li>
						<li>
							<a href="http://hocvientienganh.com/forum/hoc-cum-tu-knock-socks-off-qua-phim-meet-the-robinsons">Học cụm từ 'Knock Socks Off' qua phim 'Meet The Robinsons'</a>
							<span class="author-list" style="cursor:pointer;color:#ff9e47;">chutran0009</span> - <span>31/07/2015</span>
						</li>
						<li>
							<a href="http://hocvientienganh.com/forum/hoc-cum-tu-twist-someones-arm-qua-phim-cinderella-man">Học cụm từ 'Twist someone's arm' qua phim 'Cinderella Man'</a>
							<span class="author-list" style="cursor:pointer;color:#ff9e47;">chutran0009</span> - <span>31/07/2015</span>
						</li>
						<li>
							<a href="http://hocvientienganh.com/forum/hoc-thanh-ngu-rock-the-boat-qua-phim-500-days-of-summer">Học Thành ngữ 'Rock the boat' qua phim '500 Days of Summer'</a>
							<span class="author-list" style="cursor:pointer;color:#ff9e47;">chutran0009</span> - <span>31/07/2015</span>
						</li>
						<li>
							<a href="http://hocvientienganh.com/forum/funny-hoc-tieng-anh-qua-phim-sex-and-the-city">[FUNNY] Học tiếng Anh qua phim Sex and the city</a>
							<span class="author-list" style="cursor:pointer;color:#ff9e47;">chutran0009</span> - <span>31/07/2015</span>
						</li>
						<li>
							<a href="http://hocvientienganh.com/forum/hoc-qua-bai-hat-inconsolable">Học qua bài hát: Inconsolable</a>
							<span class="author-list" style="cursor:pointer;color:#ff9e47;">chutran0009</span> - <span>31/07/2015</span>
						</li>
						<li>
							<a href="http://hocvientienganh.com/forum/hoc-qua-bai-hat-why-not-me---enrique-iglesias">Học qua bài hát: Why not me - Enrique Iglesias</a>
							<span class="author-list" style="cursor:pointer;color:#ff9e47;">chutran0009</span> - <span>31/07/2015</span>
						</li>
						<li>
							<a href="http://hocvientienganh.com/forum/hoc-qua-bai-hat-thinking-of-you-i-drive-myself-crazy">Học qua bài hát: (Thinking Of You) I Drive Myself Crazy</a>
							<span class="author-list" style="cursor:pointer;color:#ff9e47;">chutran0009</span> - <span>31/07/2015</span>
						</li>
						<li>
							<a href="http://hocvientienganh.com/forum/funny-how-i-met-your-mother">[FUNNY] How I met your mother </a>
							<span class="author-list" style="cursor:pointer;color:#ff9e47;">chutran0009</span> - <span>31/07/2015</span>
						</li>
					</ul>
				</div>
				<div class="adv-right __ads__" data-id="134" data-max="5"></div>
				<div class="rightsub">
					<h4 class="title-right">Thống kê</h4>
					<ul class="statics">
						<li>Bài viết:<span>3594</span></li>
						<li>Thành viên:<span>784</span></li>
						<li>Trả lời:<span>172</span></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
@stop
