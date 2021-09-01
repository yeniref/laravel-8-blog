
                    @if($extra_sabit->value != '')
               <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="{{url('')}}/{{$extra_sabit->slug}}"><img class="card-img-top" src="{{$extra_sabit->image}}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$extra_sabit->created_at}}</div>
                            <h2 class="card-title">{!! $extra_sabit->title !!}</h2>
                            <p class="card-text">{!! substr($extra_sabit->content,'0','250') !!}</p>
                            <a class="btn btn-primary" href="{{url('')}}/{{$extra_sabit->slug}}.html">Devamı →</a>
                        </div>
                    </div>
                    @endif