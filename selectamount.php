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
    if (isset($_POST["submit"])) {
        $sender = $_POST["sender"];
        $receiver = $_POST["receiver"];

        $str1 = "Select * from customer where account_no='$sender'";
        $result1 = mysqli_query($link, $str1);
        $row1 = mysqli_fetch_array($result1);
        $acc1 = $row1["account_no"];
        $balance = $row1["current_bal"];

        $str2 = "Select * from customer where account_no='$receiver'";
        $result2 = mysqli_query($link, $str2);
        $row2 = mysqli_fetch_array($result2);
        $acc2 = $row2["account_no"];
    }
    ?>
</head>

<body background="images/trans2.jpg;background-repeat: no-repeat;background-size: cover;height:100%;width:100%">
    <div class=" main my-hide-small ">
        <div class="my-third my-black" style="z-index:999; height: 100%;width: 7%;position: relative;">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true" style="margin-left:27px;color:cyan"></i><br /><label style="color: cyan;">Home</label></a></li>
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
                <br>
                <div class="my-row">
                    <div class="my-half my-container my-border">
                        <p>
                        <h3 style="font-weight: bold;" class="my-center">Sender's Details</h3>
                        </p>
                        <hr class="my-animate-zoom">
                        <div class="my-row">
                            <div class="my-half my-center">
                                <p>
                                    <b>Name:</b> <?php echo $row1["name"] ?>
                                </p>
                            </div>
                            <div class="my-half my-center">
                                <p>
                                    <b>Account No:</b> <?php echo $row1["account_no"] ?>
                                </p>
                            </div>
                        </div>
                        <div class="my-row">
                            <div class="my-half my-center">
                                <p>
                                    <b>Email:</b> <?php echo $row1["email"] ?>
                                </p>
                            </div>
                            <div class="my-half my-center">
                                <p>
                                    <b>Address:</b> <?php echo $row1["address"] ?>
                                </p>
                            </div>
                        </div>
                        <p class="my-center my-padding">
                            <b>Current Balance:</b> ₹<?php echo $row1["current_bal"] ?>
                        </p>
                    </div>



                    <div class="my-half my-container my-border">
                        <p>
                        <h3 style="font-weight: bold;" class="my-center">Receiver's Details</h3>
                        </p>
                        <hr class="my-animate-zoom">
                        <div class="my-row">
                            <div class="my-half my-center">
                                <p>
                                    <b>Name:</b> <?php echo $row2["name"] ?>
                                </p>
                            </div>
                            <div class="my-half my-center">
                                <p>
                                    <b> Account No:</b> <?php echo $row2["account_no"] ?>
                                </p>
                            </div>
                        </div>
                        <div class="my-row">
                            <div class="my-half my-center">
                                <p>
                                    <b>Email:</b> <?php echo $row2["email"] ?>
                                </p>
                            </div>
                            <div class="my-half my-center">
                                <p>
                                    <b>Address:</b> <?php echo $row2["address"] ?>
                                </p>
                            </div>
                        </div>
                        <p class="my-center my-padding">
                            <b>Current Balance:</b> ₹<?php echo $row2["current_bal"] ?>
                        </p>
                    </div>
                </div><br><br>
                <div class="my-container my-padding my-center my-hide-small">
                    <form action="insertmoney.php" method="POST">
                        <input type="text" hidden name="sender" id="" <?php echo 'value="' . $acc1 . '"'; ?>></input>
                        <input type="text" hidden name="receiver" id="" <?php echo 'value="' . $acc2 . '"'; ?>></input>
                        Select Amount To Transfer: <input class="my-padding" type="number" name="amount" id="" min=0 <?php echo 'max="' . $balance . '"'; ?>>
                        <input type="submit" value="Transfer >> " class="butn my-btn my-black my-round my-padding-12" name="submit" style="margin-left: 10px;">
                    </form>
                </div>

                <div class="my-container my-padding my-center my-hide-large">
                    <form action="insertmoney.php" method="POST">
                        <input type="text" hidden name="sender" id="" <?php echo 'value="' . $acc1 . '"'; ?>></input>
                        <input type="text" hidden name="receiver" id="" <?php echo 'value="' . $acc2 . '"'; ?>></input>
                        Select Amount To Transfer: <input class="my-padding" type="number" name="amount" id="" min=0 <?php echo 'max="' . $balance . '"'; ?>>
                        <input type="submit" value="Transfer >> " class="butn my-btn my-black my-round my-padding-12" name="submit" style="margin-left: 10px;">
                    </form>
                    <br><br><br><br><br><br><br>
                </div>

            </div>


            <!--  <div class="my-container my-content my-padding my-center">
            <img class="my-hide-small" src="images/undraw_transfer_money_rywa.svg" alt="" style="width: 40%; transform: scaleX(-1);">
            <img class="my-hide-large" src="images/undraw_transfer_money_rywa.svg" alt="" style="width: 50%; transform: scaleX(-1);">

        </div> -->

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
    <diiv class=" my-responsive my-hide-large">
        <div class=" my-black " style="height: 90%;width: 100%;position: relative;">
            <ul style="display: flex;">
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true" style="margin-left:27px;"></i><br /><label>Home</label></a></li>
                <li><a href="customer.php"><i class="fa fa-users" aria-hidden="true" style="margin-left:20px;"></i><br /><label>View <br />Customers</label></a></li>
                <li><a href="transaction.php "><i class="fa fa-exchange" aria-hidden="true" style="margin-left:27px;"></i><br /><label>View <br />Transaction</label></a></li>
                <li><a href="Transfer.php"><i class="fa fa-external-link" aria-hidden="true" style="margin-left:27px;"></i><br /><label style="margin-left: 10px;">Transfer <br /> Money</label></a></li>
                <li><a href="about.php"><i class="fa fa-male" aria-hidden="true" style="margin-left:27px;"></i><br /><label style="margin-left: 8px;">About US <br /></label></a></li>
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
            <br>
            <div class="my-row">
                <div class="my-half my-container my-border">
                    <p>
                    <h3 style="font-weight: bold;" class="my-center">Sender's Details</h3>
                    </p>
                    <hr class="my-animate-zoom">
                    <div class="my-row">
                        <div class="my-half my-center">
                            <p>
                                <b>Name:</b> <?php echo $row1["name"] ?>
                            </p>
                        </div>
                        <div class="my-half my-center">
                            <p>
                                <b>Account No:</b> <?php echo $row1["account_no"] ?>
                            </p>
                        </div>
                    </div>
                    <div class="my-row">
                        <div class="my-half my-center">
                            <p>
                                <b>Email:</b> <?php echo $row1["email"] ?>
                            </p>
                        </div>
                        <div class="my-half my-center">
                            <p>
                                <b>Address:</b> <?php echo $row1["address"] ?>
                            </p>
                        </div>
                    </div>
                    <p class="my-center my-padding">
                        <b>Current Balance:</b> ₹<?php echo $row1["current_bal"] ?>
                    </p>
                </div>



                <div class="my-half my-container my-border">
                    <p>
                    <h3 style="font-weight: bold;" class="my-center">Receiver's Details</h3>
                    </p>
                    <hr class="my-animate-zoom">
                    <div class="my-row">
                        <div class="my-half my-center">
                            <p>
                                <b>Name:</b> <?php echo $row2["name"] ?>
                            </p>
                        </div>
                        <div class="my-half my-center">
                            <p>
                                <b> Account No:</b> <?php echo $row2["account_no"] ?>
                            </p>
                        </div>
                    </div>
                    <div class="my-row">
                        <div class="my-half my-center">
                            <p>
                                <b>Email:</b> <?php echo $row2["email"] ?>
                            </p>
                        </div>
                        <div class="my-half my-center">
                            <p>
                                <b>Address:</b> <?php echo $row2["address"] ?>
                            </p>
                        </div>
                    </div>
                    <p class="my-center my-padding">
                        <b>Current Balance:</b> ₹<?php echo $row2["current_bal"] ?>
                    </p>
                </div>
            </div><br><br>
            <div class="my-container my-padding my-center my-hide-small">
                <form action="ene.php" method="POST">
                    <input type="text" hidden name="sender" id="" <?php echo 'value="' . $acc1 . '"'; ?>></input>
                    <input type="text" hidden name="receiver" id="" <?php echo 'value="' . $acc2 . '"'; ?>></input>
                    Select Amount To Transfer: <input class="my-padding" type="number" name="amount" id="" min=0 <?php echo 'max="' . $balance . '"'; ?>>
                    <input type="submit" value="Transfer >> " class="butn my-btn my-black my-round my-padding-12" name="submit" style="margin-left: 10px;">
                </form>
            </div>

            <div class="my-container my-padding my-center my-hide-large">
                <form action="insertmoney.php" method="POST">
                    <input type="text" hidden name="sender" id="" <?php echo 'value="' . $acc1 . '"'; ?>></input>
                    <input type="text" hidden name="receiver" id="" <?php echo 'value="' . $acc2 . '"'; ?>></input>
                    Select Amount To Transfer: <input class="my-padding" type="number" name="amount" id="" min=0 <?php echo 'max="' . $balance . '"'; ?>>
                    <input type="submit" value="Transfer >> " class="butn my-btn my-black my-round my-padding-12" name="submit" style="margin-left: 10px;">
                </form>
                <br><br><br><br><br><br><br>
            </div>

        </div>


        <!--  <div class="my-container my-content my-padding my-center">
            <img class="my-hide-small" src="images/undraw_transfer_money_rywa.svg" alt="" style="width: 40%; transform: scaleX(-1);">
            <img class="my-hide-large" src="images/undraw_transfer_money_rywa.svg" alt="" style="width: 50%; transform: scaleX(-1);">

        </div> -->
    </div>

    </div>

    <!--footer-->
    
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