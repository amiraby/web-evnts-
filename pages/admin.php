<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="/My-Events/events/styles/main_style.css" />
</head>
<body>
  <?php require_once("delete.php"); ?>
  <?php require_once("update.php"); ?>
    <!-- admin contact -->
    <h1>contact admin</h1>
    <br>
    <div class="container ">
<?php
$mysqli = new mysqli('localhost', 'root', '', 'myeventdb') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM contact") or die($mysqli->error);
// pre_r($result);

?>
<div class="row justify-content-center">
<table class="table">
<thead>
<tr>
<th>name</th>
<th>email</th>
<th>message</th>
<th colspan="2">action</th>
</tr>
</thead>
<?php
while($row = $result ->fetch_assoc()):
?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['message']; ?></td>
    <td>
        <a href="updatepage.php?update=<?php echo $row['id'] ; ?>"
         class="btn btn-warning">update</a>
         <a href="delete.php?delete=<?php echo $row['id'] ; ?>"
         class="btn btn-danger">delete</a>
    </td>
</tr>
 <?php endwhile; ?>
</table>
</div>
</div>
<br>
<?php
function pre_r($array ){
echo '<pre>';
print_r($array);
echo '</pre>';
}
?>
</body>
</html>

