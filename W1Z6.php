<!DOCTYPE html>
<html lang="en">
<?php

function Triangle($liczba1,$liczba2,$liczba3)
{
    $a = $liczba1;
    $b = $liczba2;
    $c = $liczba3;
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo 'Istnieje trójkąt.';
    } else {
        echo 'Trójkąt nie istnieje';
    }
}
?>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form name="form" action="" method="post">
    <input type="text" name="liczba1">
    <input type="text" name="liczba2">
    <input type="text" name="liczba3">
    <input type="submit"/>
</form>

<?php

if (isset($_POST['liczba1']) && isset($_POST['liczba2']) && isset($_POST['liczba3']))
{
    $liczba1= is_numeric($_POST['liczba1']);
    $liczba2 = is_numeric($_POST['liczba2']);
    $liczba3 = is_numeric($_POST['liczba3']);

    if($liczba1 == null||$liczba2 == null||$liczba3 == null){
        echo "błąd";
    }

    echo Triangle($_POST['liczba1'],$_POST['liczba2'],$_POST['liczba3']);
}

?>

</body>
</html>
