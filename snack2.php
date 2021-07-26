<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php 

$name = $_GET["name"];
$age = $_GET["age"];
$mail = $_GET["mail"];

$access = false;
var_dump($mail);
var_dump(strpos("@",$mail));

if(strlen($name)>3 && strpos('@',$mail)!==false && strpos('.',$mail)!==false && is_numeric($age) ){
    $access = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailll!</title>
</head>
<body>
    <p>
        <?php if($access){
                echo "accesso consentito";
                }
              else{
                  echo "accesso negato";
              } 
        ?>

    </p>    
</body>
</html>