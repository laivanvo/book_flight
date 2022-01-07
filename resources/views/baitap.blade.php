
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
use App\Models\SoPhuc;
if(isset($_GET['a']) && isset($_GET['b']))
{
    $a=$_GET['a'];
    $b=$_GET['b'];
    SoPhuc::setab($a,$b);
    SoPhuc::show();
}
?>
<body>
    <form action="" method="GET">
        a=<input type="text" name="a"><br>
        b=<input type="text" name="b">
        <input type="submit" value="tinh">
    </form>
</body>
</html>