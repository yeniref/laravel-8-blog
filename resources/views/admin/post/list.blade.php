<x-app-layout>
    <div class="container p-4">
      
      <div class="container">
        <div class="row">
            <div class="col-md-12 text-right">
              <a href="{{route('yazilar.create')}}" class="btn pull-right btn-success mb-2">Yazı Ekle</a>
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
                    @foreach ($yazilar as $yazi)
                   
                  <tr>
                    <th scope="row">{{$yazi->id}}</th>
                    <td><img src="{{ url('') }}/{{$yazi->image}}" class="img-thumbnail" height="250" width="250"></td>
                    <td>{{$yazi->title}}</td>
                    <td>{{strip_tags($yazi->content)}}</td>
                    <td>
                      <form action="{{ route('yazilar.destroy',$yazi->id) }}" method="POST">  
                          <a class="btn btn-info m-2" href="{{ route('yazilar.show',$yazi->id) }}"><i class="text-white fas fa-eye"></i></a>  
                          <a class="btn btn-warning m-2" href="{{ route('yazilar.edit',$yazi->id) }}"><i class="text-white fas fa-edit"></i></a>
                          @csrf
                          @method('DELETE')    
                          <button onclick="return confirm('Silmek istediğine emin misin?')" type="submit" class="btn btn-danger m-2"><i class="fas fa-trash"></i></button>    
                      </form>
      
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{$yazilar->links()}}
        </div>
    </div>
</x-app-layout>