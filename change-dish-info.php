<?php
    require_once("dbcon-pdo.php");
    
    echo "<pre>";
        print_r($_POST);
    echo "</pre>";

    $id=$_POST['dish_id'];
    $dish=$_POST['textDish'];
    $price=$_POST['textPrice'];
    $address=$_POST['description'];
    
    $image=null;
    $info=null;
    $path=null;
    
    if($_FILES['dish-image']['error']==0)
    {
        $image=$_FILES['dish-image'];
        $info=$image['tmp_name'];
        $path=$image['name'];
        move_uploaded_file($info, "menu-img/".$path);
    }
    //echo $info;
    try
    {
        $dbcon=new PDO('mysql:host='.$GLOBALS['host'].';dbname='.$GLOBALS['dbase'], $GLOBALS['lin'], $GLOBALS['pwd']);
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(isset($image['name']))
        {
            $state=$dbcon->prepare("UPDATE menu SET name=?, photo=?, description=?, price=? WHERE id=?");
            $state->execute(array($dish, $path, $address, $price, $id));
        }
        else
        {
            $state=$dbcon->prepare("UPDATE menu SET name=?, description=?, price=? WHERE id=?");
            $state->execute(array($dish, $address, $price, $id));
        }
    }
    catch(PDOException $e)
    {
        $e->getMessage();
    }
    
    header("Location:admin.php");
?>