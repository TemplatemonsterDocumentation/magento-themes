<h3>Megamenu</h3>
<p align="justify" class="indent">TemplateMonster Megamenu module extends standard Magento menu functionality and allows you to configure subcategories multi-column display, add static blocks and products to the dropdown menu, as well as the flexibly customize its appearance in site admin panel.</p>

<h4>Global configuration</h4>
<p>In order to configure the module, navigate to <strong>Stores > Settings > Configuration</strong> section.</p>
 Choose the <strong>TEMPLATEMONSTER > Megamenu</strong> in the left side menu to go to the module settings interface.
<figure class="img-polaroid"><img src="img/magento/menu.png" alt="" /></figure>
This module has 2 options:
<table class="options-table">
	<tr>
		<td class="col-1"><strong>Enable/Disable</strong></td>
		<td>-</td>
		<td>you can enable or disable the module if needed;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Menu position</strong></td>
		<td>-</td>
		<td>you can choose menu position here.</td>
	</tr>					
</table>
Menu position option includes two values: <strong>Topnav</strong> and <strong>Sidebar</strong>.
<table class="options-table">
	<tr>
		<td class="col-1"><strong>Topnav</strong></td>
		<td>-</td>
		<td>displays menu in site header;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Sidebar</strong></td>
		<td>-</td>
		<td>shows menu in sidebar.</td>
	</tr>					
</table>
<div class="alert alert-danger">
	<p align="justify">Attention!!! If you’re going to display menu in sidebar, be sure to enable a layout with left or right column included. In case, you have one-column layout active for pages and <strong>Menu position:Sidebar</strong> option is enabled, no menu will appear at site.
</div>

<h4>Categories configuration</h4>
<p>Megamenu block display can be configured on the 1st level category configuration page, that can be found in the Megamenu tab, at <strong>Products > Categories</strong> section. 
  <figure class="img-polaroid"><img src="img/magento/menu-1.png" alt="" /></figure>
</p>
<p align="justify">You will see the <strong>Turn on megamenu for this category</strong> option at the <strong>MegaMenu tab</strong>. This option enabled Megamenu block display for the selected category. After enabling this option, you will see the two fields and a widget with menu content settings.</p>
<div class="alert alert-danger">
  <p align="justify">Attention!!! MegaMenu is available for sub-categories [second-level categories] only.</p>
</div>
<p>
  <figure class="img-polaroid"><img src="img/magento/menu-2.png" alt="" /></figure>
</p>
<p align="justify">Label option allows you to display the label [new, sale] for the top-level categories. This label has default styling, but its appearance can be changed by using <strong>Css class</strong>b option. This option sets the class for current menu item’s &lt;li&gt; и &lt;a&gt; tags, so you can easily create custom styling for your label by using the class.</p>
<p align="justify">Megamenu block content settings' widget allows you to define number of rows, columns, specify their width and lot of other settings.<br>
In order to add a new row you need to use <strong>Add row</strong> button. Then you will see the empty field with <strong>Add column[s]</strong> and <strong>Remove row</strong> buttons. </p>
<p><strong>Remove row</strong> - removes the row [field].</p>
<figure class="img-polaroid"><img src="img/magento/menu-3.png" alt="" /></figure>
<p align="justify">After pressing the <strong>Add column[s]</strong> button you’ll see a pop-up window to select the width of the column you’re going to add. The maximum width of the column is <strong>col-12</strong> it stretches menu block to the full width of the container. So, if you need to display 4 columns in a row, you have to add 4 columns with the width parameter set to <strong>col-3</strong>.</p>
<figure class="img-polaroid"><img src="img/magento/menu-4.png" alt="" /></figure>
<p>Let’s consider columns' settings e.g. for <strong>col-3</strong>.</p>
<figure class="img-polaroid"><img src="img/magento/menu-5.png" alt="" /></figure>
<ul class="marked-list">
  <li> <strong>Set column width</strong> - column width. It can take values from col-1 to col-12.
    <figure class="img-polaroid"><img src="img/magento/menu-7.png" alt="" /></figure>
  </li>
  <li> <strong>Enter specific class</strong> - custom css class of the column, so that you can further create styles for this column using css rules.
    <figure class="img-polaroid"><img src="img/magento/menu-6.png" alt="" /></figure>
  </li>
  <li> 
    <div align="justify"><strong>Add subcategory</strong> -  subcategories dropdown for the parent category. This option allows you to select and display the subcategories you need. In order to do this, choose the subcategory among the list and press on the <strong>Add</strong> button. On the next step you will see this category listed at the <strong>Selected items</strong> field.
    </div>
    <figure class="img-polaroid">
      <img src="img/magento/menu-8.png" alt="" />
    </figure>
  </li>
  <li> 
    <div align="justify"><strong>Select static block</strong> - static blocks dropdown list. You can show any of site static blocks in the dropdown menu same as the list of subcategories, if you have previously added it to the shop admin panel. In order to add a static block, choose it among the list and press on <strong>Add</strong> button. Static block title will be listed in the <strong>Selected items</strong> field.
    </div>
    <figure class="img-polaroid">
     <img src="img/magento/menu-9.png" alt="" />
    </figure>
  </li>
  <li> 
    <div align="justify"><strong>Add product[s]</strong> - adding product to the menu. This option allows you to add any of site products to the menu. Product image, title and a price will be displayed in this case. After pressing on the button you’ll see the pop-up list of products available for adding. After you add it to menu, it’s title will be listed in the <strong>Selected items</strong> field.
    </div>
    <figure class="img-polaroid">
     <img src="img/magento/menu-11.png" alt="" />
    </figure>
  </li>
  <li> <strong>Add widget[s]</strong> - this tool can be used to add a variety of content elements to the page. </li>
  <figure class="img-polaroid"><img src="img/magento/addwidget.png" alt="" /></figure>
  <p> <strong>Available widgets</strong></p>
  <p>By default, Magenta ships with the following widgets:</p>
  <figure class="img-polaroid"><img src="img/magento/availwid.png" alt="" /></figure>
  <strong> — CMS Page Link</strong>
  <p>The CMS Page Link widget will allow you to add a link to a page that you specify; this can be useful to add a link to the footer.</p>
  <figure class="img-polaroid"><img src="img/magento/cmspl.png" alt="" /></figure>
  <strong> — CMS Static Block</strong>
  <p>The CMS Static c Block widget will add a static block to the location that you specify.</p>
  <figure class="img-polaroid"><img src="img/magento/cmssb.png" alt="" /></figure>
  <strong> — Catalog Category Link </strong>
  <p>The Catalog Category Link widget adds a link to a speciﬁc category that you specify.</p>
  <figure class="img-polaroid"><img src="img/magento/ccl.png" alt="" /></figure>
  <strong> — Catalog New Products List </strong>
  <p align="justify">The Catalog New Products List widget allows you to add a list of products to a page; here you can select the amount of products that you want to show and if you want to display only new products or all products.</p>
  <p>
    <figure class="img-polaroid"><img src="img/magento/cnpl.png" alt="" /></figure>
  <strong> — Catalog Product Link </strong> </p>
  <p>With the Catalog Product Link widget, it is possible to create a link to a specific product.</p>
  <figure class="img-polaroid"><img src="img/magento/cpl.png" alt="" /></figure>
  <strong> — Catalog Product List</strong>
  <p align="justify">To display a list of products on your page, you can use the Catalog Product List widget. With this widget, you can control the products shown based on your own conditions[product attributes].</p>
  <figure class="img-polaroid"><img src="img/magento/cplt.png" alt="" /></figure>
  <strong> — Orders and Returns</strong>
  <p>This will add a block to allow customers to search for their orders and view the status or request for a return.</p>
  <figure class="img-polaroid"><img src="img/magento/or.png" alt="" /></figure>
  <strong> — Recently Compared Products</strong>
  <p>This will add a block that shows the products that are added to the compare products list.</p>
  <figure class="img-polaroid"><img src="img/magento/rcp.png" alt="" /></figure>
  <strong> — Recently Viewed Products</strong>
  <p>This will add a block that shows the products that have been viewed by the user.</p>
  <figure class="img-polaroid">
    <img src="img/magento/rvp.png" alt="" />
  </figure>
  <li> 
    <div align="justify"><strong>Selected items</strong> - the field for sorting the items. It allows you to change the display  order [sorting] of your column content. Drag&amp;Drop interface allows you to reorder items by dragging them. If you do not want the product or static block to be displayed below, just drag it to the top to reach the required appearance. You can also remove some items here. Select the ones you need to remove and press on <strong>Remove selected</strong> button to do that.
    </div>
    <figure class="img-polaroid">
      <img src="img/magento/menu-10.png" alt="" />
    </figure>
  </li>
  <li> <strong>Add video</strong> - this video extension allows you to add videos to your product pages. You can upload a video [FLV, MPEG, MP4, JPEG, PNG, GIF and SWF] or embed it from youtube or Vimeo. </li>
</ul>
<figure class="img-polaroid"><img src="img/magento/addvid.png" alt="" /></figure>
<h4>Subcategories configuration</h4>
<p align="justify">This module allows to add an image and a label to any products' subcategory. In order to configure the subcategory, open its page and navigate to the Megamenu tab. You’ll see two options there: <strong>Category image</strong> and <strong>Label</strong>.</p>
To add the subcategory image press on <strong>browse</strong> and choose an image from the clipart.<br />
As to the label adding, fill in the <strong>Label</strong> field.
<figure class="img-polaroid"><img src="img/magento/menu-12.png" alt="" /></figure>
<h4>Styles configuration</h4>
<p>You can edit css style files to configure custom megamenu appearance. These files are located at the <strong>app\code\TemplateMonster\Megamenu\view\frontend</strong>. Do not forget to clear the cache after changing the styles and compiling.</p> 
