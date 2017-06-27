
<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $user->name ?? old('name') }}">
</div>

<div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $user->username ?? old('username') }}">
</div>

<div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $user->email ?? old('email') }}">
</div>

<div class="form-group">
    <div class="radio">
        <label>
            <input type="radio" name="sex" id="pria" value="pria"
            {{ $user->sex == 'pria' ?
                    'checked'
                : old('sex') == 'pria' ?
                    'checked'
                :
                    null
            }}>
            Pria
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="sex" id="optionsRadios1" value="wanita" {{ $user->sex == 'wanita' ? 'checked': old('sex') == 'wanita' ? 'checked':'' }}>
            Wanita
        </label>
    </div>
</div>

<div class="form-group">
    <label>birthday</label>
    <input type="date" class="form-control" name="birthday" placeholder="birthday" value="{{ $user->birthday ?? old('birthday') }}">
</div>

<div class="form-group">
    <label>Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $user->phone ?? old('phone') }}">
</div>

<div class="form-group">
    <label>No Rek</label>
    <input type="text" class="form-control" name="no_rek" placeholder="No rek" value="{{ $user->no_rek ?? old('no_rek') }}">
</div>

<div class="form-group">
    <label>Name rek</label>
    <input type="text" class="form-control" name="Name rek" placeholder="name_rek" value="{{ $user->name_rek ?? old('name_rek') }}">
</div>

<div class="form-group">
    <label>NIK</label>
    <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $user->phone ?? old('phone') }}">
</div>

<div class="form-group">
    <label>City</label>
    <input type="text" class="form-control" name="city" placeholder="City" value="{{ $user->city ?? old('city') }}">
</div>

<div class="form-group">
    <label>Pos code</label>
    <input type="text" class="form-control" name="Pos code" placeholder="pos_code" value="{{ $user->pos_code ?? old('pos_code') }}">
</div>

<div class="form-group">
    <label>address</label>
    <textarea class="form-control">{{ $user->address ?? old('address') }}</textarea>
</div>
