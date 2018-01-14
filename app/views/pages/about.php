<?php require APPROOT.'/views/inc/header.php'?>


<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <h1 class="display-3 "><?php echo $data['title'];?></h1>
        <p class="lead"><?php echo $data['description']?></p>
        <strong class="lead">Version: <?php echo APPVERSION?></strong>
    </div>
</div>

<?php require APPROOT.'/views/inc/footer.php'?>
