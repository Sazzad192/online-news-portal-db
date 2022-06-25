@extends('fontend/podcast/podcast_head')
@section('cat_detail')
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="d-flex justify-content-between" style="padding-bottom: 10px;">
                    <input placeholder="তারিখ থেকে" class="tag_button mr-2" type="text" onfocus="(this.type='date')" onblur="(this.type='text')">
                    <input placeholder="তারিখ পর্যন্ত" class="tag_button mr-2" type="text" onfocus="(this.type='date')" onblur="(this.type='text')">

                    <select  name='options' onchange="location = this.value;" class="tag_button">
                        <option value="0">ক্যাটাগরি</option>
                        @foreach ($categorys as $item)
                           <option value="{{url('/news_by_cat'.$item->cat_id.$item->cat_slug)}}">{{$item->cat_name_bn}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-start" style="padding-bottom: 10px;">
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control search_input" placeholder="পডকাস্ট সার্চ করুন">
                    </div>
                    
                    <button type="button" class="btn btn-group search_button"> খুঁজুন </button>
                </div>
                
                <section class="audio_section">

                    <div class="d-flex justify-content-between archive_head">
                        @foreach ($podcasts as $item)
                            <label class="national">{{$item->categorys->cat_name_bn}}</label>
                        @endforeach
                        <img src="image/d_post.png" alt="">
                    </div>

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

                </section>
            </div>

            <div class="col-xl-4 mobile_none">
                
                <p class="text-right right_head">ক্যাটাগরি</p>

                @foreach ($categorys as $item)
                    <a href="{{url('/news_by_cat'.$item->cat_id.$item->cat_slug)}}" class="d-flex justify-content-between label_bg">
                        <label class="national">{{$item->cat_name_bn}}</label>
                        <img src="image/d_post.png" alt="">
                    </a>
                @endforeach

                {{-- <a href="#" class="d-flex justify-content-between label_bg_two">
                    <label class="national">রাজনীতি</label>
                    <img src="image/d_post.png" alt="">
                </a>

                <a href="#" class="d-flex justify-content-between label_bg_three">
                    <label class="national">অর্থনীতি</label>
                    <img src="image/d_post.png" alt="">
                </a>

                <a href="#" class="d-flex justify-content-between label_bg_fore">
                    <label class="national">সারাদেশ</label>
                    <img src="image/d_post.png" alt="">
                </a>
                
                <a href="#" class="d-flex justify-content-between label_bg_five">
                    <label class="national">আন্তর্জাতিক</label>
                    <img src="image/d_post.png" alt="">
                </a>

                <a href="#" class="d-flex justify-content-between label_bg_six">
                    <label class="national">খেলা</label>
                    <img src="image/d_post.png" alt="">
                </a>

                <a href="#" class="d-flex justify-content-between label_bg_seven">
                    <label class="national">বিনোদন</label>
                    <img src="image/d_post.png" alt="">
                </a> --}}
            </div>
        </div>
    </div>
    <style>
        @media (min-width:358px) and (max-width:760px){
            .national{
                padding: 0px 0px 0px 15px !important;
            }

            .bg_color .flex-grow-1 {
                padding: 11px 6px 11px 6px !important;
                font-weight: bold;
                font-size: 14px;
            }

            #player-container #play-pause{
                height: 39px;
                width: 39px;
                padding: 17px 17px !important;
                margin-right: 0px !important;
            }

            .search_input::placeholder{
                font-size: 16px;
            }
            
            .has-search .form-control-feedback{
                font-size: 16px;
            }
            #player-container {
                margin-right: 15px;
            }
        }

        @media (min-width:601px) and (max-width:1201px){
            .audio_section {
                border-radius: 15px 15px 0px 0px !important;
                background: #F5F5F5 !important;
            }
        }
    </style>
@endsection