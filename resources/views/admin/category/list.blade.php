<x-app-layout>
  <div class="container p-4">
    
    <div class="container">
      <div class="row">
          <div class="col-md-12 text-right">
            <a href="{{route('kategoriler.create')}}" class="btn pull-right btn-success mb-2 fas fa-pencil">Kategori Ekle</a>
          </div>
      </div>
  </div>        
  <div class="row table-responsive">
          <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Resim</th>
                  <th scope="col">Başlık</th>
                  <th scope="col">İçerik</th>
                  <th scope="col">İşlemler</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($kategoriler as $kategori)
                 
                <tr>
                  <th scope="row">{{$kategori->id}}</th>
                  <td><img src="{{ url('') }}/{{$kategori->image}}" class="img-thumbnail" height="250" width="250"></td>
                  <td>{{$kategori->title}}</td>
                  <td>{{strip_tags($kategori->content)}}</td>
                  <td>
                    <form action="{{ route('kategoriler.destroy',$kategori->id) }}" method="POST">  
                        <a class="btn btn-info m-2" href="{{ route('kategoriler.show',$kategori->id) }}"><i class="text-white fas fa-eye"></i></a>  
                        <a class="btn btn-warning m-2" href="{{ route('kategoriler.edit',$kategori->id) }}"><i class="text-white fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')    
                        <button onclick="return confirm('Silmek istediğine emin misin?')" type="submit" class="btn btn-danger m-2"><i class="fas fa-trash"></i></button>    
                    </form>
    
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$kategoriler->links()}}
      </div>
  </div>
</x-app-layout>