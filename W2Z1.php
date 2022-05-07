<?php
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkOperation($operator)
    {
        switch($operator)
        {
            case '+':
                return $this->a + $this->b;
                break;

            case '-':
                return $this->a - $this->b;
                break;

            case '*':
                return $this->a * $this->b;
                break;

            case '/':
                return $this->a / $this->b;
                break;
        }
    }
    function getResult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkOperation($c);
    }
}

$z1 = new calculator();
if(isset($_POST['submit']))
{
    $result = $z1->getResult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<form method="post">
        <tr>
            <td><?php echo $result; ?></td>
        </tr>
        <tr>
            <td><input type="text" name="n1"></td>
        </tr>

        <tr>
            <td><input type="text" name="n2"></td>
        </tr>

        <tr>
            <td><select name="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="                =                "></td>
        </tr>

    </table>
</form>