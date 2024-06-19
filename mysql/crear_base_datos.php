<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="e148bdbc89c019bd06122ab7bd08a8be" />
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9695238706576343" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./../css/styles.css">
    <link rel="stylesheet" href="./../css/card.css">
    <link rel="stylesheet" href="./../css/anuncios_derecha.css">
</head>

<body>
    <?php include './../bloques/barra_navegacion.php'; ?>
    <h1>MySql</h1>
    <div id="#" class="container">
        <div class="row">

            <div id="#" class="col-xl-9 text-center col-lg-6 col-md-10 col-sm-10 col-12">
                <h2>Creación de una base de datos</h2>

                <!-- Exportado a apartado.php (include)-->
                <div style="margin-top: 2em; margin-bottom: 2em;">
                    <p>Para crear una base de datos:
                        <br><strong>CREATE DATABASE pizzas;</strong>
                    </p>

                    <p>Para mostrar las bases de datos:
                        <br><strong>SHOW DATABASES;</strong>
                    </p>
                </div>

                <h2>Creación de tablas</h2>
                <div style="margin-top: 2em; margin-bottom: 2em;">
                    <div class="row">

                        <div id="#" class="col-xl-6 text-center col-lg-6 col-md-10 col-sm-10 col-12 card">
                            <?php include 'pre_create_table_especialidad.php'; ?>
                        </div>

                        <div id="#" class="col-xl-6 text-center col-lg-6 col-md-10 col-sm-10 col-12 card">
                            <?php include 'pre_create_table_pizza.php'; ?>
                        </div>

                        <div id="#" class="col-xl-6 text-center col-lg-6 col-md-10 col-sm-10 col-12 card">
                            <?php include 'pre_create_table_categoria_ingrediente.php'; ?>
                        </div>

                        <div id="#" class="col-xl-6 text-center col-lg-6 col-md-10 col-sm-10 col-12 card">
                            <?php include 'pre_create_table_ingrediente.php'; ?>
                        </div>

                    </div>
                </div>

                <h2>Inserción de registros</h2>
                <div>
                    <div class="row">

                        <div id="#" class="col-xl-6 text-center col-lg-6 col-md-10 col-sm-10 col-12 card">
                            <?php include 'pre_insert_table_especialidad.php'; ?>
                        </div>
                        <div id="#" class="col-xl-6 text-center col-lg-6 col-md-10 col-sm-10 col-12 card">
                            <?php include 'pre_insert_table_pizza.php'; ?>
                        </div>
                        <div id="#" class="col-xl-6 text-center col-lg-6 col-md-10 col-sm-10 col-12 card">
                            <?php include 'pre_insert_table_categoria_ingrediente.php'; ?>
                        </div>
                        <div id="#" class="col-xl-6 text-center col-lg-6 col-md-10 col-sm-10 col-12 card">
                            <?php include 'pre_insert_table_ingrediente.php'; ?>
                        </div>

                    </div>


                    <div class="row">
                        <div id="#" class="col-xl-4 text-center col-lg-6 col-md-10 col-sm-10 col-12 card">
                            <h2>Especialidad</h2>
                            <img style="margin: 0 auto;" src="./img/registros_especialidad.png" alt="">
                        </div>

                        <div id="#" class="col-xl-4 text-center col-lg-6 col-md-10 col-sm-10 col-12 card">
                            <h2>Pizza</h2>
                            <img src="./img/registros_pizza.png" alt="">
                        </div>

                        <div id="#" class="col-xl-4 text-center col-lg-6 col-md-10 col-sm-10 col-12 card">
                            <h2>Ingrediente</h2>
                            <img src="./img/registros_ingrediente.png" alt="">
                        </div>

                    </div>
                </div>



                <div class="row">
                    <div id="#" class="col-xl-12 text-center col-lg-6 col-md-10 col-sm-10 col-12">
                        <h2>Tablas Relacionales</h2>
                        <p>Un ingrediente puede estar en muchas pizzas y una pizza puede tener muchos ingredientes, luego nos surge una tabla relacional de INGREDIENTE_PIZZA</p>
                        <p>En otro apartado, bajo interfaz, nos dedicaremos a insertar nuevas pizzas con sus ingredientes.</p>
                    </div>
                </div>


                <div class="row">
                    <div id="#" class="col-xl-12 text-center col-lg-6 col-md-10 col-sm-10 col-12">
                        <h2>Creación de Pizzas con interface</h2>
                        <p>Un ingrediente puede estar en muchas pizzas y una pizza puede tener muchos ingredientes, luego nos surge una tabla relacional de INGREDIENTE_PIZZA</p>
                        <p>En otro apartado, bajo interfaz, nos dedicaremos a insertar nuevas pizzas con sus ingredientes.</p>
                    </div>
                </div>

                <div class="row">
                    <div id="#" class="col-xl-6 text-center col-lg-6 col-md-10 col-sm-10 col-12">
                        <?php
                        $href = './interfafe_insert_pizzas.php';
                        $src = './img/insert_pizzas.png';
                        $alt = 'Imagen de ejemplo';
                        $h3 = 'Inputs';
                        $p = 'Todos los inputs de html.';
                        include './../bloques/card.php'; ?>
                    </div>



                    <div id="#" class="col-xl-6 text-center col-lg-6 col-md-10 col-sm-10 col-12 card">
                        <?php include 'pre_create_table_ingrediente_pizza.PHP' ?>
                    </div>


                </div>


                <div style="margin-top: 2em; margin-bottom: 2em; ">
                    <p>Para mostrar las tablas de la base de datos:
                        <br><strong>SHOW TABLES;</strong>
                    </p>
                    <!--<img src="./img/show_databases.png" alt="">-->
                </div>

            </div>

            <div id="#" class="col-xl-3 text-center col-lg-6 col-md-10 col-sm-10 col-12 ">
                <?php
                $href = "https://www.amazon.es/ACEMAGIC-Ordenador-Port%C3%A1til-Retroilluminata-6-Teclado/dp/B0CSVKY77T?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&content-id=amzn1.sym.13ac6851-f95c-49d6-8eef-d85df772b6fa%3Aamzn1.sym.13ac6851-f95c-49d6-8eef-d85df772b6fa&cv_ct_cx=portatiles&dib=eyJ2IjoiMSJ9.W7Ccb8HLKXwjmnarn8PNj0YTGXmeOzbRh6CR4Xvg3AmoLnpIujI1PfIDnx0faVjSjNc1KtxkItEpQLcaJstvrQ.SpYAQ5fgJUGte0KA90QIuMwWSyG0URhsnQ022ODMsHM&dib_tag=se&keywords=portatiles&pd_rd_i=B0CSVKY77T&pd_rd_r=142ca2b7-cd55-4e85-acf7-6a1ee461938d&pd_rd_w=S3XUx&pd_rd_wg=6AGmy&pf_rd_p=13ac6851-f95c-49d6-8eef-d85df772b6fa&pf_rd_r=QBR42KW02AG4AT4X2C20&qid=1718270945&sbo=RZvfv%2F%2FHxDF%2BO5021pAnSA%3D%3D&sr=1-1-a1aca6a1-078c-4f7f-b084-1addcab873fb-spons&ufe=app_do%3Aamzn1.fos.5e544547-1f8e-4072-8c08-ed563e39fc7d&sp_csd=d2lkZ2V0TmFtZT1zcF9zZWFyY2hfdGhlbWF0aWM&psc=1&linkCode=ll1&tag=adrian8204-21&linkId=bf088baafe157ad94e1ab7357f6db939&language=es_ES&ref_=as_li_ss_tl";
                $src = "https://m.media-amazon.com/images/I/71AlhnxgPHL._AC_SX679_.jpg";
                $alt = "AAA";
                $nombre_producto = "ACEMAGIC Ordenador Portátil Gaming AMD Ryzen 7 5700U(Batería i7-1265U),Tastiera Retroilluminata,RAM 16GB NVME SSD 512GB,Gráficos Radeon RX Vega 8,16,1";
                $price = "";
                require './../bloques/anuncios_derecha.php' ?>


                <?php
                $href = "https://www.amazon.es/Acer-Nitro-AN515-46-R082-Ordenador-Operativo/dp/B0CN78NHDF?pd_rd_w=qXemV&content-id=amzn1.sym.f11fe75a-7397-412e-9b90-7e09bf6f5c14&pf_rd_p=f11fe75a-7397-412e-9b90-7e09bf6f5c14&pf_rd_r=HCR2XZ42S8Z77THNY8YB&pd_rd_wg=L6lAp&pd_rd_r=9ca0986d-b443-4861-b62f-d9631f1725bf&pd_rd_i=B0CN78NHDF&linkCode=ll1&tag=adrian8204-21&linkId=c625dc386a8aa4e47e759e793b8e3710&language=es_ES&ref_=as_li_ss_tl";
                $src = "https://m.media-amazon.com/images/I/817UbbvTGPL._AC_SX679_.jpg";
                $alt = "AAA";
                $nombre_producto = 'Acer Nitro 5 AN515-46-R082 - Ordenador Portátil Gaming 15.6" Full HD IPS 144Hz (AMD Ryzen 7, 16GB RAM, 512GB SSD, NVIDIA GeForce RTX 3050, Sin Sistema Operativo) Color Negro - Teclado QWERTY Español';
                $price = "";
                require './../bloques/anuncios_derecha.php' ?>

            </div>

        </div>

    </div>


    <div id="#" class="container">
        <div class="row">
            <div id="#" class="col-xl-12 text-center col-lg-6 col-md-10 col-sm-10 col-12 ">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Blog_Programación2024/bloques/footer.php';
                ?></div>
        </div>
    </div>


    <script type="text/javascript" src="https://cdn.diclotrans.com/sdk/v1/31180/af0d219c84b03a7bba793620fffa25689a03ba0d/lib.js"></script>

</body>

</html>