<x-app-layout>
  <div class="container p-4">
      <div class="row">
          <form method="POST" action="{{route('menu.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="parent_id">Üst Menü : </label>
                <select class="form-select" aria-label="Üst Menü" name="parent_id">
                  <option value="0" selected>Üst Menü Yok</option>
                  @foreach ($menus as $menu)
                  <option value="{{$menu->id}}">{{$menu->title}}</option>                      
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="baslik">Menü Adı : </label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
              </div>
              <div class="form-group">
                <label for="content">Link :</label>
                <input class="form-control" id="link" name="link" value="{{old('link')}}">
               </div>
               <div class="form-group">
                <label for="content">Sıra :</label>
                <input class="form-control" id="order" name="order" value="0">
               </div>
              <button type="submit" class="btn btn-success m-2">Kaydet</button>
            </form>
      </div>
  </div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>

