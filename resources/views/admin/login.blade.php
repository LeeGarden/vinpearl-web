<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Đăng nhập</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('admin') }}/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin') }}/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>{{ config('app.name') }}</b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Đăng nhập để vào Trang quản trị</p>

    <form method="POST" action="{{ route('admin.login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      @if(Session::has('error_login'))        
        <div class="form-group col-md-12 alert-danger" style="padding: 7px 0">
          <span class="col-md-12 text-red" style="width: 100%;">{{ Session::get('error_login') }}</span>
        </div>
      @else
        <div class="form-group has-feedback">
          <span></span>
        </div>
      @endif
      <div class="row">
        <div class="col-xs-7">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lưu Đăng nhập
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng Nhập</button>
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
          <div class="col-xs-6">
              <a href="{{ route('admin.password.request') }}">
                    Quên mật khẩu?
                </a>
          </div>
      </div>
    </form>

    {{-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links --> --}}

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('admin') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('admin') }}/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{ asset('admin') }}/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
