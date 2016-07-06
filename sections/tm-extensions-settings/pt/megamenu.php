<h3>Megamenu</h3>
<p>This module extends the standard Magento menu functionality and allows configuring subcategories multi-column display, adding static blocks and products to the dropdown menu, as well as the customizing its appearance in the site admin panel.<br>
You can turn on the module and some options in Magento admin panel in <strong>System > Configuration > Templatemonster > Megamenu</strong> section.</p>
<figure class="img-polaroid"><img src="img/magento/megamenu-1.png" alt="megamenu" /></figure>
<table class="options-table">
	<tr>
		<td class="col-1"><strong>Enable/Disable</strong></td>
		<td>-</td>
		<td>turn on/turn off the module;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Labels</strong></td>
		<td>-</td>
		<td>show/hide labels on category <strong>(a)</strong>;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Images</strong></td>
		<td>-</td>
		<td>Show/hide subcategory images <strong>(b)</strong>;</td>
	</tr>
</table>
<p>To access all Megamenu settings you need go to <strong>Admin Panel > Catalog > Manage Categories</strong> and choose <strong>Megamenu tab</strong>:</p>
<figure class="img-polaroid"><img src="img/magento/megamenu-2.png" alt="megamenu settings" /></figure>
<figure class="img-polaroid"><img src="img/magento/megamenu-3.png" alt="megamenu settings" /></figure>
<table class="options-table">
	<tr>
		<td class="col-1"><strong>Turn on megamenu for this category</strong></td>
		<td>-</td>
		<td>turn on/turn off the Megamenu for selected category;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Turn on columns with subcategories</strong></td>
		<td>-</td>
		<td>if you want to use more than one column, you need to activate this setting and fill the next field <strong>(c)</strong>;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Subcategories column number</strong></td>
		<td>-</td>
		<td>you need to specify the number of columns with subcategories;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Turn on images for subcategories</strong></td>
		<td>-</td>
		<td>show/hide subcategory images <strong>(b)</strong>;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Turn on products show</strong></td>
		<td>-</td>
		<td>if you want to display products in this category, you should activate this setting and choose products in the next block;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Products</strong></td>
		<td>-</td>
		<td>choose products, displayed in this category <strong>(d)</strong>;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Show static blocks</strong></td>
		<td>-</td>
		<td>if you want to add some static block, activate this setting and choose the static block in next section;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Static Blocks</strong></td>
		<td>-</td>
		<td>you can choose static block in the dropdown. If you want to add more than one static block, you need to click on the "<strong>Add block</strong>" button;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Turn on label for this category and it's subcategories</strong></td>
		<td>-</td>
		<td>show/hide labels for chosen category and subcategories <strong>(a)</strong>;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Label</strong></td>
		<td>-</td>
		<td>enter the text, which you want to display on the label.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Css class</strong></td>
		<td>-</td>
		<td>you can add a CSS class for a category;</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Custom template for megamenu item</strong></td>
		<td>-</td>
		<td>if you want use a custom template for your Megamenu, you need to copy a file from <i class="file-path">app/design/frontend/tm_themes/themeXXX/template/tm/megamenu/page/html/topmenu/renderer/</i> folder to <i class="file-path">app/design/frontend/base/default/template/tm/megamenu/page/html/topmenu/renderer/</i> folder and change it as you wish.</td>
	</tr>
</table>
<figure class="img-polaroid"><img src="img/magento/megamenu-4.png" alt="megamenu view" /></figure>
<p>For changing the view of Megamenu, you can edit the following CSS file: <i class="file-path">skin/frontend/tm_themes/themeXXX/css/megamenu/rd-navbar.css</i>.</p>