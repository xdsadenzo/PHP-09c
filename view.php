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
</head>
<body>
    
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
            <?php
            $query = $pdo->query("select * from enzo");
            $row = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($row as $value){
            ?>
                <tr>
                    <!-- <th scope="row"></th> -->
                    <td><?php echo $value['name']; ?></td>
                    <td> <?php echo $value['math']; ?></td>
                    <td><?php echo $value['physics']; ?></td>
                    <td><?php echo $value['chemistry']; ?></td>
                    <td><?php echo $value['urdu']; ?></td>
                    <td><?php echo $value['english']; ?></td>
                    <td><?php echo $value['total']; ?></td>
                    <td><?php echo $value['obtain']; ?></td>
                    <td><?php echo $value['percentage']; ?></td>
                    <td><?php echo $value['grade']; ?></td>
                    <td><?php echo $value['remarks'] ?></td>
                    <td><a href="update.php?id=<?php echo $value['id'] ?>" class="btn-success">EDIT</a></td>
                    <td><a href="?deleteid=<?php echo $value['id'] ?>" class="btn-danger">DELETE</a></td>
                </tr>
                <?php
                }
                if(isset($_GET['deleteid'])){
                    $id = $_GET['deleteid'];
                    $query = $pdo->prepare("delete from enzo where id = :pid");
                    $query->bindparam("pid",$id);
                    $query->execute();
                    echo "<script>
                    alert('Data deleted Successfully');
                    location.assign('view.php');
                    </script>";


                }
                ?>

            </tbody>
        </table>
</body>
</html>