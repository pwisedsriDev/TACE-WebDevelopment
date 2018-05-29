<?php session_start();
/**
 * Created by PhpStorm.
 * User: stoppu
 * Date: 29/5/2018 AD
 * Time: 21:31
 */
?>

<!DOCTYPE html>

<?php /* header_top */
include "views/header_top.php"; ?>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> .: Add New Course : TACE Activity @ SUT :. </title>


    <?php /* header_meta */
    include "views/meta.php"; ?>

    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO"/>
    <meta name="keywords"
          content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive"/>
    <meta name="author" content="FREEHTML5.CO"/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <?php /* header_assets */
    include "views/header_assets.php"; ?>

<body>

<div id="fh5co-wrapper">
    <div id="fh5co-page">

        <?php /* header_nav */
        include "views/header_nav.php"; ?>

        <!-- Put Each Section Here -->

        <!-- end:header-top -->

        <!-- insert title -->
        <!--        <div id="fh5co-blog-section" class="fh5co-section-gray">-->
        <!--            <div class="container">-->
        <!--                <div class="row">-->
        <!--                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box fadeInUp animated">-->
        <!--                        <h1>เพิ่มหลักสูตรอบรม</h1>-->
        <!--                        -->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!-- end:title -->

        <!-- insert add course form -->
        <div id="fh5co-portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action=" " method="post" enctype="multipart/form-data" class="form-horizontal">
                            <legend>เพิ่มหลักสูตรอบรม</legend>


                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- end add course form -->


        <!-- Put Each Section Here -->

        <?php /* footer_ui */
        include "views/footer_ui.php"; ?>

    </div>
    <!-- END fh5co-page -->
</div>
<!-- END fh5co-wrapper -->

<?php /* footer */
include "views/footer.php"; ?>

</body>
</html>

