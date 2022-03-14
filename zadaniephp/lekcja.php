<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
     Podaj listę zakupów po przecinku <br> 
    <textarea name="pole" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" name="button">
    </form>

    <?php
       
        if(isset($_POST['button'])){
            $tablica = explode(",",$_POST['pole']);
            $liczba = count($tablica);
            echo "<ol>";
            for($i = 0; $i<$liczba; $i++){
                echo "<li>".$tablica[$i]."</li>" ;
            }
            echo "</ol>";

        }
        
    ?>
    <br> <br>
    <?php
        $suma = 0;
        
        while($suma<100){
            $liczba = rand(1,20);
            $suma = $suma + $liczba;
            echo $liczba;
            if($suma>=100){
                echo " = ".$suma;
            }else{
                echo " + ";
            }



        }
        //echo $suma;

    ?>
<br> <br><br>
        <form action="" method="POST">
        <input type="number" min="5" max="99" value="5" name="liczbaa" />
        <input type="submit" name="button1">
        </form>
        
    <?php
    $liczba1 = $_POST['liczbaa'];
    if(isset($_POST['button1']){
        
    }


    ?>

</body>
</html>