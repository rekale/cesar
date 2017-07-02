
<div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $transaction->user->name ?? old('name') }}" disabled>
</div>

<div class="form-group">
    <label>Destinations</label>
    @include('admin.transactions.destination_table', ['destinations' => $transaction->destinations])
</div>

<div class="form-group">
    <label>Total Transaction</label>
    <input type="number" class="form-control" name="total" placeholder="Total" value="{{ $transaction->total ?? '' }}">
</div>

<div class="form-group">
    <label>Proof</label>
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="{{ $transaction->proof ?? '#'}}" class="thumbnail" target="_blank">
          <img id="thumb" src="{{ $transaction->proof ?? 'http://via.placeholder.com/200?text=Proof Dummy' }}">
        </a>
      </div>
      <div class="col-xs-6 col-md-9">
        <input type="file" class="form-control" name="proof" onchange="$('#thumb').attr('src', window.URL.createObjectURL(this.files[0]))">
      </div>
    </div>
</div>

<div class="form-group">
    <div class="checkbox">
    <label>
        <input type="checkbox" value="1" name="confirmed" {{ $transaction->confirmed ? 'checked':'' }}>
        Confirmed
    </label>
    </div>
</div>
