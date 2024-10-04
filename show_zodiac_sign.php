<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Signo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'layouts/header.php'; ?>

    <div class="container mt-5">
        <h1 class="text-center">Seu Signo</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <?php
                        // Função para determinar o signo zodiacal
                        function determinarSigno($dataNascimento) {
                            $xml = simplexml_load_file('signos.xml');

                            foreach ($xml->signo as $signo) {
                                $inicio = DateTime::createFromFormat('m-d', $signo->inicio);
                                $fim = DateTime::createFromFormat('m-d', $signo->fim);
                                $data = DateTime::createFromFormat('Y-m-d', $dataNascimento);

                                // Ajusta o ano para a comparação correta
                                $inicio->setDate($data->format('Y'), $inicio->format('m'), $inicio->format('d'));
                                $fim->setDate($data->format('Y'), $fim->format('m'), $fim->format('d'));

                                if ($data >= $inicio && $data <= $fim) {
                                    return $signo;
                                }
                            }

                            return null;
                        }

                        if (isset($_POST['dataNascimento'])) {
                            $dataNascimento = $_POST['dataNascimento'];
                            $signo = determinarSigno($dataNascimento);

                            if ($signo) {
                                echo "<h3 class='card-title'>{$signo->nome}</h3>";
                                echo "<p class='card-text'>{$signo->descricao}</p>";
                            } else {
                                echo "<h3 class='card-title'>Signo não encontrado</h3>";
                            }
                        }
                        ?>
                        <a href="index.php" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
