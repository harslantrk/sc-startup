@extends('master')

@section('content')
<div class=row>
    <div class="login-box">
        <div class="login-box-body">
            <div class="login-logo">
                <b>Sosyobet</b>.com
            </div>
            <p class="login-box-msg">Oturumunuzu Açmak İçin Giriş Yapın.</p>
            <form class="form-signin" role="form" method="POST" action="/login">
                {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                @endif
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">
                        Giriş Yap
                    </button>
                </div>
            </div>
            </form>
            <div class="social-auth-links text-center">
                <p>- YADA -</p>
                <a href="/redirect" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>
                    Facebook ile Giriş Yap
                </a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i>
                    Google+ ile Giriş Yap
                </a>
            </div>
            <!-- /.social-auth-links -->
            <a href="/password/reset">Şifremi Unuttum</a><br>
            <a href="/register">Kayıt Ol</a>
        </div>
    </div>
</div>
@endsection
