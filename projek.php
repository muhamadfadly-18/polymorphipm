 <?php 

// interface manusia {
//      public function hobbi();
//      public function umur();
//      public function cita_cita();

// }

// class sugiono implements manusia {
//     public function hobbi() {
//         return "sugiono hobbi nya : drama<br/>";
//     }
//     public function umur() {
//         return "sugiono umur nya : 1000000000000 tahun<br/>";
//     }
//     public function cita_cita() {
//         return "sugiono cita-cita nya : artis<br/>";
//     }
// }
// class gunar implements manusia {
//     public function hobbi() {
//         return "gunar hobbi nya : bultang<br/>";
//     }
//     public function umur() {
//         return "gunar umur nya : 100 tahun<br/>";
//     }
//     public function cita_cita() {
//         return "gunar cita-cita nya : atlit<br/>";
//     }
// }

// $sugiono = new sugiono;
// $gunar = new gunar;

// echo "<b>bio data sugiono : </b><br/>";
// echo $sugiono->hobbi();
// echo $sugiono->umur();
// echo $sugiono->cita_cita();

// echo "</br>";
// echo "<b>bio data gunar : </b><br/>";
// echo $gunar->hobbi();
// echo $gunar->umur();
// echo $gunar->cita_cita(); 







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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projek</title>
</head>
<body>

    <form action="index.php">

        <button type="submit" >pindah1</button>

</form>

</body>
</html>