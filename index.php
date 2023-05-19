<?php 

Interface Hewan {  
      public function Makan();  
      public function Bergerak();  
      public function Beranak();  
 }  
   
 class Burung Implements Hewan {  
      public function Makan() {  
           return "Burung makan biji-bijian<br/>";  
      }  
             
      public function Bergerak() {  
           return "Burung bergerak dengan berjalan, terbang dan melompat<br/>";  
      }  
        
      public function Beranak() {  
           return "Burung beranak dengan bertelur<br/>";  
      }  
 }  
   
 class Kambing Implements Hewan {  
      public function Makan() {  
           return "Kambing makan rumput<br/>";  
      }  
             
      public function Bergerak() {  
           return "Kambing bergerak dengan berjalan dan berlari<br/>";  
      }  
        
      public function Beranak() {  
           return "Kambing beranak dengan melahirkan<br/>";  
      }  
 }  
   
 $burung = new Burung;  
 $kambing = new Kambing;  
   
 echo "<b>Perilaku Burung : </b><br/>";  
 echo $burung->Makan();  
 echo $burung->Bergerak();  
 echo $burung->Beranak();  
   
 echo "<br/>";  
 echo "<b>Perilaku Kambing : </b><br/>";  
 echo $kambing->Makan();  
 echo $kambing->Bergerak();  
 echo $kambing->Beranak();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>materi</title>
</head>
<body>

    <form action="index2.php">

        <button type="submit" >pindahke2</button>

</form>

</body>
</html>