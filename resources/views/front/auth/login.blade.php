@extends('front.layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">

                <!-- Article main content -->
                <article class="col-xs-12 maincontent">
                    <header class="page-header">
                        <h1 class="page-title">Sign in</h1>
                    </header>

                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3 class="thin text-center">Sign in to your account</h3>
                                <p class="text-center text-muted">Jika belum memiliki akun, silahkan daftar <a href="{{ route('front.register') }}">di sini.</a></p>
                                <hr>

                                <form id="form2" name="form2" method="post" action="{{ route('front.login.post') }}">
                                    {{ csrf_field() }}
                                    <div class="top-margin">
                                        <label>Username<span class="text-danger">*</span></label>
                                        <input type="text" name="username" class="form-control" required>
                                    </div>
                                    <div class="top-margin">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <b><a href="{{ route('front.password.request') }}">Forgot password?</a></b>
                                        </div>
                                        <div class="col-lg-4 text-right">
                                            <button class="btn btn-action" name="submit" type="submit">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </article>
                <!-- /Article -->

            </div>
        </div>
    </section>
@endsection
