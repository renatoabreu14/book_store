@extends('adminlte')

@section('titulo', 'Nova editora')

@section('conteudo')
    <form action="{{route('editora.store')}}" class="form-horizontal" method="post">
        @include('admin.editora.form')
    </form>
@endsection