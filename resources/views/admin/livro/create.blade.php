@extends('adminlte')

@section('titulo', 'Novo livro')

@section('conteudo')
    <form action="{{route('livros.store')}}" method="post" class="form-horizontal">
        @include('admin.livro.form')
    </form>
@endsection