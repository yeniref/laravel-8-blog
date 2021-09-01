<x-app-layout>
  <div class="container p-4">
      <div class="row">
          <form method="POST" action="{{route('ekstra.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="baslik">Karşı İd : </label>
                <input type="text" class="form-control" id="other_id" placeholder="" name="other_id" value="{{old('other_id')}}">
              </div>
              <div class="form-group">
                <label for="baslik">Değer : </label>
                <input type="text" class="form-control" id="area" name="area" value="{{old('area')}}">
              </div>
              <div class="form-group">
                <label for="content">Veri :</label>
                <textarea class="form-control" id="value" name="value" rows="3">{{old('value')}}</textarea>
               </div>

              <button type="submit" class="btn btn-success m-2">Kaydet</button>
            </form>
      </div>
  </div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>

