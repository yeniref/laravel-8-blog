<x-app-layout>
    <div class="container p-4">
        <div class="row">
            <form method="POST" action="{{route('kategoriler.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="baslik">Başlık : </label>
                  <input type="text" class="form-control" id="title" placeholder="" name="title" value="{{old('title')}}">
                </div>
                <div class="form-group">
                  <label for="baslik">Resim : </label>
                  <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                  <label for="content">Açıklama :</label>
                  <textarea class="form-control" id="content" name="content" rows="3">{{old('content')}}</textarea>
                 </div>

                <button type="submit" class="btn btn-success m-2">Kaydet</button>
              </form>
        </div>
    </div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
<script>
CKEDITOR.replace('content', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form',
    language: 'tr',
    entities : false,
    entities_latin : false,
  });
</script> 
  