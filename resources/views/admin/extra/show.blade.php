<x-app-layout>
    <div class="container p-4">
      

        
            <div class="col-md-12 text-right">
              <a href="{{route('ekstra.create')}}" class="btn pull-right btn-success mb-2 fas fa-pencil-alt">Ekstra Ekle</a>
            </div>

            <div class="text-left">

                <h2>{{ $extra->id }} Detay</h2>

            </div>

            <div class="text-right">

                <a class="btn btn-primary" href="{{ route('ekstra.index') }}"> Geri</a>

            </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Karşı İd:</strong>

                {{ $extra->other_id }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Değer:</strong>

                {!! $extra->area !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Veri:</strong>

                {!! $extra->value !!}

            </div>

        </div>

    </div>
    </div>
</x-app-layout>