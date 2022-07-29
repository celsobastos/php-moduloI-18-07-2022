<?php include 'header.php' ?> 
<form action="/inserir-curso" method="POST">
  <div class="form-group">
    <label for="curso"></label>
    <input type="text" name="descricao" class="form-control" id="curso" placeholder="Novo Curso">
    <small class="form-text text-muted">Insira um novo curso.</small>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<?php include 'footer.php' ?>