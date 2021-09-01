<x-app-layout>
    <div class="container p-4">
          
            <form method="POST" action="{{route('yazilar.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-md-8">
                <div class="form-group mb-2">
                  <input type="text" class="form-control" id="title" placeholder="Başlık" name="title" value="{{old('title')}}">
                </div>
                <div class="form-group mb-2">
                  <textarea class="form-control" id="content" placeholder="Açıklama" name="content" rows="3">{{old('content')}}</textarea>
                 </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group mb-4">
                    <select class="form-control" name="post_category">
                      <option value="">Kategori Seç</option>
                      @foreach($kategoriler as $kategori)
                      <option value="{{$kategori->id}}">{{$kategori->title}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group form-check mb-4">
                    <input type="checkbox" class="form-check-input" name="sabit_yazi" id="sabit_yazi">
                    <label class="form-check-label" for="sabit_yazi">Sabit Yazı Yap</label>
                  </div>
                <div class="form-group mb-4">
                  <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group mb-4">
                  <option value="">Etiket Ekle (Virgülle ',' ayırın)</option>
                  <textarea class="form-control" id="tags" placeholder="" name="tags" cols="2"></textarea>
                 </div>
                <button type="submit" class="btn btn-success mt-2 col-md-12">Kaydet</button>
                </div>

                </div>
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
  