<?php
defined('_JEXEC') or die('Can not access');
	$color = $params->get('color');
	$css_file = $color.'css';
	
	
	$img_adv1= $params->get("image_adv1");
	$img_adv2= $params->get("image_adv2");
	$img_adv3= $params->get("image_adv3");
	$img_adv4= $params->get("image_adv4");
	$img_adv5= $params->get("image_adv5");
	$img_adv6= $params->get("image_adv6");
	$img_adv7= $params->get("image_adv7");
	$img_adv8= $params->get("image_adv8");
	$img_adv9= $params->get("image_adv9");
	$img_adv10= $params->get("image_adv10");
	$document = JFactory::getDocument();
	
	//$document->addStylesheet('modules/mod_partner/css/CSSreset.min.css');
	$document->addStylesheet('modules/mod_partner/css/flexslider.css');
	$document->addStylesheet('modules/mod_partner/css/'.$css_file);
	
	//$document->addScript('modules/mod_partner/js/jquery.als-1.4.min.js');
	$document->addScript('modules/mod_partner/js/dw_con_scroller.js');
$document->addScript('modules/mod_partner/js/demo.js');
	?>
<div id="wn">
    <div id="lyr1">
        <div id="inner1">
        
<img src="<?php echo htmlspecialchars($img_adv1); ?>" style="width:243px; height:146px; " class="thumbnail" />   
<img src="<?php echo htmlspecialchars($img_adv2); ?>" style="width:243px; height:146px;  " class="thumbnail" />
<img src="<?php echo htmlspecialchars($img_adv3); ?>" style="width:243px; height:146px;  " class="thumbnail" />
<img src="<?php echo htmlspecialchars($img_adv4); ?>"style="width:243px; height:146px;  " class="thumbnail" />
<img id="rpt1" src="<?php echo htmlspecialchars($img_adv5); ?>" style="width:243px; height:146px;" class="thumbnail" />
<img src="<?php echo htmlspecialchars($img_adv6); ?>" style="width:243px; height:146px;" class="thumbnail" />
<img src="<?php echo htmlspecialchars($img_adv7); ?>" style="width:243px; height:146px;" class="thumbnail" />
<img src="<?php echo htmlspecialchars($img_adv8); ?>" style="width:243px; height:146px;" class="thumbnail" />
<img src="<?php echo htmlspecialchars($img_adv9); ?>" style="width:243px; height:146px;" class="thumbnail"/>
<img src="<?php echo htmlspecialchars($img_adv10); ?>" style="width:243px; height:146px;" class="thumbnail" />
        </div>
        
    </div>
</div>
<marquee scrollamount="1" scrolldelay="1" onmouseover="this.stop()" 
                    onmouseout="this.start()" direction="left" 
                    style="margin-top: 0px; margin-left: 6px;" class="style41">Contents</marquee>