<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
  header('location: login.php');
} else {
  require 'header.php';
?>
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-phone"></i>Contact Us</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Documentation</a></li>
      </ul>
    </div>
    <div class="tile">
      <div class="tile-body">
        <div class="docs" style="max-width: 700px;">
          <?php
          $sql = "Select * from contact";
          $result = mysqli_query($db, $sql);
          $title = $short_desc = $btn_text = $btn_link = "";
          if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $title = $row['title'];
            $breadcrumb = trim($row['breadcrumb']);
          }
          if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $breadcrumb = trim($_POST['breadcrumb']);
            $sql = "UPDATE `contact` SET `title`='$title',`breadcrumb`='$breadcrumb' WHERE 1;";
            if ($db->query($sql) === TRUE) {
              echo "Record updated successfully";
            } else {
              echo "Error updating record: " . $db->error;
            }
          }
          ?>
          <h2>Banner section-1</h2>
          <form class="login-form" action="" method="post">
            <input type="" id="" ho_id="ho_id" value="1">
            <div class="form-group">
              <label for="text">Main Title</label>
              <input type="text" class="form-control" id="" placeholder="Enter Content" name="title" value="<?php echo $title; ?>">
            </div>
            <div class="form-group">
              <label for="text">Breadcrumb</label>
              <textarea class="form-control" id="" placeholder="Enter Content" name="breadcrumb"><?php echo $breadcrumb; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="reset" class="btn btn-danger" name="cancel">Cancel</button>
          </form>
        </div>
      </div>
  </main>

  <!-- Contact All Detail -->
  <main class="app-content">
    <div class="tile">
      <div class="tile-body">
        <div class="docs" style="max-width: 700px;">
          <?php
          $sql = "Select * from contactdetail";
          $result = mysqli_query($db, $sql);
          $title = $short_desc = $btn_text = $btn_link = "";
          if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $sectiontitle = trim($row['sectiontitle']);
            $title = trim($row['title']);
            $title2 = $_POST['title2'];
            $address = trim($row['address']);
            $contactno = $row['contactno'];
            $companyemailid = $row['companyemailid'];
            $map = $row['map'];
          }


          if (isset($_POST['submit2'])) {
            $id = $_POST['id'];
            $sectiontitle = trim($_POST['sectiontitle']);
            $title = trim($_POST['title']);
            $title2 = $_POST['title2'];
            $address = trim($_POST['address']);
            $contactno = $_POST['contactno'];
            $companyemailid = trim($_POST['companyemailid']);
            $map = $_POST['map'];

            //echo $id;

            // if($id==""){
            // // if($id=="" && $sectiontitle=="")
            // // {
            //   echo "Insert..";
            //   //die();
            //   $sql="INSERT INTO `contactdetail`(`sectiontitle`, `title`, `address`, `contactno`, `emailid`, `companyemailid`, `map`)VALUES('$sectiontitle','$title','$address','$contactno','$emailid','$companyemailid','$map')";
            //   $result = $db->query($sql);
            //   if ($result === TRUE) {
            //     echo "<script>alert('Record Insert successfully');</script>";
            //   } else {
            //     echo "Error Insert record: " . $db->error;
            //   }
            // // }
            // // else{
            // //   echo ("<script>alert('Already Entry !!');</script>");
            // // }
            // }
            if ($id == "") {
              echo "Update....";
              //die();
              $sql = "UPDATE `contactdetail` SET `sectiontitle`='$sectiontitle',`title`='$title',`title2`='$title2',`address`='$address',`contactno`='$contactno',`companyemailid`='$companyemailid',`map`='$map' WHERE 1;";
              if ($db->query($sql) === TRUE) {
                echo "<script>alert('Record updated successfully');</script>";
              } else {
                echo "Error updating record: " . $db->error;
              }
            }
          }
          ?>
          <h2>Contact US Details</h2>
          <form class="login-form" action="" method="post">
            <input type="" id="" ho_id="ho_id" value="1">
            <div class="form-group">
              <label for="text">Contact Us</label>
              <input type="text" class="form-control" id="" placeholder="Enter Contact Detail" name="sectiontitle" value="<?php echo $sectiontitle; ?>">
            </div>
            <div class="form-group">
              <label for="text">Title</label>
              <input type="sectiontitle" class="form-control" id="" placeholder="Enter Title" name="title" value="<?php echo $title; ?>">
            </div>
            <div class="form-group">
              <label for="text">Title 2</label>
              <input type="text" class="form-control" id="" placeholder="Enter Second Title Name" name="title2" value="<?php echo $title2; ?>">
            </div>
            <div class="form-group">
              <label for="text">Address</label>
              <textarea class="form-control" id="address_id" rows="7" placeholder="Enter Address" name="address"><?php echo $address; ?></textarea>
            </div>
            <div class="form-group">
              <label for="text">Contact No.</label>
              <input type="text" class="form-control" id="" placeholder="Enter Contact Number" name="contactno" value="<?php echo $contactno; ?>">
            </div>

            <div class="form-group">
              <label for="text">Emailid</label>
              <textarea type="text" class="form-control" id="emailid" rows="10" placeholder="Enter Emailid" name="companyemailid" value="<?php echo $companyemailid; ?>"></textarea>
            </div>
            <div class="form-group">
              <label for="text">Location</label>
              <!-- <input type="text" class="form-control" id="" placeholder="Enter Location" name="map" value="?php echo $map; ?>"/>
              </div> -->

              <!-- <h1>My First Google Map</h1> -->
              <div id="googleMap" style="width:100%;height:400px;"></div>
            </div>

            <button type="submit" class="btn btn-primary" name="submit2">Submit</button>
            <button type="reset" class="btn btn-danger" name="cancel">Cancel</button>
          </form>
        </div>
      </div>
    </main>

    <script>
    function myFunction(id) {
      ClassicEditor
        .create(document.querySelector(id))
        .then(editor => {
          // console.log(editor);
        })
        .catch(error => {
          // console.error(error);
        });

    }
    const editor_arr = ["#address_id"];
    editor_arr.map(myFunction);
  </script>

<script>
    function myFunction(id) {
      ClassicEditor
        .create(document.querySelector(id))
        .then(editor => {
          // console.log(editor);
        })
        .catch(error => {
          // console.error(error);
        });

    }
    const editor_arr1 = ["#emailid"];
    editor_arr1.map(myFunction);
  </script>


      <script>
        function myMap() {
          var mapProp = {
            center: new google.maps.LatLng(51.508742, -0.120850),
            //center:{lat: ?php   echo $myVariableLat; ?>, lng: ?php   echo $myVariableLng; ?>},
            zoom: 5,
          };
          var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
      </script>

      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>


<?php
  require 'footer.php';
}
?>