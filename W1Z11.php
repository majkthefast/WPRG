<!DOCTYPE html>
<html lang="en">
<?php
function isPangram($input)
{
    $alphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    $array = str_split($input);
    foreach ($array as $char) {
        if (ctype_alpha($char)) {
            if (ctype_upper($char)) {
                $char = strtolower($char);
            }
            $key = array_search($char, $alphabet);
            if ($key !== false) {
                unset($alphabet[$key]);
            }
        }
    }
    if (!$alphabet) {
        echo "to pangram";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
echo isPangram("The quick brown fox jumps over the lazy dog");
echo "\n";
?>


</body>
</html>
