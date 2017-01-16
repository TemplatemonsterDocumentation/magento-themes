<h3>Product Image Zoom</h3>
<p class="indent">This module allows changing standard Image zoom on product page.<br>
You can enable/disable the module via Magento Admin Panel in <strong>System > Configuration > Templatemonster > Product Image Zoom</strong> section.</p>
<div class="alert alert-warning"><span>Attention! The  PRODUCT IMAGE ZOOM module does not support the product image switching, when clicking a swatch. <br>
If you want the option to function properly, you have to use a default  module only.</span></div>
<figure class="img-polaroid"><img src="img/magento/product-image-zoom.png" alt="" /></figure>
<p>The module has the following settings:</p>
<table class="options-table">
	<tr>
		<td class="col-1"><strong>Activation Image Zoom</strong></td>
		<td>-</td>
		<td>enable/disable the module;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Select Product Image Zoom</strong></td>
		<td>-</td>
		<td>you can choose default product image or Unite Gallery;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Skin</strong></td>
		<td>-</td>
		<td>you can change default skin or "Alexis";</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Show Thumbs Panel Button</strong></td>
		<td>-</td>
		<td>show/hide button for displaying thumbnails <strong>(1)</strong>;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Thumbs Panel Position</strong></td>
		<td>-</td>
		<td>thumbnails position Left/Bottom/Right;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Thumb Width</strong></td>
		<td>-</td>
		<td>You can set thumbnail width (in pixels);</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Thumb Height</strong></td>
		<td>-</td>
		<td>You can set thumbnail height (in pixels);</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Enable Arrows</strong></td>
		<td>-</td>
		<td>show/hide arrows next to the main product image <strong>(2)</strong>;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Enable Fullscreen Button</strong></td>
		<td>-</td>
		<td>show/hide the fullscreen button <strong>(3)</strong>;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Enable Fullwindow Button</strong></td>
		<td>-</td>
		<td>Show/hide full window button <strong>(4)</strong></td>
	</tr>
	<tr>
		<td class="col-1"><strong>Enable Zoom Panel</strong></td>
		<td>-</td>
		<td>show/hide zoom panel <strong>(5)</strong>;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Enable Play Button</strong></td>
		<td>-</td>
		<td>show/hide play button <strong>(6)</strong>;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Play Interval</strong></td>
		<td>-</td>
		<td>set the play interval (in milliseconds) when play button is pushed.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Pause on Mouseover</strong></td>
		<td>-</td>
		<td>pause slideshow when hovering the product image;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Controls Always On</strong></td>
		<td>-</td>
		<td>if you chose "Yes", controls always show.</td>
	</tr>
</table>
<p class="indent">Frontend elements of the <strong>Product Image Zoom</strong> interface:</p>
<figure class="img-polaroid"><img src="img/magento/product-image-zoom-2.png" alt="" /></figure>
<table class="options-table">
	<tr>
		<td class="col-1"><strong>1</strong></td>
		<td>-</td>
		<td>button to show/hide thumbnails;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>2</strong></td>
		<td>-</td>
		<td>next/previous product image;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>3</strong></td>
		<td>-</td>
		<td>button for activating full screen mode;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>4</strong></td>
		<td>-</td>
		<td>button for activating full width mode;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>5</strong></td>
		<td>-</td>
		<td>buttons to change the scale of the image control. You can also Zoom in/Zoom out image with the mouse wheel;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>6</strong></td>
		<td>-</td>
		<td>button to play/pause slideshow product images.</td>
	</tr>
</table>
<p>
	If you need to change the view of product image zoom, you should edit the <br>
	<i class="file-path">skin\frontend\tm_themes\themeXXX\css\tm\imagezoom\unitegallery\unite-gallery.css</i> file <br>
	for default skin or, if you select Alexis, you should edit the <br>
	<i class="file-path">skin\frontend\tm_themes\themeXXX\css\tm\imagezoom\unitegallery\skins\alexis.css</i> file.
</p>