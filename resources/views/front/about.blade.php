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
                        <p class="m-b-20">Somos una empresa colombiana dedicada a ofrecer servicios de entretenimiento exclusivo para mayores de edad con responsabilidad, seguridad y seriedad.

                        </p>
                        <h4 >NUESTRO OBJETIVO ES:</h4>
                        <p class="m-b-20">Ofrecer una inolvidable experiencia íntima, romántica y divertida para nuestros clientes.
                        </p>
                        <p  class="m-b-20"><b>LA MEJOR NOCHE DE TU VIDA </b> es un sorteo relacionado al entretenimiento para adultos organizado en tres categorías: Noche romántica, Noche de amigos y Noche en limosina, donde los ganadores disfrutarán de un premio exclusivo, según el tipo de sorteo al que el usuario participa. Es hora de entrar en el mundo de entretenimiento, diversión y sano esparcimiento.
                        </p>
                        <h4>¿ESTÁS LISTO PARA VIVIR UNA EXPERIENCIA INOLVIDABLE?</h4>
                    </div>
                </div>
            </div>
            <div class="is-text-center m-t-20  m-b-20">
                <a href="{{route('choose.night')}}" class="button button-page">¡SI, ESTOY LISTO!</a>
            </div>
        </div>
    </div>
@endsection
