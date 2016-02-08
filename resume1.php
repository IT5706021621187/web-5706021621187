<html>
<head><title> แล้วแสดง </title></head>
<body>
  <?php

    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $sex = $_GET['sex'];
    $birthday = $_GET['birthday'];
    $address = $_GET['address'];
    $email = $_GET['email'];
    echo "<p>";
    echo "<b>ข้อมูลผู้ใช้ใส่มา</b> <br/>";
    echo "Firstname : $firstname <br/> "  ;
    echo "Lastname : $lastname <br/> " ;
    echo "Sex : $sex <br/> ";
    echo "birthday : ";
    if (birthday >= "100") { echo "$birthday ERRER <br/>" ;}
    elseif(birthday >= "60"){ echo "$birthday OVER <br/>";}
    elseif (birthday >="12") {echo "$birthday OK <br/>";}
    else  {echo "$birthday ERRER <br/>";}
    echo "Address : $address <br/> "  ;
    echo "Email : $email <br/> "  ;

   ?>
</body>
</html>
