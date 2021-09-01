<x-app-layout>
    <div class="container p-4">
            <form method="POST" action="{{route('yazilar.update',$yazi->id)}}" enctype="multipart/form-data">
              @method('PATCH')
                @csrf
                <div class="row">
                  <div class="col-md-8">
                <div class="form-group mb-2">
                  <input type="text" class="form-control" id="title" placeholder="Başlık" name="title" value="{{$yazi->title}}">
                </div>
                <div class="form-group mb-2">
                  <textarea class="ckeditor form-control" id="content" name="content" rows="3">{{$yazi->content}}</textarea>
                 </div>
                  </div>
                  <div class="col-md-4">
                 <div class="form-group mb-4">
                <select class="form-control" name="post_category">
                  @foreach($kategoriler as $kategori)
                    @if($extra!='' && $kategori->id==$extra->value)
                    <option selected value="{{$extra->value}}">{{$kategori->title}}</option>
                    @else
                    <option value="{{$kategori->id}}">{{$kategori->title}}</option>
                    @endif
                  @endforeach
                </select>
                </div>
                <div class="form-group form-check mb-4">
                  <input type="checkbox" class="form-check-input" name="sabit_yazi" id="sabit_yazi">
                  <label class="form-check-label" for="sabit_yazi">Sabit Yazı Yap</label>
                </div>
                <div class="form-group mb-4">
                  <label for="baslik">Resim : </label>
                  @if($yazi->image!=='')
                  <img src="{{ url('') }}/{{ $yazi->image }}" class="img-full m-1">
                  @endif
                  <input type="file" class="form-control" id="image" name="image">
                </div>

                  <option value="">Etiketler</option>
                  @foreach($extra_tag as $tag)
                  <div id="inputFormRow">
                <div class="input-group mb-3">
                  <input style="display:none;" type="text" class="form-control" id="tag_id" name="tag_id[]" value="{{$tag->id}}">
                  <input type="text" id="tags" name="tags[]" class="form-control m-input" placeholder="Etiket Gir" value="{{$tag->value}}">
                  <div class="input-group-append">                
                      <button id="removeRow" type="button" class="btn btn-danger">Sil</button>
                  </div>

    
                  <meta name="csrf-token" content="{{ csrf_token() }}">
                  <a href="javascript:void(0)" data-id="{{ $tag->id }}" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a>
              </div>
            </div>
                 @endforeach

                
                
     
              <div id="newRow"></div>
              <button id="addRow" type="button" class="btn btn-info float-right mt-2">Yeni Etiket Ekle</button>
                <button type="submit" class="btn btn-success mt-2 col-md-12">Kaydet</button>
                  </div>
              </div>

              </form>
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
<script type="text/javascript">
  // add row
  $("#addRow").click(function () {
      var html = '';
      html += '<div id="inputFormRow">';
      html += '<div class="input-group mb-3">';
      html += '<input type="text" name="tags[]" class="form-control m-input" placeholder="Etiket Gir">';
      html += '<input style="display:none;" type="text" class="form-control" id="tag_id[]" name="tag_id[]" value="">';
      html += '<div class="input-group-append">';
      html += '<button id="removeRow" type="button" class="btn btn-danger">Sil</button>';
      html += '</div>';
      html += '</div>';
      html += '</div>';
      $('#newRow').append(html);
  });

  // remove row
  $(document).on('click', '#removeRow', function () {
      $(this).closest('#inputFormRow').remove();
  });
</script>
