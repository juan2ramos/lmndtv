@extends('layouts.front')
@section('content')


    <div class=" container row justify-center middle-items is-full-screen Choose">
        <div class="is-full-width">
            <h2 class="col-16 is-text-center  m-b-40 text-shadow">¿QUÉ TIPO DE NOCHE INNOLVIDABLE QUIERES VIVIR?</h2>
            <ul class="is-list-less row justify-around">
                @foreach($records as $record)
                    @php($data = $record->getFields())
                    <li class="col-4">
                        <a href="{{route('lottery', !empty($data['Slug'] )?$data['Slug']: '')}}">
                            <h3 class="is-text-center  text-shadow">{{!empty($data['Nombre'] )?$data['Nombre']: ''}}</h3>
                            <figure class="Choose-figure"></figure>
                            <p class="Choose-p">
                                Tú y un amigo vivirán una noche llena de diversión recorriendo la ciudad dentro de
                                una limosina con dos hermosas acompañantes.
                            </p>
                        </a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
@endsection
