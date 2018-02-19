<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cssparaconteudos.css') }}" rel="stylesheet">
    <link href="{{ asset('/open-iconic/font/css/open-iconic.css') }}" rel="stylesheet">
    <link href="{{ asset('/open-iconic/font/css/open-iconic-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/open-iconic/font/css/open-iconic-foundation.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <style type="text/css" media="screen">
        #centralizado{
            top:50%;
            position: relative;
        }
    </style>
</head>
<body style="background: #fff;">
    <div class="container-fluid">
        <div class="row flex-xl-nowrap">
            <div class="d-none d-xl-block col-xl-2 bd-toc">
                
            </div>
            <main class="col-12 col-md-9 col-xl-8 py-md-3 bd-content" >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="" id="centralizado">
                {{-- <div class="card-header">Login</div> --}}

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label text-md-right">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label text-md-right">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row text-md-center">
                            <div class="col-md-6 offset-md-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar de mim
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 text-md-center">
                            <div class="col-md-6 offset-md-3">
                                <button id="botaoFullWidth" type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Esqueceu sua senha?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            </main>
            <div class="d-none d-xl-block col-xl-2 bd-toc">
                
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/funcoes.js') }}"></script>
    <script type="text/javascript">
        $('#centered_div').center();
    </script>
</body>
</html>