<div class="form-group">
    <label>Category</label>
    @inject('categories', 'App\Models\Category')
    <select class="form-control" name="category_id">
        @foreach($categories->pluck('name', 'id') as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $destination->title ?? '' }}">
</div>

<div class="form-group">
    <label>Thumbnail Image</label>
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img id="thumb" src="{{ $destination->thumbnail_image ?? 'http://via.placeholder.com/200?text=Thumbnail Image' }}">
        </a>
      </div>
      <div class="col-xs-6 col-md-9">
        <input type="file" class="form-control" name="thumbnail_image" onchange="$('#thumb').attr('src', window.URL.createObjectURL(this.files[0]))">
      </div>
    </div>
</div>

<div class="form-group">
    <label>Banners</label>
    <input type="file" class="form-control" name="banners[]" id="fileUpload" multiple="">
    <div id="image-holder" class="row well" style="margin:5px">
        @if(isset($destination))
            @foreach($destination->images as $image)
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{ $image->link }}">
                    </a>
                </div>
            @endforeach
        @endif
    </div>
</div>

<div class="form-group">
    <label>Location</label>
    <input type="text" class="form-control" name="location" placeholder="location" value="{{ $destination->location ?? '' }}">
</div>

<div class="form-group">
    <label>Abstract</label>
    <input type="text" class="form-control" name="abstract" placeholder="abstract" value="{{ $destination->abstract ?? '' }}">
</div>

<div class="form-group">
    <label>Description</label>
    <div class="box">
        <div class="box-body pad">
            <textarea id="description" name="description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px;" placeholder="Place some text here.">{!! $destination->description ?? '' !!}</textarea>
        </div>
    </div>
</div>

<template id="mytemplate">
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="">
        </a>
    </div>
</template>

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function() {

            $('#description').wysihtml5();

            $("#fileUpload").on('change', function() {
              //Get count of selected files
              var countFiles = $(this)[0].files.length;
              var imgPath = $(this)[0].value;
              var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
              var image_holder = $("#image-holder");
              var t = document.querySelector('#mytemplate');

              image_holder.empty();

              if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                  //loop for each file selected for uploaded.
                  for (var i = 0; i < countFiles; i++) {
                    var img = window.URL.createObjectURL(this.files[i]);
                    t.content.querySelector('img').src = img;
                    var clone = document.importNode(t.content, true);
                    image_holder.append(clone);
                  }
              } else {
                alert("Pls select only images");
              }
            });

          });
    </script>
@endsection

