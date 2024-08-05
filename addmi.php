<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <form method="POST">
            <div class="mb-3">
                <label for="" class="form-label">percentage</label>
                <input
                    type="text"
                    name="percentage"
                    id=""
                    class="form-control"
                    placeholder="enter your perentage"
                    aria-describedby="helpId"
                />
            </div>
            <button type="submit" name="check" class="btn btn-primary">Enter</button>
            
        </form>
        <?php
        if(isset($_POST['check'])){
            $per = $_POST['percentage'];
            if(empty($per)){
                ?>
                <div class="alert alert-danger" role="alert">
    <p>please enter your percentage</p>
                </div>
                 <?php
            }
             else if($per>=90 && $per<100){?>
            <div class="alert alert-primary" role="alert">
    <p>you are eligible for all the branches we offer</p>
            </div>
        
           
            
            
            <?php
             }
             else if($per>=80){
                ?>
                <div class="alert alert-primary" role="alert">
<p>you are eligible for eligible for all branches we offer,except pre-med</p>                </div>
             <?php
             }
             else if($per>70){?>
             <div class="alert alert-primary" role="alert">
                <p>you are only eligible for commerce and arts</p>
             </div>
              <?php
             }
             else if ($per>=60){?>
             <div class="alert alert-primary" role="alert">
                <p>you are only eligible for arts</p>
             </div>
             <?php
            }
            else{?>
            <div class="alert alert-primary" role="alert">
                <p>sorry you are illetrate</p>
            </div>
            
            <?php
            }
        }
        ?>
    </div>
</body>
</html>