<?php include 'header.php' ?>

<?php if (isset($_SESSION['mensagem'])): ?>
  <div class="alert alert-danger">
      <?= $_SESSION['mensagem'] ?>
  </div>
<?php endif; ?>

<form action="/logar" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Logar</button>
</form>
<?php include 'footer.php' ?>
