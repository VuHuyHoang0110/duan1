
<!DOCTYPE html>
<html>

<head>
    <title>SHOP</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo URL; ?>public/backend/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/style-1.css">
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/style-user.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400500600&display=swap" rel="stylesheet">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    <script>
        $('.carousel').carousel({
            interval: 200

        })
    </script>
</head>

<body>
    <!-- --header-- -->
    <div class="container-fluid header">
    <?php $this->view("shop/modules/header"); ?>
    </div>

    <!-- ---- -->

    <!-- --body-- -->
    <!-- --banner-- -->
    <div class="container-fluid banner">

    <?php $this->view("shop/modules/banner"); ?>


    </div>
    <!-- ---- -->
    <!-- --product-- -->
    <div class="container-fluid mt-5 mb-5">
        <div class="container product">
        <?php $this->view($data['page'],$data); ?>
    </div>
    <!-- ---- -->
    <!-- --footer-- -->
<?php $this->view("shop/modules/footer"); ?>
    
    <!-- ---- -->
</body>
<script src="<?= URL?>/public/js/control.js"></script>
</html>