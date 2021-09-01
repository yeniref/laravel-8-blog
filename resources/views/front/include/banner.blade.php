<div class="banner small-agency-home-header-bg" id="top">
    <svg class="bg-shape shape-home-banner reveal-from-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        width="779px" height="759px">
        <defs>
            <linearGradient id="PSgrad_01" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                <stop offset="0%" stop-color="rgb(237,247,255)" stop-opacity="1" />
                <stop offset="100%" stop-color="rgb(237,247,255)" stop-opacity="0" />
            </linearGradient>
        </defs>
        <path fill-rule="evenodd" fill="url(#PSgrad_01)" d="M111.652,578.171 L218.141,672.919 C355.910,795.500 568.207,784.561 692.320,648.484 C816.434,512.409 805.362,302.726 667.592,180.144 L561.104,85.396 C423.334,-37.184 211.037,-26.245 86.924,109.832 C-37.189,245.908 -26.118,455.590 111.652,578.171 Z" />
    </svg>
    <div class="container">
        <div class="banner-content">
            @if($extra_sabit->value != '')
            <h1>{!! $extra_sabit->title !!}</h1>
            <p class="section-subheading">{{ strip_tags($extra_sabit->content) }}</p>
            <a href="{{ $extra_sabit->slug }}.html" class="custom-btn btn-big grad-style-ef page-scroll">Daha Fazla</a>   
            @else
            <h1>{!! $posts[0]->title !!}</h1>
            <p class="section-subheading">{{ strip_tags($posts[0]->content) }}</p>
            <a href="{{ $posts[0]->slug }}.html" class="custom-btn btn-big grad-style-ef page-scroll">Daha Fazla</a>              
            @endif
        </div>
        <!-- End of .banner-content -->
    </div>
    <!-- End of .container -->
</div>
<!-- End of .banner -->