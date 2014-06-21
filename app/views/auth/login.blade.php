<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Geohidra</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {{ HTML::style('lte/css/bootstrap.min.css'); }}
        {{ HTML::style('lte/css/font-awesome.min.css'); }}
        {{ HTML::style('lte/css/AdminLTE.css'); }}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">

            <div class="header">GEOHIDRA</div>

            {{ Form::open(array('url' => 'login', 'class' => 'form-horizontal')) }}
                <div class="body bg-gray">
                    <div class="form-group">
                        <input class="form-control" tabindex="1" placeholder="Usuario" type="text" name="username" value="{{{ Input::old('username') }}}">
                    </div>
                    <div class="form-group">
                        <input class="form-control" tabindex="2" placeholder="Constraseña" type="password" name="password">
                    </div>
                    @if($errors->first('username'))
                        <div class="alert alert-error">{{ $errors->first('username') }}</div>
                    @endif
                    @if($errors->first('password'))
                        <div class="alert alert-error">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Ingresar</button>  
                </div>
            {{ Form::close() }}
        </div>
    </body>
    <!-- Javascript files -->
    {{ HTML::script('lte/js/jquery.js') }}
    {{ HTML::script('lte/js/bootstrap.min.js') }}
</html>

