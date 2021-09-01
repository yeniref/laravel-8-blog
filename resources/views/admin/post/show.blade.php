<x-app-layout>
    <div class="container p-4">
      

        
            <div class="col-md-12 text-right">
              <a href="{{route('yazilar.create')}}" class="btn pull-right btn-success mb-2">Yazı Ekle</a>
            </div>

            <div class="text-left">

                <h2>{{ $yazi->title }} Detay</h2>

            </div>

            <div class="text-right">

                <a class="btn btn-primary" href="{{ route('yazilar.index') }}"> Geri</a>

            </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Başlık:</strong>

                {{ $yazi->title }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Yazı:</strong>

                {!! $yazi->content !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Resim:</strong>

                <img src="{{ url('') }}/{{ $yazi->image }}" width="500px">

            </div>

        </div>

    </div>
    </div>
</x-app-layout>