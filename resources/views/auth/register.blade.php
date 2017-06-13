@extends('front.layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <article class="col-xs-12 maincontent">
                    <header class="page-header">
                        <h1 class="page-title">Daftar Online</h1>
                    </header>

                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        @include('partials.errors')
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3 class="thin text-center">Daftar Online Pemesanan Tiket Wisata</h3>
                                <p class="text-center text-muted">Jika sudah memiliki akun, silahkan <a href="{{ route('login') }}">Login</a></p>
                                <hr>

                                <form id="form1" name="form1" method="post" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <div class="top-margin">
                                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                    </div>
                                    <div class="top-margin">
                                        <label>Username<span class="text-danger">*</span></label>
                                        <input type="text" name="username" class="form-control" value="{{ old('username') }}" required>
                                    </div>
                                    <div class="top-margin">
                                        <label>Email<span class="text-danger">*</span></label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="top-margin">
                                        <label>Jenis Kelamin<span class="text-danger" >*</span></label><br>
                                        <label>
                                            <input type="radio" name="sex" value="pria" required {{ old('sex') === 'pria' ? 'checked':'' }} />Laki-laki
                                        </label> &nbsp&nbsp&nbsp;
                                        <label>
                                          <input type="radio" name="sex" value="wanita" required {{ old('sex') === 'wanita' ? 'checked':'' }} />Perempuan
                                        </label>
                                    </div>
                                    <div class="top-margin">
                                        <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                        <input type="date" name="birthday" placeholder="yyyy/mm/dd" class="form-control" value="{{ old('birthday') }}" required>
                                    </div>
                                    <div class="top-margin">
                                        <label>No. Identitas<span class="text-danger">*</span></label>
                                        <input type="text" name="nik" class="form-control" value="{{ old('nik') }}" required>
                                    </div>
                                    <div class="top-margin">
                                        <label>Alamat Lengkap<span class="text-danger">*</span></label>
                                        <textarea rows="4" cols="50" name="address" form="form1" class="form-control" required>{{ old('address') }}</textarea>
                                    </div>
                                    <div class="top-margin">
                                        <label>Kota/Kabupaten<span class="text-danger">*</span></label>
                                        <input type="text" name="city" class="form-control" value="{{ old('city') }}" required>
                                    </div>
                                    <div class="top-margin">
                                        <label>Kode Pos<span class="text-danger">*</span></label>
                                        <input type="text" name="pos_code" class="form-control" value="{{ old('pos_code') }}" required>
                                    </div>
                                    <div class="top-margin">
                                        <label>No. Telepon<span class="text-danger">*</span></label>
                                        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
                                    </div>
                                    <div class="top-margin">
                                        <label>Nomor Rekening<span class="text-danger">*</span></label>
                                        <input type="text" name="no_rek" class="form-control" value="{{ old('no_rek') }}" required>
                                    </div>
                                    <div class="top-margin">
                                        <label>Atas Nama<span class="text-danger">*</span></label>
                                        <input type="text" name="name_rek" class="form-control" value="{{ old('name_rek') }}" required>
                                    </div>
                                    <div class="top-margin">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input type="password" name="password" class="form-control" >
                                    </div>
                                    <div class="top-margin">
                                        <label>Password Confirmation<span class="text-danger">*</span></label>
                                        <input type="password" name="password_confirmation" class="form-control" >
                                    </div>


                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <label class="checkbox">
                                                <input type="checkbox" name="terms">
                                                I've read the <a href="page_terms.php">Terms and Conditions</a>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 text-right">
                                            <button class="btn btn-action">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </article>
            </div>
        </div>
    </section>
@endsection
