<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet08 Exercice03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-11 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet08 Exercice03</h1>
            <h2 class="col-12 text-info text-center">Afficher la date du jour avec le jour de la semaine en lettres, 
            en chiffres, le mois en lettres et l'année. Ex : Wednesday 23 June 2021</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php 
                echo 'Today we are on : '. date('l d F Y');
            ?>
        </div>
    </div>
</body>
</html>