
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // collect value of input field
    $data = $_REQUEST['submit'];

    if (!empty($data)) {
        echo "data is empty";
    } else {
        echo $data;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exipence</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="data.css">
</head>

<body>

    <h2>CCSCE Ltd expenses filling  form</h2>

    <div class="container my-5    ">
        <form action="insert.php" method="post">
         <div class="form-group">
     <label>Receiver</label>
     <input type="text" class="form-control" placeholder="enter receiver name" name="receiver" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Category</label>
        <input type="text" class="form-control" placeholder="enter the category of expense" name="category">
    </div>
    <div class="form-group">
        <label>Customer name</label>
        <input type="text" class="form-control" placeholder="enter customer name" name="customer">
    </div>
    <div class="form-group">
        <label>Transaction type</label>
        <input type="text-box" class="form-control" placeholder="enter the discription of transaction" name="transaction">
    </div>
    <div class="form-group">
        <label>Date</label>
        <input type="date" class="form-control" placeholder="enter the time and date" name="date">
    </div>
    <div class="form-group">
        <label>Amount</label>
        <input type="text" class="form-control" placeholder="enter the amount" name="amount">
    </div>
    <div class="form-group">


    <button type="submit" class="btn btn-primary" name="submit">Save</button>
    </form>
    </div>

</body>

</html>