<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                               <?php
                               /**
                                * Copyright © Taras Ozarkiv All rights reserved.
                                * 02.06.2022
                                */
                               $users = [
                                        [
                                                "img" => "sunny.png",
                                                "username" => "Sunny A. (UI/UX Expert)",
                                                "profession" => "Lead Author",
                                                "href_tw" => "https://twitter.com/@myplaneticket",
                                                "href_email" => "https://wrapbootstrap.com/user/myorange"
                                        ],
                                       [
                                           "img" => "josh.png",
                                           "username" => "Jos K. (ASP.NET Developer)",
                                           "profession" => "Partner & Contributor",
                                           "href_tw" => "https://twitter.com/@atlantez",
                                           "href_email" => "https://wrapbootstrap.com/user/Walapa"
                                       ],
                                       [
                                           "img" => "jovanni.png",
                                           "username" => "Jovanni L. (PHP Developer)",
                                           "profession" => "Partner & Contributor",
                                           "href_tw" => "https://twitter.com/@lodev09",
                                           "href_email" => "https://wrapbootstrap.com/user/lodev09"
                                       ],
                                       [
                                           "img" => "roberto.png",
                                           "username" => "Roberto R. (Rails Developer)",
                                           "profession" => "Partner & Contributor",
                                           "href_tw" => "https://twitter.com/@sildur",
                                           "href_email" => "https://wrapbootstrap.com/user/sildur"
                                       ]
                                        ];
                               foreach ($users as $user):
                               ?>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/<?php echo "$user[img]"?>" alt="Sunny A." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?php echo "$user[username]"?>
                                        <small class="m-0 fw-300">
                                            <?php echo "$user[profession]"?>
                                        </small>
                                    </h5>
                                    <a href="<?php echo "$user[href_tw]"?>" class="text-info fs-sm" target="_blank">@myplaneticket</a> -
                                    <a href="<?php echo "$user[href_email]"?>" class="text-info fs-sm" target="_blank" title="Contact Sunny"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                               <?php endforeach; ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
