@extends('master')

@section('content')
<div class="row">
    <form role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
    <div class="col-sm-6">
        <div class="register-logo">
            <b>Sosyobet</b>.com
        </div>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
        <div class="register-box-body">
            <div class="register-logo">
                Kayıt Ol
            </div>
            <div class="form-group has-feedback">
                <input id="text" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Kullanıcı Adı" required autofocus>
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Ad" required>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" placeholder="Soyad" required autofocus>

                @if($errors->has('surname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('surname') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Telefon" required>

                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <textarea id="about" class="form-control" name="about" placeholder="Hakkımızda">{{ old('about') }}</textarea>

                @if ($errors->has('about'))
                    <span class="help-block">
                        <strong>{{ $errors->first('about') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-info-sign form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="skills" type="text" class="form-control" name="skills" value="{{ old('skills') }}" placeholder="İlgilendiğiniz Sporlar">

                @if ($errors->has('skills'))
                    <span class="help-block">
                        <strong>{{ $errors->first('skills') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-star form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="password" type="password" class="form-control" name="password" placeholder="Şifre" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Tekrar Şifre" required>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">
                        Kayıt Ol
                    </button>
                    <div class="social-auth-links text-center">
                        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>
                            Facebook ile Giriş Yap
                        </a>
                        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i>
                            Google+ ile Giriş Yap
                        </a>
                    </div>
                    <a href="/login" class="text-center">Zaten üyeyim.</a>
                </div>

            </div>
        </div>
    </div>
    </form>
</div>
@endsection
