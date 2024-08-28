<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = $pdo->prepare("select * from enzo where id=:pid");
    $query->bindParam("pid",$pid);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_ASSOC);
}
?>
<body>
<form method="POST" class="form">
    
    <div class="mb-3">
        
        <label for="" class="form-label">Name</label>
        <input
            type="text"
            name="name"
            class="form-control"
            value = "<?php echo $data['name']; ?>"
        />
        <label for="" class="form-label">Math</label>
        <input
            type="text"
            name="math"
            class="form-control"
             value = "<?php echo $data['math']; ?>"
        />
   
     <label for="" class="form-label">Physics</label>
        <input
            type="text"
            name="physics"
            class="form-control"
             value = "<?php echo $data['physics']; ?>"
        />
        <label for="" class="form-label">Chemistry</label>
        <input
            type="text"
            name="chemistry"
            class="form-control"
             value = "<?php echo $data['chemistry']; ?>"
        />
        <label for="" class="form-label">Urdu</label>
        <input
            type="text"
            name="urdu"
            class="form-control"
             value = "<?php echo $data['urdu']; ?>"
        />
        <label for="" class="form-label">English</label>
        <input
            type="text"
            name="english"
            class="form-control"
             value = "<?php echo $data['english']; ?>"
        />
        </div>
        <button type="submit" name="enter" class="btn btn-primary">Submit</button>
        </form>
        <?php
        if(isset($_POST['enter'])){
            $name = $_POST['name'];
            $math = $_POST['math'];
            $physics = $_POST['physics'];
            $chemistry = $_POST['chemistry'];
            $urdu = $_POST['urdu'];
            $english = $_POST['english'];
            $total = 500;
            $obtain = $math + $physics + $chemistry + $urdu + $english;
            $per = $obtain/$total *100 ;
            $grade = "";
            $remarks = "";
            if(empty($name || $math || $physics || $chemistry || $urdu || $engish)){
                ?>
                <div class="alert alert-danger" role="alert">
    <p>please enter your name</p>
                </div>
                 <?php
          
        }
        else if ($per>=80 && $per<=100){
            
            $grade = "A+";
            $remarks = "Marvelous";
            
        }
        else if ($per>=70 && $per<80){
            
            $grade = "A";
            $remarks = "Excellent";
            
        }
        else if ($per>=60 && $per<70){
            
            $grade = "B";
            $remarks = "Good";
            
        }
        else if ($per>=60 && $per<50){
            
            $grade = "C";
            $remarks = "Fair";
            
        }
        else {
            
            $grade = "F";
            $remarks = "Fail";
            
        }
       $query = $pdo->prepare("insert into enzo (name,math,physics,chemistry,urdu,english,obtain,percentage,grade,remarks) values (:pn,:pm,:pp,:pc,:pu,:pe,:po,:pper,:pg,:pr)
       ");
       $query->bindparam("pn",$name);
       $query->bindparam("pm",$math);
       $query->bindparam("pp",$physics);
       $query->bindparam("pc",$chemistry);
       $query->bindparam("pu",$urdu);
       $query->bindparam("pe",$english);
       $query->bindparam("po",$obtain);
       $query->bindparam("pper",$per);
       $query->bindparam("pg",$grade);
       $query->bindparam("pr",$remarks);
       $query-> execute();
       echo "<script>
       alert('data insert into table')
       </script>";

        ?>
       
        <?php

    }
        ?>
</body>
</html>