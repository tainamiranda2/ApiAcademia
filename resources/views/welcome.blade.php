<h1>Criar rojetos</h1>
<form action="/projeto" method="post">

@csrf

<div class="form-group">
    <label for="nome">Nome do projeto</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Informe o nome">
</div>

<div class="form-group">
    <label for="descricao">Descrição</label>
    <textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Informe a descrição">
    </textarea>
</div>

<div class="form-group">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control">
<option value="ativo">Ativo</option>
<option value="desativado">Desativado</option>

    </select>
</div>

<div class="form-group">
    <label for="user_id">Usuario</label>
    <select name="user_id" id="status" class="form-control">
<option value="1">Carlos</option>

    </select>
</div>


<input type="submit" class="btn btn-primary" value="Criar projeto">
</form>
</div>
