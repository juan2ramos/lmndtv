@extends('layouts.front')
@section('content')


    <div class=" container row justify-center middle-items is-full-screen Choose">
        <div class="is-full-width">
            <h2 class="col-16 is-text-center  m-b-40 text-shadow">¿QUÉ TIPO DE NOCHE INOLVIDABLE QUIERES VIVIR?</h2>
            <ul class="is-list-less row justify-around">
                @foreach($records as $record)
                    @php($data = $record->getFields())
                    <li class="col-16 col-m-4">
                        <a href="{{route('lottery', !empty($data['Slug'] )?$data['Slug']: '')}}">
                            <h3 class="is-text-center  text-shadow">{{!empty($data['Nombre'] )?$data['Nombre']: ''}}</h3>
                            <figure class="Choose-figure">
                                <img src=" {{!empty($data['Attachments'] )? $data['Attachments'][0]['url'] : ''}}" alt="">
                            </figure>
                            <p class="Choose-p">
                                {{!empty($data['Descripción'] )?$data['Descripción']: ''}}
                            </p>

                        </a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
@endsection
