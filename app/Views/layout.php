<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/main.css?ver=1.1.0" rel="stylesheet">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
</head>

<body id="top">
    <header>
        <div class="profile-page sidebar-collapse">
            <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
                <div class="container">
                    <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">Resume</a>
                        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span
                                class="navbar-toggler-bar bar2"></span><span
                                class="navbar-toggler-bar bar3"></span></button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link smooth-scroll <?= ($page = 'home') ?>"
                                    href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll <?= ($page = 'about') ?>"
                                    href="/about">About</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" <?= ($page = 'experience') ?>
                                    href="/experience">Experience</a>
                            </li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" <?= ($page = 'experience')?> href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <?= $this->renderSection('content') ?>

    <footer class="footer">
    <div class="h5 title text-center">Contact Me</div>
        <div class="container text-center">
                    <a class="cc-facebook btn btn-link" target="_blank" href="https://www.facebook.com/mnur.isam"><i class="fa fa-facebook fa-2x "
                    aria-hidden="true"></i></a>
                    <a class="cc-github btn btn-link" target="_blank" href="https://github.com/masi-isam"><i
                    class="fa fa-github fa-2x " aria-hidden="true"></i></a>
                    <a class="cc-instagram btn btn-link" target="_blank" href="https://www.instagram.com/mnurisyam/"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a>
        </div>
    
    </footer>
    <script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="<?= base_url() ?>assets/js/core/popper.min.js?ver=1.1.0"></script>
    <script src="<?= base_url() ?>assets/js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="<?= base_url() ?>assets/js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="<?= base_url() ?>assets/js/aos.js?ver=1.1.0"></script>
    <script src="<?= base_url() ?>assets/scripts/main.js?ver=1.1.0"></script>
</body>

</html>