@extends('layouts.front')
@section('content')
    <div class=" container row justify-center middle-items is-full-screen Lottery">
        <div class="is-full-width">
            <h1 class="is-text-center m-t-60 m-b-20">NOCHE EN LIMOSINA</h1>
            <p>
                <b>LA NOCHE EN LIMOSINA</b> es un sorteo digital creado para los residentes en Colombia en la ciudades
                donde la empresa hace presencia, en la cual premiamos a uno (1) o dos (2) ganadores de una noche íntima
                junto a dos acompañantes femeninas (Escort) al interior de una limosina, mientras dan un recorrido por
                toda la ciudad. Además, durante todo el reccorrido tendrán acceso libre a el licor de su gusto, música
                personalizada y una experincia sensual inolvidable que sólo los ganadores podrán vivir.
            </p>
            <div class="is-text-center m-40">
                <iframe width="700" height="400" src="https://www.youtube.com/embed/24tNuElBXv0" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>

            <h2 class="is-text-center ju">ESCOGE TUS NÚMEROS DE LA SUERTE Y ¡GANA!</h2>
            <p class="is-text-justify">El ganador del sorteo será quien saque los dos últimos números del premio
                mayor de la Lotería de
                Bogotá, en la fecha del sorteo indicado en las siguientes pestañas:</p>

            <div class="row m-t-40 m-b-40 ">
                <div class="col-4 p-r-20">
                    <div class="row middle-items m-b-28  m-t-40">
                        <span class="selected m-r-16"></span>
                        <i>SELECCIONADO</i>
                    </div>
                    <div class="row middle-items m-b-28 ">
                        <span class=" m-r-16"></span>
                        <i>DISPONIBLE</i>
                    </div>
                    <div class="row middle-items m-b-28 ">
                        <span class="reserve16 m-r-16"></span>
                        <i>RESERVADO</i>
                    </div>
                    <div class="row middle-items m-b-28 ">
                        <span class="not-available m-r-16"></span>
                        <i>NO DISPONIBLE</i>
                    </div>
                    <p class="p-t-40">
                        * La opción permite crear una reversa de una o varias casillas por 24 horas mientras el usuario
                        genera el pago.
                    </p>
                    <p>Pasadas las 24 horas sin registrar el pago, las casillas quedan automáticamente
                        disponibles. </p>
                </div>
                <div class="col-8 row ">
                    @for($i = 0; $i < 100; $i++)
                        <div class="is-text-center Lottery-board ">
                            <span class="
                                    {{($i % 8 == 0 ) ? 'not-available'  : ''}}
                            {{($i % 34 == 0 ) ? 'selected'  : ''}}
                            {{($i % 6 == 0 ) ? 'reserved'  : ''}}"
                            >
                                {{($i < 10) ? '0' . $i  : $i}}
                            </span>
                        </div>
                    @endfor
                </div>
                <div class="col-4 p-l-20">
                    <div class="is-text-center m-t-20">
                        <form action="">
                            <h3>DATOS PARTICIPANTE</h3>
                            <p class="Lottery-form-p">Para evitar suplantación y poder hacer entrega del premio, es
                                necesario diligenciar el
                                siguiente formulario:</p>
                            <div class="m-t-12 m-b-12">
                                <input type="text" placeholder="Nombre">
                                <input type="text" placeholder="Cédula de ciudadanía ">
                                <input type="text" placeholder="Correo electrónico">
                                <input type="text" placeholder="Celular">
                            </div>
                            <h3>SUB TOTAL</h3>
                            <div>
                                <span class="selected">34</span>
                                <span class="selected">68</span>
                                <hr>
                                <h3>TOTAL</h3>
                                <p class=""><b>$200.000</b></p>
                                <button class="m-t-12 button button-page">COMPRAR</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
