<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Imię: <input type="text" name="fstName">
    <br>
    Nazwisko: <input type="text" name="surName">
    <br>
    Karta kredytowa: <input type="text" name="card">
    <br>
    E-mail: <input type="email" name="email" id="email">
    <br>
    Dostawka: <select name="bed"><option >nie</option><option >tak</option></select>
    <br>
    AC : <select  name="AC"><option >nie</option><option >tak</option></select>
    <br>
    Data: <input type="date" name="date" id="date">
    <br>
    Liczba gości:<select name="number">
        <option value="1">
            1
        </option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <input type="submit" name='submit' value="przeslij" />
</form>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $number=$_POST['number'];
    $data = $_POST['date'];
    $bed=$_POST['bed'];
    $ac=$_POST['AC'];
    $name = $_POST['fstName'];
    if (empty($name)) {
        echo "Name is empty";
        echo('<br>');
    } else {
        echo("imie: $name");
        echo('<br>');
    }

    $surName = $_POST['surName'];
    if (empty($surName)) {
        echo "Surname is empty";
        echo('<br>');
    } else {
        echo("nazwisko: $surName");
        echo('<br>');
    }

    $card = $_POST['card'];
    if (empty($card)) {
        echo "Proszę wypełnić dane karty kredytowej";
        echo('<br>');
    } else {
        echo("card: $card");
        echo('<br>');
    }

    $email = $_POST['email'];
    if (empty($email)) {
        echo "Proszę wypełnić dane email";
        echo('<br>');
    } else {
        echo ("email: $email");
        echo('<br>');
    }

    if($bed=="nie"){
        echo("Dostawka: nie <br>");
    }
    else{
        echo("Dostawka: tak <br>");
    }

    if($ac=="nie"){
        echo("AC: nie <br>");
    }
    else{
        echo("AC: tak <br>");
    }

    echo ("data: $data");
    echo('<br>');

    echo("Liczba gości : ");
    switch ($number) {
        case 1:
            echo "1";
            break;
        case 2:
            echo "2";
            break;
        case 3:
            echo "3";
            break;
        case 4:
            echo "4";
            break;
    }

}
?>



</body>
</html>