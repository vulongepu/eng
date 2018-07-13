@extends('layouts.master')

@section('title')
     {{-- ghi tiêu đề --}}
@stop
@section('meta')
    <meta name="title" content="" />
    <meta name="description" content="" />
@stop

@section('content')

    <div class="page-header" style="margin-top:45px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="mediaplayer videoplayer no-poster" data-volume="high" data-state="idle" data-tracks="many" data-playersize="large" data-playersizes="l" data-useractivity="false">
                        <video id="video" data-episode="502" data-movie="63" preload="none" width="100%" height="100%" autoplay="" loop="">
                            <source type="video/mp4" src="http://media.studyphim.vn/VIPN7/Friends%20SS1/friends_s01e02_720p_bluray_x264-sujaidr.mp4">
                            <input id="en" value="U2FsdGVkX19Y8n4IMG2tlHusjlr2NDWQFZPlAKWVr6oMPmSSW6L59AC8dmRHIr1oFcan4qrwpuOphhPJH1CSVw==">  <input id="vi" value="U2FsdGVkX1/IhrhN69SaGs9HtE7ybLf/p9gqrbDfY/fcHDcAoza2RJhzm7gxj+FaciCOpw3/Gf54bvZOUM5tJQ==">   <input id="en_vi" value="U2FsdGVkX1/1LXk3tyvVcZEt7mjuOT5EBw9qFvN+Gl3DRwIo1too3VxySlLZmV3DGrw2Di7oPRHOTkXQNFvqeg==">
                        </video>
                        <div class="cue-display wsshadow-1514903151274" style="display: block; left: 0px; width: 812px; height: 412px; top: 0px; font-size: 15px;"><span class="description-cues" aria-live="assertive"></span></div>
                        <div class="ws-poster wsshadow-1514903151274"></div>
                        <div class="overlay playable hide">
                            <div class="alert alert-info"> <strong>Thông báo!</strong> Bạn chỉ có thể xem thử 3 phút của tập phim này. Xem hướng dẫn để xem được toàn bộ phim <a href="http://www.studyphim.vn/pricing" target="_blank" class="btn btn-danger btn-sm">Xem hướng dẫn <u>tại đây</u></a> </div>
                        </div>
                        <div class="jme-media-overlay wsshadow-1514903151274" style="touch-action: manipulation;"></div>
                        <div class="jme-controlbar wsshadow-1514903151274" tabindex="-1">
                            <div class="jme-cb-box media-controls wsshadow-1514903151274">
                                <div class="play-pause-container"><button class="play-pause state-paused ws-a11y-focus" type="button" aria-label="play / pause" style="touch-action: manipulation;"></button></div>
                                <div class="playlist-container">
                                    <div class="playlist-box">111111111111111</div>
                                </div>
                                <div class="currenttime-container">
                                    <div class="currenttime-display">00:04</div>
                                </div>
                                <div class="progress-container">
                                    <div class="time-slider media-range" aria-label="time position" role="slider" aria-valuemin="0" aria-valuemax="1371.453417" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="4.403284" aria-valuetext="00:04">
                                        <div class="buffer-progress">
                                            <div class="buffer-progress-indicator" style="width: 2.80651%;"></div>
                                        </div>
                                        <span class="ws-range-rail ws-range-track" style="left: 7px; right: 7px;"><span class="ws-range-min ws-range-progress" style="margin-top: 0px; left: -7px; padding-right: 7px; width: 0.321067%;"></span><span class="ws-range-thumb" style="margin-left: -7px; margin-top: 0px; left: 0.321067%;"><span><span data-value="4.403284" data-valuetext="00:04"></span></span></span></span><span class="time-select" style="left: 91.3889%; margin-left: -18px;">20:53</span>
                                    </div>
                                </div>
                                <div class="duration-container">
                                    <div class="duration-display">22:51</div>
                                </div>
                                <div class="mute-container"><button class="mute-unmute state-mute" type="button" aria-label="mute / unmute" style="touch-action: manipulation;"></button></div>
                                <div class="volume-container">
                                    <div class="volume-slider media-range" aria-label="volume level" role="slider" aria-valuemin="0" aria-valuemax="1" aria-readonly="false" tabindex="0" aria-disabled="false" aria-valuenow="1" aria-valuetext="1"><span class="ws-range-rail ws-range-track" style="left: 7px; right: 7px;"><span class="ws-range-min ws-range-progress" style="margin-top: 0px; left: -7px; padding-right: 7px; width: 100%;"></span><span class="ws-range-thumb" style="margin-left: -7px; margin-top: 0px; left: 100%;"><span><span data-value="1" data-valuetext="1"></span></span></span></span></div>
                                </div>
                                <div class="subtitle-container">
                                    <div class="subtitle-controls">
                                        <button class="captions" type="button" aria-label="subtitles" role="checkbox" aria-checked="false" style="touch-action: manipulation;"></button><button class="captions" type="button" aria-label="subtitles" aria-haspopup="true" style="touch-action: manipulation;"></button>
                                        <div class="mediamenu subtitle-menu" role="menu">
                                            <div>
                                                <ul role="presentation">
                                                    <li class="subtitle-type" role="presentation"><button role="menuitemcheckbox" type="button" tabindex="-1" aria-checked="false">Off Sub</button></li>
                                                    <li class="subtitle-type" role="presentation"><button role="menuitemcheckbox" type="button" tabindex="-1" aria-checked="false">English <span class="track-lang">en</span></button></li>
                                                    <li class="subtitle-type" role="presentation"><button role="menuitemcheckbox" type="button" tabindex="-1" aria-checked="true">Vietnam <span class="track-lang">vi</span></button></li>
                                                    <li class="subtitle-type" role="presentation"><button role="menuitemcheckbox" type="button" tabindex="-1" aria-checked="false">Eng_Vi</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fullscreen-container"><button class="fullscreen state-enterfullscreen" type="button" aria-label="enter fullscreen / exit fullscreen" style="touch-action: manipulation;"></button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" id="subtitles-sidebar">
                    <div id="subtitles-container" class="show-sub" style="height: 457px;">
               <span id="cue1" data-start="2.877" class="active-cue">
                  What you guys don't understand is...
                  <br><small>Các cậu không hiểu gì cả.
                  </small>
                  <div class="savep" id="2.877" onclick="setSave('What you guys don\'t understand is... ','Các cậu không hiểu gì cả. ','2.877')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue2" data-start="4.504">
                  ...for us, kissing is as important
                  as any part of it.
                  <br><small>Với con gái tụi tui,hôn là quan trọng nhất.
                  </small>
                  <div class="savep" id="4.504" onclick="setSave('...for us, kissing is as important as any part of it. ','Với con gái tụi tui,hôn là quan trọng nhất. ','4.504')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue3" data-start="7.924">
                  Yeah, right.
                  <br><small>Ừ, đúng thế!
                  </small>
                  <div class="savep" id="7.924" onclick="setSave('Yeah, right. ','Ừ, đúng thế! ','7.924')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue4" data-start="11.97">
                  You serious?
                  <br><small>Nói thật đấy hả?
                  </small>
                  <div class="savep" id="11.97" onclick="setSave('You serious? ','Nói thật đấy hả? ','11.97')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue5" data-start="14.139">
                  Oh, yeah.
                  <br><small>Đúng vậy.
                  </small>
                  <div class="savep" id="14.139" onclick="setSave('Oh, yeah. ','Đúng vậy. ','14.139')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue6" data-start="15.306">
                  Everything you need to know
                  is in that first kiss.
                  <br><small>- Mọi thứ mà cậu cần biết là nụ hôn đầu đấy.
                  </small>
                  <div class="savep" id="15.306" onclick="setSave('Everything you need to know is in that first kiss. ','- Mọi thứ mà cậu cần biết là nụ hôn đầu đấy. ','15.306')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue7" data-start="17.892">
                  - Absolutely.
                  - Yeah, I think, for us...
                  <br><small>- Chắc chắn.
                  - Với bọn con trai thì ...
                  </small>
                  <div class="savep" id="17.892" onclick="setSave('- Absolutely. - Yeah, I think, for us... ','- Chắc chắn. - Với bọn con trai thì ... ','17.892')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue8" data-start="19.978">
                  ...kissing is pretty much
                  like an opening act.
                  <br><small>hôn giống như sự mở đầu vậy..
                  </small>
                  <div class="savep" id="19.978" onclick="setSave('...kissing is pretty much like an opening act. ','hôn giống như sự mở đầu vậy.. ','19.978')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue9" data-start="22.23">
                  I mean, it's like the stand-up comedian
                  you have to sit through...
                  <br><small>giống như khi xem kịch chúng ta phải ngồi xuống vậy.
                  </small>
                  <div class="savep" id="22.23" onclick="setSave('I mean, it\'s like the stand-up comedian you have to sit through... ','giống như khi xem kịch chúng ta phải ngồi xuống vậy. ','22.23')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue10" data-start="24.983">
                  ...before Pink Floyd comes out.
                  <br><small>trước khi Pink Floyd xuất hiện.
                  </small>
                  <div class="savep" id="24.983" onclick="setSave('...before Pink Floyd comes out. ','trước khi Pink Floyd xuất hiện. ','24.983')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue11" data-start="30.363">
                  Yeah, and it's not that
                  we don't like the comedian.
                  <br><small>Và không phải vì thế mà chúng tôi không thích xem kịch.
                  </small>
                  <div class="savep" id="30.363" onclick="setSave('Yeah, and it\'s not that we don\'t like the comedian. ','Và không phải vì thế mà chúng tôi không thích xem kịch. ','30.363')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue12" data-start="33.908">
                  It's just that that's not...
                  <br><small>Đó là lí do ...
                  </small>
                  <div class="savep" id="33.908" onclick="setSave('It\'s just that that\'s not... ','Đó là lí do ... ','33.908')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue13" data-start="37.287">
                  ...why we bought the ticket.
                  <br><small>tại sao chúng tôi mua vé.
                  </small>
                  <div class="savep" id="37.287" onclick="setSave('...why we bought the ticket. ','tại sao chúng tôi mua vé. ','37.287')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue14" data-start="40.707">
                  See, the problem is, though...
                  <br><small>Vấn đề là ...
                  </small>
                  <div class="savep" id="40.707" onclick="setSave('See, the problem is, though... ','Vấn đề là ... ','40.707')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue15" data-start="42.417">
                  ...after the concert's over,
                  no matter how great the show was...
                  <br><small>không quan trọng buổi diễn có hay hay không..
                  </small>
                  <div class="savep" id="42.417" onclick="setSave('...after the concert\'s over, no matter how great the show was... ','không quan trọng buổi diễn có hay hay không.. ','42.417')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue16" data-start="45.211">
                  ...you girls are always looking
                  for the comedian again.
                  <br><small>bọn con gái các người cứ khoái xem lại lần nữa.
                  </small>
                  <div class="savep" id="45.211" onclick="setSave('...you girls are always looking for the comedian again. ','bọn con gái các người cứ khoái xem lại lần nữa. ','45.211')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue17" data-start="48.882">
                  I mean, we're in the car,
                  we're fighting traffic...
                  <br><small>Trong xe, trong khi đang chạy xe,
                  </small>
                  <div class="savep" id="48.882" onclick="setSave('I mean, we\'re in the car, we\'re fighting traffic... ','Trong xe, trong khi đang chạy xe, ','48.882')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue18" data-start="51.092">
                  ...basically just trying to stay awake.
                  <br><small>chỉ là cố thức thôi.
                  </small>
                  <div class="savep" id="51.092" onclick="setSave('...basically just trying to stay awake. ','chỉ là cố thức thôi. ','51.092')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue19" data-start="55.889">
                  Yeah, well, word of advice:
                  Bring back the comedian.
                  <br><small>Lời khuyên đây:
                  Đem cất mấy cái buổi kịch đó đi.
                  </small>
                  <div class="savep" id="55.889" onclick="setSave('Yeah, well, word of advice: Bring back the comedian. ','Lời khuyên đây: Đem cất mấy cái buổi kịch đó đi. ','55.889')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue20" data-start="59.142">
                  Otherwise, you're gonna find yourself...
                  <br><small>Không lần tới cậu sẽ thấy mình ...
                  </small>
                  <div class="savep" id="59.142" onclick="setSave('Otherwise, you\'re gonna find yourself... ','Không lần tới cậu sẽ thấy mình ... ','59.142')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue21" data-start="61.102">
                  ...sitting at home
                  listening to that album alone.
                  <br><small>... ngồi nghe nhạc một mình đấy.
                  </small>
                  <div class="savep" id="61.102" onclick="setSave('...sitting at home listening to that album alone. ','... ngồi nghe nhạc một mình đấy. ','61.102')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue22" data-start="68.443">
                  Are we still talking about sex?
                  <br><small>Chúng ta vẫn đang nói về tình dục chứ?
                  </small>
                  <div class="savep" id="68.443" onclick="setSave('Are we still talking about sex? ','Chúng ta vẫn đang nói về tình dục chứ? ','68.443')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue23" data-start="125.333">
                  ROSS:
                  No, it's good. It is good.
                  <br><small>Không, nó tốt, nó rất tốt.
                  </small>
                  <div class="savep" id="125.333" onclick="setSave('ROSS: No, it\'s good. It is good. ','Không, nó tốt, nó rất tốt. ','125.333')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue24" data-start="127.418">
                  It's just that,
                  doesn't she seem a little angry?
                  <br><small>Chỉ là cô ấy trông có vẻ giận dữ nhỉ?
                  </small>
                  <div class="savep" id="127.418" onclick="setSave('It\'s just that, doesn\'t she seem a little angry? ','Chỉ là cô ấy trông có vẻ giận dữ nhỉ? ','127.418')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue25" data-start="131.297">
                  Well, she has issues.
                  <br><small>À, cô ấy có vài vấn đề.
                  </small>
                  <div class="savep" id="131.297" onclick="setSave('Well, she has issues. ','À, cô ấy có vài vấn đề. ','131.297')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue26" data-start="134.717">
                  Does she?
                  <br><small>Thật à?
                  </small>
                  <div class="savep" id="134.717" onclick="setSave('Does she? ','Thật à? ','134.717')">
                     <p class="glyphicon glyphicon-floppy-disk"></p>
                  </div>
               </span>
                        <span id="cue27" data-start="136.427">
                  He's out banging other women
                  over the head with a club...
                  <br><small>Cố gắng sống với "Ngài. Tôi đang tiến hóa." đây
                  </small><div class="savep" id="136.427" onclick="setSave('He\'s out banging other women over the head with a club... ','Cố gắng sống với " ngài.="" tôi="" đang="" tiến="" hóa."="" đây="" ','136.427')"="">
                  <p class="glyphicon glyphicon-floppy-disk"></p>
                    </div>
                    </span>
                    <span id="cue28" data-start="138.847">
               ...while she sits at home trying to get
               the mastodon smell out of the carpet.
               <br><small>Hắn ta ra ngoài trong khi cô ấy ở nhà
               cố gắng làm cho tấm thảm không có mùi của voi.
               </small>
               <div class="savep" id="138.847" onclick="setSave('...while she sits at home trying to get the mastodon smell out of the carpet. ','Hắn ta ra ngoài trong khi cô ấy ở nhà cố gắng làm cho tấm thảm không có mùi của voi. ','138.847')">
                  <p class="glyphicon glyphicon-floppy-disk"></p>
               </div>
            </span>
                    <span id="cue29" data-start="142.934">
               Marsha, see, these are cave people.
               <br><small>Marsha, nhìn này, đây là người tiền sử.
               </small>
               <div class="savep" id="142.934" onclick="setSave('Marsha, see, these are cave people. ','Marsha, nhìn này, đây là người tiền sử. ','142.934')">
                  <p class="glyphicon glyphicon-floppy-disk"></p>
               </div>
            </span>
                    <span id="cue30" data-start="147.021">
               Okay, they have issues like:
               <br><small>Được chứ họ có vấn đề như là:
               </small>
               <div class="savep" id="147.021" onclick="setSave('Okay, they have issues like: ','Được chứ họ có vấn đề như là: ','147.021')">
                  <p class="glyphicon glyphicon-floppy-disk"></p>
               </div>
            </span>
                    <span id="cue31" data-start="149.566">
               "Gee, that glacier's getting kind of close."
               See?
               <br><small>"Thế! Cái sông băng kia có lẽ đang đến gần."
               </small><div class="savep" id="149.566" onclick="setSave('\'Gee, that glacier\'s getting kind of close.\' See? ','" thế!="" cái="" sông="" băng="" kia="" có="" lẽ="" đang="" đến="" gần."="" ','149.566')"="">
               <p class="glyphicon glyphicon-floppy-disk"></p>
                </div>
                </span>
                <span id="cue32" data-start="153.778">
            Speaking of issues,
            isn't that your ex-wife?
            <br><small>Nói về vấn đề kia có phải vợ cũ của anh không?
            </small>
            <div class="savep" id="153.778" onclick="setSave('Speaking of issues, isn\'t that your ex-wife? ','Nói về vấn đề kia có phải vợ cũ của anh không? ','153.778')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue33" data-start="156.072">
            - No, no.
            - Yes, it is. Carol, hi.
            <br><small>- Không.
            - Phải mà. Carol, chào!
            </small>
            <div class="savep" id="156.072" onclick="setSave('- No, no. - Yes, it is. Carol, hi. ','- Không. - Phải mà. Carol, chào! ','156.072')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue34" data-start="158.95">
            ROSS:
            Okay. Yes. Yes, it is.
            <br><small>Được rồi.Đúng là như vậy.
            </small>
            <div class="savep" id="158.95" onclick="setSave('ROSS: Okay. Yes. Yes, it is. ','Được rồi.Đúng là như vậy. ','158.95')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue35" data-start="160.702">
            How about I'll catch up with you
            in the Ice Age?
            <br><small>Tôi sẽ gặp cô ở kỉ băng hà.
            </small>
            <div class="savep" id="160.702" onclick="setSave('How about I\'ll catch up with you in the Ice Age? ','Tôi sẽ gặp cô ở kỉ băng hà. ','160.702')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue36" data-start="177.969">
            - Hi.
            - Hi.
            <br><small>- Hi.
            - Hi.
            </small>
            <div class="savep" id="177.969" onclick="setSave('- Hi. - Hi. ','- Hi. - Hi. ','177.969')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue37" data-start="186.936">
            So...
            <br><small>So...
            </small>
            <div class="savep" id="186.936" onclick="setSave('So... ','So... ','186.936')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue38" data-start="189.355">
            You look great.
            <br><small>Em trông xinh.
            </small>
            <div class="savep" id="189.355" onclick="setSave('You look great. ','Em trông xinh. ','189.355')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue39" data-start="191.983">
            I hate that.
            <br><small>Anh ghét thế.
            </small>
            <div class="savep" id="191.983" onclick="setSave('I hate that. ','Anh ghét thế. ','191.983')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue40" data-start="194.068">
            Sorry. Thanks. You look good too.
            <br><small>Xin lỗi . Cảm ơn, anh trông cũng tuyệt.
            </small>
            <div class="savep" id="194.068" onclick="setSave('Sorry. Thanks. You look good too. ','Xin lỗi . Cảm ơn, anh trông cũng tuyệt. ','194.068')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue41" data-start="197.572">
            Well, you know, in here, anyone who...
            <br><small>À, em biết đấy,
            trong đây, mọi người đều..
            </small>
            <div class="savep" id="197.572" onclick="setSave('Well, you know, in here, anyone who... ','À, em biết đấy, trong đây, mọi người đều.. ','197.572')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue42" data-start="202.076">
            ...stands erect...
            <br><small>đứng thẳng..
            </small>
            <div class="savep" id="202.076" onclick="setSave('...stands erect... ','đứng thẳng.. ','202.076')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue43" data-start="206.748">
            - So, what's new? Still a...
            - A lesbian?
            <br><small>- Có gì mới không? Vẫn là....
            - Đồng tính phải không?
            </small>
            <div class="savep" id="206.748" onclick="setSave('- So, what\'s new? Still a... - A lesbian? ','- Có gì mới không? Vẫn là.... - Đồng tính phải không? ','206.748')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue44" data-start="208.833">
            Well...
            <br><small>Well...
            </small>
            <div class="savep" id="208.833" onclick="setSave('Well... ','Well... ','208.833')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue45" data-start="211.502">
            You never know.
            <br><small>Em không bao giờ biết đâu.
            </small>
            <div class="savep" id="211.502" onclick="setSave('You never know. ','Em không bao giờ biết đâu. ','211.502')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue46" data-start="213.171">
            How's, um...? How's the family?
            <br><small>Gia đình thế nào rồi?
            </small>
            <div class="savep" id="213.171" onclick="setSave('How\'s, um...? How\'s the family? ','Gia đình thế nào rồi? ','213.171')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue47" data-start="215.715">
            Marty's still totally paranoid.
            <br><small>- Marty vẫn mắc bệnh hoang tưởng.
            </small>
            <div class="savep" id="215.715" onclick="setSave('Marty\'s still totally paranoid. ','- Marty vẫn mắc bệnh hoang tưởng. ','215.715')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue48" data-start="218.009">
            - Oh, and...
            - Carol, why are you here, Carol?
            <br><small>- Carol, tại sao em ở đây?
            </small>
            <div class="savep" id="218.009" onclick="setSave('- Oh, and... - Carol, why are you here, Carol? ','- Carol, tại sao em ở đây? ','218.009')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue49" data-start="222.513">
            - I'm pregnant.
            - Pregnant.
            <br><small>- Em đã có mang.
            - Có thai.
            </small>
            <div class="savep" id="222.513" onclick="setSave('- I\'m pregnant. - Pregnant. ','- Em đã có mang. - Có thai. ','222.513')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue50" data-start="232.857">
            Oh. Looks like she didn't leave
            in such a hurry after all.
            <br><small>Cô ấy ra đi không vội mấy nhỉ.
            </small>
            <div class="savep" id="232.857" onclick="setSave('Oh. Looks like she didn\'t leave in such a hurry after all. ','Cô ấy ra đi không vội mấy nhỉ. ','232.857')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue51" data-start="236.611">
            I think this is the episode
            of Three's Company...
            <br><small>Tớ nghĩ đây là phần của phim Đại đội số 3
            </small>
            <div class="savep" id="236.611" onclick="setSave('I think this is the episode of Three\'s Company... ','Tớ nghĩ đây là phần của phim Đại đội số 3 ','236.611')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue52" data-start="238.905">
            ...where's there's some kind
            of misunderstanding.
            <br><small>với sự hiểu lầm.
            </small>
            <div class="savep" id="238.905" onclick="setSave('...where\'s there\'s some kind of misunderstanding. ','với sự hiểu lầm. ','238.905')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue53" data-start="244.118">
            Then I've already seen this one.
            <br><small>Thế thì tớ xem rồi.
            </small>
            <div class="savep" id="244.118" onclick="setSave('Then I\'ve already seen this one. ','Thế thì tớ xem rồi. ','244.118')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue54" data-start="248.081">
            Are you through with that? Thanks.
            <br><small>Cậu xong với cái đó chưa?
            </small>
            <div class="savep" id="248.081" onclick="setSave('Are you through with that? Thanks. ','Cậu xong với cái đó chưa? ','248.081')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue55" data-start="250.208">
            Yeah, sorry, the swallowing
            slowed me down.
            <br><small>Xin lỗi, việc nuốt làm chậm tớ lại.
            </small>
            <div class="savep" id="250.208" onclick="setSave('Yeah, sorry, the swallowing slowed me down. ','Xin lỗi, việc nuốt làm chậm tớ lại. ','250.208')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue56" data-start="254.128">
            Whose little ball of paper is this?
            <br><small>Đồng giấy này của ai thế?
            </small>
            <div class="savep" id="254.128" onclick="setSave('Whose little ball of paper is this? ','Đồng giấy này của ai thế? ','254.128')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue57" data-start="256.13">
            Oh, that would be mine.
            <br><small>Tớ đấy. .
            </small>
            <div class="savep" id="256.13" onclick="setSave('Oh, that would be mine. ','Tớ đấy. . ','256.13')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue58" data-start="257.382">
            See, I wrote a note to myself,
            then I didn't need it.
            <br><small>Tớ đang viết một số ghi chú,
            mà không cần nữa
            </small>
            <div class="savep" id="257.382" onclick="setSave('See, I wrote a note to myself, then I didn\'t need it. ','Tớ đang viết một số ghi chú, mà không cần nữa ','257.382')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue59" data-start="260.051">
            So I balled it up
            and now I wish I was dead.
            <br><small>nên tớ vò lại và để đó, giờ tớ ước gì tớ đã chết.
            </small>
            <div class="savep" id="260.051" onclick="setSave('So I balled it up and now I wish I was dead. ','nên tớ vò lại và để đó, giờ tớ ước gì tớ đã chết. ','260.051')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue60" data-start="264.847">
            She already fluffed that pillow.
            Monica, you know, you already fluffed...
            <br><small>Cô ấy đã phủi mấy cái gối đó rồi mà.
            Cậu biết đấy cậu đã phủi nó rồi.
            </small>
            <div class="savep" id="264.847" onclick="setSave('She already fluffed that pillow. Monica, you know, you already fluffed... ','Cô ấy đã phủi mấy cái gối đó rồi mà. Cậu biết đấy cậu đã phủi nó rồi. ','264.847')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue61" data-start="267.934">
            But it's fine.
            <br><small>nhưng tốt thôi.
            </small>
            <div class="savep" id="267.934" onclick="setSave('But it\'s fine. ','nhưng tốt thôi. ','267.934')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue62" data-start="270.228">
            Look, I'm sorry.
            <br><small>Tớ xin lỗi
            </small>
            <div class="savep" id="270.228" onclick="setSave('Look, I\'m sorry. ','Tớ xin lỗi ','270.228')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue63" data-start="271.396">
            I don't want to give them
            any more ammunition than they have.
            <br><small>Nhưng tớ không muốn dọn thêm dù chúng đã được dọn rồi.
            </small>
            <div class="savep" id="271.396" onclick="setSave('I don\'t want to give them any more ammunition than they have. ','Nhưng tớ không muốn dọn thêm dù chúng đã được dọn rồi. ','271.396')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue64" data-start="274.065">
            Yes, we know how cruel
            a parent can be...
            <br><small>Chúng ta đều biết cha mẹ có thể tàn nhẫn đến mức nào ...
            </small>
            <div class="savep" id="274.065" onclick="setSave('Yes, we know how cruel a parent can be... ','Chúng ta đều biết cha mẹ có thể tàn nhẫn đến mức nào ... ','274.065')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue65" data-start="276.15">
            ...about the flatness of a child's pillow.
            <br><small>... về chuyện phét vào gối của đứa con
            </small>
            <div class="savep" id="276.15" onclick="setSave('...about the flatness of a child\'s pillow. ','... về chuyện phét vào gối của đứa con ','276.15')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue66" data-start="279.821">
            Monica? Hi. Um...
            <br><small>Monica? Gì!
            </small>
            <div class="savep" id="279.821" onclick="setSave('Monica? Hi. Um... ','Monica? Gì! ','279.821')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue67" data-start="282.865">
            Monica, um, you're scaring me.
            <br><small>Monica, cậu làm tớ sợ.
            </small>
            <div class="savep" id="282.865" onclick="setSave('Monica, um, you\'re scaring me. ','Monica, cậu làm tớ sợ. ','282.865')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue68" data-start="286.661">
            I mean, you're, like, all chaotic
            and twirly, you know?
            <br><small>Ý tớ là cậu trông rất hỗn loạn và xoay vòng cậu biết đấy?
            </small>
            <div class="savep" id="286.661" onclick="setSave('I mean, you\'re, like, all chaotic and twirly, you know? ','Ý tớ là cậu trông rất hỗn loạn và xoay vòng cậu biết đấy? ','286.661')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue69" data-start="290.456">
            Not in a good way.
            <br><small>Không phải theo cách tốt.
            </small>
            <div class="savep" id="290.456" onclick="setSave('Not in a good way. ','Không phải theo cách tốt. ','290.456')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue70" data-start="293.543">
            Yeah, calm down.
            <br><small>Bình tĩnh đi.
            </small>
            <div class="savep" id="293.543" onclick="setSave('Yeah, calm down. ','Bình tĩnh đi. ','293.543')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue71" data-start="294.919">
            You don't see Ross getting all chaotic
            and twirly every time they come.
            <br><small>Cậu không thấy Ross
            có bao giờ bị loạn như thế khi họ đến không.
            </small>
            <div class="savep" id="294.919" onclick="setSave('You don\'t see Ross getting all chaotic and twirly every time they come. ','Cậu không thấy Ross có bao giờ bị loạn như thế khi họ đến không. ','294.919')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue72" data-start="299.424">
            That's because, as far as my parents are
            concerned, Ross can do no wrong.
            <br><small>Bởi vì ba mẹ tớ nghĩ Ross không làm gì sai cả .
            </small>
            <div class="savep" id="299.424" onclick="setSave('That\'s because, as far as my parents are concerned, Ross can do no wrong. ','Bởi vì ba mẹ tớ nghĩ Ross không làm gì sai cả . ','299.424')">
               <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
         </span>
                <span id="cue73" data-start="303.511">
            You see, he's the prince.
            <br><small>Cậu thấy đấy, anh ấy là "Hoàng tử"
            </small><div class="savep" id="303.511" onclick="setSave('You see, he\'s the prince. ','Cậu thấy đấy, anh ấy là " hoàng="" tử"="" ','303.511')"="">
            <p class="glyphicon glyphicon-floppy-disk"></p>
            </div>
            </span>
            <span id="cue74" data-start="305.763">
         Apparently they had some big ceremony
         before I was born.
         <br><small>Họ đã có vài nghi lễ lớn trước khi tớ được sinh ra.
         </small>
         <div class="savep" id="305.763" onclick="setSave('Apparently they had some big ceremony before I was born. ','Họ đã có vài nghi lễ lớn trước khi tớ được sinh ra. ','305.763')">
            <p class="glyphicon glyphicon-floppy-disk"></p>
         </div>
      </span>
            <span id="cue75" data-start="310.893">
         Ew, ew, ew.
         <br><small>Ew, ew, ew.
         </small>
         <div class="savep" id="310.893" onclick="setSave('Ew, ew, ew. ','Ew, ew, ew. ','310.893')">
            <p class="glyphicon glyphicon-floppy-disk"></p>
         </div>
      </span>
            <span id="cue76" data-start="312.812">
         - What?
         - Ugly Naked Guy got a ThighMaster.
         <br><small>- Gì thế?
         - "The Ugly Naked Guy" đang làm động tác xấu.
         </small><div class="savep" id="312.812" onclick="setSave('- What? - Ugly Naked Guy got a ThighMaster. ','- Gì thế? - " the="" ugly="" naked="" guy"="" đang="" làm="" động="" tác="" xấu.="" ','312.812')"="">
         <p class="glyphicon glyphicon-floppy-disk"></p>
        </div>
        </span>
        <span id="cue77" data-start="318.067">
      Ew.
      <br><small>Ew.
      </small>
      <div class="savep" id="318.067" onclick="setSave('Ew. ','Ew. ','318.067')">
         <p class="glyphicon glyphicon-floppy-disk"></p>
      </div>
   </span>
        <span id="cue78" data-start="320.528">
      - Has anybody seen my engagement ring?
      - Yeah, it's beautiful.
      <br><small>- Có ai thấy nhẫn đính hôn của tớ không?
      - Có nó rất đẹp.
      </small>
      <div class="savep" id="320.528" onclick="setSave('- Has anybody seen my engagement ring? - Yeah, it\'s beautiful. ','- Có ai thấy nhẫn đính hôn của tớ không? - Có nó rất đẹp. ','320.528')">
         <p class="glyphicon glyphicon-floppy-disk"></p>
      </div>
   </span>
        <span id="cue79" data-start="328.87">
      Oh, God. Oh, God.
      <br><small>Trời ơi! Trời ơi!
      </small>
      <div class="savep" id="328.87" onclick="setSave('Oh, God. Oh, God. ','Trời ơi! Trời ơi! ','328.87')">
         <p class="glyphicon glyphicon-floppy-disk"></p>
      </div>
   </span>
        <span id="cue80" data-start="330.58">
      - Oh, God, oh, God, oh, God.
      - No, don't touch that.
      <br><small>- Trời ơi! Trời ơi!
      - Không đừng chạm vào đó.
      </small>
      <div class="savep" id="330.58" onclick="setSave('- Oh, God, oh, God, oh, God. - No, don\'t touch that. ','- Trời ơi! Trời ơi! - Không đừng chạm vào đó. ','330.58')">
         <p class="glyphicon glyphicon-floppy-disk"></p>
      </div>
   </span>
        <span id="cue81" data-start="336.461">
      Oh, like I wasn't dreading tomorrow enough
      having to give it back to him.
      <br><small>Tớ sợ nghĩ đến ngày mai đi trả nhẫn cho anh ta mà giờ không có nữa.
      </small>
      <div class="savep" id="336.461" onclick="setSave('Oh, like I wasn\'t dreading tomorrow enough having to give it back to him. ','Tớ sợ nghĩ đến ngày mai đi trả nhẫn cho anh ta mà giờ không có nữa. ','336.461')">
         <p class="glyphicon glyphicon-floppy-disk"></p>
      </div>
   </span>
        <span id="cue82" data-start="340.965">
      "Hi, Barry, remember me? I'm the girl...
      <br><small>"Hi, Barry, nhớ em không?Em là cô gái ...
      </small><div class="savep" id="340.965" onclick="setSave('\'Hi, Barry, remember me? I\'m the girl... ','" hi,="" barry,="" nhớ="" em="" không?em="" là="" cô="" gái="" ...="" ','340.965')"="">
      <p class="glyphicon glyphicon-floppy-disk"></p>
    </div>
    </span>
    <span id="cue83" data-start="342.925">
   ...that stomped on your heart
   in front of your entire family"
   <br><small>đã làm tan nát tim anh trước cả gia đình anh."
   </small><div class="savep" id="342.925" onclick="setSave('...that stomped on your heart in front of your entire family\' ','đã làm tan nát tim anh trước cả gia đình anh." ','342.925')"="">
   <p class="glyphicon glyphicon-floppy-disk"></p>
        </div>
</span>
    <span id="cue84" data-start="346.304">
   Oh, God. Now I'm gonna have to
   return the ring, without the ring...
   <br><small>Bây giờ tớ phải trả lại cái nhẫn, không có nó mọi chuyện..
   </small>
   <div class="savep" id="346.304" onclick="setSave('Oh, God. Now I\'m gonna have to return the ring, without the ring... ','Bây giờ tớ phải trả lại cái nhẫn, không có nó mọi chuyện.. ','346.304')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue85" data-start="349.849">
   ...which makes it so much harder.
   <br><small>sẽ rất là khó.
   </small>
   <div class="savep" id="349.849" onclick="setSave('...which makes it so much harder. ','sẽ rất là khó. ','349.849')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue86" data-start="353.603">
   Easy, Rach, we'll find it. Won't we?
   <br><small>Bình tĩnh nào. Chúng ta sẽ tìm ra nó, phải không mấy ông?
   </small>
   <div class="savep" id="353.603" onclick="setSave('Easy, Rach, we\'ll find it. Won\'t we? ','Bình tĩnh nào. Chúng ta sẽ tìm ra nó, phải không mấy ông? ','353.603')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue87" data-start="355.772">
   - Oh, yeah.
   MONICA: Okay, look.
   <br><small>- Oh, yeah.
   - Oh, yeah.
   - Okay, look..
   </small>
   <div class="savep" id="355.772" onclick="setSave('- Oh, yeah. MONICA: Okay, look. ','- Oh, yeah. - Oh, yeah. - Okay, look.. ','355.772')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue88" data-start="360.151">
   When did you have it on last?
   <br><small>Thế lần cuối cậu đeo nó là khi nào?
   </small>
   <div class="savep" id="360.151" onclick="setSave('When did you have it on last? ','Thế lần cuối cậu đeo nó là khi nào? ','360.151')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue89" data-start="361.903">
   Doy. Probably right before she lost it.
   <br><small>Ngốc à ngay khi cô ấy mất nó chứ đâu.
   </small>
   <div class="savep" id="361.903" onclick="setSave('Doy. Probably right before she lost it. ','Ngốc à ngay khi cô ấy mất nó chứ đâu. ','361.903')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue90" data-start="366.574">
   You don't get a lot of "doy" these days.
   <br><small>Cậu không thể có nhiều kẻ ngốc như ngày nay được.
   </small>
   <div class="savep" id="366.574" onclick="setSave('You don\'t get a lot of \'doy\' these days. ','Cậu không thể có nhiều kẻ ngốc như ngày nay được. ','366.574')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue91" data-start="370.87">
   I know I had it this morning.
   <br><small>Không tớ có mang nó sáng nay.
   </small>
   <div class="savep" id="370.87" onclick="setSave('I know I had it this morning. ','Không tớ có mang nó sáng nay. ','370.87')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue92" data-start="373.915">
   I know I had it when I was
   in the kitchen with...
   <br><small>Tớ biết tớ có nó khi đang ở trong bếp với.
   </small>
   <div class="savep" id="373.915" onclick="setSave('I know I had it when I was in the kitchen with... ','Tớ biết tớ có nó khi đang ở trong bếp với. ','373.915')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue93" data-start="377.001">
   Dinah?
   <br><small>Dinah à?
   </small>
   <div class="savep" id="377.001" onclick="setSave('Dinah? ','Dinah à? ','377.001')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue94" data-start="381.297">
   Oh, don't be mad.
   <br><small>Đừng giận nhé.
   </small>
   <div class="savep" id="381.297" onclick="setSave('Oh, don\'t be mad. ','Đừng giận nhé. ','381.297')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue95" data-start="384.467">
   - You didn't.
   - Oh, I'm sorry.
   <br><small>- Cậu không làm vậy chứ.
   - Tớ xin lỗi.
   </small>
   <div class="savep" id="384.467" onclick="setSave('- You didn\'t. - Oh, I\'m sorry. ','- Cậu không làm vậy chứ. - Tớ xin lỗi. ','384.467')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue96" data-start="387.095">
   I gave you one job.
   <br><small>- Tớ đã chỉ cho cậu một việc vậy mà.
   </small>
   <div class="savep" id="387.095" onclick="setSave('I gave you one job. ','- Tớ đã chỉ cho cậu một việc vậy mà. ','387.095')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue97" data-start="390.598">
   Oh, but look how straight
   those noodles are.
   <br><small>Nhưng nhìn những cọng mì thẳng chưa kìa.
   </small>
   <div class="savep" id="390.598" onclick="setSave('Oh, but look how straight those noodles are. ','Nhưng nhìn những cọng mì thẳng chưa kìa. ','390.598')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue98" data-start="394.477">
   Monica, you know that's not how you look
   for an engagement ring in a lasagna.
   <br><small>Nhưng cậu biết đấy đó không như vậy khi cậu tìm nhẫn đính hôn trong món đó.
   </small>
   <div class="savep" id="394.477" onclick="setSave('Monica, you know that\'s not how you look for an engagement ring in a lasagna. ','Nhưng cậu biết đấy đó không như vậy khi cậu tìm nhẫn đính hôn trong món đó. ','394.477')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue99" data-start="401.025">
   I just can't do it.
   <br><small>Tớ không làm được.
   </small>
   <div class="savep" id="401.025" onclick="setSave('I just can\'t do it. ','Tớ không làm được. ','401.025')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue100" data-start="403.861">
   Boys?
   <br><small>Mấy cậu ơi?
   </small>
   <div class="savep" id="403.861" onclick="setSave('Boys? ','Mấy cậu ơi? ','403.861')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue101" data-start="406.03">
   We're going in.
   <br><small>Chúng ta nhào dô nào.
   </small>
   <div class="savep" id="406.03" onclick="setSave('We\'re going in. ','Chúng ta nhào dô nào. ','406.03')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue102" data-start="416.04">
   Hi.
   <br><small>Hi.
   </small>
   <div class="savep" id="416.04" onclick="setSave('Hi. ','Hi. ','416.04')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue103" data-start="418.334">
   Oh, that is not a happy "hi."
   <br><small>Đó không phải là "chào" vui vẻ
   </small><div class="savep" id="418.334" onclick="setSave('Oh, that is not a happy \'hi.\' ','Đó không phải là " chào"="" vui="" vẻ="" ','418.334')"="">
   <p class="glyphicon glyphicon-floppy-disk"></p>
        </div>
</span>
    <span id="cue104" data-start="420.753">
   Carol's pregnant.
   <br><small>Carol có thai rồi.
   </small>
   <div class="savep" id="420.753" onclick="setSave('Carol\'s pregnant. ','Carol có thai rồi. ','420.753')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue105" data-start="422.463">
   Oh, I found it.
   <br><small>Tìm thấy rồi!
   </small>
   <div class="savep" id="422.463" onclick="setSave('Oh, I found it. ','Tìm thấy rồi! ','422.463')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue106" data-start="426.217">
   Well, what...? What?
   <br><small>Gì...gì..gì chứ?
   </small>
   <div class="savep" id="426.217" onclick="setSave('Well, what...? What? ','Gì...gì..gì chứ? ','426.217')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue107" data-start="429.72">
   Yeah.
   <br><small>Đúng vậy.
   </small>
   <div class="savep" id="429.72" onclick="setSave('Yeah. ','Đúng vậy. ','429.72')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue108" data-start="432.014">
   Do that for another two hours...
   <br><small>Làm thế trong hai giờ nữa ...
   </small>
   <div class="savep" id="432.014" onclick="setSave('Do that for another two hours... ','Làm thế trong hai giờ nữa ... ','432.014')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue109" data-start="433.558">
   ...you might be where I am
   right about now.
   <br><small>... em có thể như anh bây giờ
   </small>
   <div class="savep" id="433.558" onclick="setSave('...you might be where I am right about now. ','... em có thể như anh bây giờ ','433.558')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue110" data-start="437.603">
   Kind of puts that whole pillow thing
   in perspective, huh, Mon?
   <br><small>Chuyện này sẽ đẩy mọi chuyện về cái gối thành một viễn cảnh đấy.
   </small>
   <div class="savep" id="437.603" onclick="setSave('Kind of puts that whole pillow thing in perspective, huh, Mon? ','Chuyện này sẽ đẩy mọi chuyện về cái gối thành một viễn cảnh đấy. ','437.603')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue111" data-start="443.151">
   Well, now, how do you fit
   into this whole thing?
   <br><small>Thế anh tính làm thế nào?
   </small>
   <div class="savep" id="443.151" onclick="setSave('Well, now, how do you fit into this whole thing? ','Thế anh tính làm thế nào? ','443.151')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue112" data-start="445.361">
   Well, Carol says she and Susan
   want me to be involved.
   <br><small>Carol và Susan muốn tớ có liên quan chút ít.
   </small>
   <div class="savep" id="445.361" onclick="setSave('Well, Carol says she and Susan want me to be involved. ','Carol và Susan muốn tớ có liên quan chút ít. ','445.361')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue113" data-start="448.656">
   But if I'm not comfortable with it,
   I don't have to be involved.
   <br><small>Nhưng nếu tớ không thoải mái với chuyện đó thì, tớ có thể không tham gia.
   </small>
   <div class="savep" id="448.656" onclick="setSave('But if I\'m not comfortable with it, I don\'t have to be involved. ','Nhưng nếu tớ không thoải mái với chuyện đó thì, tớ có thể không tham gia. ','448.656')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue114" data-start="453.578">
   Basically, it's totally up to me.
   <br><small>Hoàn toàn là quyết định của tớ.
   </small>
   <div class="savep" id="453.578" onclick="setSave('Basically, it\'s totally up to me. ','Hoàn toàn là quyết định của tớ. ','453.578')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue115" data-start="455.705">
   She is so great. I miss her.
   <br><small>Cô ấy thật tuyệt, tớ nhớ cổ.
   </small>
   <div class="savep" id="455.705" onclick="setSave('She is so great. I miss her. ','Cô ấy thật tuyệt, tớ nhớ cổ. ','455.705')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue116" data-start="463.171">
   What does she mean by "involved"?
   <br><small>Cô ấy nói "liên quan" là sao?
   </small><div class="savep" id="463.171" onclick="setSave('What does she mean by \'involved\'? ','Cô ấy nói " liên="" quan"="" là="" sao?="" ','463.171')"="">
   <p class="glyphicon glyphicon-floppy-disk"></p>
        </div>
</span>
    <span id="cue117" data-start="464.755">
   I mean, presumably,
   the biggest part of your job is done.
   <br><small>Về mặt lí thuyết thì công việc của cậu đã xong.
   </small>
   <div class="savep" id="464.755" onclick="setSave('I mean, presumably, the biggest part of your job is done. ','Về mặt lí thuyết thì công việc của cậu đã xong. ','464.755')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue118" data-start="469.594">
   Anyway, they want me
   to go down to this...
   <br><small>Dù sao thì họ cũng muốn tớ đi ...
   </small>
   <div class="savep" id="469.594" onclick="setSave('Anyway, they want me to go down to this... ','Dù sao thì họ cũng muốn tớ đi ... ','469.594')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue119" data-start="472.388">
   ...sonogram thing with them tomorrow.
   <br><small>... nội soi với họ ngày mai.
   </small>
   <div class="savep" id="472.388" onclick="setSave('...sonogram thing with them tomorrow. ','... nội soi với họ ngày mai. ','472.388')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue120" data-start="475.016">
   So, what are you gonna do?
   <br><small>Anh sẽ làm gì?
   </small>
   <div class="savep" id="475.016" onclick="setSave('So, what are you gonna do? ','Anh sẽ làm gì? ','475.016')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue121" data-start="476.267">
   I have no idea.
   <br><small>Anh không biết.
   </small>
   <div class="savep" id="476.267" onclick="setSave('I have no idea. ','Anh không biết. ','476.267')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue122" data-start="478.519">
   No matter what I do, though,
   I'm still gonna be a father.
   <br><small>Dù anh làm gì đi nữa thì anh vẫn sẽ làm cha.
   </small>
   <div class="savep" id="478.519" onclick="setSave('No matter what I do, though, I\'m still gonna be a father. ','Dù anh làm gì đi nữa thì anh vẫn sẽ làm cha. ','478.519')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue123" data-start="492.241">
   Well, this is still ruined, right?
   <br><small>Thì món này cũng hư rồi đúng không?
   </small>
   <div class="savep" id="492.241" onclick="setSave('Well, this is still ruined, right? ','Thì món này cũng hư rồi đúng không? ','492.241')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue124" data-start="499.832">
   Oh. Martha Lugwin's daughter
   is gonna call you.
   <br><small>Con gái của Martha Lugwin sẽ gọi cho con.
   </small>
   <div class="savep" id="499.832" onclick="setSave('Oh. Martha Lugwin\'s daughter is gonna call you. ','Con gái của Martha Lugwin sẽ gọi cho con. ','499.832')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue125" data-start="505.505">
   Mm. What's that curry taste?
   <br><small>Vị cà ri gì thế gì?
   </small>
   <div class="savep" id="505.505" onclick="setSave('Mm. What\'s that curry taste? ','Vị cà ri gì thế gì? ','505.505')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue126" data-start="508.841">
   Curry.
   <br><small>Cà ri à.
   </small>
   <div class="savep" id="508.841" onclick="setSave('Curry. ','Cà ri à. ','508.841')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue127" data-start="511.344">
   Mm.
   <br><small>Mm.
   </small>
   <div class="savep" id="511.344" onclick="setSave('Mm. ','Mm. ','511.344')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue128" data-start="514.472">
   I think they're great. I really do.
   <br><small>Con nghĩ nó rất ngon. Con thật sự nghĩ thế.
   </small>
   <div class="savep" id="514.472" onclick="setSave('I think they\'re great. I really do. ','Con nghĩ nó rất ngon. Con thật sự nghĩ thế. ','514.472')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue129" data-start="517.767">
   You remember the Lugwins?
   <br><small>Con nhớ Lugwin chứ
   </small>
   <div class="savep" id="517.767" onclick="setSave('You remember the Lugwins? ','Con nhớ Lugwin chứ ','517.767')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue130" data-start="518.935">
   The big one had a thing for you,
   didn't she?
   <br><small>cô ấy luôn để ý con.
   </small>
   <div class="savep" id="518.935" onclick="setSave('The big one had a thing for you, didn\'t she? ','cô ấy luôn để ý con. ','518.935')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue131" data-start="521.02">
   They all had a thing for him.
   <br><small>Họ lúc nào mà chẳng để ý nó.
   </small>
   <div class="savep" id="521.02" onclick="setSave('They all had a thing for him. ','Họ lúc nào mà chẳng để ý nó. ','521.02')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue132" data-start="523.648">
   Oh, Mom.
   <br><small>Thôi mà mẹ.
   </small>
   <div class="savep" id="523.648" onclick="setSave('Oh, Mom. ','Thôi mà mẹ. ','523.648')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue133" data-start="524.941">
   I'm sorry.
   Why is this girl going to call me?
   <br><small>Tại sao họ lại muốn gọi cho con?
   </small>
   <div class="savep" id="524.941" onclick="setSave('I\'m sorry. Why is this girl going to call me? ','Tại sao họ lại muốn gọi cho con? ','524.941')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue134" data-start="527.235">
   Oh, she just graduated, and she wants
   to be something in cooking or food...
   <br><small>Cô ấy vừa mới tốt nghiệp, và cô ấy cần ai đó dạy nấu ăn..
   </small>
   <div class="savep" id="527.235" onclick="setSave('Oh, she just graduated, and she wants to be something in cooking or food... ','Cô ấy vừa mới tốt nghiệp, và cô ấy cần ai đó dạy nấu ăn.. ','527.235')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue135" data-start="531.948">
   ...or I don't know.
   <br><small>Hay con không biết
   </small>
   <div class="savep" id="531.948" onclick="setSave('...or I don\'t know. ','Hay con không biết ','531.948')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue136" data-start="533.282">
   Anyway, I told her you had a restaurant,
   so...
   <br><small>Mẹ nói là con có một nhà hàng
   </small>
   <div class="savep" id="533.282" onclick="setSave('Anyway, I told her you had a restaurant, so... ','Mẹ nói là con có một nhà hàng ','533.282')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue137" data-start="535.868">
   No, Mom. I don't have a restaurant.
   I work in a restaurant.
   <br><small>Con không có nhà hàng, con làm trong nhà hàng.
   </small>
   <div class="savep" id="535.868" onclick="setSave('No, Mom. I don\'t have a restaurant. I work in a restaurant. ','Con không có nhà hàng, con làm trong nhà hàng. ','535.868')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue138" data-start="538.746">
   Well, they don't have to know that.
   <br><small>Thế thì họ không cần biết điều đó.
   </small>
   <div class="savep" id="538.746" onclick="setSave('Well, they don\'t have to know that. ','Thế thì họ không cần biết điều đó. ','538.746')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue139" data-start="544.669">
   Ross, could you come and help me
   with the spaghetti.
   <br><small>Ross, ra giúp em với món mì với.
   </small>
   <div class="savep" id="544.669" onclick="setSave('Ross, could you come and help me with the spaghetti. ','Ross, ra giúp em với món mì với. ','544.669')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue140" data-start="547.171">
   Yes.
   <br><small>Được.
   </small>
   <div class="savep" id="547.171" onclick="setSave('Yes. ','Được. ','547.171')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue141" data-start="548.339">
   Oh, we're having spaghetti. That's... ...easy.
   <br><small>Oh, chúng ta có món mì Ý.
   Cái đó thì dễ ẹt.
   </small>
   <div class="savep" id="548.339" onclick="setSave('Oh, we\'re having spaghetti. That\'s... ...easy. ','Oh, chúng ta có món mì Ý. Cái đó thì dễ ẹt. ','548.339')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue142" data-start="554.262">
   I know this is going to sound
   unbelievably selfish on my part...
   <br><small>Chuyện này nghe có vẻ cực kì ích kỉ về phần em..
   </small>
   <div class="savep" id="554.262" onclick="setSave('I know this is going to sound unbelievably selfish on my part... ','Chuyện này nghe có vẻ cực kì ích kỉ về phần em.. ','554.262')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue143" data-start="557.557">
   ...but were you planning on bringing
   up the whole baby/lesbian thing?
   <br><small>nhưng anh có định nói chuyện về đứa bé không?
   </small>
   <div class="savep" id="557.557" onclick="setSave('...but were you planning on bringing up the whole baby/lesbian thing? ','nhưng anh có định nói chuyện về đứa bé không? ','557.557')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue144" data-start="560.977">
   Because I think it might take
   some of the heat off me.
   <br><small>Chuyện này sẽ làm cho em bớt được ít gánh nặng.
   </small>
   <div class="savep" id="560.977" onclick="setSave('Because I think it might take some of the heat off me. ','Chuyện này sẽ làm cho em bớt được ít gánh nặng. ','560.977')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue145" data-start="566.816">
   What that Rachel did to her life.
   We ran into her parents at the club.
   <br><small>Đó là Rachel.
   Chúng ta đã gặp họ ở câu lạc bộ.
   </small>
   <div class="savep" id="566.816" onclick="setSave('What that Rachel did to her life. We ran into her parents at the club. ','Đó là Rachel. Chúng ta đã gặp họ ở câu lạc bộ. ','566.816')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue146" data-start="570.861">
   They were not playing very well.
   <br><small>Họ không được vui vẻ cho lắm.
   </small>
   <div class="savep" id="570.861" onclick="setSave('They were not playing very well. ','Họ không được vui vẻ cho lắm. ','570.861')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue147" data-start="573.03">
   I'm not gonna tell you
   what they spent on that wedding...
   <br><small>Tôi sẽ không nói họ đã trải qua chuyện gì đâu..
   </small>
   <div class="savep" id="573.03" onclick="setSave('I\'m not gonna tell you what they spent on that wedding... ','Tôi sẽ không nói họ đã trải qua chuyện gì đâu.. ','573.03')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue148" data-start="575.658">
   ...but $40,000 is a lot of money.
   <br><small>nhưng 40 ngàn đô thì quả là cái đám cưới hoành tráng.
   </small>
   <div class="savep" id="575.658" onclick="setSave('...but $40,000 is a lot of money. ','nhưng 40 ngàn đô thì quả là cái đám cưới hoành tráng. ','575.658')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue149" data-start="580.997">
   Well, at least she had the chance
   to leave a man at the altar.
   <br><small>Ít ra cô ấy có cơ hội bỏ người đàn ông này ở nơi làm lễ.
   </small>
   <div class="savep" id="580.997" onclick="setSave('Well, at least she had the chance to leave a man at the altar. ','Ít ra cô ấy có cơ hội bỏ người đàn ông này ở nơi làm lễ. ','580.997')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue150" data-start="587.837">
   - What's that supposed to mean?
   - Nothing.
   <br><small>- Ý đó là gì vậy?
   - Chả có gì cả.
   </small>
   <div class="savep" id="587.837" onclick="setSave('- What\'s that supposed to mean? - Nothing. ','- Ý đó là gì vậy? - Chả có gì cả. ','587.837')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue151" data-start="590.798">
   - It's an expression.
   - No, it's not.
   <br><small>- Nó chỉ là diễn đạt thôi.
   - Không phải thế.
   </small>
   <div class="savep" id="590.798" onclick="setSave('- It\'s an expression. - No, it\'s not. ','- Nó chỉ là diễn đạt thôi. - Không phải thế. ','590.798')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue152" data-start="594.302">
   Don't listen to your mother.
   <br><small>Đừng nghe lời mẹ con.
   </small>
   <div class="savep" id="594.302" onclick="setSave('Don\'t listen to your mother. ','Đừng nghe lời mẹ con. ','594.302')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue153" data-start="595.678">
   You're independent
   and you always have been.
   <br><small>Con lúc nào cũng tự lập được cả.
   </small>
   <div class="savep" id="595.678" onclick="setSave('You\'re independent and you always have been. ','Con lúc nào cũng tự lập được cả. ','595.678')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue154" data-start="597.847">
   Even when you were a kid,
   and you were chubby...
   <br><small>Ngay cả khi hồi nhỏ khi con béo ú..
   </small>
   <div class="savep" id="597.847" onclick="setSave('Even when you were a kid, and you were chubby... ','Ngay cả khi hồi nhỏ khi con béo ú.. ','597.847')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue155" data-start="600.516">
   ...and you had no friends,
   you were just fine.
   <br><small>và con chả có bạn bè thế mà vẫn ổn thôi.
   </small>
   <div class="savep" id="600.516" onclick="setSave('...and you had no friends, you were just fine. ','và con chả có bạn bè thế mà vẫn ổn thôi. ','600.516')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue156" data-start="605.146">
   You'd read alone in your room.
   And your puzzles...
   <br><small>Con thích đọc sách một mình trong phòng.
   Và con thích giải đố..
   </small>
   <div class="savep" id="605.146" onclick="setSave('You\'d read alone in your room. And your puzzles... ','Con thích đọc sách một mình trong phòng. Và con thích giải đố.. ','605.146')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue157" data-start="611.819">
   Look, there are people, like Ross,
   who need to shoot for the stars.
   <br><small>Người như Ross đều có những cơ hội lớn.
   </small>
   <div class="savep" id="611.819" onclick="setSave('Look, there are people, like Ross, who need to shoot for the stars. ','Người như Ross đều có những cơ hội lớn. ','611.819')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue158" data-start="615.99">
   With his museum and his papers
   getting published.
   <br><small>Với bảo tàng và những tựa sách mà nó sắp phát hành.
   </small>
   <div class="savep" id="615.99" onclick="setSave('With his museum and his papers getting published. ','Với bảo tàng và những tựa sách mà nó sắp phát hành. ','615.99')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue159" data-start="619.035">
   Other people are satisfied
   with staying where they are.
   <br><small>Còn lại thì đều là những kẻ tự mãn với những gì họ có được.
   </small>
   <div class="savep" id="619.035" onclick="setSave('Other people are satisfied with staying where they are. ','Còn lại thì đều là những kẻ tự mãn với những gì họ có được. ','619.035')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue160" data-start="621.495">
   I'm telling you, these are the people
   who never get cancer.
   <br><small>Ba nói cho con biết bọn đó không bao giờ mắc bệnh được.
   </small>
   <div class="savep" id="621.495" onclick="setSave('I\'m telling you, these are the people who never get cancer. ','Ba nói cho con biết bọn đó không bao giờ mắc bệnh được. ','621.495')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue161" data-start="628.085">
   And I read about these women
   trying to have it all, and I thank God...
   <br><small>Họ chỉ hạnh phúc với những gì họ có thôi, đoại loại như ..
   </small>
   <div class="savep" id="628.085" onclick="setSave('And I read about these women trying to have it all, and I thank God... ','Họ chỉ hạnh phúc với những gì họ có thôi, đoại loại như .. ','628.085')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue162" data-start="632.423">
   ...our little Harmonica
   doesn't seem to have that problem.
   <br><small>như bò vậy.
   </small>
   <div class="savep" id="632.423" onclick="setSave('...our little Harmonica doesn\'t seem to have that problem. ','như bò vậy. ','632.423')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue163" data-start="638.137">
   So, Ross, what's going on with you?
   <br><small>Vậy Ross chuyện gì xảy ra với anh?
   </small>
   <div class="savep" id="638.137" onclick="setSave('So, Ross, what\'s going on with you? ','Vậy Ross chuyện gì xảy ra với anh? ','638.137')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue164" data-start="641.891">
   Any stories? No news, no little
   anecdotes to share with the folks?
   <br><small>Có chuyện nào không? Không có tin tức không có chuyện vặt nào để kể cho cả nhà nghe à?
   </small>
   <div class="savep" id="641.891" onclick="setSave('Any stories? No news, no little anecdotes to share with the folks? ','Có chuyện nào không? Không có tin tức không có chuyện vặt nào để kể cho cả nhà nghe à? ','641.891')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue165" data-start="646.187">
   Okay, okay.
   <br><small>Okay, okay.
   </small>
   <div class="savep" id="646.187" onclick="setSave('Okay, okay. ','Okay, okay. ','646.187')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue166" data-start="649.273">
   Ahem. Look, I, uh... I realize you guys
   have been wondering...
   <br><small>Cả nhà nghe này, con tự hỏi chắc mọi người muốn biết chính xác..
   </small>
   <div class="savep" id="649.273" onclick="setSave('Ahem. Look, I, uh... I realize you guys have been wondering... ','Cả nhà nghe này, con tự hỏi chắc mọi người muốn biết chính xác.. ','649.273')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue167" data-start="654.236">
   ...what exactly happened
   between Carol and me.
   <br><small>chuyện xảy ra giữ Carol và con.
   </small>
   <div class="savep" id="654.236" onclick="setSave('...what exactly happened between Carol and me. ','chuyện xảy ra giữ Carol và con. ','654.236')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue168" data-start="657.073">
   And so, well, here's the deal.
   <br><small>Và chuyện là thế này.
   </small>
   <div class="savep" id="657.073" onclick="setSave('And so, well, here\'s the deal. ','Và chuyện là thế này. ','657.073')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue169" data-start="661.911">
   Carol's a lesbian.
   <br><small>Carol bị đồng tính.
   </small>
   <div class="savep" id="661.911" onclick="setSave('Carol\'s a lesbian. ','Carol bị đồng tính. ','661.911')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue170" data-start="665.623">
   She's living with a woman named Susan.
   <br><small>Cô ấy sống với người phụ nữ tên Susan.
   </small>
   <div class="savep" id="665.623" onclick="setSave('She\'s living with a woman named Susan. ','Cô ấy sống với người phụ nữ tên Susan. ','665.623')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue171" data-start="669.835">
   She's pregnant with my child.
   <br><small>Cô ấy mang trong mình đứa bé của con.
   </small>
   <div class="savep" id="669.835" onclick="setSave('She\'s pregnant with my child. ','Cô ấy mang trong mình đứa bé của con. ','669.835')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue172" data-start="673.464">
   And she and Susan
   are going to raise the baby.
   <br><small>Cô ấy và Susan định nuôi đứa trẻ.
   </small>
   <div class="savep" id="673.464" onclick="setSave('And she and Susan are going to raise the baby. ','Cô ấy và Susan định nuôi đứa trẻ. ','673.464')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue173" data-start="680.68">
   And you knew about this?
   <br><small>Con biết chuyện này mà không nói à?
   </small>
   <div class="savep" id="680.68" onclick="setSave('And you knew about this? ','Con biết chuyện này mà không nói à? ','680.68')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue174" data-start="696.904">
   Your folks are really that bad, huh?
   <br><small>Gia đình cậu tệ thế sao?
   </small>
   <div class="savep" id="696.904" onclick="setSave('Your folks are really that bad, huh? ','Gia đình cậu tệ thế sao? ','696.904')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue175" data-start="699.782">
   Well, you know, these people are pros.
   <br><small>Cậu biết đấy những người này là chuyên nghiệp.
   </small>
   <div class="savep" id="699.782" onclick="setSave('Well, you know, these people are pros. ','Cậu biết đấy những người này là chuyên nghiệp. ','699.782')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue176" data-start="704.62">
   They know what they're doing.
   They take their time.
   <br><small>Họ biết họ làm gì. Họ rất thư thả.
   </small>
   <div class="savep" id="704.62" onclick="setSave('They know what they\'re doing. They take their time. ','Họ biết họ làm gì. Họ rất thư thả. ','704.62')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue177" data-start="707.373">
   They get the job done.
   <br><small>Và họ làm xong công việc của mình.
   </small>
   <div class="savep" id="707.373" onclick="setSave('They get the job done. ','Và họ làm xong công việc của mình. ','707.373')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue178" data-start="711.836">
   Boy, I know they say that
   you can't change your parents.
   <br><small>Người ta nói mình không thể thay đổi cha mẹ được.
   </small>
   <div class="savep" id="711.836" onclick="setSave('Boy, I know they say that you can\'t change your parents. ','Người ta nói mình không thể thay đổi cha mẹ được. ','711.836')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue179" data-start="715.214">
   Boy, if you could, I'd want yours.
   <br><small>Nếu như bạn có thể, thì chị muốn có ông bà già như của em.
   </small>
   <div class="savep" id="715.214" onclick="setSave('Boy, if you could, I\'d want yours. ','Nếu như bạn có thể, thì chị muốn có ông bà già như của em. ','715.214')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue180" data-start="720.302">
   Must pee.
   <br><small>Phải đi tè.
   </small>
   <div class="savep" id="720.302" onclick="setSave('Must pee. ','Phải đi tè. ','720.302')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue181" data-start="723.013">
   You know, it's even worse
   when you're twins.
   <br><small>Nó tệ hơn khi cậu là cặp sinh đôi.
   </small>
   <div class="savep" id="723.013" onclick="setSave('You know, it\'s even worse when you\'re twins. ','Nó tệ hơn khi cậu là cặp sinh đôi. ','723.013')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue182" data-start="724.974">
   - You're a twin?
   - Oh, yeah. We don't speak.
   <br><small>- Cậu có chị em sinh đôi à?
   - Ừ chúng tôi ít nói chuyện.
   </small>
   <div class="savep" id="724.974" onclick="setSave('- You\'re a twin? - Oh, yeah. We don\'t speak. ','- Cậu có chị em sinh đôi à? - Ừ chúng tôi ít nói chuyện. ','724.974')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue183" data-start="727.351">
   She's like this high-powered,
   driven, career-type.
   <br><small>Cô ấy có vẻ cao giá hơn tớ về sự nghiệp hay lối sống.
   </small>
   <div class="savep" id="727.351" onclick="setSave('She\'s like this high-powered, driven, career-type. ','Cô ấy có vẻ cao giá hơn tớ về sự nghiệp hay lối sống. ','727.351')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue184" data-start="730.479">
   - What does she do?
   - She's a waitress.
   <br><small>-Thế cô ấy làm gì?
   - Bồi bàn.
   </small>
   <div class="savep" id="730.479" onclick="setSave('- What does she do? - She\'s a waitress. ','-Thế cô ấy làm gì? - Bồi bàn. ','730.479')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue185" data-start="734.567">
   All right. You guys,
   I kind of gotta clean up now.
   <br><small>Mấy cậu tớ sắp dọn dẹp rồi.
   </small>
   <div class="savep" id="734.567" onclick="setSave('All right. You guys, I kind of gotta clean up now. ','Mấy cậu tớ sắp dọn dẹp rồi. ','734.567')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue186" data-start="737.737">
   Chandler, you're an only child, right?
   You don't have any of this.
   <br><small>Chandler anh là con một chắc anh không có ba cái chuyện này chứ.
   </small>
   <div class="savep" id="737.737" onclick="setSave('Chandler, you\'re an only child, right? You don\'t have any of this. ','Chandler anh là con một chắc anh không có ba cái chuyện này chứ. ','737.737')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue187" data-start="740.823">
   Well, no, although I did
   have an imaginary friend...
   <br><small>Không mặc dầu anh có vài người bạn tưởng tượng..
   </small>
   <div class="savep" id="740.823" onclick="setSave('Well, no, although I did have an imaginary friend... ','Không mặc dầu anh có vài người bạn tưởng tượng.. ','740.823')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue188" data-start="744.368">
   ...who my parents actually preferred.
   <br><small>mà thật ra ông bà già anh chọn.
   </small>
   <div class="savep" id="744.368" onclick="setSave('...who my parents actually preferred. ','mà thật ra ông bà già anh chọn. ','744.368')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue189" data-start="748.539">
   RACHEL:
   Hit the lights, please.
   <br><small>Tắt đèn giúm cái.
   </small>
   <div class="savep" id="748.539" onclick="setSave('RACHEL: Hit the lights, please. ','Tắt đèn giúm cái. ','748.539')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue190" data-start="757.506">
   How long was I in there?
   <br><small>Anh ở trong đó bao lâu rồi?
   </small>
   <div class="savep" id="757.506" onclick="setSave('How long was I in there? ','Anh ở trong đó bao lâu rồi? ','757.506')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue191" data-start="760.718">
   I'm just cleaning up.
   <br><small>Em vừa mới dọn.
   </small>
   <div class="savep" id="760.718" onclick="setSave('I\'m just cleaning up. ','Em vừa mới dọn. ','760.718')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue192" data-start="762.636">
   Oh, do you, uh...?
   Do you need any help?
   <br><small>Cần giúp không?
   </small>
   <div class="savep" id="762.636" onclick="setSave('Oh, do you, uh...? Do you need any help? ','Cần giúp không? ','762.636')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue193" data-start="765.681">
   Um, okay, sure. Thanks.
   <br><small>Có cảm ơn
   </small>
   <div class="savep" id="765.681" onclick="setSave('Um, okay, sure. Thanks. ','Có cảm ơn ','765.681')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue194" data-start="774.231">
   Anyway...
   <br><small>Dù sao thì..
   </small>
   <div class="savep" id="774.231" onclick="setSave('Anyway... ','Dù sao thì.. ','774.231')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue195" data-start="776.358">
   So you nervous about Barry tomorrow?
   <br><small>Em có lo lắng về chuyện của Barry ngày mai không?
   </small>
   <div class="savep" id="776.358" onclick="setSave('So you nervous about Barry tomorrow? ','Em có lo lắng về chuyện của Barry ngày mai không? ','776.358')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue196" data-start="779.403">
   - Oh, a little.
   - Mm-hm.
   <br><small>Một chút.
   </small>
   <div class="savep" id="779.403" onclick="setSave('- Oh, a little. - Mm-hm. ','Một chút. ','779.403')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue197" data-start="783.282">
   - A lot.
   - Mm-hm.
   <br><small>Rất nhiều.
   </small>
   <div class="savep" id="783.282" onclick="setSave('- A lot. - Mm-hm. ','Rất nhiều. ','783.282')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue198" data-start="785.91">
   So got any advice?
   <br><small>Có lời khuyên gì cho em không?
   </small>
   <div class="savep" id="785.91" onclick="setSave('So got any advice? ','Có lời khuyên gì cho em không? ','785.91')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue199" data-start="788.662">
   You know, as someone
   who's recently been dumped.
   <br><small>Anh biết đấy từ người cũng vừa bồ đá.
   </small>
   <div class="savep" id="788.662" onclick="setSave('You know, as someone who\'s recently been dumped. ','Anh biết đấy từ người cũng vừa bồ đá. ','788.662')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue200" data-start="793">
   Well, you may want to steer clear
   of the word "dumped."
   <br><small>Em có thể muốn hiểu rõ từ "đá" hơn tí nữa
   </small><div class="savep" id="793" onclick="setSave('Well, you may want to steer clear of the word \'dumped.\' ','Em có thể muốn hiểu rõ từ " đá"="" hơn="" tí="" nữa="" ','793')"="">
   <p class="glyphicon glyphicon-floppy-disk"></p>
        </div>
</span>
    <span id="cue201" data-start="797.88">
   Chances are he's going to be this
   broken shell of a man. You know?
   <br><small>Có thể anh ta là người đang đau khổ.
   </small>
   <div class="savep" id="797.88" onclick="setSave('Chances are he\'s going to be this broken shell of a man. You know? ','Có thể anh ta là người đang đau khổ. ','797.88')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue202" data-start="802.301">
   So you should try not to look too terrific.
   I know it'll be hard.
   <br><small>Nên em có thể trông đừng quá đẹp. Anh biết chuyện đó hơi khó.
   </small>
   <div class="savep" id="802.301" onclick="setSave('So you should try not to look too terrific. I know it\'ll be hard. ','Nên em có thể trông đừng quá đẹp. Anh biết chuyện đó hơi khó. ','802.301')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue203" data-start="809.85">
   Or, you know, hey, I'll go down there,
   and I'll give Barry back his ring.
   <br><small>Hay là anh sẽ tới đó đưa  Barry chiếc nhẫn.
   </small>
   <div class="savep" id="809.85" onclick="setSave('Or, you know, hey, I\'ll go down there, and I\'ll give Barry back his ring. ','Hay là anh sẽ tới đó đưa  Barry chiếc nhẫn. ','809.85')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue204" data-start="814.438">
   And you can go with Carol
   and Susan to the OB-GYN.
   <br><small>Và em có thể đi với Susan và Carol đến s...s..iêu âm.
   </small>
   <div class="savep" id="814.438" onclick="setSave('And you can go with Carol and Susan to the OB-GYN. ','Và em có thể đi với Susan và Carol đến s...s..iêu âm. ','814.438')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue205" data-start="821.028">
   You've got Carol tomorrow.
   <br><small>Anh có chuyện với Carol ngày mai à.
   </small>
   <div class="savep" id="821.028" onclick="setSave('You\'ve got Carol tomorrow. ','Anh có chuyện với Carol ngày mai à. ','821.028')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue206" data-start="824.323">
   When did it get so complicated?
   <br><small>Từ bao giờ mà chuyện này phức tạp quá vậy?
   </small>
   <div class="savep" id="824.323" onclick="setSave('When did it get so complicated? ','Từ bao giờ mà chuyện này phức tạp quá vậy? ','824.323')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue207" data-start="826.492">
   Got me.
   <br><small>Hiểu anh đấy.
   </small>
   <div class="savep" id="826.492" onclick="setSave('Got me. ','Hiểu anh đấy. ','826.492')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue208" data-start="828.452">
   - Remember when we were in high school?
   - Yeah.
   <br><small>- Nhớ hồi ở trường chứ?
   - Ừ.
   </small>
   <div class="savep" id="828.452" onclick="setSave('- Remember when we were in high school? - Yeah. ','- Nhớ hồi ở trường chứ? - Ừ. ','828.452')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue209" data-start="831.288">
   I mean, didn't you think
   you' were gonna meet someone...
   <br><small>Anh không nghĩ là gặp ai đó và..
   </small>
   <div class="savep" id="831.288" onclick="setSave('I mean, didn\'t you think you\' were gonna meet someone... ','Anh không nghĩ là gặp ai đó và.. ','831.288')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue210" data-start="833.999">
   ...fall in love, and that'd be it?
   <br><small>yêu người ấy thế là xong à?
   </small>
   <div class="savep" id="833.999" onclick="setSave('...fall in love, and that\'d be it? ','yêu người ấy thế là xong à? ','833.999')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue211" data-start="841.59">
   - Ross?
   - Yes, yes.
   <br><small>- Ross à?
   - Ừ, ừ
   </small>
   <div class="savep" id="841.59" onclick="setSave('- Ross? - Yes, yes. ','- Ross à? - Ừ, ừ ','841.59')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue212" data-start="845.135">
   Oh. Man. I never thought I'd be here.
   <br><small>Trời, em chưa từng nghĩ em sẽ như vầy.
   </small>
   <div class="savep" id="845.135" onclick="setSave('Oh. Man. I never thought I\'d be here. ','Trời, em chưa từng nghĩ em sẽ như vầy. ','845.135')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue213" data-start="856.73">
   Me neither.
   <br><small>Anh cũng thế.
   </small>
   <div class="savep" id="856.73" onclick="setSave('Me neither. ','Anh cũng thế. ','856.73')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue214" data-start="875.624">
   Hi. Sorry I'm late. I got stuck at work.
   <br><small>Xin lỗi anh muộn, anh bị kẹt ở nơi làm việc.
   </small>
   <div class="savep" id="875.624" onclick="setSave('Hi. Sorry I\'m late. I got stuck at work. ','Xin lỗi anh muộn, anh bị kẹt ở nơi làm việc. ','875.624')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue215" data-start="878.085">
   There was this big
   dinosaur thing. Anyway...
   <br><small>Ở đó có con khủng long bự. Dù sao thì..
   </small>
   <div class="savep" id="878.085" onclick="setSave('There was this big dinosaur thing. Anyway... ','Ở đó có con khủng long bự. Dù sao thì.. ','878.085')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue216" data-start="882.631">
   Hi.
   <br><small>Hi.
   </small>
   <div class="savep" id="882.631" onclick="setSave('Hi. ','Hi. ','882.631')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue217" data-start="884.758">
   - Ross, you remember Susan.
   - How could I forget?
   <br><small>- Anh nhớ Susan chứ.
   - Làm sao mà quên được?
   </small>
   <div class="savep" id="884.758" onclick="setSave('- Ross, you remember Susan. - How could I forget? ','- Anh nhớ Susan chứ. - Làm sao mà quên được? ','884.758')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue218" data-start="888.095">
   Ross.
   <br><small>Ross
   </small>
   <div class="savep" id="888.095" onclick="setSave('Ross. ','Ross ','888.095')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue219" data-start="889.471">
   Hello, Susan. Good shake, good shake.
   <br><small>Chào, Susan.
   Tay chắc đấy.
   </small>
   <div class="savep" id="889.471" onclick="setSave('Hello, Susan. Good shake, good shake. ','Chào, Susan. Tay chắc đấy. ','889.471')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue220" data-start="894.018">
   So, uh, we're just waiting for?
   <br><small>Vậy chúng ta đợi ai đây?
   </small>
   <div class="savep" id="894.018" onclick="setSave('So, uh, we\'re just waiting for? ','Vậy chúng ta đợi ai đây? ','894.018')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue221" data-start="896.937">
   - Dr. Oberman.
   - Dr. Oberman. Okay, and is he...?
   <br><small>- Bác sĩ Oberman.
   - Và anh ta là?
   </small>
   <div class="savep" id="896.937" onclick="setSave('- Dr. Oberman. - Dr. Oberman. Okay, and is he...? ','- Bác sĩ Oberman. - Và anh ta là? ','896.937')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue222" data-start="899.44">
   - She.
   - Of course, "she."
   <br><small>- Cô ta.
   - Dĩ nhiên là "cô ta"
   </small><div class="savep" id="899.44" onclick="setSave('- She. - Of course, \'she.\' ','- Cô ta. - Dĩ nhiên là " cô="" ta"="" ','899.44')"="">
   <p class="glyphicon glyphicon-floppy-disk"></p>
        </div>
</span>
    <span id="cue223" data-start="902.776">
   She, uh, familiar
   with our special situation?
   <br><small>Cô ta có quen với tình huống này không?
   </small>
   <div class="savep" id="902.776" onclick="setSave('She, uh, familiar with our special situation? ','Cô ta có quen với tình huống này không? ','902.776')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue224" data-start="907.406">
   Yes, and she's very supportive.
   <br><small>Vâng cô ấy rất nhiệt tình.
   .
   </small>
   <div class="savep" id="907.406" onclick="setSave('Yes, and she\'s very supportive. ','Vâng cô ấy rất nhiệt tình. . ','907.406')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue225" data-start="909.45">
   Great. Okay, that's great. Heh.
   <br><small>Được tốt đấy
   </small>
   <div class="savep" id="909.45" onclick="setSave('Great. Okay, that\'s great. Heh. ','Được tốt đấy ','909.45')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue226" data-start="913.162">
   No, I'm...
   <br><small>Không, tôi không...
   </small>
   <div class="savep" id="913.162" onclick="setSave('No, I\'m... ','Không, tôi không... ','913.162')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue227" data-start="915.706">
   CAROL:
   Thanks.
   <br><small>Cảm ơn.
   </small>
   <div class="savep" id="915.706" onclick="setSave('CAROL: Thanks. ','Cảm ơn. ','915.706')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue228" data-start="931.68">
   Quack, quack...
   <br><small>Quack, quack...
   </small>
   <div class="savep" id="931.68" onclick="setSave('Quack, quack... ','Quack, quack... ','931.68')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue229" data-start="933.098">
   ...quack, quack, quack.
   <br><small>...quack, quack, quack.
   </small>
   <div class="savep" id="933.098" onclick="setSave('...quack, quack, quack. ','...quack, quack, quack. ','933.098')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue230" data-start="935.309">
   Ross?
   <br><small>Ross à!
   </small>
   <div class="savep" id="935.309" onclick="setSave('Ross? ','Ross à! ','935.309')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue231" data-start="937.311">
   That opens my cervix.
   <br><small>Cái đó dùng để mở tử cung của em.
   </small>
   <div class="savep" id="937.311" onclick="setSave('That opens my cervix. ','Cái đó dùng để mở tử cung của em. ','937.311')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue232" data-start="945.778">
   - Barry?
   BARRY: Come on in.
   <br><small>- Barry à?
   - Vào đi.
   </small>
   <div class="savep" id="945.778" onclick="setSave('- Barry? BARRY: Come on in. ','- Barry à? - Vào đi. ','945.778')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue233" data-start="948.489">
   Are you sure?
   <br><small>Chắc chứ?
   </small>
   <div class="savep" id="948.489" onclick="setSave('Are you sure? ','Chắc chứ? ','948.489')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue234" data-start="949.657">
   BARRY: It's fine, it's fine.
   Robbie's gonna be here for hours.
   <br><small>Ổn mà. Robbie sẽ ở đây cả tiếng ấy mà.
   </small>
   <div class="savep" id="949.657" onclick="setSave('BARRY: It\'s fine, it\'s fine. Robbie\'s gonna be here for hours. ','Ổn mà. Robbie sẽ ở đây cả tiếng ấy mà. ','949.657')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue235" data-start="952.326">
   Huh?
   <br><small>Huh?
   </small>
   <div class="savep" id="952.326" onclick="setSave('Huh? ','Huh? ','952.326')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue236" data-start="956.705">
   So how are you doing?
   <br><small>Vậy em sao rồi?
   </small>
   <div class="savep" id="956.705" onclick="setSave('So how are you doing? ','Vậy em sao rồi? ','956.705')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue237" data-start="959.583">
   I'm...
   <br><small>Em..
   </small>
   <div class="savep" id="959.583" onclick="setSave('I\'m... ','Em.. ','959.583')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue238" data-start="961.919">
   I'm okay.
   <br><small>Em ổn.
   </small>
   <div class="savep" id="961.919" onclick="setSave('I\'m okay. ','Em ổn. ','961.919')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue239" data-start="964.63">
   You look great.
   <br><small>- Anh trông tuyệt quá.
   - Ừ.
   </small>
   <div class="savep" id="964.63" onclick="setSave('You look great. ','- Anh trông tuyệt quá. - Ừ. ','964.63')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue240" data-start="966.215">
   Yeah, well...
   <br><small>Yeah, well...
   </small>
   <div class="savep" id="966.215" onclick="setSave('Yeah, well... ','Yeah, well... ','966.215')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue241" data-start="968.008">
   RECEPTIONIST :
   Dr. Farber, Jason Greenspan's gagging.
   <br><small>Bác sĩ. Farber, Jason Greenspan đang cần anh.
   </small>
   <div class="savep" id="968.008" onclick="setSave('RECEPTIONIST : Dr. Farber, Jason Greenspan\'s gagging. ','Bác sĩ. Farber, Jason Greenspan đang cần anh. ','968.008')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue242" data-start="970.844">
   Be right there. I'll be back in a second.
   <br><small>Chờ chút lát anh sẽ quay lại.
   </small>
   <div class="savep" id="970.844" onclick="setSave('Be right there. I\'ll be back in a second. ','Chờ chút lát anh sẽ quay lại. ','970.844')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue243" data-start="978.686">
   I dumped him.
   <br><small>Chị đá ổng.
   </small>
   <div class="savep" id="978.686" onclick="setSave('I dumped him. ','Chị đá ổng. ','978.686')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue244" data-start="981.522">
   Okay.
   <br><small>Okay.
   </small>
   <div class="savep" id="981.522" onclick="setSave('Okay. ','Okay. ','981.522')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue245" data-start="991.365">
   Oh!
   <br><small>Oh!
   </small>
   <div class="savep" id="991.365" onclick="setSave('Oh! ','Oh! ','991.365')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue246" data-start="997.496">
   - Ross.
   - So, um...? So how's this going to work...
   <br><small>À đứa bé sẽ lớn lên bên trong cơ thể mẹ....
   </small>
   <div class="savep" id="997.496" onclick="setSave('- Ross. - So, um...? So how\'s this going to work... ','À đứa bé sẽ lớn lên bên trong cơ thể mẹ.... ','997.496')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue247" data-start="1002.334">
   ...ahem, you know, with us?
   <br><small>Ý tôi là chuyện của chúng ta sẽ như thế nào?
   </small>
   <div class="savep" id="1002.334" onclick="setSave('...ahem, you know, with us? ','Ý tôi là chuyện của chúng ta sẽ như thế nào? ','1002.334')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue248" data-start="1004.128">
   You know, when, like, important
   decisions have to be made?
   <br><small>Khi mà quyết định quan trọng cần được đặt ra ấy?
   </small>
   <div class="savep" id="1004.128" onclick="setSave('You know, when, like, important decisions have to be made? ','Khi mà quyết định quan trọng cần được đặt ra ấy? ','1004.128')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue249" data-start="1007.423">
   Give me a "for instance."
   <br><small>Cho em vài ví dụ đi
   </small>
   <div class="savep" id="1007.423" onclick="setSave('Give me a \'for instance.\' ','Cho em vài ví dụ đi ','1007.423')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue250" data-start="1008.924">
   Well, I don't know. Okay, okay.
   <br><small>À anh không biết. Okay, okay.
   </small>
   <div class="savep" id="1008.924" onclick="setSave('Well, I don\'t know. Okay, okay. ','À anh không biết. Okay, okay. ','1008.924')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue251" data-start="1010.801">
   - How about with the baby's name?
   - Marlon...
   <br><small>- Như là chuyện tên đứa trẻ thì sao?
   - Marlon.
   </small>
   <div class="savep" id="1010.801" onclick="setSave('- How about with the baby\'s name? - Marlon... ','- Như là chuyện tên đứa trẻ thì sao? - Marlon. ','1010.801')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue252" data-start="1013.345">
   - Marlon.
   ...if it's a boy. Minnie, if it's a girl.
   <br><small>Nếu là con trai. Minnie,nếu là gái
   </small>
   <div class="savep" id="1013.345" onclick="setSave('- Marlon. ...if it\'s a boy. Minnie, if it\'s a girl. ','Nếu là con trai. Minnie,nếu là gái ','1013.345')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue253" data-start="1019.268">
   As in "Mouse"?
   <br><small>Như trong họ chuột à ?
   </small>
   <div class="savep" id="1019.268" onclick="setSave('As in \'Mouse\'? ','Như trong họ chuột à ? ','1019.268')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue254" data-start="1022.438">
   As in my grandmother.
   <br><small>Như trong tên ngoại em.
   </small>
   <div class="savep" id="1022.438" onclick="setSave('As in my grandmother. ','Như trong tên ngoại em. ','1022.438')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue255" data-start="1024.69">
   Still, you say "Minnie,"
   you hear "Mouse."
   <br><small>Như khi em nói "Minnie,"
   em nghe "Chuột"
   </small><div class="savep" id="1024.69" onclick="setSave('Still, you say \'Minnie,\' you hear \'Mouse.\' ','Như khi em nói " minnie,"="" em="" nghe="" "chuột"="" ','1024.69')"="">
   <p class="glyphicon glyphicon-floppy-disk"></p>
        </div>
</span>
    <span id="cue256" data-start="1029.82">
   How about, um...
   <br><small>Còn..?
   </small>
   <div class="savep" id="1029.82" onclick="setSave('How about, um... ','Còn..? ','1029.82')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue257" data-start="1032.072">
   How about "Julia"?
   <br><small>Còn Julia thì sao?
   </small>
   <div class="savep" id="1032.072" onclick="setSave('How about \'Julia\'? ','Còn Julia thì sao? ','1032.072')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue258" data-start="1034.366">
   Julia.
   <br><small>Julia.
   </small>
   <div class="savep" id="1034.366" onclick="setSave('Julia. ','Julia. ','1034.366')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue259" data-start="1035.617">
   We agreed on Minnie.
   <br><small>Chúng tôi đồng ý với Minnie.
   </small>
   <div class="savep" id="1035.617" onclick="setSave('We agreed on Minnie. ','Chúng tôi đồng ý với Minnie. ','1035.617')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue260" data-start="1036.994">
   It's funny, um, we agreed
   we'd spend our lives together.
   <br><small>Chúng tôi đã đồng ý khi mà còn chung sống với nhau cả đời.
   </small>
   <div class="savep" id="1036.994" onclick="setSave('It\'s funny, um, we agreed we\'d spend our lives together. ','Chúng tôi đã đồng ý khi mà còn chung sống với nhau cả đời. ','1036.994')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue261" data-start="1039.997">
   Things change. Roll with the punches.
   <br><small>Mọi thứ thay đổi rồi.
   Đừng có xía vào nữa.
   </small>
   <div class="savep" id="1039.997" onclick="setSave('Things change. Roll with the punches. ','Mọi thứ thay đổi rồi. Đừng có xía vào nữa. ','1039.997')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue262" data-start="1043.333">
   I believe Julia's on the table.
   <br><small>Thế em vẫn chọn Julia chứ?
   </small>
   <div class="savep" id="1043.333" onclick="setSave('I believe Julia\'s on the table. ','Thế em vẫn chọn Julia chứ? ','1043.333')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue263" data-start="1047.337">
   Oh. Sorry about that.
   <br><small>Xin lỗi về chuyện đó.
   </small>
   <div class="savep" id="1047.337" onclick="setSave('Oh. Sorry about that. ','Xin lỗi về chuyện đó. ','1047.337')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue264" data-start="1052.926">
   So, what have you been up to?
   <br><small>Em sống ra sao rồi?
   </small>
   <div class="savep" id="1052.926" onclick="setSave('So, what have you been up to? ','Em sống ra sao rồi? ','1052.926')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue265" data-start="1055.554">
   Oh. Not much.
   <br><small>Không nhiều.
   </small>
   <div class="savep" id="1055.554" onclick="setSave('Oh. Not much. ','Không nhiều. ','1055.554')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue266" data-start="1058.599">
   - I got a job.
   - Hey, that's great.
   <br><small>- Em có việc làm rồi.
   - Tuyệt đấy.
   </small>
   <div class="savep" id="1058.599" onclick="setSave('- I got a job. - Hey, that\'s great. ','- Em có việc làm rồi. - Tuyệt đấy. ','1058.599')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue267" data-start="1062.519">
   Why are you so tan?
   <br><small>Sao anh trông rám nắng thế?
   </small>
   <div class="savep" id="1062.519" onclick="setSave('Why are you so tan? ','Sao anh trông rám nắng thế? ','1062.519')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue268" data-start="1065.022">
   Oh, I, uh...
   <br><small></small>
   <div class="savep" id="1065.022" onclick="setSave('Oh, I, uh... ','','1065.022')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue269" data-start="1066.899">
   I went to Aruba.
   <br><small>Anh đã đến Aruba.
   </small>
   <div class="savep" id="1066.899" onclick="setSave('I went to Aruba. ','Anh đã đến Aruba. ','1066.899')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue270" data-start="1068.984">
   Oh, no.
   You went on our honeymoon alone?
   <br><small>Ôi không anh đi hưởng tuần trăng mật một mình à?
   </small>
   <div class="savep" id="1068.984" onclick="setSave('Oh, no. You went on our honeymoon alone? ','Ôi không anh đi hưởng tuần trăng mật một mình à? ','1068.984')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue271" data-start="1071.987">
   No.
   <br><small>Không.
   </small>
   <div class="savep" id="1071.987" onclick="setSave('No. ','Không. ','1071.987')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue272" data-start="1075.407">
   See, uh, I went with...
   <br><small>Anh đi với..
   </small>
   <div class="savep" id="1075.407" onclick="setSave('See, uh, I went with... ','Anh đi với.. ','1075.407')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue273" data-start="1079.953">
   - Now, this may hurt.
   - Me?
   <br><small>- Giờ thì sẽ hơi khó chịu chút.
   - Cháu à?
   </small>
   <div class="savep" id="1079.953" onclick="setSave('- Now, this may hurt. - Me? ','- Giờ thì sẽ hơi khó chịu chút. - Cháu à? ','1079.953')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue274" data-start="1081.622">
   No.
   <br><small>Không.
   </small>
   <div class="savep" id="1081.622" onclick="setSave('No. ','Không. ','1081.622')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue275" data-start="1085.876">
   I went with Mindy.
   <br><small>Anh đi với Mindy.
   </small>
   <div class="savep" id="1085.876" onclick="setSave('I went with Mindy. ','Anh đi với Mindy. ','1085.876')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue276" data-start="1087.836">
   Mindy?
   <br><small>Mindy à?
   </small>
   <div class="savep" id="1087.836" onclick="setSave('Mindy? ','Mindy à? ','1087.836')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue277" data-start="1090.047">
   My maid of honor, Mindy?
   <br><small>Phù dâu của em đấy hả?
   </small>
   <div class="savep" id="1090.047" onclick="setSave('My maid of honor, Mindy? ','Phù dâu của em đấy hả? ','1090.047')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue278" data-start="1091.924">
   Yeah, well, we're kind of a thing now.
   <br><small>Ừ bọn anh giờ đã yêu nhau rồi
   </small>
   <div class="savep" id="1091.924" onclick="setSave('Yeah, well, we\'re kind of a thing now. ','Ừ bọn anh giờ đã yêu nhau rồi ','1091.924')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue279" data-start="1096.47">
   Well, I'm...
   <br><small>Anh...
   </small>
   <div class="savep" id="1096.47" onclick="setSave('Well, I\'m... ','Anh... ','1096.47')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue280" data-start="1099.139">
   You got plugs.
   <br><small>Anh sửa vết nhăn này!
   </small>
   <div class="savep" id="1099.139" onclick="setSave('You got plugs. ','Anh sửa vết nhăn này! ','1099.139')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue281" data-start="1101.183">
   Careful, careful.
   They haven't quite taken yet.
   <br><small>Cẩn thận nó chưa lành hẳn đâu
   </small>
   <div class="savep" id="1101.183" onclick="setSave('Careful, careful. They haven\'t quite taken yet. ','Cẩn thận nó chưa lành hẳn đâu ','1101.183')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue282" data-start="1104.645">
   And you got lenses.
   <br><small>Và anh đeo kính sát tròng.
   </small>
   <div class="savep" id="1104.645" onclick="setSave('And you got lenses. ','Và anh đeo kính sát tròng. ','1104.645')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue283" data-start="1107.231">
   But you hate sticking
   your finger in your eye.
   <br><small>Nhưng anh ghét chọc tay vào mắt lắm mà.
   </small>
   <div class="savep" id="1107.231" onclick="setSave('But you hate sticking your finger in your eye. ','Nhưng anh ghét chọc tay vào mắt lắm mà. ','1107.231')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue284" data-start="1110.109">
   Not for her.
   <br><small>Không phải cho cô ấy.
   </small>
   <div class="savep" id="1110.109" onclick="setSave('Not for her. ','Không phải cho cô ấy. ','1110.109')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue285" data-start="1112.903">
   Oh.
   <br><small>Oh.
   </small>
   <div class="savep" id="1112.903" onclick="setSave('Oh. ','Oh. ','1112.903')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue286" data-start="1115.697">
   Listen, I really wanted to thank you.
   <br><small>Nghe này thật sự anh rất cảm kích.
   </small>
   <div class="savep" id="1115.697" onclick="setSave('Listen, I really wanted to thank you. ','Nghe này thật sự anh rất cảm kích. ','1115.697')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue287" data-start="1118.742">
   Okay.
   <br><small>Được rồi.
   </small>
   <div class="savep" id="1118.742" onclick="setSave('Okay. ','Được rồi. ','1118.742')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue288" data-start="1121.078">
   About a month ago, I wanted to hurt you...
   <br><small>Tháng trước anh rất muốn làm em tổn thương em ...
   </small>
   <div class="savep" id="1121.078" onclick="setSave('About a month ago, I wanted to hurt you... ','Tháng trước anh rất muốn làm em tổn thương em ... ','1121.078')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue289" data-start="1123.413">
   ...more than I've ever
   wanted to hurt anyone in my life.
   <br><small>... hơn muốn làm với ai khác cả.
   </small>
   <div class="savep" id="1123.413" onclick="setSave('...more than I\'ve ever wanted to hurt anyone in my life. ','... hơn muốn làm với ai khác cả. ','1123.413')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue290" data-start="1125.999">
   And I'm an orthodontist.
   <br><small>Và anh là bác sĩ chỉnh răng.
   </small>
   <div class="savep" id="1125.999" onclick="setSave('And I\'m an orthodontist. ','Và anh là bác sĩ chỉnh răng. ','1125.999')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue291" data-start="1128.21">
   Wow.
   <br><small>Wow.
   </small>
   <div class="savep" id="1128.21" onclick="setSave('Wow. ','Wow. ','1128.21')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue292" data-start="1129.92">
   You know, you were right.
   I mean, I thought we were happy.
   <br><small>Em biết không em đúng, anh tưởng chúng ta sẽ hạnh phúc.
   </small>
   <div class="savep" id="1129.92" onclick="setSave('You know, you were right. I mean, I thought we were happy. ','Em biết không em đúng, anh tưởng chúng ta sẽ hạnh phúc. ','1129.92')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue293" data-start="1133.715">
   We weren't happy.
   <br><small>Nhưng không chúng ta không hạnh phúc.
   </small>
   <div class="savep" id="1133.715" onclick="setSave('We weren\'t happy. ','Nhưng không chúng ta không hạnh phúc. ','1133.715')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue294" data-start="1136.426">
   But with Mindy...
   <br><small>Nhưng với Mindy..
   </small>
   <div class="savep" id="1136.426" onclick="setSave('But with Mindy... ','Nhưng với Mindy.. ','1136.426')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue295" data-start="1139.138">
   ...now I'm happy.
   <br><small>giờ anh hạnh phúc.
   </small>
   <div class="savep" id="1139.138" onclick="setSave('...now I\'m happy. ','giờ anh hạnh phúc. ','1139.138')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue296" data-start="1142.182">
   - Spit.
   - What?
   <br><small>- Nhổ ra đi.
   - Gì?
   </small>
   <div class="savep" id="1142.182" onclick="setSave('- Spit. - What? ','- Nhổ ra đi. - Gì? ','1142.182')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue297" data-start="1143.517">
   Me.
   <br><small>Cháu.
   </small>
   <div class="savep" id="1143.517" onclick="setSave('Me. ','Cháu. ','1143.517')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue298" data-start="1147.104">
   Anyway, um...
   <br><small>Dù sao thì..
   </small>
   <div class="savep" id="1147.104" onclick="setSave('Anyway, um... ','Dù sao thì.. ','1147.104')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue299" data-start="1150.482">
   I guess, uh... I guess this belongs to you.
   <br><small>Em đoán cái này của anh nhưng mà sau này có thể là của Mandy.
   </small>
   <div class="savep" id="1150.482" onclick="setSave('I guess, uh... I guess this belongs to you. ','Em đoán cái này của anh nhưng mà sau này có thể là của Mandy. ','1150.482')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue300" data-start="1155.028">
   And thank you for giving it to me.
   <br><small>và cảm ơn anh đã trao nó cho em.
   </small>
   <div class="savep" id="1155.028" onclick="setSave('And thank you for giving it to me. ','và cảm ơn anh đã trao nó cho em. ','1155.028')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue301" data-start="1158.115">
   Well, thank you for giving it back.
   <br><small>Cảm ơn vì em đã trả lại nó.
   </small>
   <div class="savep" id="1158.115" onclick="setSave('Well, thank you for giving it back. ','Cảm ơn vì em đã trả lại nó. ','1158.115')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue302" data-start="1164.037">
   Hello.
   <br><small>Chào!
   </small>
   <div class="savep" id="1164.037" onclick="setSave('Hello. ','Chào! ','1164.037')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue303" data-start="1169.042">
   Oh, please. What's wrong with Helen?
   <br><small>Làm ơn có vấn đề với Helen sao?
   </small>
   <div class="savep" id="1169.042" onclick="setSave('Oh, please. What\'s wrong with Helen? ','Làm ơn có vấn đề với Helen sao? ','1169.042')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue304" data-start="1171.295">
   Helen Geller?
   <br><small>Helen Geller à?
   </small>
   <div class="savep" id="1171.295" onclick="setSave('Helen Geller? ','Helen Geller à? ','1171.295')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue305" data-start="1173.797">
   - I don't think so.
   - Hello, it's not gonna be Helen Geller.
   <br><small>- Tôi không nghĩ vậy
   - Nó sẽ không mang tên Helen Geller.
   </small>
   <div class="savep" id="1173.797" onclick="setSave('- I don\'t think so. - Hello, it\'s not gonna be Helen Geller. ','- Tôi không nghĩ vậy - Nó sẽ không mang tên Helen Geller. ','1173.797')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue306" data-start="1177.426">
   Thank you.
   <br><small>Cảm ơn.
   </small>
   <div class="savep" id="1177.426" onclick="setSave('Thank you. ','Cảm ơn. ','1177.426')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue307" data-start="1179.011">
   No. I mean, it's not Geller.
   <br><small>Không ý em là không có Geller.
   </small>
   <div class="savep" id="1179.011" onclick="setSave('No. I mean, it\'s not Geller. ','Không ý em là không có Geller. ','1179.011')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue308" data-start="1181.597">
   What, it's gonna be Helen Willick?
   <br><small>Nó sẽ là Helen Willick à?
   </small>
   <div class="savep" id="1181.597" onclick="setSave('What, it\'s gonna be Helen Willick? ','Nó sẽ là Helen Willick à? ','1181.597')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue309" data-start="1183.765">
   No, actually, um, we talked about
   Helen Willick Bunch.
   <br><small>Không thật ra thì em nghĩ đến Helen Willick Bunch.
   </small>
   <div class="savep" id="1183.765" onclick="setSave('No, actually, um, we talked about Helen Willick Bunch. ','Không thật ra thì em nghĩ đến Helen Willick Bunch. ','1183.765')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue310" data-start="1190.147">
   Well, wait a minute.
   Why is she in the title?
   <br><small>Chờ đã.
   Sao lại có tên cô ta?
   </small>
   <div class="savep" id="1190.147" onclick="setSave('Well, wait a minute. Why is she in the title? ','Chờ đã. Sao lại có tên cô ta? ','1190.147')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue311" data-start="1192.983">
   Because it's my baby too.
   <br><small>Đó là con tôi mà.
   </small>
   <div class="savep" id="1192.983" onclick="setSave('Because it\'s my baby too. ','Đó là con tôi mà. ','1192.983')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue312" data-start="1194.568">
   That's funny. Really? I don't remember
   you making any sperm.
   <br><small>Thật không? Tôi không nghĩ cô làm ra tinh trùng.
   </small>
   <div class="savep" id="1194.568" onclick="setSave('That\'s funny. Really? I don\'t remember you making any sperm. ','Thật không? Tôi không nghĩ cô làm ra tinh trùng. ','1194.568')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue313" data-start="1200.574">
   And we all know what
   a challenge that is.
   <br><small>Và chúng tôi đều biết đó là thử thách.
   </small>
   <div class="savep" id="1200.574" onclick="setSave('And we all know what a challenge that is. ','Và chúng tôi đều biết đó là thử thách. ','1200.574')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue314" data-start="1203.368">
   - Uh-huh. See?
   - All right, you two, stop it.
   <br><small>Hai người dừng lại đi.
   </small>
   <div class="savep" id="1203.368" onclick="setSave('- Uh-huh. See? - All right, you two, stop it. ','Hai người dừng lại đi. ','1203.368')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue315" data-start="1205.412">
   No, no. She gets a credit.
   Hey, I'm in there too.
   <br><small>Cô ta có phần kết nhưng anh cũng có trong đó mà.
   </small>
   <div class="savep" id="1205.412" onclick="setSave('No, no. She gets a credit. Hey, I\'m in there too. ','Cô ta có phần kết nhưng anh cũng có trong đó mà. ','1205.412')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue316" data-start="1207.956">
   Honestly. You're not actually suggesting
   Helen Willick Bunch Geller.
   <br><small>Đừng nói là anh chịu tên Helen Willick Bunch Geller à?
   </small>
   <div class="savep" id="1207.956" onclick="setSave('Honestly. You\'re not actually suggesting Helen Willick Bunch Geller. ','Đừng nói là anh chịu tên Helen Willick Bunch Geller à? ','1207.956')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue317" data-start="1212.127">
   I think that borders on child abuse.
   <br><small>Tôi nghĩ nó sẽ làm đứa bé bị sỉ nhục.
   </small>
   <div class="savep" id="1212.127" onclick="setSave('I think that borders on child abuse. ','Tôi nghĩ nó sẽ làm đứa bé bị sỉ nhục. ','1212.127')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue318" data-start="1213.921">
   Of course not.
   I'm suggesting Geller Willick Bunch.
   <br><small>Dĩ nhiên không.
   Tôi đề nghị là Geller Willick Bunch.
   </small>
   <div class="savep" id="1213.921" onclick="setSave('Of course not. I\'m suggesting Geller Willick Bunch. ','Dĩ nhiên không. Tôi đề nghị là Geller Willick Bunch. ','1213.921')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue319" data-start="1217.925">
   Oh, no. No, no, no.
   You see what he's doing?
   <br><small>Em thấy anh ta định làm gì không?
   </small>
   <div class="savep" id="1217.925" onclick="setSave('Oh, no. No, no, no. You see what he\'s doing? ','Em thấy anh ta định làm gì không? ','1217.925')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue320" data-start="1220.594">
   He knows no one
   is gonna say all those names.
   <br><small>Anh ta biết là chả ai lại kêu cả đống tên như vậy.
   </small>
   <div class="savep" id="1220.594" onclick="setSave('He knows no one is gonna say all those names. ','Anh ta biết là chả ai lại kêu cả đống tên như vậy. ','1220.594')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue321" data-start="1222.638">
   He knows they'll wind up calling her Geller.
   Then he gets his way.
   <br><small>Họ sẽ gọi nó là Geller.
   Và anh ta sẽ có phần của anh ta.
   </small>
   <div class="savep" id="1222.638" onclick="setSave('He knows they\'ll wind up calling her Geller. Then he gets his way. ','Họ sẽ gọi nó là Geller. Và anh ta sẽ có phần của anh ta. ','1222.638')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue322" data-start="1225.474">
   My way? You think this is my way?
   <br><small>Phần của tôi à? Cô nghĩ tôi làm thế vì tôi à?
   </small>
   <div class="savep" id="1225.474" onclick="setSave('My way? You think this is my way? ','Phần của tôi à? Cô nghĩ tôi làm thế vì tôi à? ','1225.474')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue323" data-start="1227.893">
   Believe me, of all the ways I ever imagined
   this moment in my life being...
   <br><small>Tin tôi đi tôi chưa từng nghĩ là sẽ trải qua chuyện này..
   </small>
   <div class="savep" id="1227.893" onclick="setSave('Believe me, of all the ways I ever imagined this moment in my life being... ','Tin tôi đi tôi chưa từng nghĩ là sẽ trải qua chuyện này.. ','1227.893')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue324" data-start="1231.647">
   ...this is not my way. You know what?
   This is too hard.
   <br><small>Đây không phải là vì tôi nhé?
   Chuyện này quá khó.
   </small>
   <div class="savep" id="1231.647" onclick="setSave('...this is not my way. You know what? This is too hard. ','Đây không phải là vì tôi nhé? Chuyện này quá khó. ','1231.647')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue325" data-start="1235.067">
   Knock, knock.
   How are we today? Any nausea?
   <br><small>Cóc cóc. Cô sao rồi? Thấy buồn nôn không?
   </small>
   <div class="savep" id="1235.067" onclick="setSave('Knock, knock. How are we today? Any nausea? ','Cóc cóc. Cô sao rồi? Thấy buồn nôn không? ','1235.067')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue326" data-start="1238.278">
   - A little.
   - Just a little.
   <br><small>Có một ít.
   Chút ít.
   </small>
   <div class="savep" id="1238.278" onclick="setSave('- A little. - Just a little. ','Có một ít. Chút ít. ','1238.278')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue327" data-start="1241.949">
   Well, I was just wondering about the
   mother-to-be, but, uh, thanks for sharing.
   <br><small>Tôi đang hỏi người mẹ, nhưng cảm ơn vì đã chia sẻ.
   </small>
   <div class="savep" id="1241.949" onclick="setSave('Well, I was just wondering about the mother-to-be, but, uh, thanks for sharing. ','Tôi đang hỏi người mẹ, nhưng cảm ơn vì đã chia sẻ. ','1241.949')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue328" data-start="1246.787">
   Uh, lie back.
   <br><small>Nằm ra đi.
   </small>
   <div class="savep" id="1246.787" onclick="setSave('Uh, lie back. ','Nằm ra đi. ','1246.787')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue329" data-start="1248.664">
   You know what? I'm gonna go.
   <br><small>Cô biết gì không tôi sẽ đi.
   </small>
   <div class="savep" id="1248.664" onclick="setSave('You know what? I\'m gonna go. ','Cô biết gì không tôi sẽ đi. ','1248.664')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue330" data-start="1250.499">
   Um, I don't think I can be involved
   in this particular family thing.
   <br><small>Tôi không nghĩ mình sẽ liên quan được đến vấn đề gia đình này.
   </small>
   <div class="savep" id="1250.499" onclick="setSave('Um, I don\'t think I can be involved in this particular family thing. ','Tôi không nghĩ mình sẽ liên quan được đến vấn đề gia đình này. ','1250.499')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue331" data-start="1265.931">
   Oh, my God.
   <br><small>Ôi chúa ơi !
   </small>
   <div class="savep" id="1265.931" onclick="setSave('Oh, my God. ','Ôi chúa ơi ! ','1265.931')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue332" data-start="1267.557">
   Look at that.
   <br><small>Nhìn nó kìa.
   </small>
   <div class="savep" id="1267.557" onclick="setSave('Look at that. ','Nhìn nó kìa. ','1267.557')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue333" data-start="1268.85">
   I know.
   <br><small>Em biết.
   </small>
   <div class="savep" id="1268.85" onclick="setSave('I know. ','Em biết. ','1268.85')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue334" data-start="1281.071">
   Well, isn't that amazing?
   <br><small>Không kinh ngạc sao?
   </small>
   <div class="savep" id="1281.071" onclick="setSave('Well, isn\'t that amazing? ','Không kinh ngạc sao? ','1281.071')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue335" data-start="1286.785">
   What are we supposed
   to be seeing here?
   <br><small>Tụi tớ phải xem cái quái gì ở đây vậy?
   </small>
   <div class="savep" id="1286.785" onclick="setSave('What are we supposed to be seeing here? ','Tụi tớ phải xem cái quái gì ở đây vậy? ','1286.785')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue336" data-start="1290.33">
   I don't know, but I think it's about
   to attack the Enterprise.
   <br><small>Tớ không biết nhưng đó có thể là cuộc tấn công vào Enterprise.
   </small>
   <div class="savep" id="1290.33" onclick="setSave('I don\'t know, but I think it\'s about to attack the Enterprise. ','Tớ không biết nhưng đó có thể là cuộc tấn công vào Enterprise. ','1290.33')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue337" data-start="1298.255">
   You know, if you tilt your head
   to the left and relax your eyes...
   <br><small>Nếu cậu nghiêng đầu và thư giản mắt..
   </small>
   <div class="savep" id="1298.255" onclick="setSave('You know, if you tilt your head to the left and relax your eyes... ','Nếu cậu nghiêng đầu và thư giản mắt.. ','1298.255')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue338" data-start="1301.383">
   ...it kind of looks like an old potato.
   <br><small>thì nó giống như là quả khoai tây cũ vậy.
   </small>
   <div class="savep" id="1301.383" onclick="setSave('...it kind of looks like an old potato. ','thì nó giống như là quả khoai tây cũ vậy. ','1301.383')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue339" data-start="1304.761">
   Then don't do that, all right?
   <br><small>Vậy đừng làm thế được chứ?
   </small>
   <div class="savep" id="1304.761" onclick="setSave('Then don\'t do that, all right? ','Vậy đừng làm thế được chứ? ','1304.761')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue340" data-start="1309.224">
   Monica?
   <br><small>Monica ?
   </small>
   <div class="savep" id="1309.224" onclick="setSave('Monica? ','Monica ? ','1309.224')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue341" data-start="1310.684">
   What do you think?
   <br><small>Em nghĩ sao?
   </small>
   <div class="savep" id="1310.684" onclick="setSave('What do you think? ','Em nghĩ sao? ','1310.684')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue342" data-start="1312.436">
   Mm-hm.
   <br><small>Uh hum.
   </small>
   <div class="savep" id="1312.436" onclick="setSave('Mm-hm. ','Uh hum. ','1312.436')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue343" data-start="1315.063">
   Are you welling up?
   <br><small>Có mà em đang rất vui.
   </small>
   <div class="savep" id="1315.063" onclick="setSave('Are you welling up? ','Có mà em đang rất vui. ','1315.063')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue344" data-start="1316.732">
   - No.
   - You are.
   <br><small>Hổng dám đâu.
   </small>
   <div class="savep" id="1316.732" onclick="setSave('- No. - You are. ','Hổng dám đâu. ','1316.732')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue345" data-start="1318.191">
   - You are. You're welling up.
   - No, I'm not.
   <br><small></small>
   <div class="savep" id="1318.191" onclick="setSave('- You are. You\'re welling up. - No, I\'m not. ','','1318.191')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue346" data-start="1320.652">
   - You're gonna be an aunt.
   - Oh, shut up.
   <br><small>- Em sẽ được làm cô.
   - Thôi im đi.
   </small>
   <div class="savep" id="1320.652" onclick="setSave('- You\'re gonna be an aunt. - Oh, shut up. ','- Em sẽ được làm cô. - Thôi im đi. ','1320.652')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue347" data-start="1324.948">
   Hi, Mindy.
   <br><small>Hi, Mindy.
   </small>
   <div class="savep" id="1324.948" onclick="setSave('Hi, Mindy. ','Hi, Mindy. ','1324.948')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue348" data-start="1326.616">
   Hi, it's Rachel.
   <br><small>Chào là Rachel đây.
   </small>
   <div class="savep" id="1326.616" onclick="setSave('Hi, it\'s Rachel. ','Chào là Rachel đây. ','1326.616')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue349" data-start="1328.91">
   Yeah, I'm fine. I saw Barry today.
   <br><small>Ừ tớ ổn tớ vừa gặp Barry hôm nay.
   </small>
   <div class="savep" id="1328.91" onclick="setSave('Yeah, I\'m fine. I saw Barry today. ','Ừ tớ ổn tớ vừa gặp Barry hôm nay. ','1328.91')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue350" data-start="1332.914">
   Oh, yeah, yeah, he told me.
   <br><small>Ừ anh ta nói rồi,
   </small>
   <div class="savep" id="1332.914" onclick="setSave('Oh, yeah, yeah, he told me. ','Ừ anh ta nói rồi, ','1332.914')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue351" data-start="1334.791">
   No, it's okay. Really, it's okay.
   <br><small>ổn mà không sao đâu.
   </small>
   <div class="savep" id="1334.791" onclick="setSave('No, it\'s okay. Really, it\'s okay. ','ổn mà không sao đâu. ','1334.791')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue352" data-start="1337.711">
   I hope you two are very happy.
   I really do.
   <br><small>Mình hi vọng hai bạn được hanh phúc.
   Mình nói thật.
   </small>
   <div class="savep" id="1337.711" onclick="setSave('I hope you two are very happy. I really do. ','Mình hi vọng hai bạn được hanh phúc. Mình nói thật. ','1337.711')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue353" data-start="1341.59">
   And, Min, you know,
   if everything works out...
   <br><small>Và Mind biết gì không mọi chuyện sẽ tốt đẹp..
   </small>
   <div class="savep" id="1341.59" onclick="setSave('And, Min, you know, if everything works out... ','Và Mind biết gì không mọi chuyện sẽ tốt đẹp.. ','1341.59')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue354" data-start="1344.968">
   ...and you guys end up getting
   married and having kids and everything...
   <br><small>và hai cậu sẽ đám cưới và có con..
   </small>
   <div class="savep" id="1344.968" onclick="setSave('...and you guys end up getting married and having kids and everything... ','và hai cậu sẽ đám cưới và có con.. ','1344.968')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue355" data-start="1349.306">
   ...I just hope they have his
   old hairline and your old nose.
   <br><small>Tôi hi vọng nó có kiểu tóc xấu xí của hắn và cái mũi to của bà!
   </small>
   <div class="savep" id="1349.306" onclick="setSave('...I just hope they have his old hairline and your old nose. ','Tôi hi vọng nó có kiểu tóc xấu xí của hắn và cái mũi to của bà! ','1349.306')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    <span id="cue356" data-start="1357.731">
   Okay, I know it was a cheap shot,
   but I feel so much better now.
   <br><small>Được rồi đó là cách hèn hạ,
   nhưng tớ cảm thấy tốt hơn rồi
   </small>
   <div class="savep" id="1357.731" onclick="setSave('Okay, I know it was a cheap shot, but I feel so much better now. ','Được rồi đó là cách hèn hạ, nhưng tớ cảm thấy tốt hơn rồi ','1357.731')">
      <p class="glyphicon glyphicon-floppy-disk"></p>
   </div>
</span>
    </div>
    <div id="subtitles-overlay" class="hide-overlay">
        <div class="overlay-inner">
            <h4><i class="fa fa-headphones fa-lg text-danger"></i> Bạn đang ở chế độ luyện nghe</h4>
            <p> Hãy tập trung luyện nghe <br>bằng cách xem phim không phụ đề.<br><br> <em>Khi gặp khó khăn hãy bấm dừng lại <br>hoặc phím tắt <kbd>space</kbd> trên bàn phím <br>để hiển thị đoạn hội thoại không nghe được</em> </p>
            <p class="text-left"><i class="fa fa-book fa-5x pull-left"></i> Ghi chép lại những từ hoặc câu bạn không nghe được và tiếp tục luyện nghe tiếp</p>
            <div class="clearfix"></div>
            <p><a href="http://www.studyphim.vn/methods#luyen-nghe">[Hướng dẫn]</a></p>
        </div>
    </div>
    </div> </div> </div> </div>
@stop
