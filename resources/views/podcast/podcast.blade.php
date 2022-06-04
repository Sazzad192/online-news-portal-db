 <h1>Dhaka post podcast</h1>
 
 <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay"
src="https://w.soundcloud.com/player/?url=https%3A//&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>




{{-- <div class="sc-embed" sc_url="http://soundcloud.com/forss/flickermood"></div> --}}



{{-- <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
        (function ($) {
            $.fn.scembed = function(){
            var datasource  = 'http://soundcloud.com/oembed';
            return this.each(function () {
                var container = $(this);
                var mediasource = $(container).attr("sc_url");
                var params = 'url=' + mediasource + '&format=json&iframe=true&maxwidth=480&maxheight=120&auto_play=false&show_comments=false';
                $.ajaxopts = $.extend($.ajaxopts, {
                                    url: datasource,
                                    data: params,
                                    dataType: 'json',
                                    success: function (data, status, raw) {
                                        $(container).html(data.html);
                                    },
                                    error: function (data, e1, e2) {
                                        $(container).html("Can't retrieve player for " + mediasource);
                                    },
                                });
                $.ajax($.ajaxopts);
                });
            };
        })(jQuery);
    
        $(function(){
            $("div.sc-embed").scembed();
        });
    });
    </script> --}}
{{-- <script>

    $client = new Services_Soundcloud('joecigebfsse');
    $track_url = 'https://soundcloud.com/dpostonline/'; // Track URL
    $track = json_decode($client->get('resolve', array('url' => $track_url)));
    $track->id; // 101276036 (the Track ID)
</script> --}}


{{-- <script>
    var tractUrl = 'THE_URL';
    var Client_ID = 'xJmsHs37dLKGnKYrWkjl2xQYMEtUp1nz';

    $.get('http://api.soundcloud.com/resolve.json?url='+ tractUrl +'&cliend_id=' +Client_ID, function(result){
        $(".videowrapper, .exhibitions-image, iframe").replaceWith('<iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/'+ result.id +'&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=true"></iframe>');
    })
</script> --}}