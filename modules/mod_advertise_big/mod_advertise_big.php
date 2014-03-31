<?php
defined('_JEXEC') or die('Can not access');
	$color = $params->get('color');
	$css_file = $color.'css';
	
	$img_adv= $params->get("image_adv");
	
	$document = JFactory::getDocument();
	$document->addStylesheet('modules/mod_slide/css/slideshow.css');
	$document->addStylesheet('modules/mod_slide/css/'.$css_file);
	
	?>
	<div class="thumbnail">
	<img src="<?php echo htmlspecialchars($img_adv); ?>" style=" height:90px; " />
       
  	</div>