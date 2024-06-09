<?php
session_start();
include("C:\Users\BROTHERS\Desktop\assignment4\main.php");

if (isset($_POST["registerBtn"])) {
  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["password"];
$namePattern= "/^[a-zA-Z]{5,20}$/";

  if (!preg_match($namePattern,$name)) {
    header("location:register.php?message= name is invalid");
    exit();
  }

if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
  header("location:register.php?message=email is invalid");
  exit();
}
$passwordPattern="/^(?=.*?[0-9]).{8,}$/";
if (!preg_match($passwordPattern,$password)) {
  header("location:register.php?message=password is invalid");
  exit();
}


$hashedPassword=password_hash($password,PASSWORD_DEFAULT);
$query="insert into userz(name,email,password) values(:name,:email,:password)";
$querySql=$connection->prepare($query);
$querySql->bindParam(":name",$name,PDO::PARAM_STR);
$querySql->bindParam(":email",$email,PDO::PARAM_STR);
$querySql->bindParam(":password",$hashedPassword,PDO::PARAM_STR);

$querySql->execute();


$_SESSION["registerId"]=$connection->lastInsertId();
header("location:profile.php?message=registeration is successful");
exit();

}



if (isset($_POST["iceBtn"])) {
  header("location:ice.php");
  exit();
}

if (isset($_POST["cacaBtn"])) {
  header("location:caca.php");
  exit();
}

if (isset($_POST["pizzaBtn"])) {
  header("location:pizza.php");
  exit();
}


if (isset($_POST["dessertBtn"])) {
  header("location:dissert.php");
  exit();
}

if (isset($_POST["sunBtn"])) {
  $dish="sun ice cream";
  $amount=$_POST["sun_dish"];
  $float=(float)$amount;
  $price=150;
  $total=$price * $float;
$id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish','$amount','$price','$total','$id')";
$querySql4=$connection->prepare($query);
$querySql4->execute();
header("location:ice.php?message=done");
exit();


}


if (isset($_POST["strawBtn"])) {
  $dish2="strawbetty ice cream";
  $amount2=$_POST["straw"];
  $float2=(float)$amount2;
  $price2=200;
  $total2=$price2 * $float2;
  $id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish2','$amount2','$price2','$total2','$id')";
  $querySql3=$connection->prepare($query);
$querySql3->execute();
header("location:ice.php?message=done2");
exit();

}
if (isset($_POST["alBtn"])) {
  $dish3="almond ice cream";
  $amount3=$_POST["almond"];
$float3=(float)$amount3;
$price3=86;
$total3=$price3 * $float3;
$id=$_SESSION["registerId"];
$query="insert into orders(dish,amount,price,total,user) values('$dish3','$amount3','$price3','$total3','$id')";
$querySql4=$connection->prepare($query);
$querySql4->execute();
header("location:ice.php?message=done3");
exit();

}



if (isset($_POST["pappaBtn"])) {
  $dish4="papparoni pizza";
  $amount4=$_POST["pappa"];
  $float4=(float)$amount4;
  $price4=120;
  $total4=$price4 * $float4;
  $id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish4','$amount4','$price4','$total4','$id')";
$querySql5=$connection->prepare($query);
$querySql5->execute();
header("location:pizza.php?message=done4");
exit();
}




if (isset($_POST["marBtn"])) {
  $dish5="margherita pizza";
  $amount5=$_POST["mar"];
  $float5=(float)$amount5;
  $price5=95;
  $total5=$price5 * $float5;
  $id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish5','$amount5','$price5','$total5','$id')";
$querySql6=$connection->prepare($query);
$querySql6->execute();
header("location:pizza.php?message=done5");
exit();
}





if (isset($_POST["bbqBtn"])) {
  $dish6="BBQ chicken pizza";
  $amount6=$_POST["bbq"];
  $float6=(float)$amount6;
  $price6=150;
  $total6=$price6 * $float6;
  $id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish6','$amount6','$price6','$total6','$id')";
$querySql7=$connection->prepare($query);
$querySql7->execute();
header("location:pizza.php?message=done6");
exit();
}




if (isset($_POST["hawaiBtn"])) {
  $dish7="Hawaiian Pizza";
  $amount7=$_POST["hawai"];
  $float7=(float)$amount7;
  $price7=125;
  $total7=$price7 * $float7;
  $id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish7','$amount7','$price7','$total7','$id')";
$querySql8=$connection->prepare($query);
$querySql8->execute();
header("location:pizza.php?message=done7");
exit();
}




if (isset($_POST["aliBtn"])) {
  $dish8="Omm ali";
  $amount8=$_POST["ali"];
  $float8=(float)$amount8;
  $price8=123;
  $total8=$price8 * $float8;
  $id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish8','$amount8','$price8','$total8','$id')";
$querySql9=$connection->prepare($query);
$querySql9->execute();
header("location:dissert.php?message=done8");
exit();
}




if (isset($_POST["tirBtn"])) {
  $dish9="Tiramisu";
  $amount9=$_POST["tir"];
  $float9=(float)$amount9;
  $price9=200;
  $total9=$price9 * $float9;
  $id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish9','$amount9','$price9','$total9','$id')";
$querysQl=$connection->prepare($query);
$querysQl->execute();
header("location:dissert.php?message=done9");
exit();
}





if (isset($_POST["fakBtn"])) {
  $dish11="fāḵūra";
  $amount11=$_POST["fakura"];
  $float11=(float)$amount11;
  $price11=100;
  $total11=$price11 * $float11;
  $id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish11','$amount11','$price11','$total11','$id')";
$querysQl1=$connection->prepare($query);
$querysQl1->execute();
header("location:dissert.php?message=done10");
exit();
}




if (isset($_POST["konBtn"])) {
  $dish12="konafaa";
  $amount12=$_POST["konafaa"];
  $float12=(float)$amount12;
  $price12=210;
  $total12=$price12 * $float12;
  $id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish12','$amount12','$price12','$total12','$id')";
$querysQl2=$connection->prepare($query);
$querysQl2->execute();
header("location:dissert.php?message=done11");
exit();
}



if (isset($_POST["chowBtn"])) {
  $dish13="Fish Chowder Soup";
  $amount13=$_POST["chowder"];
  $float13=(float)$amount13;
  $price13=400;
  $total13=$price13 * $float13;
  $id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish13','$amount13','$price13','$total13','$id')";
$querysQl3=$connection->prepare($query);
$querysQl3->execute();
header("location:caca.php?message=done12");
exit();
}




if (isset($_POST["goulshBtn"])) {
  $dish14="Goulash soup";
  $amount14=$_POST["goulash"];
  $float14=(float)$amount14;
  $price14=320;
  $total14=$price14 * $float14;
  $id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish14','$amount14','$price14','$total14','$id')";
$querysQl4=$connection->prepare($query);
$querysQl4->execute();
header("location:caca.php?message=done13");
exit();
}




if (isset($_POST["garlicBtn"])) {
  $dish15="Creamy sea food Garlic Soup";
  $amount15=$_POST["garlic"];
  $float15=(float)$amount15;
  $price15=380;
  $total15=$price15 * $float15;
  $id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish15','$amount15','$price15','$total15','$id')";
$querysQl5=$connection->prepare($query);
$querysQl5->execute();
header("location:caca.php?message=done14");
exit();
}






if (isset($_POST["seaBtn"])) {
  $dish16="Sea food soup";
  $amount16=$_POST["seaFood"];
  $float16=(float)$amount16;
  $price16=300;
  $total16=$price16 * $float16;
  $id=$_SESSION["registerId"];
  $query="insert into orders(dish,amount,price,total,user) values('$dish16','$amount16','$price16','$total16','$id')";
$querysQl6=$connection->prepare($query);
$querysQl6->execute();
header("location:caca.php?message=done15");
exit();
}


if (isset($_POST["loginBtn"])) {
  $email=$_POST["userEmail"];
  $password=$_POST["userPassword"];

$query="select * from userz where email= :email";
$querySql=$connection->prepare($query);
$querySql->bindParam(":email",$email,PDO::PARAM_STR);
$querySql->execute();
$fetchedDaTa=$querySql->fetch(PDO::FETCH_ASSOC);

if (!$fetchedDaTa || !password_verify($password,$fetchedDaTa["password"])) {
  header("location:login.php?message=perhaps email or password is invaild");
  exit();
}

header("location:profile.php?message=login went successful");
exit();



}






?>