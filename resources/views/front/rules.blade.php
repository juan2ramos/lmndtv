@extends('layouts.front')
@section('content')
    <div class=" container row justify-center middle-items is-full-screen Choose">
        <div class="is-full-width">
            <h2 class="col-16 is-text-center  m-b-40 text-shadow">MECÁNICA DE PARTICIPACIÓN</h2>
            <div class="content-page row middle-items">
                <div class="row p-20 middle-items ">
                    <figure class="col-3 hide-phone">
                        <img src="{{asset('images/women.png')}}" alt="">
                    </figure>
                    <div class="col-16 col-m-13">
                        <h4>EVITEMOS MALOS ENTENDIDOS POR FAVOR, LEE DETENIDAMENTE.</h4>
                        <p>Las siguientes son las reglas de participación en el sorteo, por favor lee detenidamente todo este archivo antes de participar y así evitar malos entendidos.</p>
                        <h4>ACERCA DEL SORTEO:</h4>
                        <p><b>LA MEJOR NOCHE DE TU VIDA</b> es un sorteo digital creado para los residentes en Colombia en las ciudades donde la empresa hace presencia, en el cual premiaremos a uno (1) o dos (2) ganadores con una noche íntima junto a dos acompañantes femeninas (Escort) al interior de una limosina, mientras dan un recorrido por toda la ciudad. Además, durante el recorrido tendrán acceso libre al licor de su gusto, música personalizada y una experiencia sensual inolvidable que sólo el ganador(es)
                            podrá vivir.</p>
                        <p>Para ser el ganador de <b>LA MEJOR NOCHE DE TU VIDA</b>, las condiciones de participación son: - El participante debe leer y aceptar los siguientes términos y condiciones de participación.
                            ARE YOU READY?
                            <br>- Esta es una experiencia sólo para adultos, así que el participante debe ser mayor de 18 años.
                            <br> - Si el ganador no posee la mayoría de edad, el premio le será cancelado y se realizará nuevamente el sorteo entre los demás participantes.
                            <br>  - El participante debe ser residente de la ciudad donde se llevará a cabo el sorteo. Si el ganador vive
                            fuera de la ciudad de premiación, el costo de desplazamiento es responsabilidad del ganador
                        </p>
                    </div>
                </div>
            </div>
            <div class="is-text-center m-t-20">
                <a href="{{route('choose.night')}}" class="button button-page">PARTICIPAR</a>
            </div>
        </div>
    </div>
@endsection
