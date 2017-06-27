<div class="form-group">
    <label>Image</label>
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img id="thumb" src="{{ $category->image ?? 'http://via.placeholder.com/200?text=Thumbnail Image' }}">
        </a>
      </div>
      <div class="col-xs-6 col-md-9">
        <input type="file" class="form-control" name="image" onchange="$('#thumb').attr('src', window.URL.createObjectURL(this.files[0]))">
      </div>
    </div>
</div>

<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $category->name ?? old('name') }}">
</div>

<div class="form-group">
    <label>Detail Name</label>
    <input type="text" class="form-control" name="detail_name" placeholder="detail name" value="{{ $category->detail_name ?? old('detail_name') }}">
</div>
