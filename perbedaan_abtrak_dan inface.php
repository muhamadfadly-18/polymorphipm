<?php


//interface

echo "<b>interface</b><br/>";
interface human {
    public function kebiasaan();
    public function hobi();
    public function makanan();
}
class giblar implements human {
    public function kebiasaan(){
    return "kebiasaan : main hp sambil tiduran</br>";
}

public function hobi(){
    return "Hobbi : melamun </br>";
}
public function makanan(){
    return "makanan : roti abon</br>";
}

}

class yoga implements human {
    public function kebiasaan(){
    return " kebiasaan : makan beras mentah</br>";
}

public function hobi(){
    return "hobbi : mancing </br>";
}
public function makanan(){
    return " makanan : salmon</br>";
}

}


class fadly implements human {
    public function kebiasaan(){
    return "kebiasaan : tersenyum sambil makan</br>";
}

public function hobi(){
    return "Hobbi : cukur rambut</br>";
}
public function makanan(){
    return "makanan : kakap</br>";
}
}


$giblar = new giblar;
$yoga = new yoga;
$fadly = new fadly;

echo "<b>perilaku giblar : </b></br>";
echo $giblar->kebiasaan();
echo $giblar->hobi();
echo $giblar->makanan();

echo "</br>";
echo "<b>perilaku yoga : </b></br>";
echo $yoga->kebiasaan();
echo $yoga->hobi();
echo $yoga->makanan();

echo "</br>";
echo "<b>perilaku fadly : </b></br>";
echo $fadly->kebiasaan();
echo $fadly->hobi();
echo $fadly->makanan();

echo "</br>";




//abstrac
echo "<b>abstrac</b><br/>";
abstract class Hewan {  
      abstract public function Makan();  
      abstract public function Bergerak();  
      abstract public function Beranak();  
 }  
   
 class ayam extends Hewan {  
      public function Makan() {  
           return "ayam makan puur<br/>";  
      }  
             
      public function Bergerak() {  
           return "ayam bergerak dengan berjalan<br/>";  
      }  
        
      public function Beranak() {  
           return "ayam beranak dengan bertelur<br/>";  
      }  
 }  
   
 class kucing extends Hewan {  
      public function Makan() {  
           return "kucing makan daging<br/>";  
      }  
             
      public function Bergerak() {  
           return "kucing bergerak dengan berjalan dan berlari<br/>";  
      }  
        
      public function Beranak() {  
           return "kucing beranak dengan melahirkan<br/>";  
      }  
 }  
   
 $ayam = new ayam;  
 $kucing = new kucing;  
   
 echo "<b>Perilaku ayam : </b><br/>";  
 echo $ayam->Makan();  
 echo $ayam->Bergerak();  
 echo $ayam->Beranak();  
   
 echo "<br/>";  
 echo "<b>Perilaku kucing : </b><br/>";  
 echo $kucing->Makan();  
 echo $kucing->Bergerak();  
 echo $kucing->Beranak();



 //perbedaan nya yaitu penulisan implements kalau interface yaitu menggunakan implements,dan tidak bisa menggunakan extends,begitu juga dengan abstrac itu menggunakan extends,dan tidak bisa menggunakan implements

 //kalau abstrac itu method nya menggunakan property abstrac,dan kalau interface itu tidak ush menggunkanan jadi langsusng seperti : public function.

 //kalau abstrac itu adalah sebuah class dan kalau interface itu bukan termasuk class

 //interface tidak bisa menggunakan 2 method , kalau abstrac itu bisa menggunakan 2 method

 //abstrac harus menggunakan class di awala class sedangkan interface tidak menggunakan nya

 //

