<!doctype html>
<html>
<body>
  <h1>Ejercicio 7</h1>

    
    <?php

    header("Content-type: text/html; charset=\"utf-8\"");
    
    $cuenta=0;
    
   if(is_numeric($_GET['numero'])&& $_GET['numero']>=1)
    {
        $numero=$_GET['numero'];
        for($i=1; $i<=$numero;$i++)
        { 
            if($numero / $i == 0)
            { 
              $cuenta++;
            }
        }
        $c=$numero/$i;
          if($cuenta == 2)
          {
             echo"<h3>Es primo.</h3>";}

          else {
            echo"<h3>$numero, $i, $c No es primo </h3>" ;}
                
        
        
    }
    else {
        echo "<h3>Numero no valido.</h3>";
    }
    
    ?>  
    <form>
    Escribe un numero:
    <input name="numero" type="text" placeholder="Numero">
    <input type="submit"value="Aceptar">
    </form>


</body>
</html>