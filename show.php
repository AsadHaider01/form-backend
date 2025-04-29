<?php
include('connect.php');


if(isset($_GET['delete'])){
    $id = $_GET['id'];
    $query3 = "delete from class where id = $id";
     $save = mysqli_query($conn,$query3);
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>DATA PAGE</title>
    
</head>
<body>
    <h1>STUDENT DATA</h1>
    <table class="table table-hover table-bordered d-xl-table-cel align-content-sm-between">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CLASS</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>ACTION</th></th>
            </tr>
        </thead>
        <?php
        $query = "SELECT * FROM class";
       $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['id']?> </td>
                <td><?php echo $row['name']?> </td>
                <td><?php echo $row['class']?> </td>
                <td><?php echo $row['email']?> </td>
                <td><?php echo $row['password']?> </td>
<td> <a href="show.php?id=<?php echo $row['id'] ?>&delete"><i class="fa-solid fa-trash btn btn-danger btn-sm"></i> </a> |
<a href="update.php?id=<?php echo $row['id'] ?>&update"><i class="fa-solid fa-pen-to-square"></i></a></td>


            </tr>
        </tbody>

        <?php
            }    
    ?>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>