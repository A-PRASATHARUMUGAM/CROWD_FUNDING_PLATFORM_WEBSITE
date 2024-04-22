<!DOCTYPE html>
<html>
<head>
    <title>Transplant</title>
    <link rel="stylesheet" href="../css/thankyouP.css">
</head>
<body>
    <center>
        <?php
            // servername => localhost
            // username => root
            // password => empty
            // database name => transplantdetails
            $conn = mysqli_connect("localhost", "root", "", "transplantdetails");

            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }

            // Taking all values from the form data(input)
            $Beneficiariesname= $_REQUEST['Beneficiariesname'];
            $Donatepersonname = $_REQUEST['Donatepersonname'];
            $Donatepersonemail = $_REQUEST['Donatepersonemail'];
            $Amount = isset($_REQUEST['Amount']) ? $_REQUEST['Amount'] : 0; // Default value in case Amount is not set

            // Performing insert query execution
            $sql = "INSERT INTO donatepersondetails (Beneficiariesname, Donatepersonname, Donatepersonemail, Amount) 
                    VALUES ('$Beneficiariesname', '$Donatepersonname', '$Donatepersonemail', '$Amount')";

            if(mysqli_query($conn, $sql)){
                echo "       <img src='../image/bgimage/thankyoufordonation.jpg' alt='Thank You For Donation'>";

            } else{
                echo "ERROR: Could not able to execute $sql. "
                    . mysqli_error($conn);
            }

            // Close connection
            mysqli_close($conn);
        ?>
    </center>
</body>
</html>
