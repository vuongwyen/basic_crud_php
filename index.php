<?php
include 'connect.php';
if(!$con){
    die(mysqli_errno($con));
}
$sql = "SELECT * FROM diem";
$query= mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Students</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary">
            <a href="create.php" class="text-light">Add student</a>
        </button>
        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>ID</th>
                    <th>FullName</th>
                    <th>Grade</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($query){
                    while($row = mysqli_fetch_assoc($query)){
                        $stt = $row['stt'];
                        $msv = $row['msv'];
                        $hoten = $row['hoten'];
                        $diem = $row['diem'];
                        echo '<tr>
                            <td scope="row">'.$stt.'</td>
                            <td>'.$msv.'</td>
                            <td>'.$hoten.'</td>
                            <td>'.$diem.'</td>
                            <td>
                                <button class="btn btn-success"><a href="update.php?updatestt='.$stt.'" class="text-light">Update</a></button>
                                <button class="btn btn-danger"><a href="delete.php?deletestt='.$stt.'" class="text-light">Delete</a></button>
                            </td>
                        </tr>';
                    }
                }?>
            </tbody>
        </table>
    </div>
</body>
</html>