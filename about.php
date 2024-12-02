<?php
require "header.php";
include("admin/connection/connect.php");
$sql = "Select * from about";
$result = mysqli_query($db, $sql);
$title = $short_desc = $btn_text = $btn_link = "";
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $breadcrumb = trim($row['breadcrumb']);
}
?>
<!-- Page Title -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2><?php echo $title; ?></h2>
                    <ul>
                        <li>
                            <a href="index.php"><?php echo $breadcrumb; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->
<?php
$sql = "Select * from about2";
$result = mysqli_query($db, $sql);
$title = $short_desc = $btn_text = $btn_link = "";
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $short_desc = trim($row['short_desc']);
}
?>
<!-- About -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-iems-center">
            <div class="col-md-6">
                <div class="overtxt position-relative beforeafter-h2">
                    <h2><span class="field field--name-title field--type-string field--label-hidden"><?php echo $title; ?></span>
                    </h2>
                    <p><?php echo $short_desc; ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="overtxt position-relative beforeafter-h2 mb-4">
                    <h2>POLYPLEX AT A GLANCE</h2>
                </div>
                <div class="glance clearfix shadow">

                    <div class="glancetxt position-relative ">
                        <ul>
                            <li>Sales & Other income of USD 906 million</li>
                            <li>2650+ employees</li>
                            <li>Global manufacturing footprint across 7 locations in five countries</li>
                            <li>On-shore, off-shore and near shore business model</li>
                            <li>A dedicated & well-equipped R&D facility</li>
                            <li>Chairman: Mr. Sanjiv Saraf</li>
                            <li>Group CEO: Mr. Pranay Kothari</li>
                            <li>Corporate Office: Delhi-NCR, India</li>
                            <li>Listed in India on NSE & BSE (NSE: POLYPLEX, BSE: 524051)</li>
                            <li>Dividend paid every year since 1993-94</li>
                            <li>A subsidiary, Polyplex Thailand Plc (SET: PTL) is listed in Thailand</li>
                        </ul>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- End About -->

<!-- Job -->
<div class="job-area job-area-two job-area-three">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="col-lg-6">
                <div class="job-img">
                    <img src="assets/img/about-job-main.jpg" alt="Job">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="job-content">
                    <div class="section-title">
                        <h2>Enhancing, Not Replacing, Human Jobs</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan lacus vel facilisis.</p>
                    <ul>
                        <li>
                            <i class='bx bx-check'></i>
                            Higher Revenue
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            Improved Monitoring
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            Lower Cost
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            Fast Implementation
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            Greater Efficiency
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            Better Safety
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Job -->
<?php
$sql = "Select * from home4";
$result = mysqli_query($db, $sql);
$title = $short_desc = $btn_text = $btn_link = "";
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $key_1_text = $row['key_1_text'];
    $key_1_value = $row['key_1_value'];
    $key_2_text = $row['key_2_text'];
    $key_2_value = $row['key_2_value'];
    $key_3_text = $row['key_3_text'];
    $key_3_value = $row['key_3_value'];
}
?>
<!-- Counter -->
<section class="counter-area pt-100">
    <div class="container">
        <div class="row align-iems-center">
            <div class="col-lg-5">
                <div class="counter-text">
                    <h2><?php echo $title; ?></h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-sm-4 col-lg-4">
                        <div class="counter-item">
                            <h3>
                                <span class="odometer" data-count="<?php echo $key_1_value; ?>">00</span>
                            </h3>
                            <p><?php echo $key_1_text; ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <div class="counter-item">
                            <h3>
                                <span class="odometer" data-count="<?php echo $key_2_value; ?>">00</span>
                            </h3>
                            <p><?php echo $key_2_text; ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <div class="counter-item">
                            <h3>
                                <span class="odometer" data-count="<?php echo $key_3_value; ?>">00</span>
                            </h3>
                            <p><?php echo $key_3_text; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Counter -->

<!-- Foreign -->
<div class="foreign-area">
    <div class="container-fluid">
        <div class="foreign-slider owl-theme owl-carousel">
            <?php
              $sql = "Select * from `home5`";
              $result = mysqli_query($db, $sql);
              $title = $short_desc = $btn_text = $btn_link = "";
              if (mysqli_num_rows($result) > 0) {
                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                  $title = $row['title'];
                  $short_desc = trim($row['short_desc']);
                  $img = $row['img'];
                  $link_text = $row['link_text'];
                  $link = $row['link'];
              ?>
            <div class="foreign-item">
                <a href="project-details.html">
                    <img src="assets/img/home-one/foreign4.jpg" alt="Foreign">
                </a>
                <div class="foreign-bottom">
                    <h3>
                        <a href="project-details.html"><?php echo $title; ?></a>
                    </h3>
                    <span><?php echo $short_desc; ?></span>
                    <a href="<?php echo $link; ?>"><?php echo $link_text; ?></a>
                </div>
            </div>
            <?php
                  $count++;
                }
              } ?>
        </div>
    </div>
</div>
<!-- End Foreign -->

<!-- Offer -->
<section class="offer-area offer-area-three pb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Services</span>
            <h2>Services We Offer You From Our Company</h2>
        </div>
        <div class="offer-slider owl-theme owl-carousel">
            <div class="offer-item">
                <div class="offer-top">
                    <img src="assets/img/home-two/offer1.jpg" alt="Offer">
                    <i class="flaticon-3d-print"></i>
                </div>
                <div class="offer-bottom">
                    <h3>
                        <a href="#">Industrial Technology</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                    <a class="offer-link" href="#">Read More
                        <i class='bx bx-plus'></i>
                    </a>
                </div>
                <div class="offer-shape">
                    <img src="assets/img/home-two/offer-shape.png" alt="Offer">
                </div>
            </div>
            <div class="offer-item">
                <div class="offer-top">
                    <img src="assets/img/home-two/offer2.jpg" alt="Offer">
                    <i class="flaticon-robotic-arm"></i>
                </div>
                <div class="offer-bottom">
                    <h3>
                        <a href="#">Automotive Industrial</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                    <a class="offer-link" href="#">Read More
                        <i class='bx bx-plus'></i>
                    </a>
                </div>
                <div class="offer-shape">
                    <img src="assets/img/home-two/offer-shape.png" alt="Offer">
                </div>
            </div>
            <div class="offer-item">
                <div class="offer-top">
                    <img src="assets/img/home-two/offer3.jpg" alt="Offer">
                    <i class="flaticon-defribillator"></i>
                </div>
                <div class="offer-bottom">
                    <h3>
                        <a href="#">Healthcare Technology</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                    <a class="offer-link" href="#">Read More
                        <i class='bx bx-plus'></i>
                    </a>
                </div>
                <div class="offer-shape">
                    <img src="assets/img/home-two/offer-shape.png" alt="Offer">
                </div>
            </div>
            <div class="offer-item">
                <div class="offer-top">
                    <img src="assets/img/home-two/offer1.jpg" alt="Offer">
                    <i class="flaticon-3d-print"></i>
                </div>
                <div class="offer-bottom">
                    <h3>
                        <a href="#">Industrial Technology</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                    <a class="offer-link" href="#">Read More
                        <i class='bx bx-plus'></i>
                    </a>
                </div>
                <div class="offer-shape">
                    <img src="assets/img/home-two/offer-shape.png" alt="Offer">
                </div>
            </div>
            <div class="offer-item">
                <div class="offer-top">
                    <img src="assets/img/home-two/offer2.jpg" alt="Offer">
                    <i class="flaticon-robotic-arm"></i>
                </div>
                <div class="offer-bottom">
                    <h3>
                        <a href="#">Automotive Industrial</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                    <a class="offer-link" href="#">Read More
                        <i class='bx bx-plus'></i>
                    </a>
                </div>
                <div class="offer-shape">
                    <img src="assets/img/home-two/offer-shape.png" alt="Offer">
                </div>
            </div>
            <div class="offer-item">
                <div class="offer-top">
                    <img src="assets/img/home-two/offer3.jpg" alt="Offer">
                    <i class="flaticon-defribillator"></i>
                </div>
                <div class="offer-bottom">
                    <h3>
                        <a href="#">Healthcare Technology</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                    <a class="offer-link" href="#">Read More
                        <i class='bx bx-plus'></i>
                    </a>
                </div>
                <div class="offer-shape">
                    <img src="assets/img/home-two/offer-shape.png" alt="Offer">
                </div>
            </div>
            <div class="offer-item">
                <div class="offer-top">
                    <img src="assets/img/home-two/offer1.jpg" alt="Offer">
                    <i class="flaticon-3d-print"></i>
                </div>
                <div class="offer-bottom">
                    <h3>
                        <a href="#">Industrial Technology</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                    <a class="offer-link" href="#">Read More
                        <i class='bx bx-plus'></i>
                    </a>
                </div>
                <div class="offer-shape">
                    <img src="assets/img/home-two/offer-shape.png" alt="Offer">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Offer -->

<?php
require "footer.php";
?>