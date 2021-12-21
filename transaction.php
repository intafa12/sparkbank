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
</head>

<body background="images/trans2.jpg;background-repeat: no-repeat;background-size: cover;height:100%;width:100%">
    <div class=" main my-hide-small my-hide-medium ">
        <div class="my-third my-black my-hide-small" style="z-index:999;height: 100%;width: 7%;position: relative;">
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
                <h1 class="my-animate-zoom my-text-white">Our Transactions</h1>
            </div>
            <!--body-->
            <div class="my-responsive my-margin">
                <table id="datatable" class="my-table-all my-hide-small my-margin" style="font-size:12px;">
                    <thead>
                        <th class="my-black" style="text-align:center;">Serial No.</th>
                        <th class="my-black" style="text-align:center;">Sender's Name</th>
                        <th class="my-black" style="text-align:center;">Sender's Account No.</th>
                        <th class="my-black" style="text-align:center;">Amount Transfered</th>
                        <th class="my-black" style="text-align:center;">Receiver's Name</th>
                        <th class="my-black" style="text-align:center;">Receiver's Account No.</th>
                        <th class="my-black" style="text-align:center; width:20%">Date and Time</th>
                    </thead>
                    <tbody>

                        <?php
                        include "connect.php";
                        $sql = "select * from transaction order by slno desc";
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<tr class="my-white  my-hover-light-blue" style="border-width: 0px;">';
                            echo '<td style="text-align:center;">' . $row[0] . '</td>';
                            echo '<td style="text-align:center;">' . $row[1] . '</td>';
                            echo '<td style="text-align:center;">' . $row[2] . '</td>';
                            echo '<td style="text-align:center;">₹' . $row[3] . '</td>';
                            echo '<td style="text-align:center;">' . $row[4] . '</td>';
                            echo '<td style="text-align:center;">' . $row[5] . '</td>';
                            echo '<td style="text-align:center;">' . $row[6] . '</td>';
                            echo '</tr>';
                        }
                        ?>

                    </tbody>
                </table>
                <br><br>
            </div>

            <!--footer-->
            <div class="my-container  footer my-text-white  " style="font-weight:bold;background-image: url('images/grey.jpg');background-repeat: no-repeat;background-size: cover; height: 9vh;width:100%;border-top:2px solid black;">

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
        <div class=" my-black my-hide-large" style="height: 90%;width: 100%;position: relative;">
            <ul style="display: flex;">
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true" style="margin-left:27px;"></i><br /><label>Home</label></a></li>
                <li><a href="customer.php"><i class="fa fa-users" aria-hidden="true" style="margin-left:20px;"></i><br /><label>View <br />Customers</label></a></li>
                <li><a href="transaction.php "><i class="fa fa-exchange" aria-hidden="true" style="margin-left:27px;"></i><br /><label>View <br />Transaction</label></a></li>
                <li><a href="Transfer.php"><i class="fa fa-external-link" aria-hidden="true" style="margin-left:27px;"></i><br /><label style="margin-left: 10px;">Transfer <br /> Money</label></a></li>
                <li><a href="about.php"><i class="fa fa-male" aria-hidden="true" style="margin-left:27px;"></i><br /><label style="margin-left: 8px;">About US <br /></label></a></li>
            </ul>
        </div>
        <div class="my-hide-large " style="width: 100%;height: 90%;position: relative;">
            <!--header-->
            <div class="my-container   my-padding-24 " style="background-image: url('images/grey.jpg');background-repeat: no-repeat;background-size: cover; height: 13vh;width:100%;border-bottom:2px solid black">
                <h1 class="my-animate-zoom my-text-white">Our Transactions</h1>
            </div>
            <!--body-->
            <div class="my-container     " style="width:100% ;font-weight:bold">
                <div class="my-responsive ">
                    <div class="my-container   my-padding-24 ">
                        <table id="datatable" class="my-table-all" style="font-size:12px;">
                            <thead>
                                <th class="my-black" style="text-align:center;">Serial No.</th>
                                <th class="my-black" style="text-align:center;">Sender's Name</th>
                                <th class="my-black" style="text-align:center;">Sender's Account No.</th>
                                <th class="my-black" style="text-align:center;">Amount Transfered</th>
                                <th class="my-black" style="text-align:center;">Receiver's Name</th>
                                <th class="my-black" style="text-align:center;">Receiver's Account No.</th>
                                <th class="my-black" style="text-align:center; width:20%">Date and Time</th>
                            </thead>
                            <tbody>

                                <?php
                                include "connect.php";
                                $sql = "select * from transaction order by slno desc";
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo '<tr class="my-white  my-hover-light-blue" style="border-width: 0px;">';
                                    echo '<td style="text-align:center;">' . $row[0] . '</td>';
                                    echo '<td style="text-align:center;">' . $row[1] . '</td>';
                                    echo '<td style="text-align:center;">' . $row[2] . '</td>';

                                    echo '<td style="text-align:center;">' . $row[3] . '</td>';
                                    echo '<td style="text-align:center;">' . $row[4] . '</td>';
                                    echo '<td style="text-align:center;">₹' . $row[5] . '</td>';
                                    echo '<td style="text-align:center;">' . $row[6] . '</td>';

                                    echo '</tr>';
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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