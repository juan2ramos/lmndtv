@extends('layouts.front')
@section('content')
    <div class=" container row justify-center middle-items is-full-screen Choose">
        <div class="is-full-width">
            <h2 class="col-16 is-text-center  m-b-40 text-shadow">¿ESTÁS LISTO PARA UNA EXPERIENCIA INOLVIDABLE?</h2>
            <div class="content-page row middle-items">
                <div class="row p-20 middle-items">
                    <figure class="col-3 hide-phone">
                        <img src="{{asset('images/women.png')}}" alt="">
                    </figure>
                    <div class="col-16 col-m-13">
                        <h4>¡BIENVENIDO A LA MEJOR NOCHE DE TU VIDA!</h4>
                        <p class="m-b-20">Somos una empresa dedicada a ofrecer servicios de entrenimiento exclusivos para mayores de
                            edad con responsabilidad, seguridad y seriedad</p>
                        <h4 >NUESTRO OBJETIVO ES:</h4>
                        <p class="m-b-20">Ofrecer una innolvidable, experiencia íntima, romántica o divertida para nuestros clientes.</p>
                        <p  class="m-b-20"><b>LA MEJOR NOCHE DE TU VIDA </b>Es un sorteo donde el ganador o ganadores disfrutarán de un premio nunca antes visto, según
                            tipo de sorteo al que el usuario ha deseado participar. Es hora de entrar en el mundo de entretenimiento, diversión y sano esparcimiento</p>
                        <h4>¿ESTÁS LISTO PARA VIVIR UNA EXPERIENCIA INOLVIDABLE?</h4>
                    </div>
                </div>
            </div>
            <div class="is-text-center m-t-20">
                <a href="{{route('choose.night')}}" class="button button-page">¡SI, ESTOY LISTO!</a>
            </div>
        </div>
    </div>
@endsection
