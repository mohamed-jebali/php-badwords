<?php
    $name = $_GET['name'];
    $censored = $_GET['censored'];
    $lengthString = 'la lunghezza è : ';
?>

<div>
            <?php echo $name;?> <br>
            <?php echo $lengthString . strlen($name); ?> <br>
            <!-- ------------- -->
            <?php echo str_replace($censored,'***',$censored)?> <br>
            <?php echo $lengthString . strlen($censored); ?>
</div>
