<head>
    <meta charset="utf-8">
    <title>Reichminate</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="<?= assets_url('announcement/index.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('img/company_icon.png'); ?>" rel="icon">
</head>

<body class="bg-purple">
    <div class="stars">
        <div class="central-body">
            <?php if ($announcement_type == 'page_not_found') { ?>
                <img class="" src="<?= assets_url('announcement/page_not_found.svg'); ?>" width="900px">
            <?php } elseif ($announcement_type == 'database_migrated') { ?>
                <img class="" src="<?= assets_url('announcement/database_migrated.svg'); ?>" width="900px">
            <?php } elseif ($announcement_type == 'database_reset') { ?>
                <img class="" src="<?= assets_url('announcement/database_reset.svg'); ?>" width="900px">
            <?php } elseif ($announcement_type == 'under_maintenance') { ?>
                <img class="" src="<?= assets_url('announcement/under_maintenance.svg'); ?>" width="900px">
            <?php } elseif ($announcement_type == 'lead_saved') { ?>
                <img class="" src="<?= assets_url('announcement/lead_saved.svg'); ?>" width="900px">
            <?php } ?>
            <a href="<?= base_url(); ?>" class="btn-go-home" >GO BACK HOME</a>
        </div>
        <div class="objects">
            <img class="object_rocket" src="<?= assets_url('announcement/rocket.svg'); ?>" width="40px">
            <div class="earth-moon">
                <img class="object_earth" src="<?= assets_url('announcement/earth.svg'); ?>" width="100px">
                <img class="object_moon" src="http://salehriaz.com/404Page/img/moon.svg" width="80px">
            </div>
            <div class="box_astronaut">
                <img class="object_astronaut" src="http://salehriaz.com/404Page/img/astronaut.svg" width="140px">
            </div>
        </div>
        <div class="glowing_stars">
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
        </div>
    </div>
</body>