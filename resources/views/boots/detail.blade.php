@include('boots.include.header')
<article>
    <div class="card-body">
        <div class="small text-muted">{{$detail->created_at}}</div>
        <h2 class="card-title">{!! $detail->title !!}</h2>
        <p class="card-text">{!! $detail->content !!}</p>
    </div>
</article>
</diV>
@include('boots.include.sidebar')
@include('boots.include.footer')