<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Table carré</title>
    <link rel="stylesheet" href="exercice4.css">
</head>

<body>
    <div class="carre">
        <div class="flex">
            <div class="resultat legend-haut legend">x</div>
            <?php for ($i = 0; $i <= 10; $i++) { ?>
                <div class="resultat legend-haut"><?php echo $i; ?></div>
            <?php } ?>
        </div>
        <?php for ($table = 0; $table <= 10; $table++) { ?>
            <div class="flex">
                <div class="resultat legend"><?php echo $table; ?></div>
                <?php for ($multiple = 0; $multiple <= 10; $multiple++) {
                    if ($table == $multiple) {
                        $class = 'dark-grey';
                    } else {
                        $class = '';
                    }
                ?>
                    <div class="resultat <?php echo $class; ?>">
                        <?php echo $table * $multiple; ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</body>

</html>