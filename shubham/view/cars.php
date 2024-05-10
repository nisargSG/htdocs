<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once ("common/bootstrap.php") ?>
    <title>Cars List</title>
</head>

<body>
    <?php
    if ($cars) { ?>
        <div class="container">
            <div class="row">
                <?php
                foreach ($cars as $car) { ?>

                    <div class="card col-md-4">
                        <img src="public/img/<?= $car->getImage() ?>" />
                        <h1> <?= $car->getName() ?> </h1>
                        <p> <?= $car->getModel() ?> </p>
                    </div>
                <?php }
                ?>
            </div>
        </div> <?php
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            A simple danger alert—check it out!
        </div>
    <?php }
    ?>
</body>

</html>