<x-app-layout>
    <div class="container p-4">
      

        
            <div class="col-md-12 text-right">
              <a href="{{route('menu.create')}}" class="btn pull-right btn-success mb-2 fas fa-pencil-alt">Menü Ekle</a>
            </div>

            <div class="text-left">

                <h2>{{ $menu->id }} Detay</h2>

            </div>

            <div class="text-right">

                <a class="btn btn-primary" href="{{ route('menu.index') }}"> Geri</a>

            </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Üst Menü:</strong>

                {{ $menu->title }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>İsim:</strong>

                {!! $menu->title !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Link:</strong>

                {!! $menu->link !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Sıra:</strong>

                {!! $menu->sort_order !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Sıra:</strong>

                {!! $menu->order !!}

            </div>

        </div>
@if (count($menu_sub)>0)
    
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alt Menü:</strong>

                @foreach ($menu_sub as $menu)
                {{$menu->title}}
                @endforeach
            </div>
        </div>
        @else
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alt Menü:</strong>
Alt Menü Yok
            </div>
        </div>
        @endif        
    </div>
    </div>
</x-app-layout>