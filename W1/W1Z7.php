<!DOCTYPE html>
<html lang="en">
<?php

function Month($liczba)
{
    if ($liczba > 12 || $liczba <= 0) {
        echo "Błąd";
    }
    else {
        switch ($liczba) {
            case 1:
                echo "Styczeń ma 31 dni";
                break;
            case 2:
                echo "Luty ma 28 dni";
                break;
            case 3:
                echo "Marzec ma 31 dni";
                break;
            case 4:
                echo "Kwiecień ma 30 dni";
                break;
            case 5:
                echo "Maj ma 31 dni";
                break;
            case 6:
                echo "Czerwiec ma 30 dni";
                break;
            case 7:
                echo "Lipiec ma 31 dni";
                break;
            case 8:
                echo "Sierpień ma 31 dni";
                break;
            case 9:
                echo "Wrzesień ma 30 dni";
                break;
            case 10:
                echo "Październik ma 31 dni";
                break;
            case 11:
                echo "Listopad ma 30 dni";
                break;
            case 12:
                echo "Grudzień ma 31 dni";
                break;
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
    <input type="text" name="liczba">
    <input type="submit"/>
</form>

<?php
if (isset($_POST['liczba'])){
    echo Month(($_POST['liczba']));
}

?>

</body>
</html>
