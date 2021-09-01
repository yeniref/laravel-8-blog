                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        @foreach ($posts as $item)                        
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="{{url('')}}/{{$item->slug}}.html"><img class="card-img-top" src="{{url('')}}/{{$item->image}}" alt="{{$item->title}}" /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$item->created_at}}</div>
                                    <h2 class="card-title h4">{{$item->title}}</h2>
                                    <p class="card-text">{{strip_tags(substr($item->content,'0','150'))}}</p>
                                    <a class="btn btn-primary" href="{{url('')}}/{{$item->slug}}.html">Daha Fazla →</a>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <!-- Pagination-->
                    <div class="d-flex justify-content-center">
                       
                    </div>
                </div>