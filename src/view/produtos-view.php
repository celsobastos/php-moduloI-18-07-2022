<?php include __DIR__ . '/../view/header.php'; ?>

<section>
    <div class="container">
        <h1 class="alert text-center">
            <?php echo $data['#title']; ?>
            
            <!-- Imprimir os produtos -->
            
            <?php foreach($data['#produtos'] as $valor): ?>
                <div>
                    <?= $valor; ?>
                </div>    
            <?php endforeach; ?>
            
        </h1>
        <div>
            <a href="/cadastro" class="btn btn-primary">Cadastro</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../view/footer.php'; ?>