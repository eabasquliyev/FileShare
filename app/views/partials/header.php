<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/style.css">
    <link rel="shortcut icon" href="<?= URLROOT ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= URLROOT ?>/favicon.ico" type="image/x-icon">
    <title><?= SITENAME . (isAdminLoggedIn() ? ' Admin Panel' : '') ?></title>
</head>
<body>
    <?php 
        if(isAdminLoggedIn()){
            require_once APPROOT . '/views/admins/partials/navbar.php'; 
        }else{
            require_once APPROOT . '/views/partials/navbar.php'; 
        }
    ?>