<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response Php Badwords</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>

<?php
    $name = $_POST['name'];
    $censored = $_POST['censored'];
?>

<div class='container p-5'>
    <div class="row">
        <div class="col-12 text-center">
            <?php echo $name;?> <br>
            <?php echo 'la lunghezza è ' . strlen($name); ?> <br>
            <hr>
            <!-- ------------- -->
            <?php echo str_replace($censored,'***',$censored)?> <br>
            <?php echo 'la lunghezza è ' . strlen($censored); ?>
        </div>
    </div>
</div>
