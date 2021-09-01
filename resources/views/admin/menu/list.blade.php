<x-app-layout>
  <div class="container p-4">
    
    <div class="container">
      <div class="row">
          <div class="col-md-12 text-right">
            <a href="{{route('menu.create')}}" class="btn pull-right btn-success mb-2 fas fa-pencil">Menü Ekle</a>
          </div>
      </div>
  </div>        
  <div class="row table-responsive">
          <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Üst Menü</th>
                  <th scope="col">İsim</th>
                  <th scope="col">Link</th>
                  <th scope="col">Sıra</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($menus as $menu)
                 
                <tr>
                  <th scope="row">{{$menu->id}}</th>
                  <td>@if ($menu->parent_id=='0')
                    {{str_replace('0','Üst Menü Yok',$menu->parent_id)}}                        
                    @else
                    {{$menu->parent_id}}          
                  @endif
                </td>
                  <td>{{$menu->title}}</td>
                  <td>{{$menu->link}}</td>
                  <td>{{$menu->order}}</td>
                  <td>
                    <form action="{{ route('menu.destroy',$menu->id) }}" method="POST">  
                        <a class="btn btn-info m-2" href="{{ route('menu.show',$menu->id) }}"><i class="text-white fas fa-eye"></i></a>  
                        <a class="btn btn-warning m-2" href="{{ route('menu.edit',$menu->id) }}"><i class="text-white fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')    
                        <button onclick="return confirm('Silmek istediğine emin misin?')" type="submit" class="btn btn-danger m-2"><i class="fas fa-trash"></i></button>    
                    </form>
    
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$menus->links()}}
      </div>
  </div>
</x-app-layout>