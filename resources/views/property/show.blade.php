@extends('property.master')
@section('content')

<h1>Pagina Single</h1>

<?php

if(!empty($property)){
    foreach($property as $prop){
        ?>
            <h2>Título: <?= $prop->title; ?></h2>

            <p>Descrição: <?= $prop->description; ?></p>

            <p>Valor de Locação: <?= $prop->rental_price; ?></p>

            <p>Valor de Venda: <?= $prop->sale_price; ?></p>
        <?php
    }
}

?>

@endsection
