<?php
 
        // servername => "localhost"
        // username => "root"
        // password => "empty"
        // database name => "ttest_db"
        $conn = mysqli_connect("localhost", "root", "", "ttest_db");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        
        $receiver =  $_REQUEST['receiver'];
        $category = $_REQUEST['category'];
        $customer =  $_REQUEST['customer'];
        $transaction = $_REQUEST['transaction'];
        $date = $_REQUEST['date'];
        $amount = $_REQUEST['amount'];
    
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO expense VALUES ('$receiver',
            '$category','$customer','$transaction','$date','$amount')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.";
 
            header('location:display.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>