<?php echo template_head_content('css/viewer360.css'); ?>

<div id="panorama" class="viewer_360"></div>
<script type="text/javascript" src="https://cdn.pannellum.org/2.3/pannellum.js"></script>
<script>
	pannellum.viewer('panorama', {
	    "type": "equirectangular",
	    "panorama": "https://pannellum.org/images/alma.jpg",
	    "autoRotate": -2,
	    "showFullscreenCtrl": true,
	    "draggable": true,
	    "showControls ": false
	});
</script>