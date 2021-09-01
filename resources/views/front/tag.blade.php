@include('front.include.header')
    <div class="inner-page-banner" style="background-image: url('{{ url('') }}/{!! $cat_info->image !!}');">
        <div class="container text-center">
            <h1>{!! $cat_info->title !!}</h1>
            <p>{!!$cat_info->content!!}</p>
        </div>
    </div>
        <div class="container">
            <div class="blog-by-category section-padding">
                <div class="blog-grid text-center equalHeightWrapper">
                    <div class="row">
                        @foreach ($posts as $item)
                        <div class="item col-md-6 col-lg-4">
                            <a href="{{ url('') }}/{{$item->slug}}.html" class="news-content-block content-block">
                                <div class="img-container">
                                    <img src="{{ url('') }}/{!! $item->image !!}" alt="{!! $item->title !!}" class="img-fluid">
                                </div>
                                <!-- End of .img-container -->
                                <h5 class="equalHeight">
                                    <span class="content-block__sub-title">{!! $item->created_at !!}</span>
                                    {!! $item->title !!}
                                </h5>
                            </a>
                        </div>
                        <!-- End of .item -->
                        @endforeach
                        
                    </div>
                    <!-- End of .row -->
                    {{$posts->links()}}
                </div>
                <!-- End of .blog-grid -->
            </div>
            <!-- End of .blog-by-category -->
        </div>
        @include('front.include.newsletter')
@include('front.include.footer')