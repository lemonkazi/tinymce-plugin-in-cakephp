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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php //echo $this->Html->charset(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin</title>
    <meta name="author" content="SuggeElson" />
    <meta name="description" content="Supr admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework" />
    <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, masonry, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap" />
    <meta name="application-name" content="Supr admin template" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <?php echo $this->Html->css(
         array(
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'http://fonts.googleapis.com/css?family=Droid+Sans:400,700',
            'bootstrap/bootstrap.min',
            'bootstrap/bootstrap-responsive.min',
            'supr-theme/jquery.ui.supr',
            'icons',
            '/plugins/misc/qtip/jquery.qtip',
            '/plugins/forms/inputlimiter/jquery.inputlimiter',
            '/plugins/forms/togglebutton/toggle-buttons',
            '/plugins/forms/uniform/uniform.default',                                   
            '/plugins/forms/color-picker/color-picker',
            '/plugins/forms/select/select2',
            '/plugins/forms/validate/validate',
            '/plugins/forms/smartWizzard/smart_wizard',
            'main',
             'custom',
             '/plugins/forms/tiny_mce/themes/advanced/skins/default/ui',
            )

        );?>
    <?php
        //echo $this->Html->meta('icon');

       // echo $this->Html->css('cake.generic');

        //echo $this->fetch('meta');
        //echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
    <link rel="shortcut icon" href="<?php echo $this->webroot; ?>/images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->webroot; ?>/images/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->webroot; ?>/images/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->webroot; ?>/images/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo $this->webroot; ?>/images/apple-touch-icon-57-precomposed.png" />
    
    <script type="text/javascript">
        //adding load class to body and hide page
        //document.documentElement.className += 'loadstate';
    </script>
</head>
<body>
    <!-- loading animation -->
    <div id="qLoverlay"></div>
    <div id="qLbar"></div>


    <!-- <div id="container"> -->
        <div id="header">

            <div class="navbar">
                <div class="navbar-inner">
                  <div class="container-fluid">
                    <a class="brand" href="<?php echo Router::url(array('controller'=>'admins','action'=>'deshboard'))?>">Admin</a>
                    <div class="nav-no-collapse">
                        <ul class="nav">
                            <li class="active"><a href="dashboard.html"><span class="icon16 icomoon-icon-screen-2"></span> Dashboard</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="icon16 icomoon-icon-cog"></span> Settings
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="menu">
                                        <ul>
                                            <li>                                                    
                                                <a href="#"><span class="icon16 icomoon-icon-equalizer"></span>Site config</a>
                                            </li>
                                            <li>                                                    
                                                <a href="#"><span class="icon16 icomoon-icon-wrench"></span>Plugins</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="icon16 icomoon-icon-picture-2"></span>Themes</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="icon16 icomoon-icon-mail-3"></span>Messages <span class="notification">8</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="menu">
                                        <ul class="messages">    
                                            <li class="header"><strong>Messages</strong> (10) emails and (2) PM</li>
                                            <li>
                                               <span class="icon"><span class="icon16 icomoon-icon-user-3"></span></span>
                                                <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Sammy Morerira</strong></a><span class="time">35 min ago</span></span>
                                                <span class="msg">I have question about new function ...</span>
                                            </li>
                                            <li>
                                               <span class="icon avatar"><img src="images/avatar.jpg" alt="" /></span>
                                                <span class="name"><a data-toggle="modal" href="#myModal1"><strong>George Michael</strong></a><span class="time">1 hour ago</span></span>
                                                <span class="msg">I need to meet you urgent please call me ...</span>
                                            </li>
                                            <li>
                                                <span class="icon"><span class="icon16 icomoon-icon-mail-3"></span></span>
                                                <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Ivanovich</strong></a><span class="time">1 day ago</span></span>
                                                <span class="msg">I send you my suggestion, please look and ...</span>
                                            </li>
                                            <li class="view-all"><a href="#">View all messages <span class="icon16 icomoon-icon-arrow-right-8"></span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                      
                        <ul class="nav pull-right usernav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="icon16 icomoon-icon-bell-2"></span><span class="notification">3</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="menu">
                                        <ul class="notif">
                                            <li class="header"><strong>Notifications</strong> (3) items</li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon"><span class="icon16 icomoon-icon-user-3"></span></span>
                                                    <span class="event">1 User is registred</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon"><span class="icon16 icomoon-icon-comments-4"></span></span>
                                                    <span class="event">Jony add 1 comment</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon"><span class="icon16 icomoon-icon-new-2"></span></span>
                                                    <span class="event">admin Julia added post with a long description</span>
                                                </a>
                                            </li>
                                            <li class="view-all"><a href="#">View all notifications <span class="icon16 icomoon-icon-arrow-right-8"></span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                    <img src="images/avatar.jpg" alt="" class="image" /> 
                                    <span class="txt">admin@supr.com</span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="menu">
                                        <ul>
                                            <li>
                                                <a href="#"><span class="icon16 icomoon-icon-user-3"></span>Edit profile</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="icon16 icomoon-icon-comments-2"></span>Approve comments</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="icon16 icomoon-icon-plus-2"></span>Add user</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="index.html"><span class="icon16 icomoon-icon-exit"></span> Logout</a></li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                  </div>
                </div><!-- /navbar-inner -->
              </div><!-- /navbar --> 

        </div><!-- End #header -->
       <!--  <div id="content">

            <?php //echo $this->Session->flash(); ?>

            <?php //echo $this->fetch('content'); ?>
        </div> -->
       