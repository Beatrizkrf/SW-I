<?php
    $cor = $_POST['cxcor'];    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor</title>
</head>
<body style="background-color: <?php echo $cor; ?>;">
    <p>A cor escolhida foi: <?php echo $cor; ?></p>
</body>
</html>