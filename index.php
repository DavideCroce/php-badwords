<?php 

$par = ' E so che tutti state aspettando che io stia qui a paragonare questo film alla merda, ma questa volta non lo farò, ma non perchè sia bello, ma semplicemente perchè, paragonare questo film alla merda sarebbe come INSULTARE LA MERDA STESSA! Che è nobile materia fecale. Vi giuro, questo film è un abisso cinematografico, tu guardi in lui e lui guarda in te, guardare questo film è come spalmarsi i testicoli di miele e andare allo zoo e sdraiarsi a gambe aperte sul fondo della gabbia degli orsi!!';
$title = 'BadWords';
$badword = $_GET['word'];
$sub = str_replace($badword, '***', $par);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <h1>Recensioni by ViktorLazlo88</h1>
    <p>Recensione Left-Behind: <?php echo $par ?></p>
    <hr>
    <p>Recensione Left-Behind (censurata): <?php echo $sub ?></p> 
</body>
</html>