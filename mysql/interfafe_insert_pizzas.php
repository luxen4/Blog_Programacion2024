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
    <h1>Interface</h1>
    <div id="#" class="container">
        <div class="row">

            <div id="#" class="col-xl-9 text-center col-lg-6 col-md-10 col-sm-10 col-12">

                <?php


                if ($_SERVER['SERVER_NAME'] == "localhost") {
                    $host = "localhost";
                    $dbname = "pizzeria";
                    $username = "root";
                    $contrasena = "";


                    /* Quitar este si falla */
                } elseif ($_SERVER['SERVER_NAME'] == "laya.atwebpages.com") {
                    $host = "fdb1030.awardspace.net";
                    $dbname = "3714088_playas";
                    $username = "3714088_playas";
                    $contrasena = "rYPHq8acqd4Y";
                } else {
                    /*  la buena $host="fdb30.awardspace.net";
    $dbname="3714088_proyectoplayas";
    $username="3714088_proyectoplayas";
    $contrasena="villamediana2";  */


                    /* OK para awardspace.com
    $host="fdb30.awardspace.net";
    $dbname="4009740_proyectoplayas";
    $username="4009740_proyectoplayas";
    $contrasena="villamediana2";*/


                    $host = "sql109.epizy.com";
                    $dbname = "epiz_31803423_playas";
                    $username = "epiz_31803423";
                    $contrasena = "rYPHq8acqd4Y";
                }



                try {
                    $gbd = new PDO("mysql:host=$host;dbname=$dbname", $username, $contrasena);
                    // echo "Connected to at successfully.";
                } catch (PDOException $pe) {
                    die("Could not connect to the database $dbname :" . $pe->getMessage());
                }




                /*
FTP---> laya.atwebpages.com   3714088_laya  villamediana2 21  entrando con superlaya50@gmail.com/alberite2
FTP---> laya2.atwebpages.com  4009740_laya misma  villamediana2 21  entrando con superlaya51@gmail.com/alberite2
*/


                // Así para el host

                // Así en local
                /*
                    $dsn = 'mysql:host=localhost;dbname=playas;charset=utf8mb4';  
                    $nombre_usuario = 'root';
                    $contraseña = '';
                    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 
*/

                ?>



                <label for="especialidad">Especialidad:</label>

                <?php
                    function select_especialidad()
                    {
                        try {
                            
                                $host = "localhost";
                                $dbname = "pizzeria";
                                $username = "root";
                                $contrasena = "";
                                try {
                                    $gbd = new PDO("mysql:host=$host;dbname=$dbname", $username, $contrasena);
                                    // echo "Connected to at successfully.";
                                } catch (PDOException $pe) {
                                    die("Could not connect to the database $dbname :" . $pe->getMessage());
                                }
                            $sql = "SELECT * FROM ESPECIALIDAD";
        
                            $result = $gbd->query($sql);
                            //$results = $result->fetchAll(\PDO::FETCH_OBJ);
                            return  $results = $result -> fetchAll(\PDO::FETCH_OBJ);
                        } catch (\PDOException $e) {
                            echo $e->getMessage();
                            throw $e; ?> <script>
                                alert("*");
                            </script><?php
                                    } catch (\Exception $ex) {
                                        throw $ex; ?> <script>
                                alert("*");
                            </script><?php
                                    } finally {
                                        //$gbd = null;
                                    }

                    }

                

                          



                            try {

                                $sql = "SELECT * FROM INGREDIENTE";
            
                                $result2 = $gbd->query($sql);
                                $results2 = $result2->fetchAll(\PDO::FETCH_OBJ);
                                //return  $results = $result -> fetchAll(\PDO::FETCH_OBJ);
                            } catch (\PDOException $e) {
                                echo $e->getMessage();
                                throw $e; ?> <script>
                                    alert("*");
                                </script><?php
                                        } catch (\Exception $ex) {
                                            throw $ex; ?> <script>
                                    alert("*");
                                </script><?php
                                        } finally {
                                            $gbd = null;
                                        }



                                ?>

                <select name="especialidad">
                    <?php $results= select_especialidad(); ?>
                    <option value="">Seleccione</option>
                    <?php foreach ($results as $result) :  ?>
                        <option value=" <?= htmlspecialchars($result->especialidad_name, ENT_QUOTES, 'UTF-8'); ?>"> <?= htmlspecialchars($result->especialidad_name, ENT_QUOTES, 'UTF-8'); ?></option>
                    <?php endforeach; ?>
                </select>

                <select name="ingredientes[]" multiple>
                    <option value="">Seleccione</option>
                    <?php foreach ($results2 as $result2) :  ?>
                        <option value="<?= $result2->ingrediente_name; ?>"><?= $result2->ingrediente_name; ?></option>
                    <?php endforeach; ?>
                </select>

            </div>

            <div id="#" class="col-xl-9 text-center col-lg-6 col-md-10 col-sm-10 col-12">

            </div>


        </div>

    </div>
    <script type="text/javascript" src="https://cdn.diclotrans.com/sdk/v1/31180/af0d219c84b03a7bba793620fffa25689a03ba0d/lib.js"></script>

</body>

</html>