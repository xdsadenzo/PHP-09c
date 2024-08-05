<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form method="post">
  <div class="mb-3">
    <label for="nameInput" class="form-label">Name</label>
    <input type="text" class="form-control" name="username">
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="useremail">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
    <label for="qualificationInput" class="form-label">qualification</label>
    <input type="text" class="form-control" name="userqualification">
    </div>
  <button type="submit" class="btn btn-primary" name="submitData">Submit</button>
</form>
    </div>
    <?php
    if(isset($_POST['submitData'])){
        $username = $_POST['username'];
        $useremail = $_POST['useremail'];
        $userqualification = $_POST['userqualification'];
        ?>
<table class="table">
    <tr>
        <td><h1><?php echo $username ?></h1></td>
        
        <td><h1><?php echo $useremail ?></h1></td>
        <td><h1><?php echo $userqualification ?></h1></td>
       
    </tr>
</table>
        <?php
    }
    ?>

</body>
</html>