<?php
$name ="php Enzo";
// embeding
// echo $name;
$num1 = 13;
$num2 = 10;
//  echo $addresult = $num1 + $num2;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
</head>
<body>
    <h1> <?php echo $name ?>
</h1>
    <!-- <h2> <?php echo $num1 + $num2 ?></h2>
    <h2> <?php echo $num1 - $num2 ?></h2>
    <h2> <?php echo $num1 * $num2 ?></h2>
    <h2> <?php echo $num1 / $num2 ?></h2> -->
    <!-- <?php
    for($i=0;$i<=12;$i++)
        {
            ?>
            <p><?php echo $i  ?></p>
            <?php


        }
        ?> -->
        
       
        <table class="b5">
        <?php 
        for($i=1;$i<=10;$i++){
            ?>
        
  <tr>
    <td><?php echo 2 ?> </td>
    <td><?php echo "*" ?> </td>
    <td><?php echo $i ?> </td>
    <td><?php echo "=" ?> </td>
    <td><?php echo $i*2 ?></td>
  </tr>
  <?php
  
}
?>

</table>

    
    

</body>
</html>