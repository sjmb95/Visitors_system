<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
include('upload.php');
if (strlen($_SESSION['cvmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$cvmsaid=$_SESSION['cvmsaid'];
$imgName = $_POST['imgName'];
 $fullname=$_POST['fullname'];

$mobnumber=$_POST['mobilenumber'];
$tags=$_POST['TagNo'];
$add=$_POST['address'];
$whomtomeet=$_POST['whomtomeet'];
$department=$_POST['department'];
$reasontomeet=$_POST['reasontomeet'];
$query=mysqli_query($con,"insert into tblvisitor(FullName,TagNo,MobileNumber,Address,WhomtoMeet,Department,ReasontoMeet,imgName) value('$fullname','$tags','$mobnumber','$add','$whomtomeet','$department','$reasontomeet','$imgName ')");

    if ($query) {
    $msg="Visitors Detail has been added.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <script type="text/javascript" src="js/webcam.min.js"></script>

    <!-- Title Page-->
    <title>CVSM Visitors Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style>
        #my_camera{
            width: 150px;
            height: 180px;
            border: 1px solid black;
   }

        .img{
            width: 150px;
            height: 180px;
            border: 1px solid black;
        }

    </style>    

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php include_once('includes/sidebar.php');?>
   
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once('includes/header.php');?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add</strong> New Visitors
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

                                                <!-- Webcam-->
                                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Photo</label>
                                                </div>
                                                    <div class="containter">
                                                        <div id="my_camera"></div>
                                                            <input type="button" value="Configure" onClick="configure()">
                                                            <input type="button" value="Take Snapshot" onClick="take_snapshot()">
                                                            <input type="button" value="Save Snapshot" onClick="saveSnap()"> 
                                                </div> 
                                                <div id="results" class="img"></div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Full Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="fullname" name="fullname" placeholder="Full Name" class="form-control" required="">
                                                    <input type="hidden" id="imgName" name="imgName" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Tag Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="TagNo" name="TagNo" placeholder="Tag Number" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Phone Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" class="form-control" maxlength="10" required="">
                                                    
                                                </div>
                                            </div>
                                          
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="address" id="address" rows="9" placeholder="Enter Visitor Address..." class="form-control" required=""></textarea>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Whom to Meet</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="whomtomeet" name="whomtomeet" placeholder="Whom to Meet" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Department</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <div class="form-group">
                                                            <select class="form-control"  name="department" id="department">
                                                            <option>Choose Department</option>
                                                            <option>DIRECTOR GENERALS OFFICE</option>
                                                            <option>AGRICULTURE AND AGRO-ALLIED RAW MATERIALS DEPARTMENT</option>
                                                            <option>ADMINISTRATION AND HUMAN RESOURCE DEPARTMENT</option>
                                                            <option>CHEMICALS AND PHARMACEUTICAL MATERIALS DEPARTMENT</option>
                                                            <option>FINANCE AND ACCOUNTS DEPARTMENT</option>
                                                            <option>GENERAL SERVICES DEPARTMENT</option>
                                                            <option>INDUSTRIAL EXTENSION SERVICES DEPARTMENT</option>
                                                            <option>INFORMATION AND COMMUNICATION DEPARTMENT</option>
                                                            <option>INVESTMENT AND CONSULTANCY SERVICES DEPARTMENT</option>
                                                            <option>MINERALS AND MATERIALS DEVELOPMENT DEPARTMENT</option>
                                                            <option>PLANNING AND POLICY DEVELOPMENT DEPARTMENT</option>
                                                            <option>SPECIAL DUTIES DEPARTMENT</option>
                                                            <option>TECHNOLOGY DEVELOPMENT DEPARTMENT</option>
                                                            </select>
                                                        </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Reason To Meet</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="reasontomeet" name="reasontomeet" placeholder="Reason To Meet" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                            
                                          <div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Submit
                                        </button></p>
                                        
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                       
                        </div>
                        
                    </div>
               
 
<?php include_once('includes/footer.php');?>
   </div> </div>
            </div>
        </div>

        
</div>
<!-- webcam --> 
<script>
 
 // Configure a few settings and attach camera
 function configure(){
    Webcam.set({
       width: 150,
       height: 180,
       image_format: 'jpeg',
       jpeg_quality: 90
    });
    Webcam.attach( '#my_camera' );
 }
 // A button for taking snaps

 // preload shutter audio clip
 var shutter = new Audio();
 shutter.autoplay = false;
 shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';

 function take_snapshot() {
    // play sound effect
    shutter.play();

    // take snapshot and get image data
    Webcam.snap( function(data_uri) {
       // display results in page
       document.getElementById('results').innerHTML = 
           '<img id="imageprev" src="'+data_uri+'"/>';
         
     } );

     Webcam.reset();
 }

function saveSnap(){
   // Get base64 value from <img id='imageprev'> source
   var base64image = document.getElementById("imageprev").src;
 
  
   Webcam.upload( base64image, 'upload.php', function(code, text) {
        console.log('Save successfully');
       // wndows 41  or OSX 46
        document.getElementById('imgName').value = text.substring(41);
        

       //console.log(text);
   });

}
</script>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script type="text/javascript" src="js/webcam.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php }  ?>