@extends('layouts.front')
@section('content')
    <div class=" row justify-center middle-items is-full-screen Home">
        <div class="is-full-width">
            <h2 class="col-16 is-text-center">PREPÁRATE PARA VIVIR</h2>
            <figure class="Home-logo is-text-center">
                <img class="Home-logoImg" src="{{asset('images/logo-la-mejor-noche-de-tu-vida.svg')}}"
                     alt="Logo la mejor noche de tu vida">
            </figure>
            <div>
                <h5 class="is-text-center Home-h5">VERIFICACIÓN DE EDAD</h5>
                <p class="is-text-center Home-p">Página requiere que seas mayor de 18 años. <br>
                    Por favor registra tu fecha de nacimiento en las siguientes casillas.
                </p>
            </div>
            <home token="{{ csrf_token() }}"></home>
        </div>
    </div>
@endsection
