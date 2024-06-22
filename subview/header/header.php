<?php     
    $self = basename($_SERVER["SCRIPT_FILENAME"], '.php');
    if($self == "index"){
        $self = "KICKS";
    }
    if($self == "winkelwagen"){
        $wwagen = "css/winkelwagen.css";
    }else{
        $wwagen = "";
    }   
 ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $self; ?></title>    
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="<?php echo $wwagen; ?>">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo-kicks.webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    
    <script src="script/main.js" defer></script>   
</head>
<body>
<nav>
    <?php include("topmenu.php"); ?>
    <?php include("menu.php"); ?>
</nav>


