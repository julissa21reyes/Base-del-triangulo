
<?php
include ("./includes/class.Triangulo.php");
  
$triangulo = new triangulo(NULL);
  
echo $triangulo->get_form_transporte_area();
  
if(isset($_POST['guardar'])){
   echo "El area del triangulo es " . $triangulo->area($_POST['base'], $_POST['altura']);
}
  
echo $triangulo->get_form_transporte_perimetro();
  
if(isset($_POST['guardarP'])){
   echo "El perimetro del triangulo es " . $triangulo->perimetro($_POST['lado1'], $_POST['lado2'], $_POST['lado3']);
  
}
      
?> 
