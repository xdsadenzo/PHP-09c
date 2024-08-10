<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form method="POST" class="form">
    
    <div class="mb-3">
        
        <label for="" class="form-label">Name</label>
        <input
            type="text"
            name="name"
            class="form-control"
        />
        <label for="" class="form-label">Math</label>
        <input
            type="text"
            name="math"
            class="form-control"
        />
   
     <label for="" class="form-label">Physics</label>
        <input
            type="text"
            name="physics"
            class="form-control"
        />
        <label for="" class="form-label">Chemistry</label>
        <input
            type="text"
            name="chemistry"
            class="form-control"
        />
        <label for="" class="form-label">Urdu</label>
        <input
            type="text"
            name="urdu"
            class="form-control"
        />
        <label for="" class="form-label">English</label>
        <input
            type="text"
            name="english"
            class="form-control"
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
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Math</th>
                    <th scope="col">Physics</th>
                    <th scope="col">Chemistry</th>
                    <th scope="col">Urdu</th>
                    <th scope="col">English</th>
                    <th scope="col">Total Marks</th>
                    <th scope="col">Obtain Marks</th>
                    <th scope="col">Percentage</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- <th scope="row"></th> -->
                    <td><?php echo $name ?></td>
                    <td> <?php echo $math ?></td>
                    <td><?php echo $physics ?></td>
                    <td><?php echo $chemistry ?></td>
                    <td><?php echo $urdu ?></td>
                    <td><?php echo $english ?></td>
                    <td><?php echo $total ?></td>
                    <td><?php echo $obtain ?></td>
                    <td><?php echo $per ?></td>
                    <td><?php echo $grade ?></td>
                    <td><?php echo $remarks ?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    
                </tr>
            </tbody>
        </table>
        <?php

    }
        ?>
</body>
</html>