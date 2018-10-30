{{csrf_field()}}
<div class="form-group">
    <label class="control-label col-sm-2" for="">Descrição</label>
    <div class="col-sm-10">
        <input type="text" name="descricao" id="" placeholder="Informe a descrição da editora" class="form-control">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="Salvar" class="btn btn-success">
        <a href="{{route('editora.index')}}" class="btn btn-primary">Voltar</a>
    </div>
</div>