@extends('layouts.front')
@section('content')
    <div class=" container row justify-center middle-items is-full-screen Choose">
        <div class="is-full-width"  >
            <h2 class="col-16 is-text-center  m-b-40 text-shadow">¿QUÉ TIPO DE NOCHE INNOLVIDABLE QUIERES VIVIR?</h2>
            <ul class="is-list-less row justify-around">
                <li class="col-4">
                    <a href="{{route('lottery')}}">
                        <h3 class="is-text-center  text-shadow">NOCHE EN LIMOSINA</h3>
                        <figure class="Choose-figure"></figure>
                        <p class="Choose-p">
                            Tú y un amigo vivirán una noche llena de diversión recorriendo la ciudad dentro de una limosina con dos hermosas acompañantes.
                        </p>
                    </a>
                </li>
                <li class="col-4">
                    <a href="{{route('lottery')}}">
                        <h3 class="is-text-center  text-shadow">NOCHE EN LIMOSINA</h3>
                        <figure class="Choose-figure"></figure>
                        <p class="Choose-p">
                            Vive un día y una noche íntima e inolvidable con tu pareja en una suite de lujo dentro de uno de los mejores hoteles de la ciudad.
                        </p>
                    </a>
                </li>
                <li class="col-4">
                    <a href="{{route('lottery')}}">
                        <h3 class="is-text-center  text-shadow">NOCHE EN LIMOSINA</h3>
                        <figure class="Choose-figure"></figure>
                        <p class="Choose-p">
                            Disfruta de una noche con todos tus amigos, en la mejor fiesta en casa que hayas vivido.
                            <br> TODOS LOS GASTOS CORREN POR NUESTRA CUENTA.
                        </p>
                    </a>
                </li>
            </ul>

        </div>
    </div>
@endsection
