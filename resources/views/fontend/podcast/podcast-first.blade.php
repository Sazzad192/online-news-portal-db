@extends('podcast/podcast_head')
@section('podcast-first')
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                
                <form action="" style="padding-bottom: 8px">
                    <div class="d-flex">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control search_input" placeholder="পডকাস্ট সার্চ করুন">
                        </div>
                        <button type="button" class="btn btn-group search_button"> খুঁজুন </button>
                    </div>
                </form>

                <section class="mobile_flex">
                    <div class="audio_section">
                        <a href="#" class="d-flex justify-content-between label_bg">
                            <h3 class="national">জাতীয়</h3>
                            <img src="image/d_post.png" alt="">
                        </a>

                        <section class="hide">
                            @foreach ($podcasts as $item)
                                <a href="{{"/detail".$item->podcast_id}}" class="d-flex align-items-center bg_color">
                                    <div class="flex-shrink-0">
                                        <img src="{{$item->news_img_path}}" alt="...">
                                    </div>
                                    <div class="flex-grow-1">
                                        {{$item->heading}}
                                        <span class="d-flex small_text">
                                            <p> {{$item->categorys->cat_name_bn}} | </p>
                                        <p> {{ date('d-M-Y | G:i:s', strtotime($item->updated_at)) }} </p>
                                        </span>
                                    </div>
                                    <div id="player-container">
                                        <audio id="track">
                                            <source src="https://cldup.com/qR72ozoaiQ.mp3" type="audio/mpeg" />
                                        </audio>
                                        <div id="play-pause" class="play">Play</div>
                                    </div>
                                </a>
                            @endforeach

                            <a href="#" class="text-center" style="color:#10586F; font-weight: bold; font-size: 20px; padding: 0px 10px 10px 10px;">
                                <p style="display:inline-block; border-bottom:2px solid #10586F;">আরও শুনুন...</p>
                            </a>
                        </section>
                    </div>


                    <div class="audio_section mt-3">
                        <a href="#" class="d-flex justify-content-between label_bg_two">
                            <label class="national">রাজনীতি</label>
                            <img src="image/d_post.png" alt="">
                        </a>
                        
                        <section class="hide">
                            <a href="{{"detail"}}" class="d-flex align-items-center bg_color">
                                <div class="flex-shrink-0">
                                    <img src="image/audio_pic.png" alt="...">
                                </div>
                                <div class="flex-grow-1">
                                    আন্তর্জাতিক রিফুয়েলিংয়ের জায়গা হবে কক্সবাজার 
                                    <span class="d-flex small_text">
                                        <p>জাতীয় | </p>
                                        <p>১৩ মে ২০২২ | </p>
                                        <p> ১২:৩০</p>
                                    </span>
                                </div>
                                <div id="player-container">
                                    <audio id="track">
                                        <source src="https://cldup.com/qR72ozoaiQ.mp3" type="audio/mpeg" />
                                    </audio>
                                    <div id="play-pause" class="play">Play</div>
                                </div>
                            </a>

                            <a href="" class="text-center" style="color:#10586F; font-weight: bold; font-size: 20px; padding: 0px 10px 10px 10px;">
                                <p style="display:inline-block; border-bottom:2px solid #10586F;">আরও শুনুন...</p>
                            </a>
                        </section>
                    </div>
                </section>
            </div>

            <div class="col-xl-4">
                <p class="text-right right_head">সর্বশেষ পডকাস্ট</p>

                <a href="{{"/detail".$item->podcast_id}}" class="d-flex align-items-center bg_color_small">
                    <div class="flex-shrink-0">
                        <img src="image/audio_pic.png" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3 right_text">
                        আন্তর্জাতিক রিফুয়েলিংয়ের জায়গা হবে কক্সবাজার
                        <label class="d-flex right_small_text">
                            <p>জাতীয় | </p> 
                            <p>১৩ মে ২০২২ | </p>
                            <p> ১২:৩০</p>
                        </label>
                    </div>
                    <div id="player-container">
                        <audio id="track">
                            <source src="https://cldup.com/qR72ozoaiQ.mp3" type="audio/mpeg" />
                        </audio>
                        <div id="play-pause" class="play small">Play</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
