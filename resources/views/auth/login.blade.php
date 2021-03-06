<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notas GLS | Sistema de Logística</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="{{asset('assets/css/themes/lite-purple.min.css')}} " rel="stylesheet">
</head>
<div class="app-admin-wrap layout-sidebar-large">
<div class="auth-layout-wrap" style="background-image: url({{asset('assets/images/photo-wide-4.jpg')}});">
    <div class="auth-content">
        <div class="card o-hidden">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-4">
                        <div class="auth-logo text-center mb-4"><img src="{{asset('assets/images/logo.png')}}" alt=""></div>
                        <h1 class="mb-3 text-18">Inicio de Sesión - Notas GLS</h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Usuario</label>
                                <input id="email" type="email" class="form-control form-control-rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>                                
                                <input id="password" type="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-rounded btn-primary btn-block mt-2">Acceder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>