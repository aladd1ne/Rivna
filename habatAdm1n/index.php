<?php require_once("../config/config.php"); ?>

<?php   
if (empty($_SESSION['admin_name'])) {
    $referer = $_SERVER['HTTP_REFERER'];
    if (isset($referer)) {
        header("location: $referer");
        
    } else {
        redirect("login.php");
    }
}


?>
<!-- Top Nav -->
<?php require_once("../templates/back/admin_nav.php"); ?>
<!-- Side Nav -->
<?php require_once("../templates/back/admin_sidebar.php"); ?>
<!-- Main Content -->
<?php require_once("../templates/back/main_content.php"); ?>
<!-- Footer-->
<?php require_once("../templates/back/footer.php"); ?>