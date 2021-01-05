<!doctype html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>My sweet MVC</title>
</head>
<body>
    <?php View::getView('include/Header'); ?>
    <?php echo $A_views['body'] ?>
    <?php View::getView('include/Footer'); ?>
</body>
</html>