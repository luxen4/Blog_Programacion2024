<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="e148bdbc89c019bd06122ab7bd08a8be" />
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="./../css/card.css">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9695238706576343" crossorigin="anonymous"></script>
</head>

<body>
    <?php include  $_SERVER['DOCUMENT_ROOT'] . '/Blog_Programación2024/constantes.php'; ?>
    <?php $href = './../' ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . NOMBRE_PROYECTO . '/bloques/barra_navegacion.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-xl-9 text-center col-lg-6 col-md-10 col-sm-10 col-12">
                <div class="row">

                    <div class="col-xl-4 text-center col-lg-6 col-md-10 col-sm-10 col-12">
                        <?php
                        $href = './../html/index_inputs.php';
                        $src = './img/presentacion_inputs.png';
                        $alt = 'Imagen de ejemplo';
                        $h3 = 'Inputs';
                        $p = 'Todos los inputs de html.';
                        include './../bloques/card.php'; ?>
                    </div>

                </div>
            </div>

            <div id="#" class="col-xl-3 text-center col-lg-6 col-md-10 col-sm-10 col-12 ">

            </div>

        </div>

    </div>


    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Blog_Programación2024/bloques/footer.php'; ?>
    
    <script type="text/javascript" src="https://cdn.diclotrans.com/sdk/v1/31180/af0d219c84b03a7bba793620fffa25689a03ba0d/lib.js"></script>


</body>


</html>