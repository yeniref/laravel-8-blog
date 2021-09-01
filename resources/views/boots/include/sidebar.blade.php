
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Arama</div>
                        <div class="card-body">
                            <form action="{{ route('kelime') }}" method="GET">

                            <div class="input-group">
                                <input name="kelime" class="form-control" type="text" placeholder="Arama terimini gir..." aria-label="Arama terimini gir..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Ara!</button>                              
                            </div>
                        </form>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Kategoriler</div>
                        <div class="card-body">
                            <div class="row">
                                    <ul class="list-unstyled mb-0">
                                        @foreach ($kategoriler as $category)
                                        <li>
                                            <a href="{{url('')}}/kategori/{{$category->slug}}">{{$category->title}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">Etiketler</div>
                        <div class="card-body">
                                        @foreach ($tag_cloud as $tag)
                                     
                                            <a href="{{url('')}}/etiket/{{Str::slug($tag->value)}}">{{$tag->value}}</a>

                                            @endforeach

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>



        