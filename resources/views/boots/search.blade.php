@include('boots.include.header')
@if($posts->isNotEmpty())
@include('boots.include.post')
@else 
<div class="container">
    <div class="row">
        <div class="col-lg-8">      
        <h2>Bulunamadı.</h2>
    </div>
    </div>
</div>
</div>
@endif
@include('boots.include.sidebar')
@include('boots.include.footer')