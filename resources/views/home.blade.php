@extends('layouts.app')

@section('content')
<head>
<style>
.bg {
  /* The image used */
  background-image: url("img_girl.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
    <div class="bg"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (Auth::check())
                            Selamat Datang Kembali Ke Toko GAMEMOD,  !, {{ Auth::user()->name }}
                        @else
                            Hello, Selamat data di GAMEMOD! tempat toko online bagi gamer-gamer ori
                            <a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
