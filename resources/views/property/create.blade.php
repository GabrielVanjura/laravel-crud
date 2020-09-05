@extends('property.master')
@section('content')

<h1>Formulario de cadastro :: Imoveis</h1>
<form action="<?= url('/imoveis/store'); ?>" method="POST">

    <?= csrf_field(); ?>

    <div class="form-group">
        <label for="title">Título do Imóvel</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Descrição do Imóvel</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="rental_price">Valor de Aluguel do Imóvel</label>
        <input type="text" name="rental_price" id="rental_price" class="form-control">
    </div>
    <div class="form-group">
        <label for="sale_price">Valor de Venda do Imóvel</label>
        <input type="text" name="sale_price" id="sale_price" class="form-control">
    </div>
        <button class="btn btn-primary" type="submit">Cadastrar imóvel</button>
</form>

@endsection
