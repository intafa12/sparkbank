<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customer</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="css/design.css">

    <style>
        body,
        html {
            height: 100%
        }
    </style>
     <?php
    include "connect.php";
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $str = "Select * from customer where customer_no='$id'";
        $result = mysqli_query($link, $str);
        $row = mysqli_fetch_array($result);
        $acc = $row["account_no"];
    }
    ?>
</head>

<body background="images/trans2.jpg;background-repeat: no-repeat;background-size: cover;height:100%;width:100%">
    <div class=" main my-hide-small ">
        <div class="my-third my-black" style="height: 100%;width: 7%;position: relative;">
        <ul >
                <li  ><a href="index.html"><i class="fa fa-home" aria-hidden="true" style="margin-left:27px;color:cyan"></i><br /><label style="color: cyan;">Home</label></a></li>
                <li><a href="customer.php"><i class="fa fa-users" aria-hidden="true" style="margin-left:20px;color:cyan"></i><br /><label style="color: cyan;">View <br />Customers</label></a></li>
                <li><a href="transaction.php "><i class="fa fa-exchange" aria-hidden="true" style="margin-left:27px;color:cyan"></i><br /><label style="color: cyan;">View <br />Transaction</label></a></li>
                <li><a href="Transfer.php"><i class="fa fa-external-link" aria-hidden="true" style="margin-left:27px;color:cyan"></i><br /><label style="margin-left: 10px;color: cyan; ">Transfer <br /> Money</label></a></li>
                <li><a href="about.php"><i class="fa fa-male" aria-hidden="true" style="margin-left:27px;color:cyan"></i><br /><label style="margin-left: 8px; color: cyan;">About US <br /></label></a></li>
            </ul>
        </div>
        <div class="my-twothird" style="width: 100%;height: 100%;position: relative;">
            <!--header-->
            <div class="my-container  my-padding-24  " style="background-image: url('images/grey.jpg');background-repeat: no-repeat;background-size: cover; height: 13vh;width:100%;border-bottom:2px solid black">
                <h1 class="my-animate-zoom my-text-white">Transfer Money</h1>
            </div>
            <!--body-->
           
            <div class="my-auto my-margin-top">
        

        <br>

        <div class="my-content my-margin-top">
        

        <div class="my-container my-padding-48 my-hide-small">
            <form action="selectamount.php" method="post">
                <div class="my-row" style="max-width: 900px; margin:0 auto">
                    <div class="my-third my-center my-padding">
                        From: <?php
                                if (isset($_GET["id"])) {
                                    echo '<select type="text" name="sender" class="my-padding my-white my-center my-round required" required>';
                                    echo '<option selected>' . $acc . '</option>';
                                    echo '</select>';
                                } else {
                                    echo '<select type="text" name="sender" class="my-padding my-white my-center my-round" required>';
                                    echo '<option value="" disabled="disabled" selected>Select account no.</option>';
                                    $sql2 = mysqli_query($link, "Select account_no from customer");
                                    while ($s1 = mysqli_fetch_array($sql2)) {
                                        echo '<option> ' . $s1[0] . '  </option>';
                                    }
                                    echo '</select>';
                                }
                                ?>
                    </div>
                    <div class="my-third my-center my-padding">
                        To: <?php
                            echo '<select type="text" name="receiver" class="my-padding my-white my-round my-center" required>';
                            echo '<option value="" disabled="disabled" selected>Select account no.</option>';
                            $sql2 = mysqli_query($link, "Select account_no from customer");
                            while ($s1 = mysqli_fetch_array($sql2)) {
                                echo '<option required> ' . $s1[0] . '  </option>';
                            }
                            echo '</select>';
                            ?>
                    </div>
                    <div class="my-third my-center my-padding">
                        <input type="submit" name="submit" value="Proceed >>" style="width: 80%;" class="my-btn my-black my-round butn">
                        <!-- <a href="transfermoney.php" style="width: 80%;" class="my-btn my-black my-round">Proceed >></a> -->
                    </div>
                </div>
            </form>
        </div>

        <div class="my-container my-padding my-hide-large">
            <form action="selectamount.php" method="post">
                <div class="my-row" style="max-width: 900px; margin:0 auto">
                    <div class="my-third my-center">
                        From: <?php
                                if (isset($_GET["id"])) {
                                    echo '<select type="text" name="sender" class="my-padding my-white my-center my-round" required>';
                                    echo '<option selected>' . $acc . '</option>';
                                    echo '</select>';
                                } else {
                                    echo '<select type="text" name="sender" class="my-padding my-white my-center my-round" required>';
                                    echo '<option value="" disabled="disabled" selected>Select account no.</option>';
                                    $sql2 = mysqli_query($link, "Select account_no from customers");
                                    while ($s1 = mysqli_fetch_array($sql2)) {
                                        echo '<option> ' . $s1[0] . '  </option>';
                                    }
                                    echo '</select>';
                                }
                                ?>
                    </div>
                    <div class="my-third my-center my-padding">
                        To: &nbsp;&nbsp;&nbsp; <?php
                                                echo '<select type="text" name="receiver" class="my-padding my-white my-round my-center" required>';
                                                echo '<option value="" disabled="disabled" selected>Select account no.</option>';
                                                $sql2 = mysqli_query($link, "Select account_no from customers");
                                                while ($s1 = mysqli_fetch_array($sql2)) {
                                                    echo '<option> ' . $s1[0] . '  </option>';
                                                }
                                                echo '</select>';
                                                ?>
                    </div>
                    <div class="my-third my-center my-padding">
                        <input type="submit" name="submit" value="Proceed >>" style="width: 40%;" class="my-btn my-black my-round butn">
                        <!-- <a href="transfermoney.php" style="width: 80%;" class="my-btn my-black my-round">Proceed >></a> -->
                    </div>
                </div>
            </form>
        </div>

       <!--  <div class="my-container my-content my-padding my-center">
            <img class="my-hide-small" src="images/undraw_transfer_money_rywa.svg" alt="" style="width: 40%; transform: scaleX(-1);">
            <img class="my-hide-large" src="images/undraw_transfer_money_rywa.svg" alt="" style="width: 50%; transform: scaleX(-1);">

        </div> -->
    </div>

    </div>

            <!--footer-->
            <div class="my-container  footer my-text-white  " style="z-index:999;font-weight:bold;background-image: url('images/grey.jpg');background-repeat: no-repeat;background-size: cover; height: 9vh;width:100%;border-top:2px solid black;">

                <span class="my-animate-zoom">This website is made by: Intafa Parween <br>
                    <i class="fa fa-envelope-o"></i> intafa7867@gmail.com &nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-github"></i>
                    https://github.com/intafa12 &nbsp;&nbsp;&nbsp;&nbsp;

                    <i class="fa fa-linkedin-square"></i>www.linkedin.com/in/intafa-parween &nbsp;&nbsp;&nbsp;&nbsp;
                </span>
            </div>
        </div>
    </div>
    <!--Responsive-->
    <div class="my-hide-large my-responsive">
        <div class=" my-black " style="height: 90%;width: 100%;position: relative;">
            <ul style="display: flex;">
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true" style="margin-left:27px;"></i><br /><label>Home</label></a></li>
                <li><a href="customer.php"><i class="fa fa-users" aria-hidden="true" style="margin-left:20px;"></i><br /><label>View <br />Customers</label></a></li>
                <li><a href="transaction.php "><i class="fa fa-exchange" aria-hidden="true" style="margin-left:27px;"></i><br /><label>View <br />Transaction</label></a></li>
                <li><a href="Transfer.php"><i class="fa fa-external-link" aria-hidden="true" style="margin-left:27px;"></i><br /><label style="margin-left: 10px;">Transfer <br /> Money</label></a></li>
                <li><a href="about.php"><i class="fa fa-male" aria-hidden="true" style="margin-left:27px;"></i><br /><label style="margin-left: 8px;">About US <br /></label></a></li>
            </ul>
        </div>
        <div class=" " style="width: 100%;height: 90%;position: relative;">
            <!--header-->
            <div class="my-container   my-padding-24 " style="background-image: url('images/grey.jpg');background-repeat: no-repeat;background-size: cover; height: 13vh;width:100%;border-bottom:2px solid black">
                <h1 class="my-animate-zoom my-text-white">Transfer Money</h1>
            </div>
            <!--body-->
            
            <!--footer-->
            <div class="  footer my-text-white my-medium  " style="font-weight:bold;background-image: url('images/grey.jpg');background-repeat: no-repeat;background-size: cover; height: 9vh;width:100%;border-top:2px solid black;">

                <span class="my-animate-zoom">This website is made by: Intafa Parween <br>
                    <i class="fa fa-envelope-o"></i> intafa7867@gmail.com &nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-linkedin-square"></i>www.linkedin.com/in/intafa-parween &nbsp;&nbsp;&nbsp;&nbsp;
                    <br /> <i class="fa fa-github"></i>
                    https://github.com/intafa12 &nbsp;&nbsp;&nbsp;&nbsp;
                </span>
            </div>
        </div>
    </div>


    
</body>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>


<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>

</html>