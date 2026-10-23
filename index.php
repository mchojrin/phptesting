<?php

require_once __DIR__.'/src/Calculator.php';
use mchojrin\testing\Calculator;

if (array_key_exists('first_number', $_POST)) {
    $first_number = $_POST['first_number'];
    if (array_key_exists('second_number', $_POST)) {
        $second_number = $_POST['second_number'];

        $result = Calculator::add($first_number, $second_number);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <h1>The Calculator</h1>
    <form method="POST" action="" id="calculator">
        <label for="first_number">First number</label><input type="number" name="first_number" id="first_number"><br>
        <label for="second_number">Second number</label><input type="number" name="second_number" id="second_number"><br>
        <input type="submit" value="Add">
    </form>
    <label for="result">Result: </label><input name="result" id="result" value="<?php echo $result ?? ""; ?>" disabled/>
</html>
