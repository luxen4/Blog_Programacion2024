<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="e148bdbc89c019bd06122ab7bd08a8be" />
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./../css/styles.css">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9695238706576343" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./../css/styles.css">
</head>

<body>
<?php include './../constantes.php'; ?>
<?php $href='./../' ?>
<?php include $_SERVER['DOCUMENT_ROOT'].NOMBRE_PROYECTO.'/bloques/barra_navegacion.php'; ?>

    <div id="#" class="container">
        <div class="row">

            <div id="#" class="col-xl-9 text-center col-lg-6 col-md-10 col-sm-10 col-12 ">

            <h1>JOINS</h1>

            <?php 
            $h4='INNER JOIN';
            $p="Retrieves records with 
            matching values in both 
            tables.";
            $strong='SELECT 
            * FROM A 
            INNER JOIN B ON A.key = B.key;';
            $src='img/inner_join.png';
            $alt='';
            include 'apartado.php'; ?>

            <?php 
            $h4='LEFT JOIN';
            $p="Retrieves all records from the
             left table and matching 
             records from the right table.";
            $strong='SELECT * 
            FROM A 
            LEFT JOIN B ON A.key = B.key;';
            $src='img/left_join.png';
            $alt='';
            include 'apartado.php'; ?>

            <?php 
            $h4='LEFT JOIN with NULL Check';
            $p="Filters only records where 
            there is no match in the right 
            table (NULL values).";
            $strong='SELECT * FROM A 
            LEFT JOIN B ON A.key = B.key
            WHERE B.key IS NULL;';
            $src='img/left_join_with_null_check.png';
            $alt='';
            include 'apartado.php'; ?>

<?php 
            $h4='RIGHT JOIN';
            $p="Retrieves all records from the right
             table and matching records 
             from the left table.";
            $strong='SELECT * FROM A 
            RIGHT JOIN B ON A.key = B.key;';
            $src='img/right_join.png';
            $alt='';
            include 'apartado.php'; ?>

<?php 
            $h4='RIGHT JOIN with NULL Check';
            $p="Filters only the records where 
            there is no match in the left table (NULL values).";
            $strong='SELECT * 
            FROM A 
            RIGHT JOIN B ON A.key = B.key
            WHERE A.key IS NULL;';
            $src='img/right_join_with_null_check.png';
            $alt='';
            include 'apartado.php'; ?>


<?php 
            $h4='FULL JOIN';
            $p="Retrieves all records 
            when there is a match in either the 
            left or right table.";
            $strong='SELECT * 
            FROM A 
            FULL OUTER JOIN B ON A.key = B.key;';
            $src='img/full_join.png';
            $alt='';
            include 'apartado.php'; ?>

<?php 
            $h4='FULL JOIN with NULL Check';
            $p="Filters only the records where 
            there is no match in either the 
            left or right table (NULL values in either).";
            $strong='SELECT * 
            FROM A FULL OUTER JOIN B ON 
            A.key = B.key WHERE A.key IS
            NULL OR B.key is NULL;';
            $src='img/full_join_with_null_check.png';
            $alt='';
            include 'apartado.php'; ?>
           
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

        <?php include './../bloques/footer.php'; ?>

        <script type="text/javascript" src="https://cdn.diclotrans.com/sdk/v1/31180/af0d219c84b03a7bba793620fffa25689a03ba0d/lib.js"></script>

</body>

</html>