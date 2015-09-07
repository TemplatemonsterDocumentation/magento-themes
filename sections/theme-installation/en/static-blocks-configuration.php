<h3>Static blocks configuration</h3>
<p>When you are done configuring the pages, you need to configure the static blocks. The procedure is similar: you need to copy the code from the source files and paste it to the corresponding fields in the Magento admin panel. You need to use a similar table but for the static blocks.</p>
<ol class="index-list"> 
	<li>From the top menu select <strong>CMS > Static Blocks</strong>.</li>
	<li>Click the "Add New block" button in the right corner to add a new block.<figure class="img-polaroid"><img src="img/magento/pages-setting-5.jpg" alt="" /></figure></li>
	<li>Input the block name and identifier. You can get the block details from the table at the templates Live Demo page (check the Pages Configuration part).</li>
	<li>Open the block source file and copy the HTML code into the content area.</li>
</ol>
<figure class="img-polaroid"><img src="img/magento/pages-setting-6.jpg" alt="" /></figure>

<p class="alert alert-info"><span>Please note: some of the templates do not contain any static blocks, so the table can be empty. </span></p>
<p class="alert alert-info"><span>The source files with the static blocks code are stored in the "<strong>sources\demo\static_blocks\</strong>" directory of the template package. </span></p>

<h4>How to display our blocks with static content?</h4>

<ol class="index-list"> 
	<li>Go to <strong>CMS > Widgets</strong> in top menu.</li>
	<li>Click the <strong>Add New Widget Instance </strong> button in the top right to add the widget.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Specify the widget type <strong>CMS > Static Blocks</strong> and theme which you want to apply the widget to and click <strong>Continue</strong> button.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure></li>
	<li>On the next page, in the <strong>Widget Instance Title </strong> field, enter the name of the widget which will be displayed in the admin panel.  In the <strong>Assign to Store Views </strong> field you need to select store views which will display the widget. In the <strong>Layout Updates </strong> block click the <strong>Add Layout Update</strong> button. In the <strong>Display On</strong> field you can select pages where widget will be displayed. Depending on selected pages you will have opportunity to fill in the additional fields.
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
	<li>Select the <strong>Widget Options </strong> tab in the left sidebar and select the static block you are referring to. Do not forget to save changes.
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure>
	</li>
</ol>

<p>When you are done configuring store pages and blocks, your store is ready to go.</p>