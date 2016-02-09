<html>
<head><title> แล้วแสดง </title>
<meta charset="utf-8">
</head>
<body background="ow6yxr.png">
    <center>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>

  <?php


    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $sex = $_GET['sex'];
    $bday = $_GET['bday'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $school = $_GET['school'];
    $nameschool = $_GET['nameschool'];
    $nickname = $_GET['nickname'];


    echo "<p>";
    echo "<b>ข้อมูลผู้ใช้ใส่มา</b> <br/><br/>";

    echo "<b>Firstname : </b> $firstname <br/> "  ;

    echo "<b>Lastname :</b> $lastname <br/> " ;

    echo "<b>Nickname :</b> $nickname <br/> " ;

    echo "<b>Sex :</b> $sex <br/> ";

    echo "<b>Birthdate :</b>  $bday  <br/>";
    if($age <= 100 && $age >= 1)
      echo "<b>Age : </b>  $age <br/>";
    else
      echo "Unsuccessful <br/>";

    echo "<b>Address : </b> $address <br/> ";

    if(strlen($phone) == 10)
      echo "<b> Phone : </b> $phone <br/>";
    else
      echo "Unsuccessful <br/>";

    echo "<b>Email : </b> $email <br/> "  ;

    echo "<b>Academy : </b> $nameschool<br/>";


   ?>
   </center>


</body>
</html>
