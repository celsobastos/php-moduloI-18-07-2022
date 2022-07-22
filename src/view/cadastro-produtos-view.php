<?php include __DIR__ . '/../view/header.php'; ?>

<section>
    <div class="container">
        <div class="col-6">
            <h1 class="alert text-center">
                <?php echo $data['#title']; ?>
            </h1>
            <form id="contactForm" action="/valida-form" method="POST">
                <div class="form-floating mb-3">
                    <input name="produto" class="form-control" id="produto" type="text" />
                    <label for="produto">Produto</label>
                </div>
                <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg" id="submitButton" type="submit">Enviar</button></div>
            </form>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../view/footer.php'; ?>