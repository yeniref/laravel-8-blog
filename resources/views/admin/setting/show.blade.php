<x-app-layout>
    <div class="container p-4">
      

        
            <div class="col-md-12 text-right">
              <a href="{{route('ayarlar.create')}}" class="btn pull-right btn-success mb-2 fas fa-pencil-alt">Ayar Ekle</a>
            </div>

            <div class="text-left">

                <h2>{{ $ayar->id }} Detay</h2>

            </div>

            <div class="text-right">

                <a class="btn btn-primary" href="{{ route('ayarlar.index') }}"> Geri</a>

            </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Değer:</strong>

                {!! $ayar->area !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Veri:</strong>

                {!! $ayar->value !!}

            </div>

        </div>

    </div>
    </div>
</x-app-layout>