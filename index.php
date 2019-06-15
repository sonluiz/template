<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once "partials/head.php";
    ?>
</head>
<body>

<!-- Header -->
<?php
include_once "partials/header.php";
?>
<!-- /Header -->

<!-- section -->

<?php
if (isset($_GET["get"]) && $_GET["get"]){
    $file =dirname(__FILE__) . "/pages/" . trim($_GET["get"]) . ".php";
    echo "<br> file: " .$file;
    if (file_exists($file)){
        include_once "pages/" .trim($_GET["get"]) . ".php";
    }
}
else{
    include_once "pages/home.php";
}


include_once "pages/home.php";
?>
<!-- /section -->




<!-- Footer -->
<?php
include_once "partials/footer.php";
?>
<!-- /Footer -->

<!-- jQuery Plugins -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
