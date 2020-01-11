@extends('layouts.front')
@section('content')
    <div class=" container row justify-center middle-items is-full-screen Choose">
        <div class="is-full-width">
            <h2 class="col-16 is-text-center  m-b-40 text-shadow">MECÁNICA DE PARTICIPACIÓN</h2>
            <div class="content-page row middle-items">
                <div class="row p-20 ">
                    <figure class="col-3 hide-phone">
                        <img src="{{asset('images/women.png')}}" alt="">
                    </figure>
                    <div class="col-16 col-m-13">
                        <h4>EVITEMOS MALOS ENTENDIDOS. POR FAVOR, LEE DETENIDAMENTE.</h4>
                        <p>Las siguientes son las reglas de participación en el sorteo, por favor lee detenidamente todo este archivo antes de participar y así evitar malos entendidos.                        </p>
                        <h4>ACERCA DEL SORTEO:</h4>
                        <p><b>LA MEJOR NOCHE DE TU VIDA </b>
                            es un sorteo digital creado para los residentes en Colombia en las ciudades donde la empresa hace presencia, relacionado al entretenimiento para adultos organizado en tres categorías: Noche romántica, Noche de amigos y Noche en limosina, donde los ganadores disfrutarán de un premio exclusivo, según el tipo de sorteo al que el usuario participa.
                        </p>
                        <p>Para ser el ganador de <b>LA MEJOR NOCHE DE TU VIDA</b>, las condiciones de participación son:
                            ARE YOU READY?
                           <ul class=" list-rules">
                            <li> El interesado debe leer y aceptar los siguientes términos y condiciones de participación.</li>
                            <li> Esta es una experiencia sólo para adultos. El participante debe ser mayor de 18 años.</li>
                            <li> El premio es personal e intransferible. Sólo se le dará a la persona inscrita en el sorteo y que presente su identificación el día que sea citado para reclamar el premio.</li>
                            <li> Si el ganador no posee la mayoría de edad, el premio le será cancelado y se realizará nuevamente el sorteo entre los demás participantes.</li>
                            <li> El interesado debe ser residente de la ciudad donde se llevará a cabo el sorteo. Si el ganador vive fuera de la ciudad de premiación, los costos de desplazamiento, transporte y hospedaje es responsabilidad del ganador.</li>
                            <li> Al cumplir con los anteriores requisitos, el interesado es apto para participar.</li>
                            <li> El usuario debe seleccionar el tipo de sorteo al que desea participar (Noche romántica, noche íntima, noche en limosina).</li>
                            <li> Participan únicamente los números del 00 al 99.</li>
                            <li> El participante debe seleccionar mínimo una casilla y puede seleccionar la cantidad de casillas que desee.</li>
                            <li> Cuando haya finalizado la selección de las casillas en el tablero, el participante debe seleccionar la opción “Comprar” donde será direccionado a pasarela de pago.</li>
                            <li> En la pasarela de pagos, el participante debe llenar un formulario con sus datos personales con el fin de verificar la identidad del ganador y así evitar fraude a la hora de hacer entrega del premio.</li>
                            <li> El participante puede tomar múltiples opciones de pago (paypal, Pay U, Vía Baloto) para finalizar la compra.</li>
                            <li> Si el participante desea pagar vía baloto, el participante reserva su(s) número(s) y cuenta con 24 horas para realizar el pago del cupo en el sorteo. Pasadas las 24 horas el(los) número(s) quedará automáticamente disponible(s).</li>
                            <li> El valor de cada número es de $50.000 pesos colombianos.</li>
                            <li> Por cada casilla/número pueden participar las personas que deseen, pero solo la persona que registre sus datos en el formulario se reconocerá como el ganador.</li>
                            <li> La fecha del sorteo se define en el momento que todas las casillas del tablero se hayan vendido.</li>
                            <li> La selección del ganador se hará teniendo en cuenta las últimas dos cifras del premio mayor de la Lotería de Bogotá.</li>
                            <li> La Lotería de Bogotá juega todos los jueves a partir de las 10:30 pm hora Colombia.</li>
                            <li> Se informará a los participantes del número ganador el día después de que la Lotería de Bogotá publique el número ganador del premio mayor.</li>
                            <li> El ganador será informado del premio el día después de que la Lotería de Bogotá publique el número ganador del premio mayor por los datos que haya registrado en el formulario, en el momento de la compra de el(los) puesto(s).</li>
                            <li> Después de ser informado por medio de los datos de contacto registrados en el formulario, el ganador tiene 7 días para comunicarse y reclamar el premio.</li>
                            <li> El ganador puede hacer efectivo el premio durante los próximos 20 días después de haberse comunicado con la empresa.</li>
                            <li> El premio de <b>LA MEJOR NOCHE DE TU VIDA</b> se divide en tres categorías que son:</li>
                                <ul>
                                    <li><b> Noche romántica: </b><br> El ganador y su pareja serán ganadores de una velada romántica con duración de un día y una noche (24 horas) en una suite de lujo en uno de los mejores hoteles de la ciudad. Tendrán derecho a una sesión de masajes, dos botella de vino para disfrutar en el bar del hotel o en la privacidad de la suite, además de un almuerzo y una cena romántica en el restaurante del hotel.</li>
                                    <li><b> Noche de amigos: </b><br> El ganador y los acompañantes que él seleccione disfrutarán de una noche de fiesta en casa avalada en $2.500.000. La fiesta está estimada para 30 personas, con una duración de 6 horas, donde el ganador tendrá completamente gratis 10 botellas de Whisky Chivas Regal Extra, una Barra de bar, material de servicio (vasos oficiales de Chivas Regal, hielo y servilletas), bartender, kit de fiesta, backing de fotos y DJ con sonido profesional.</li>
                                    <li><b> Noche de Limosina: </b><br> El ganador gozará de un recorrido en Limosina durante dos horas por sectores exclusivos de la ciudad donde se haya realizado el sorteo, en compañía de dos (2) escort femeninas. Adicional, dentro de la limosina tendrán una botella de Whisky Jack Daniels (original o honey) 750ml y una caja de preservativos Today x 10 unidades. NOTA: Si el ganador(es) desea tomar fotografías o videos durante el recorrido, debe hacerlo con sus propias cámaras o teléfonos celulares, informando previamente a sus acompañantes.</li>
                                </ul>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="is-text-center m-t-20 m-b-20">
                <a href="{{route('choose.night')}}" class="button button-page">PARTICIPAR</a>
            </div>
        </div>
    </div>
@endsection
