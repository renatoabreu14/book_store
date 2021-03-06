@extends('adminlte')

@section('titulo', 'Editoras')

@section('conteudo')
    <a href="{{route('editoras.create')}}" class="btn btn-success">Novo</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($editoras as $editora)
                <tr>
                    <td>{{$editora->descricao}}</td>
                    <td>Editar|Remover</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$editoras->links()}}
@endsection