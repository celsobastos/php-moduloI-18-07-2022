<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cursos Impacta</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">

        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand text-white" href="#">IMPACTA | <?= isset($_SESSION['email']) ? $_SESSION['email'] : '' ?></a>
            </div>

            <a href="/login" class="btn btn-primary">Fazer Login</a>
        </div>
    </nav>
    <main class="container shadow p-4 p-md-5 mb-4 rounded bg-light text-black">
        <h1 class="display-4 fst-italic"><?= $titulo ?></h1>
    </main>
    <section class="container">