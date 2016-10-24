@extends('master')

<!-- Main Content -->
@section('content')
<div class=row>
    <div class="login-box">
        <div class="login-box-body">
            <div class="login-logo">
                <b>Sosyobet</b>.com
            </div>
            <p class="login-box-msg">Şifrenizi Sıfırlamak İçin Mailinizi Giriniz.</p>
            <form class="form-signin" role="form" method="POST" action="/password/email">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" name="submit" class="btn btn-success form-control"><span class="glyphicon glyphicon-ok"></span> Şifre Sıfırla</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
