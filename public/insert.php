<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <?php
 
 include "db_conn.php";

     if(isset($_POST["submit"])){
        // if(!empty($_POST['name']) 
        // && !empty($_POST['email']) 
        // && !empty($_POST['age']) 
        // && !empty($_POST['address'])
    if(!empty($_POST['cDate']) 
    && !empty($_POST['ccName']) 
    && !empty($_POST['cName']) 
    && !empty($_POST['cAddress'])
    && !empty($_POST['cState']) 
    && !empty($_POST['cPostcode']) 
    && !empty($_POST['cCountry'])
    && !empty($_POST['cPhone']) 
    && !empty($_POST['cMobile']) 
    && !empty($_POST['cEmail'])
    && !empty($_POST['cWebsite']) 
    && !empty($_POST['cABN']) 

    && !empty($_POST['jType']) 
    && !empty($_POST['oNumber']) 
    && !empty($_POST['jNumber'])
    && !empty($_POST['siteName']) 
    && !empty($_POST['siteAddress']) 
    && !empty($_POST['jState'])
    && !empty($_POST['jPostcode']) 
    && !empty($_POST['dateReq']) 
    
    ){

        // $name = $_POST['name'];
        // $email = $_POST['email'];
        // $age = $_POST['age'];
        // $address = $_POST['address'];
        $cDate = $_POST['cDate'];
        $ccName = $_POST['ccName'];
        $cName = $_POST['cName'];
        $cAddress = $_POST['cAddress'];
        $cState = $_POST['cState'];
        $cPostcode = $_POST['cPostcode'];
        $cCountry = $_POST['cCountry'];
        $cPhone = $_POST['cPhone'];
        $cMobile = $_POST['cMobile'];
        $cEmail = $_POST['cEmail'];
        $cWebsite = $_POST['cWebsite'];
        $cABN = $_POST['cABN'];

        $jType = $_POST['jType']; 
        $oNumber = $_POST['oNumber'];
        $jNumber = $_POST['jNumber'];
        $siteName = $_POST['siteName']; 
        $siteAddress = $_POST['siteAddress'];
        $jState = $_POST['jState'];
        $jPostcode = $_POST['jPostcode']; 
        $dateReq = $_POST['dateReq']; 

    $query = "insert into customers (cDate, ccName, cName, cAddress, cState, cPostcode, cCountry, cPhone, cMobile, cEmail, cWebsite, cABN) values('$cDate', '$ccName', '$cName', '$cAddress', '$cState', '$cPostcode', '$cCountry', '$cPhone', '$cMobile', '$cEmail', '$cWebsite', '$cABN')";

    $query1 = "insert into jobs (jType, oNumber, jNumber, siteName, siteAddress, jState, jPostcode, dateReq) values ('$jType', '$oNumber', '$jNumber', '$siteName', '$siteAddress', '$jState', '$jPostcode', '$dateReq')";

    // $query = "insert into form (name, email, age, address) values ('$name', '$email', '$age', '$address')";

    // $query = "insert into customers (cDate, ccName, cName, cAddress) values ('$cDate', '$ccName', '$cName', '$cAddress)";

    $run = mysqli_query($conn, $query);

    $run1 = mysqli_query($conn, $query1);

    if($run){
        echo  "Form Submitted Sucessfully";
    } else {
        echo "Form not submitted";
    }
} else {
    echo "all fields required";
}
     }

     if($run1){
        echo  "Form Submitted Sucessfully";
    } else {
        echo "Form not submitted";
    echo "all fields required";
}
    
        ?>
</body>

</html>