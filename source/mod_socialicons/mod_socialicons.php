<?php
/**
* Author:	Omar Muhammad (admin@omar84.com) | http://omar84.com
* Author:	Christophe Trefois (trefex@gmail.com) | http://www.trefois.com
* Module:	Social Icons
* Version:	0.0.3
* Date:		29 Nov 2014
* License:	http://www.gnu.org/copyleft/gpl.html GNU/GPL
* This module has been modified from the original by Trefex.
**/

defined('_JEXEC') or die('Restricted access');

$facebook	= $params->get('facebook','');
$twitter	= $params->get('twitter','');
$google 	= $params->get('google', '');
$github 	= $params->get('github', '');

// Insert jQuery framework properly
JHtml::_('jquery.framework');

?>

<div class="social">
<?php
if($facebook) 
	echo '<a href="' . $facebook . '" class="face" target="_blank"><span></span></a>';
	
if($twitter)	
	echo '<a href="https://twitter.com/' . $twitter . '/" class="twitter" target="_blank"><span></span></a>';

if($google)
	echo '<a href="https://plus.google.com/+' . $google . '/" class="google" target="_blank"><span></span></a>';
	
if($github)
	echo '<a href="https://github.com/' . $github . '/" class="github" target="_blank"><span></span></a>';
	
?>
</div>

<style type="text/css">
 .social a {
 display: inline-block;
 width: 31px;
 height: 32px;
 overflow: hidden;
 vertical-align: middle;
 position: relative;
}

 .social a span {
 position: absolute;
 top: 0;
 left: 0;
 width: 31px;
 height: 64px;
 background-image: url(https://raw.githubusercontent.com/Trefex/joomla_socialmod/master/source/mod_socialicons/spirits.png);
}

 .social a.face span {
 background-position: -274px -60px;
}

 .social a.twitter span {
 background-position: -315px -60px;
}

 .social a.google span {
 background-position: -355px -60px;
}

 .social a.github span {
 background-position: -396px -60px;
}
</style>
<script type="text/javascript">
/* Hover Effect on Social Icons */
 jQuery('.social a').each(function (){
  jQuery(this).hover( function (){
  jQuery(this).find('span').stop(true, false).animate ({
     top: -32,
   }, 200, function() {
   });    
  },function(){
   jQuery(this).find('span').stop(true, false).animate ({
     top: 0,
   }, 200, function() {
   });    
  });    
 })

</script>