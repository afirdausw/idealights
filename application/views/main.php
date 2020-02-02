<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $title ?></title>
    
    <link rel="icon" href="https://www.idealightsindonesia.com/assets/front/img/core-img/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,500,600&display=swap">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
    <div class="container">
        <?php
            $name = $user->results[0]->name->title." ".$user->results[0]->name->first." ".$user->results[0]->name->last
    
        ?>
        <!-- Left content -->
        <div class="left">
            <nav>
                <a href="."><i class="fa fa-sync"></i> Random User</a>
            </nav>
            <div>
                <img src="<?= $user->results[0]->picture->large ?>" alt="">
                <h2><?= $name ?></h2>
                <h3>Web Developer</h3>
                <p><i class="fa fa-quote-left"></i> Programs must be written for people to read, and only incidentally for machines to execute.</p>
            </div>
            <div>
                <a class="scroll" href="#bio">
                    Scroll for more
                    <i class="fa fa-angle-down"></i>
                </a>
               
                <div class="social">
                    <a href="#"> <i class="fab fa-facebook"></i> <?= $user->results[0]->name->last ?></a>
                    <a href="#"> <i class="fab fa-linkedin"></i> <?= $user->results[0]->name->last ?></a>
                    <a href="#"> <i class="fab fa-twitter"></i> <?= $user->results[0]->name->last ?></a>
                    <a href="#"> <i class="fab fa-instagram"></i> <?= $user->results[0]->name->last ?></a>
                </div>

                <p>&copy; <?= date('Y') ?> | Develop by Firdaus W</p>
            </div>
        </div>

        <!-- Right content -->
        <div class="right" id="bio">
            <h1>About Self</h1>
            <div>
                <span>Full Name</span>
                <?= $name ?>
            </div>
            <div>
                <span>Date of Birth</span>
                <?= date('F d, Y', strtotime($user->results[0]->dob->date)) ?>
            </div>
            <div>
                <span>Age</span>
                <?= $user->results[0]->dob->age ?>
            </div>
            <div>
                <span>Gender</span>
                <?= ucwords($user->results[0]->gender) ?>
            </div>
            <div>
                <span>Phone Number</span>
                <?= $user->results[0]->phone ?>
            </div>
            <div>
                <span>Cell Number</span>
                <?= $user->results[0]->cell ?>
            </div>
            <div>
                <span>E-mail Address</span>
                <?= $user->results[0]->email ?>
            </div>

            <div class="divider"></div>

            <div>
                <span>Street</span>
                <?= $user->results[0]->location->street->number ?>
                <?= $user->results[0]->location->street->name ?>
            </div>
            <div>
                <span>City</span>
                <?= $user->results[0]->location->city ?>
            </div>
            <div>
                <span>State</span>
                <?= $user->results[0]->location->state ?>
            </div>
            <div>
                <span>Postal Code</span>
                <?= $user->results[0]->location->postcode ?>
            </div>
            <div>
                <span>Country</span>
                <?= $user->results[0]->location->country ?>
            </div>
        </div>
    </div>
</body>

</html>
