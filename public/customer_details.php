<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    

 ?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="app.css" />
</head>

<body>
    <tr style="height: 69px">
        <th id="1145866831R0" style="height: 69px;" class="row-headers-background">
            <div class="row-header-wrapper" style="line-height: 69px">

            </div>
        </th>
        <td class="s0"></td>
        <td class="s1">Job / Variations Sheet</td>
        <td></td>
        <td class="s2">
            <div style="width:234px;height:69px;">
                <img src="https://lh5.googleusercontent.com/NVaH7v-8XCz7MsRXyKuJy1oU7WpCaPipXnDo_rHrPOJ6OLZ0C0sJrovNaVOqFfSyULHoj2GUVBtKWHxaDmY3XlJzD_apk-O28cH0Y8k43PDQmQ4AQ2mq0YxLC3TbqlU4TPruW4xF7TScLd6kI5WuFg=w234-h69"
                    style="width:inherit;height:inherit;object-fit:scale-down;object-position:left bottom;" />
            </div>
        </td>
    </tr>
    <form action="insert.php" method="post">
        <!-- <label> Date : </label>
        <input type="text" name="cDate">

        <label> Customer Company Name : </label>
        <input type="text" name="ccName">

        <label> Customer Name : </label>
        <input type="text" name="cName"> <br> <br>

        <label> Address : </label>
        <input type=" text " name="cAddress"> <br> <br>

        <button type=" submit " name="submit">Submit </button> --> -->
        <div class="container">
            <div class="row">
                <div class="col-25">
                    <label>Date: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="cDate" placeholder="Enter date...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label">Customer Company Name: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="ccName" placeholder="Enter customer company name...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Customer Name: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="cName" placeholder="Enter customer name...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Customer Address: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="cAddress" placeholder="Enter customer address..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>State: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="cState" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Postcode: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="cPostcode" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Country: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="cCountry" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Phone: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="cPhone" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Mobile: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="cMobile" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Email: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="cEmail" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Website: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="cWebsite" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>ABN: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="cABN" placeholder="Your last name..">
                </div>
            </div>



            <div class="row">
                <div class="col-25">
                    <label>Job Type: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="jType" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Order Number: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="oNumber" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Job Number: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="jNumber" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Site Name: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="siteName" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Site Address: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="siteAddress" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Job State: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="jState" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Job Postcode: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="jPostcode" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Date Request: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="dateReq" placeholder="Your last name..">
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Submit" name="submit">
            </div>
    </form>



    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    <a href="logout.php">Logout</a>
</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>