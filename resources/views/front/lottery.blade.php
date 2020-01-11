@extends('layouts.front')
@section('content')
    <div class=" container row justify-center middle-items is-full-screen Lottery">
        <div class="is-full-width">
            <h1 class="is-text-center m-t-60 m-b-20">{{$categoryFields['Nombre']}}</h1>
                {{$categoryFields['Descripción']}}
            </p>
            <div class="is-text-center m-40">
                <iframe width="700" height="400" class="iframe" src="{{$categoryFields['URL del video']}}" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>

            <h2 class="is-text-center ju">ESCOGE TUS NÚMEROS DE LA SUERTE Y ¡GANA!</h2>
            <p class="is-text-justify">El ganador del sorteo será quien saque los dos últimos números del premio
                mayor de la Lotería de
                Bogotá, en la fecha del sorteo indicado en las siguientes pestañas:</p>
            <div class="row justify-center" style="margin: 20px 0 -30px;">
                @foreach($lotteries as $lottery)

                    <a  style="display: block; margin: 0 10px; background: #1ba246;padding: 5px 20px;"
                        href="{{route('lottery',[$categoryFields['Slug'], $lottery['slug']])}}">
                        {{$lottery['Nombre']}}
                    </a>
                @endforeach
            </div>
            <numbers :numbers="{{$numbers}}" :lotteries="{{$lotteries}}"></numbers>
        </div>

    </div>
@endsection
