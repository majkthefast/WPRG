<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$tablica1 = array();
$tablica2 = array();
$iloczyn = 0;
for($i = 0; $i < 10; $i++){
    $tablica1[$i] = rand(1,10);
    $tablica2[$i] = rand(1,10);
}
echo 'Tablica 1: ';
for($i=0;$i<10;$i++){
    echo $tablica1[$i].' ';
}
echo '<br>';
echo 'Tablica 2: ';
for($i = 0; $i < 10; $i++){
    echo $tablica2[$i].' ';
}

if (count($tablica1) == count($tablica2) && count($tablica1) != 0 && count($tablica2) != 0){
    for($i = 0; $i < count($tablica1); $i++){
        $iloczyn = $iloczyn + ($tablica1[$i] * $tablica2[$i]);
    }
    echo '<br>';
    echo 'Iloczyn skalarny: '.$iloczyn;
}
else{
    echo '<br>';
    echo 'Nie można wykonać iloczynu skalarnego';
}
?>

</body>
</html>
