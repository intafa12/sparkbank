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

<body>
    <div class=" main  my-hide-small">
        <div class="my-third my-black my-xxxsmall " style="height: 100%;width: 7%;position: relative;">
            <ul >
                <li  ><a href="index.html"><i class="fa fa-home" aria-hidden="true" style="margin-left:27px;color:cyan"></i><br /><label style="color: cyan;">Home</label></a></li>
                <li><a href="customer.php"><i class="fa fa-users" aria-hidden="true" style="margin-left:20px;color:cyan"></i><br /><label style="color: cyan;">View <br />Customers</label></a></li>
                <li><a href="transaction.php "><i class="fa fa-exchange" aria-hidden="true" style="margin-left:27px;color:cyan"></i><br /><label style="color: cyan;">View <br />Transaction</label></a></li>
                <li><a href="Transfer.php"><i class="fa fa-external-link" aria-hidden="true" style="margin-left:27px;color:cyan"></i><br /><label style="margin-left: 10px;color: cyan; ">Transfer <br /> Money</label></a></li>
                <li><a href="about.php"><i class="fa fa-male" aria-hidden="true" style="margin-left:27px;color:cyan"></i><br /><label style="margin-left: 8px; color: cyan;">About US <br /></label></a></li>
            </ul>
        </div>
        <div class="my-twothird" style="background-image: url('images/aboutus.jpg');background-repeat: no-repeat;background-size: cover;width: 100%;height: 100%;position: relative;">

            <div class="my-container my-cyan display my-padding-24 my-grey " style="height:80%;width:95%;margin: 5% 3%;opacity:0.8">
                <div class="my-display-container   my-text-black my-padding " style="height: 90%; width:50%;border-right:2px solid black">
                    <h2 class="my-center my-xxlarge my-text-black my-animate-zoom" style="margin-top:50%;">
                        Get to know me...
                    </h2>
                </div>
                <div class="my-display-container my-left   my-text-black " style="height: 90%; width:50%;border-right:2px solid black">
                    <h1 class="my-center my-xlarge my-padding my-animate-zoom about" style="margin-top:40%;">Hello! I am Intafa Parween from Jorhat,Assam. I am a UI Designer and a Front-End Web Developer. Currently I am an Intern at The Sparks Foundation.</h1>
                </div>
                <div class="my-display-container my-right my-text-black " style="height: 90%; width:50%;">
                    <h2 class="my-center my-xxlarge my-animate-zoom" style="margin-top: 20%;">Reach Me At:</h2><br /><br />
                    <h6 class="my-animate-zoom my-large" style="margin-left:30px;"><b>
                            <p><i class="fa fa-linkedin-square my-xlarge " style="margin-left:20px;"></i>
                                <a href="https://www.linkedin.com/in/intafa-parween-b3712018b/">www.linkedin.com/in/intafa-parween</a>
                            </p><br />
                            <p><i class="fa fa-envelope-o  my-xxarge " style="margin-left:20px"></i> <span>intafa7867@gmail.com</span>
                            </p><br />
                            <p><i class="fa fa-github  my-xlarge " style="margin-left:20px"></i> <span>https://github.com/intafa12 </span>
                            </p><br />
                        </b></h6>
                </div>
            </div>
        </div>

    </div>
    <!--Responsive-->
    <div class="  my-hide-large  " style="background-image: url('images/aboutus.jpg');background-size: cover;background-repeat: no-repeat;height:100%;width:100%">
        <div class=" my-black " style="height: 10%;width: 100%;position: relative;">
            <ul style="display: flex;">
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true" style="margin-left:27px;"></i><br /><label>Home</label></a></li>
                <li><a href="customer.php"><i class="fa fa-users" aria-hidden="true" style="margin-left:20px;"></i><br /><label>View <br />Customers</label></a></li>
                <li><a href="transaction.php "><i class="fa fa-exchange" aria-hidden="true" style="margin-left:27px;"></i><br /><label>View <br />Transaction</label></a></li>
                <li><a href="Transfer.php"><i class="fa fa-external-link" aria-hidden="true" style="margin-left:27px;"></i><br /><label style="margin-left: 10px;">Transfer <br /> Money</label></a></li>
                <li><a href="about.php"><i class="fa fa-male" aria-hidden="true" style="margin-left:27px;"></i><br /><label style="margin-left: 8px;">About US <br /></label></a></li>
            </ul>
        </div>

        <div class="my-container my-grey " style="height:86%;width:95%;;opacity:0.8;margin:15px">
            <div class="my-container   my-text-black my-padding " style="height: 30%; width:100%;border-bottom:2px solid black">
                <h2 class="my-center my-xlarge my-text-black my-animate-zoom" style="margin-top:14%;">
                    Get to know me...
                </h2>
            </div>
            <div class="my-container   my-text-black my-padding " style="height: 30%; width:100%;border-bottom:2px solid black">
                <h1 class="my-center my-xlarge my-padding my-animate-zoom about" style="margin-top:7%;">Hello! I am Intafa Parween from Jorhat,Assam. I am a UI Designer and a Front-End Web Developer. Currently I am an Intern at The Sparks Foundation.</h1>
            </div>
            <div class="my-container   my-text-black my-padding " style="height: 30%; width:100%;">
                <h2 class="my-center my-xlarge my-animate-zoom" style="margin-top: 7%;">Reach Me At:</h2>
                <h6 class="my-animate-zoom my-large" style="margin-left:30px;"><b>
                        <p><i class="fa fa-linkedin-square myxlarge " style="margin-left:30px;"></i>
                            <a href="https://www.linkedin.com/in/intafa-parween-b3712018b/">www.linkedin.com/in/intafa-parween</a>
                        </p><br />
                        <p><i class="fa fa-envelope-o  my-xlarge " style="margin-left:30px"></i> <span>intafa7867@gmail.com</span>
                        </p><br />
                        <p><i class="fa fa-github  my-xlarge " style="margin-left:30px"></i> <span>https://github.com/intafa12 </span>
                        </p><br />
                    </b></h6>
            </div>
        </div>


    </div>
</body>

</html>