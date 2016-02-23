<html>
  <head>
    <meta charset="utf-8">
    <title>แสดงค่า ramdom 1-52</title>
  </head>
  <body>
    <?php
    for($a==1;$a<53;$a++){ 
$number='0123456789'; 
//$number="ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
for($i==1;$i<2;$i++){ 
  $random=rand(0,strlen($number)-1); 

  $cut_txt=substr($number,$random,1); 
  $result.=substr($number,$random,1); 
  $number=str_replace($cut_txt,'',$number); 
}

$i=0; 
echo $result."<br>"; 
$result=''; 
}
     ?>
  </body>
</html>
