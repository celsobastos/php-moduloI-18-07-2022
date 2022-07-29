<?php include 'header.php' ?>
<ul class="list-group">
    <?php foreach($data as $curso): ?>
        <li class="list-group-item d-flex justify-content-between">
            <div>
                <?= $curso->getDescricao() ?>
            </div>
            <div>
                <a href="#" class="btn btn-danger">Delete</a>
                <a href="#" class="btn btn-success">Update</a>
            </div>
        </li>
    <?php endforeach; ?>    
</ul>
<a href="/novo" class="btn btn-primary">Novo Curso</a>
<?php include 'footer.php' ?>