@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Editar Produto <h2>            
        </div>
        <div class="pull-right">
            <a class="btn btn-primary"  href="{{ route('products.index') }}">Voltar</a>
        </div>
    </div>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <p>
            <strong> ERROR! </strong> Você está tendo problemas para editar o produto
        </p>
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach

        </ul>
    </div>
@endif

    <form action="{{ route('products.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Nome:</strong>
                    <input type="text" name="name"  class="form-control" value="{{$product->name}}" placeholder="nome do produto">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Detalhes: </strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detalhes do produto">{{ $product->detail}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">ATUALIZAR</button>
            </div>
        </div>
    </form>
@endsection