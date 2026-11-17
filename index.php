
<?php
header('X-PHP-Test: Working');
$phpStatus = 'PHP is executing successfully!';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solar Consultation</title>
</head>
<body>
    <h1>Solar Consultation</h1>

<p><?php echo htmlspecialchars($phpStatus); ?></p>

    <p>Explore solar energy options for your home.</p>
    <p>Our new solar landing page is working!</p>
</body>
</html>
