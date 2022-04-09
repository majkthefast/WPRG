<!DOCTYPE html>
<html lang="en">
<?php
function Sorter($liczba1,$liczba2,$liczba3)
{

    if ($liczba1 < $liczba2) {
        if ($liczba2 < $liczba3) {
            echo $liczba1 . ' ' . $liczba2 . ' ' . $liczba3 . "\n" . $liczba3 . ' ' . $liczba2 . ' ' . $liczba1;
        } elseif ($liczba1 < $liczba3) {
            echo $liczba1 . ' ' . $liczba3 . ' ' . $liczba2 . "\n" . $liczba2 . ' ' . $liczba3 . ' ' . $liczba1;
        } else {
            echo $liczba3 . ' ' . $liczba1 . ' ' . $liczba2 . "\n" . $liczba2 . ' ' . $liczba1 . ' ' . $liczba3;
        }
    } elseif ($liczba2 < $liczba3) {
        if ($liczba1 < $liczba3) {
            echo $liczba2 . ' ' . $liczba1 . ' ' . $liczba3 . "\n" . $liczba3 . ' ' . $liczba1 . ' ' . $liczba2;
        } else {
            echo $liczba2 . ' ' . $liczba3 . ' ' . $liczba1 . "\n" . $liczba1 . ' ' . $liczba3 . ' ' . $liczba2;
        }
    } else {
        if ($liczba1 < $liczba2) {
            echo $liczba3 . ' ' . $liczba1 . ' ' . $liczba2 . "\n" . $liczba2 . ' ' . $liczba1 . ' ' . $liczba3;
        } else {
            echo $liczba3 . ' ' . $liczba2 . ' ' . $liczba1 . "\n" . $liczba1 . ' ' . $liczba2 . ' ' . $liczba3;
        }
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

    echo Sorter($_POST['liczba1'],$_POST['liczba2'],$_POST['liczba3']);
}

?>

</body>
</html>
