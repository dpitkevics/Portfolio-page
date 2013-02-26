<section id="portfolio" class="bg-purple page">	
    <div class="row-fluid">

        <div class="page-data">

            <div class="offset2 span8 inner">
                
                <h2>Portfolio</h2>              
                
                <div id="ca-container" class="ca-container">
				<div class="ca-wrapper">
                    <?php $c = 0; ?>
                    <?php foreach ($this->portfolioItems as $item): ?>
                    <?php $c++; ?>
					<div class="ca-item ca-item-<?php echo $c; ?>">
						<div class="ca-item-main">
							<div class="ca-icon images-circle" style="background:#fff url(<?php echo Yii::app()->request->baseUrl . $item->image_source; ?>) no-repeat center center;background-size: contain;"></div>
							<h3><?php echo $item->title; ?></h3>
							<h4>
								<?php echo $item->description; ?>
							</h4>
								<a href="#" class="ca-more">Live Preview</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6><?php echo $item->title; ?></h6>
								<a href="#" class="ca-close">Close</a>
								<div class="ca-content-text">
                                    <?php $headers = @get_headers($item->link);
                                    if(strpos($headers[0],'200')===false): ?>
                                    Sorry, but this page is either offline or for personal use only.
                                    <?php else: ?>
                                    <?php $iframe = '<iframe src=\"'.$item->link.'\"></iframe>'; ?>
                                    <div class="navbar">
                                        <div class="">
                                            <ul class="nav">
                                                <li><?php echo CHtml::link('<i class="icon-share"></i>Visit this site', 
                                                        $item->link, 
                                                        array(
                                                            'target' => '_blank',
                                                            'class' => 'btn-green',
                                                        )); ?></li>
                                                <li><?php echo CHtml::link('<i class="icon-plus-sign"></i>Show on iFrame',
                                                        '#',
                                                        array(
                                                            'onclick' => '$("#modal-iframe").fadeIn(400); $(".iframe").html("'.$iframe.'"); $("#page-title").text("'.$item->title.'"); return false;',
                                                            'class' => 'btn-teal',
                                                        )); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php endif; ?>
								</div>
							</div>
						</div>
					</div>
                    <?php endforeach; ?>
					
				</div>
			</div>

            </div>

        </div>

    </div>
    
</section>

 <div id="modal-iframe" class="modal-window" style="display:none">
     <div class="modal-close">
         <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/close.png', 'Close Modal'),
                 '#',
                 array(
                     'onclick' => '$("#modal-iframe").fadeOut(400); $(".iframe").html(""); $("#page-title").text(""); return false;',
                 )); ?>
     </div>
     <div class="modal-title">
         <h2>Live Preview: <span id="page-title"></span></h2>
     </div>
     <div class="iframe">
     </div>
</div>
