<?php include 'header.php' ?> 
<form action="<?= isset($_GET['id']) ? '/update-curso?id='. $_GET['id'] : '/inserir-curso' ?>" method="POST">
  <div class="form-group">
    <label for="curso"></label>
    <input type="text" value="<?= empty($data) ? '' : $data['descricao']; ?>" name="descricao" class="form-control" id="curso" placeholder="Novo Curso">
    <small class="form-text text-muted">Insira um novo curso.</small>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<?php include 'footer.php' ?>