<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../public/css/search-bar.css">
    </head>

    <body>
        <?php echo $__env->make('includes/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html>