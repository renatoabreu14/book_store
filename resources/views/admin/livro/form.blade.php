{{csrf_field()}}
<div class="form-group">
    <label class="control-label col-sm-2" for="">Título</label>
    <div class="col-sm-10">
        <input type="text" name="titulo" id="" placeholder="Informe o título do livro" class="form-control" value="{{$livro->titulo ?? ''}}">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="">Número de páginas</label>
    <div class="col-sm-2">
        <input type="number" name="paginas" id="" placeholder="Nº de páginas" class="form-control" value="{{$livro->paginas ?? ''}}">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="">Autor</label>
    <div class="col-sm-10">
        <input type="text" name="autor" id="" placeholder="Informe o autor do livro" class="form-control" value="{{$livro->autor ?? ''}}">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="">Editora</label>
    <div class="col-sm-10">
        <select name="editora_id" id="" class="form-control">
            @foreach($editoras as $editora)
                @if(isset($livro))
                    @if($editora->id == $livro->editora->id)
                        <option value="{{$editora->id}}" selected>{{$editora->descricao}}</option>
                    @else
                        <option value="{{$editora->id}}">{{$editora->descricao}}</option>
                    @endif
                @else
                    <option value="{{$editora->id}}">{{$editora->descricao}}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="">Genero</label>
    <div class="col-sm-10">
        <select name="genero_id" id="" class="form-control">
            @foreach($generos as $genero)
                @if(isset($livro))
                    @if($genero->id == $livro->genero->id)
                        <option value="{{$genero->id}}" selected>{{$genero->descricao}}</option>
                    @else
                        <option value="{{$genero->id}}">{{$genero->descricao}}</option>
                    @endif
                @else
                    <option value="{{$genero->id}}">{{$genero->descricao}}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="Salvar" class="btn btn-success">
        <a href="{{route('livros.index')}}" class="btn btn-primary">Voltar</a>
    </div>
</div>