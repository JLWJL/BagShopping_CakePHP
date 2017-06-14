<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('myCSS.css') ?>
    <?= $this->Html->css('site.css') ?>
    <?= $this->Html->css('site.min.css') ?>
    <?= $this->Html->script('site.js') ?>
    <?= $this->Html->css('site.min.js') ?>
    
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
<!--     <link rel="icon" type="image/png" sizes="192x192" href="~/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="~/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="~/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="~/favicon/favicon-16x16.png">
    <link rel="manifest" href="~/favicon/manifest.json"> -->

    <meta name="theme-color" content="#ffffff">
    
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a asp-area="" asp-controller="Home" asp-action="Index" class="navbar-brand"><img class="img-log img-responsive" src="~/images/QualityBag_logo.png" alt="Quality Bag Logo"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">

                    <li>
                        <?= $this->Html->link(__('Quality Bags'), ['action' =>'display']) ?>
                    </li>
                    <li><?= $this->Html->link(__('Contact'), ['action' =>'display','contact']) ?></li>
                    <li><?= $this->Html->link(__('About'), ['action' =>'display','about
                    ']) ?></li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a asp-controller="Admin" asp-action="Index">Customers</a></li>
                            <li><a asp-controller="Bags" asp-action="Index">Products</a></li>
                            <li><a asp-controller="Categories" asp-action="Index">Categories</a></li>
                            <li><a asp-controller="Suppliers" asp-action="Index">Suppliers</a></li>
                            <li><a asp-controller="Orders" asp-action="Index">Orders</a></li>
                        </ul>
                    </li>
                    }
                    <li><a asp-action="Contact"></a></li>
                    <li><a asp-action="About"></a></li>
                </ul>
                <!-- @await Html.PartialAsync("_LoginPartial") -->

            </div>
        </div>
    </div>
    <div class="container body-content">
    <?= $this->fetch('content') ?>

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-4 col-sm-4">
                    <div class="footer_dv">
                        <h4>Products</h4>
                        <ul>
                            <li class="line_rv"><a href="#">Wallets</a></li>

                            <li><a href="#">Purses</a></li>
                            <li><a href="#">Backpacks</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4">
                    <div class="footer_dv">
                        <h4>Social  Media</h4>
                        <a href="#"><i class="fa fa-facebook-square ft-icon">|</i></a>&nbsp;
                        <a href="#"><i class="fa fa-twitter-square ft-icon">|</i></a>&nbsp;
                        <a href="#"><i class="fa fa-youtube-square ft-icon">|</i></a>&nbsp;
                        <a href="#"><i class="fa fa-wechat ft-icon">|</i></a>
                        <br />
                        <br/>
                        <div>&copy;2017 - All rights reserved by Quality Bags</div>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4">
                    <div class="footer_dv">
                        <h4>Contact us</h4>
                        <h3>Quality Bags Ltd.</h3>
                        <h5>
                           <b>Phone:</b> 09-12345670<br /><br />
                           <b>Email:</b> admin@qbags.com<br /><br />
                           <b>Address: </b>139, Carrington Rd, Auckland, NZ<br /><br />

                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>


    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-2.2.0.min.js"
                asp-fallback-src="~/lib/jquery/dist/jquery.min.js"
                asp-fallback-test="window.jQuery">
        </script>
    <script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"
                asp-fallback-src="~/lib/bootstrap/dist/js/bootstrap.min.js"
                asp-fallback-test="window.jQuery && window.jQuery.fn && window.jQuery.fn.modal">
    </script>
    <script src="~/js/site.min.js" asp-append-version="true"></script>
</body>
</html>
