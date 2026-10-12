<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nom = "mohamed khalil rouissi";
$filiere = "prepa";
$moy = 19.99;
$estboursier = false;
$anneeEtude = 5;

if ($moy >= 10){
    $stat = "Admis(e)";
} else {
    $stat = "Refuseeeeee";
}
?>
<h1>
    statut : <?php echo $stat; ?>
</h1>
<?php
    switch ($filiere){
        case "info":
            $labelfiliere = "informatique";
            $classebadge = "badge-info";
            break;
        case "prepa":
            $labelfiliere = "preparatoire";
            $classebadge = "badge-prepa";
            break;
        default:
            $labelfiliere = "filiere-inconnue";
            $classebadge = "badge-default";
    }
?>
<h1>
    filiere : <?php echo $labelfiliere; ?>
</h1>    
</body>
</html>

