@extends('layouts.app')

@section('content')

    <h1>Vista de sesion</h1>
    
    <?php
    echo "Nombre de sesion: ". Session::getName(); ?><br/><?php
    echo "Id Sesion: ". Session::getId();
    ?>

@endsection