@extends('adminlte')

@section('titulo', 'Livros')

@section('conteudo')
    <a href="{{route('livros.create')}}" class="btn btn-success">Novo</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Genero</th>
                <th>Editora</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($livros as $livro)
                <tr>
                    <td>{{$livro->titulo}}</td>
                    <td>{{$livro->genero->descricao}}</td>
                    <td>{{$livro->editora->descricao}}</td>
                    <td>
                        <a href="{{route('livros.edit', $livro)}}" class="btn btn-primary">Editar</a>
                        |Remover</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$livros->links()}}
@endsection