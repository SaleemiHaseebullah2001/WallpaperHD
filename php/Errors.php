<?php include('Server.php');?>
<?php include ('php/Auth.php');?>
<?php
if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php  endif;
$_SESSION['errors'] = $errors;
?>
