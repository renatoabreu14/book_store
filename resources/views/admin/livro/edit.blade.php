@extends('adminlte')

@section('titulo', 'Novo livro')

@section('conteudo')
    <form action="{{route('livros.update', $livro)}}" method="post" class="form-horizontal">
        @method('PUT')
        @include('admin.livro.form')
    </form>
@endsection