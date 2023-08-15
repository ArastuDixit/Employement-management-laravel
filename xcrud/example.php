<?php
    include('xcrud/xcrud.php');
    $xcrud = Xcrud::get_instance();
    //$xcrud->table('products');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Some page title</title>
</head>
 
<body>
 
<?php
    $xcrud->table('countrys');
    $xcrud->columns('id');

    echo $xcrud->render();


?>
 
</body>
</html>