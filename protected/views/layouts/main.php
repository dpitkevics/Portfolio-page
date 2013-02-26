<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.jscrollpane.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

    <div id="bot-nav">
		<div class="navbar navbar-fixed-bottom">
    		<div class="navbar-inner">
   	 			<ul class="nav">
					<li>
                        <a href="#home" class="btn-green"><i class="icon-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="btn-purple"><i class="icon-folder-open"></i>Portfolio</a>
                    </li>
                    <li>
                        <a href="#about" class="btn-teal"><i class="icon-tasks"></i>About</a>
                    </li>
                    <li>
                        <a href="#cv" class="btn-yellow"><i class="icon-user"></i>CV</a>
                    </li>
                    <li>
                        <a href="#contacts" class="btn-red"><i class="icon-envelope"></i>Contacts</a>
                    </li>
	    		</ul>
    		</div>
            
            <div class="footer-small">
                <a class="minimise"><i class=" icon-minus"></i></a>
                <div class="legal-info">
                    Daniels Pitkevičs, 2013
                </div>
            </div>
            <div class="footer">
                <div class="row-fluid">
                    <div class="span3 footer-box">
                        <h3>Social life</h3>
                        <div class="row-fluid">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ccink_twitter.png" width="40" alt="Twitter"/>
                            <small class="tweet"><?php echo CHtml::link('EsĒduPelmeņus', 'https://twitter.com/EsEduPelmenus', array('target'=>'_blank')); ?></small>
                        </div>
                        <div class="row-fluid">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook.png" width="40" alt="Facebook" />
                            <small class="facebook"><?php echo CHtml::link('Daniels Pitkevičs', 'http://www.facebook.com/xfr33', array('target'=>'_blank')); ?></small>
                        </div>
                        <div class="row-fluid">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/draugiem.png" width="40" alt="Draugiem" />
                            <small class="draugiem"><?php echo CHtml::link('Daniels Pitkevičs', 'http://www.draugiem.lv/user/114121/', array('target'=>'_blank')); ?></small>
                        </div>
                    </div>
                    <div class="span3 footer-box">
                        <h3>Working On</h3>
                        <div class="row-fluid">
                            <small>Add new entry in Working On section: <?php echo CHtml::link('Offer a Project', '#contacts'); ?></small>
                        </div>
                        <div class="row-fluid">
                            <ul class="list-view">
                                <?php foreach ($this->workingOnItems as $workingOnItem): ?>
                                <li><small><?php echo $workingOnItem->title; ?></small></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="span3 footer-box">
                        <h3>Legal Information</h3>
                        <div class="row-fluid">
                            <small><?php echo Yii::powered(); ?></small>
                        </div>
                        <div class="row-fluid">
                            <small>Developed by Daniels Pitkevičs</small>
                        </div>
                        <div class="row-fluid">
                            <small>All rights reserved, 2013 - <?php echo date('Y'); ?></small>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
	</div>
	
	
    <?php $this->beginContent('/modules/home'); ?>
    <?php echo $content; ?>
    <?php $this->endContent(); ?><!-- #home -->

    <?php $this->beginContent('/modules/portfolio'); ?>
    <?php echo $content; ?>
    <?php $this->endContent(); ?><!-- #portfolio -->
    
    <?php $this->beginContent('/modules/about'); ?>
    <?php echo $content; ?>
    <?php $this->endContent(); ?><!-- #about -->
    
    <?php $this->beginContent('/modules/cv'); ?>
    <?php echo $content; ?>
    <?php $this->endContent(); ?><!-- #cv -->
    
    <?php $this->beginContent('/modules/contacts'); ?>
    <?php echo $content; ?>
    <?php $this->endContent(); ?><!-- #contacts -->
    
    
    <?php $cs = Yii::app()->getClientScript(); 
    $cs->registerCoreScript('jquery.ui'); 
    $cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/bootstrap.min.js'); 
    $cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.easing.1.3.js');
    $cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.mousewheel.js');
    $cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.contentcarousel.js'); ?>
    <script>
        $(function () {
            $('#ca-container').contentcarousel({
                scroll:false
            });
            
            var $height = $(window).height();
            setInterval(function () {
                $height = $(window).height();
                resizePage($height);
            }, 400);

           $(".page-data").css("height", $height - 320 + "px");

            $(".minimise").on("click", function () {
                $(".footer").slideToggle();
            });
            /*
            var $username = "EsEduPelmenus";
            var $format = "json";
            var $url = "http://api.twitter.com/1/statuses/user_timeline/"+$username+"."+$format+"?callback=?";

            $.getJSON($url, function (tweet) {
                $(".tweet").html("<a href='#' target='_blank'>#" + tweet[0].user.name + "</a>: " + tweet[0].text);
            });

            var $name = "xfr33";
            var $url = "http://graph.facebook.com/"+$name+"?callback=?";

            $.getJSON($url, function (data) {
                console.log(data);
                $(".facebook").html("<a href='"+data.link+"' target='_blank'>"+data.name+"</a>: Follow Us");
            });
            */
        });

        function resizePage($height) {
            var $hash = window.location.hash;
            var $innerHeight = $($hash + " .inner").height();           
            
            if ($(".footer").is(":visible")) {
                $(".page-data").animate({
                    "height":$height-320 + "px"
                });
                $($hash + " .inner").animate({
                    //"top":($height-320-($innerHeight/2))/2 + "px"
                    "top":($height-320-($innerHeight))/2 + "px"
                });
            } else {
                $(".page-data").animate({
                    "height":$height-90 + "px"
                });
                $($hash + " .inner").animate({
                    "top":($height-90-($innerHeight))/2 + "px"
                });
            }
        }
    </script>
    
</body>
</html>
