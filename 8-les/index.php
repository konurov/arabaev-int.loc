<?php
//var_dump($_GET);
//var_dump($_POST). '<br>';

//echo $_GET['name'] . '<br>';
//echo $_GET['email'] . '<br>';
//isset()
//empty()

//echo $x;

/*$x = 0;
if (isset($x)) {
    echo 'Переменная существует';
} else {
    echo 'Переменная не существует';
}*/

/*$x = 5;
if (!empty($x)) {
    echo 'Переменная пуста';
} else {
    echo 'Переменная не пуста';
}*/

if(!empty($_POST['ageer'])) {
    echo var_dump($_POST);
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="e-mail">
        <select name="age[]" multiple>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="checkbox" name="ageer" >
        <input type="submit" value="Submit">
        
    </form>
</body>
</html>