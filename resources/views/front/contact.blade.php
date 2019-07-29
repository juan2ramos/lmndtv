@extends('layouts.front')
@section('content')
    <div class=" container row justify-center middle-items is-full-screen  Contact">
        <div class="is-full-width">
            <h2 class="col-16 is-text-center text-shadow">ESCRÍBENOS Y PRONTO TE CONTESTAREMOS</h2>
            <p class="is-text-center">Te invitamos a escribir todas tus preguntas o dudas con total franqueza y tranquilidad. <br>
                De esta manera podemos ayudarte puntualmente.
            </p>
            <div class="content-page row middle-items">
                <div class="row p-20 is-full-width">
                    <form class="col-8 m-t-16 m-b-16" >
                        <label for="" class="row m-b-12">
                            <span class="col-3"></span>
                            <input class="col-13" type="text" name="name" placeholder="Nombre">
                        </label>
                        <label for="" class="row m-b-12">
                            <span class="col-3"></span>
                            <input class="col-13" type="email" name="email" placeholder="E-mail ">
                        </label>
                        <label for="" class="row m-b-12">
                            <span class="col-3"></span>
                            <input class="col-13" type="text" name="phone" placeholder="Teléfono">
                        </label>
                        <label for="" class="row m-b-12 ">
                            <span class="col-3"></span>
                            <textarea class="col-13" name="description" rows="5" placeholder="Descripción"></textarea>
                        </label>
                        <div class="is-text-right">
                            <button class="button button-page">ENVIAR</button>
                        </div>
                    </form>
                    <div class="col-8 m-t-16 m-b-16">
                        <p class=""><a href="">WhatSapp + 57 222 33 34</a> <br>
                            <a href="">info@lamejornochedetuvida.com</a>
                            <br><br>
                            Bogotá - Colombia
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
