<x-app-layout>
  <div class="container p-4">
    
    <div class="container">
      <div class="row">
          <div class="col-md-12 text-right">
            <a href="{{route('ayarlar.create')}}" class="btn pull-right btn-success mb-2 fas fa-pencil">Ayar Ekle</a>
          </div>
      </div>
  </div>        
  <div class="row table-responsive">
          <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Değer</th>
                  <th scope="col">Veri</th>
                  <th scope="col">İşlemler</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($settings as $ayar)
                 
                <tr>
                  <th scope="row">{{$ayar->id}}</th>
                  <td>{{$ayar->area}}</td>
                  <td>{{strip_tags($ayar->value)}}</td>
                  <td>
                    <form action="{{ route('ayarlar.destroy',$ayar->id) }}" method="POST">  
                        <a class="btn btn-info m-2" href="{{ route('ayarlar.show',$ayar->id) }}"><i class="text-white fas fa-eye"></i></a>  
                        <a class="btn btn-warning m-2" href="{{ route('ayarlar.edit',$ayar->id) }}"><i class="text-white fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')    
                        <button onclick="return confirm('Silmek istediğine emin misin?')" type="submit" class="btn btn-danger m-2"><i class="fas fa-trash"></i></button>    
                    </form>
    
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$settings->links()}}
      </div>
  </div>
</x-app-layout>