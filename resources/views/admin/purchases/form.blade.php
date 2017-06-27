
<div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $purchase->user->name ?? '' }}">
</div>

<div class="form-group">
    <label>Destination</label>
    <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $purchase->destination->title ?? '' }}">
</div>

<div class="form-group">
    <label>Tickets</label>
    <input type="number" class="form-control" name="tickets" placeholder="Tickets" value="{{ $purchase->tickets ?? '' }}">
</div>

<div class="form-group">
    <label>Total</label>
    <input type="number" class="form-control" name="total" placeholder="Total" value="{{ $purchase->total ?? '' }}">
</div>

<div class="form-group">
    <label>Proof</label>
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="{{ $purchase->proof ?? '#'}}" class="thumbnail" target="_blank">
          <img id="thumb" src="{{ $purchase->proof ?? 'http://via.placeholder.com/200?text=Proof Dummy' }}">
        </a>
      </div>
      <div class="col-xs-6 col-md-9">
        <input type="file" class="form-control" name="proof" onchange="$('#thumb').attr('src', window.URL.createObjectURL(this.files[0]))">
      </div>
    </div>
</div>

