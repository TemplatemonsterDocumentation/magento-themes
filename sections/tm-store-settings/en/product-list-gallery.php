<h3>Grid/list image view</h3>
To customize product thumbnails in grid/list views of home and categories pages, navigate to <strong>TM Store settings -> Settings</strong> in the top admin panel menu. In the settings you will find 4 sections:
<ul class="marked-list">
	<li>List view</li>
	<li>Grid view</li>
	<li>Homepage List view</li>
	<li>Homepage Grid view</li>
</ul>
The module allows you to specify the size of product thumbnails on the home page and category page. It allows to speed up the store page loading. By default, if you do not specify any values, the engine will load the original image size (for example: 2000px * 1800px) and then compress it using CSS to the size of the grid. <br>
We have added this feature to cut down the size of images before the pages are loaded. So, do not be surprised if you set the thumbnail width of 500px, and finally you get the same width of 210px for a 4 products layout. The thumbnails width is adjusted by CSS and grid width. The thumbnails height is proportional to the width. 
<p>Let's take a look at <strong>List view and Homepage List view</strong> sections.<br> They display products in a list view on the home and category pages.<br>
Both sections have the same settings:</p>
<table class="options-table">
	<tr>
		<td class="col-1"><strong>Image width</strong></td>
		<td>-</td>
		<td>sets the width of the main product image in the list view. <strong>Attention!!!</strong> The image cannot be wider than the width of the grid in which it is located.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Image height</strong></td>
		<td>-</td>
		<td>sets the height of the main product image. </td>
	</tr>
	<tr>
		<td class="col-1"><strong>Enable/Disable thumbnails</strong></td>
		<td>-</td>
		<td>enable/disable the display of thumbnails for other product images.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Thumbnail width</strong></td>
		<td>-</td>
		<td>width of the thumbnail.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Thumbnail height</strong></td>
		<td>-</td>
		<td>height of the thumbnail.</td>
	</tr>
</table>
<p>In this type of listing you can display product thumbnails under the main image.</p>

<p>Let's take a look at <strong>Grid view and Homepage Grid view</strong> sections. </p>
Both sections have the same settings:</p>
<table class="options-table">
	<tr>
		<td class="col-1"><strong>Image width</strong></td>
		<td>-</td>
		<td>sets the width of the main product image in the grid view. <strong>Attention!!!</strong> The image cannot be wider than the width of the grid in which it is located.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Image height</strong></td>
		<td>-</td>
		<td>sets the height of the main product image.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Type of the product image preview:</strong></td>
		<td>-</td>
		<td>allows you to choose one of three options to display the thumbnails of product:	<strong>Thumbnail</strong>, <strong>Hover Images</strong>, <strong>Carousel</strong>.	</td>
	</tr>	
</table>
<p>By choosing the  <strong>Thumbnail</strong> type, you will have additional options to specify the width, height and number of thumbnails.</p>
<p>When you choose the  <strong>Hover Images</strong> type, the product image will change on hover. You can choose the image which will be displayed on hover in product settings.</p>
<p>By choosing the <strong>Carousel</strong> type, you will be able to flip through product thumbnails from the main product preview.</p>
<a class="pretty_image" href="img/magento/productgallery.jpg"><figure class="img-polaroid"><img src="img/magento/productgallery.jpg" alt="" /></figure></a>

<p>Note! The maximum width of the image is equal to the width of the column in which it is located. </p>