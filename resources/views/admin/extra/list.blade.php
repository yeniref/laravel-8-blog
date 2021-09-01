<x-app-layout>
  <div class="container p-4">
    
    <div class="container">
      <div class="row">
          <div class="col-md-12 text-right">
            <a href="{{route('ekstra.create')}}" class="btn pull-right btn-success mb-2 fas fa-pencil">Ekstra Ekle</a>
          </div>
      </div>
  </div>        
  <div class="row table-responsive">
          <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Karşı ID</th>
                  <th scope="col">Alan</th>
                  <th scope="col">Değer</th>
                  <th scope="col">İşlemler</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($extras as $extra)
                 
                <tr>
                  <th scope="row">{{$extra->id}}</th>
                  <td>{{$extra->other_id}}</td>
                  <td>{{$extra->area}}</td>
                  <td>{{strip_tags($extra->value)}}</td>
                  <td>
                    <form action="{{ route('ekstra.destroy',$extra->id) }}" method="POST">  
                        <a class="btn btn-info m-2" href="{{ route('ekstra.show',$extra->id) }}"><i class="text-white fas fa-eye"></i></a>  
                        <a class="btn btn-warning m-2" href="{{ route('ekstra.edit',$extra->id) }}"><i class="text-white fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')    
                        <button onclick="return confirm('Silmek istediğine emin misin?')" type="submit" class="btn btn-danger m-2"><i class="fas fa-trash"></i></button>    
                    </form>
    
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$extras->links()}}
      </div>
  </div>
</x-app-layout>