<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
 <center>
   <?php
    
    $num1=$_POST['txt1'];
    $num2=$_POST['txt2'];

    function addition()
    {
       $GLOBALS['z']=$GLOBALS['num1']+$GLOBALS['num2'];
    }
   
    if($_POST['Arithmetic']=='Plus')
    {
      addition();
         echo $z;
    }

   function subtraction()
   {
     $GLOBALS['y']=$GLOBALS['num1']-$GLOBALS['num2'];
   }

  if($_POST['Arithmetic']=='Minus')
  {
      subtraction();
      echo $y;
  }
  
  function multiplication()
   {
     $GLOBALS['x']=$GLOBALS['num1']*$GLOBALS['num2'];
   }

  if($_POST['Arithmetic']=='Times')
  {
    multiplication();
    echo $x;
  }
    
  function division()
   {
     $GLOBALS['v']=$GLOBALS['num1']/$GLOBALS['num2'];
   }

  if($_POST['Arithmetic']=='Divide')
  {
     division();
      echo $v;  
  }
 ?>
 </center>
</body>
</html>