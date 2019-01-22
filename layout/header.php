
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="...">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aztrek| <?= $title; ?></title>


    <link rel="shortcut icon" href="favicon.ico">
    <!-- lien polices et icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Ubuntu" rel="stylesheet">

    <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/main.css">

    <?php foreach ($stylesheets as $stylesheet) : ?>
        <link rel="$stylesheet" href=" <?= $stylesheet; ?>">

    <?php endforeach; ?>


</head>

<body class="home">