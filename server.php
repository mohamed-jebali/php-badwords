<?php
    $name = $_GET['name'];
    $censored = $_GET['censored'];
    $lengthString = 'la lunghezza del paragrafo è : ';
?>

<div>
            <?php echo $name;?> <br>
            <?php echo $censored; ?> <br>
            <?php echo $lengthString . strlen($name); ?>
</div>
