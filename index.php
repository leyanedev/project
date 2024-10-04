<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra Seu Signo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Estilos próprios -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'layouts/header.php'; ?>
    <?php include('header.php'); ?>

    <div class="container mt-5">
        <h1 class="text-center">Descubra Seu Signo Zodiacal</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="show_zodiac_sign.php" method="POST">
                    <div class="mb-3">
                        <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Descobrir Signo</button>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js"></script>

 

</body>
</html>

