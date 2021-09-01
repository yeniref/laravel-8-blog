<x-app-layout>
  <div class="container p-4">
      <div class="row">
          <form method="POST" action="{{route('menu.update',$menu->id)}}" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="form-group">
                <label for="parent_id">Üst Menü : </label>
                <select class="form-select" aria-label="Üst Menü" name="parent_id">
                  <option value="0">Üst Menü Yok</option>
                  @foreach ($menus as $men)
                  @if ($menu->parent_id == $men->id)
                  <option value="{{$menu->parent_id}}" selected>{{$men->title}}</option>
                  @else
                  <option value="{{$men->id}}">{{$men->title}}</option>                      
     
                  @endif

                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="area">İsim : </label>
                <input type="text" class="form-control" id="title" name="title" value="{{$menu->title}}">
              </div>
              <div class="form-group">
                <label for="content">Link :</label>
                <input type="text" class="form-control" id="link" name="link" value="{{$menu->link}}">
               </div>
               <div class="form-group">
                <label for="content">Sıra :</label>
                <input type="text" class="form-control" id="order" name="order" value="{{$menu->order}}">
               </div>
              <button type="submit" class="btn btn-success m-2">Kaydet</button>
            </form>
      </div>
  </div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>