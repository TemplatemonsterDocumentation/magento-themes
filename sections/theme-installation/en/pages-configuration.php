<h3>Pages configuration</h3>
<p>In order to make your template look exactly like our Live Demo, you need to set up store pages in a specific way. We provide all the files with the pages source code. You need to add them into Magento admin panel as per the instructions below using the settings table. Settings table is located on the <b>Technical details</b> page on the template preview page. The documentation file contains the link to this page:</p>
<ul class="files_structure">
	<li class="folder"><i class="fa fa-folder-open"></i> <b>Documentation</b>
		<ul>
			<li class="file"><i class="fa fa-file"></i> documentation.html</li>
		</ul>
	</li>
</ul>			
<p>The main template page will be affected the most. It usually contains the following elements: banners, slider, gallery, etc.</p>
<div class="alert alert-warning"><span>We recommend that you disable the WYSIWYG editor. To do this, from the admin top menu select  <strong>System &gt; Configuration</strong>. Open the "<strong>Content Management</strong>" section and in the <strong>WYSIWYG Options</strong> window set "<strong>Enable WYSIWYG Editor</strong>" option to "<strong>Disabled Completely</strong>".</span></br>
<figure class="img-polaroid"><img src="img/magento/pages_setting1.png" alt="" /></figure></div>
<p class="alert alert-warning"><span>In case you have already made the changes to your pages code and would like to add our code without affecting your changes, it is recommended to contact professional technicians or prepare a backup before making changes.</span></p>
<ol>
	<li>From the top menu select <b>CMS > Pages</b>. Here you can find all the store pages. <b>Home page</b>, <b>About Us</b> and <b>Customer Service</b> should already be available, so you don't need to add them. You only need to update the pages HTML and XML content. Open any of them in order to get the access to the content.</li>
	<li>Open the page and select the <b>Content</b> tab. It contains the HTML code of the page. You can take the page HTML code from the appropriate source file. You can see the list of source files included in the "Template Settings" section on your templates preview page. Copy the code from the source file and paste it to the <b>content</b> area.</li>
	<li>When you are done with the HTML code, switch to  <b>"Design"</b> tab. It contains the page XML code. XML code allows you to add Magento static blocks and widgets to the page. The XML code should be copied the same way as the HTML from the source file. Copy the XML code to the "<b>Layout Update XML</b>" area.</li>
	<li>Don't forget to select the valid "<b>Layout</b>" option.</li>
	<li>In case you need to add a new page, click the <b>"Add New Page"</b> button in the top right corner.</li>
</ol>
<figure class="img-polaroid"><img src="img/magento/pages_setting2.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting3.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting4.png" alt="" /></figure>

<p>In case you have any difficulties, please check the detailed tutorial on <a target="_blank" href="/help/magento-how-to-install-sample-content-pages-manually.html">How to configure pages manually</a>.</p>		