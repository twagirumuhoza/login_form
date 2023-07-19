<?php
include 'db_conn.php';
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exipence</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
<h2 style="text-align: center;">CCSCE Ltd expenses background</h2>
<div class="container">


</button>
<div class="container">
    <button class="btn btn-primary my-0"><a href="user.php" class="text-light" class="float-right">Add expence</a>

</button>
<table class="table">
  <thead>
    <tr>
       
      <th scope="col">receiver</th>
      <th scope="col">category</th>
      <th scope="col">customer</th>
      <th scope="col">transaction type</th>
      <th scope="col">date</th>
      <th scope="col">amount</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
 
  <tbody>
    <tr>
    <?php
  $sql= "SELECT * FROM expense ";
  $result=mysqli_query($conn,$sql);
  if($result){
 while( $row=mysqli_fetch_assoc($result)){
   
    $receiver=$row['receiver'];
    $category =$row['category'];
    $customer =$row['customer'];
    $transaction =$row['transaction'];
    $date =$row['date'];
    $amount =$row['amount'];
    echo '
    <tr>
   
    <th scope="col">'.$receiver.'</th>
    <th scope="col">'.$category.'</th>
    <th scope="col">'.$customer.'</th>
    <th scope="col">'.$transaction.'</th>
    <th scope="col">'.$date.'</th>
    <th scope="col">'.$amount.'</th>
    <td>
    <button class="btn btn-danger"><a href="del.php?id='.$receiver.'" class="text-light">Delete</a></button>
  </td> 
  </tr>';
 }
}
  ?> 
  
  </tr>
  </tbody>
</table>
</div>
</body>
</html>