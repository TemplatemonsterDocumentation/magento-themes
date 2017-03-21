<h3>Theme Updator						
</h3>
<p>Navigate to <strong>Stores > Settings > Configuration</strong> section.</p>
<figure class="img-polaroid"><img src="img/magento/stores.png" alt="" /></figure>			
<p>Then navigate to <strong>TemplateMonster > Theme Updater</strong> in the left side menu to go to the module settings interface.</p>
<figure class="img-polaroid"><img src="img/magento/updater.jpg" alt="" /></figure>		
<p>Let’s review module options:</p>			
<table  class="options-table">
	<tr>
		<td class="col-1"><strong>Template ID </strong></td>
		<td>-</td>
		<td> template ID can be found in the template order email or  your TemplateMonster account. </td>
	</tr>
	<tr>
		<td class="col-1"><strong>Order ID</strong></td>
		<td>-</td>
		<td>order ID can be found in the template order email or from your TemplateMonster account.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Version</strong></td>
		<td>-</td>
		<td>current theme version.</td>
	</tr>	
</table>			
<div class="alert alert-danger">Installing theme update will replace your theme files and may override your file changes. Please create theme backup before proceed.</div>
<p align="justify">You will be asked to input two pieces of information into the module settings: 1) Your <span class="col-1"><strong>Template ID </strong></span> and 2) Your <strong>Order ID</strong>. Your  template ID and your order ID  can be found in the template order email or your TemplateMonster account. </p>
<p align="justify">Once you have specified the data, you can click the <strong>Check Updates</strong> button. If there any updates for your current theme are available, you can  download your theme updates using the <strong>Download </strong>button.</p>
<p align="justify">Press the &quot;<strong>Backup</strong>&quot; to perform a theme backup. Doing this will ensure that you will be able to   restore an older version of your theme. </p>
<p>Theme backups are stored in &quot;pub/media/theme_backups&quot; directory.</p>
<p align="justify">Follow the instructions to update your theme.</p>
<h3>Install theme on live store</h3>

<p>If you already have a Magento store and want to apply the theme, follow the instruction below. To install the theme you only need to upload all the theme files to your server and then enable the theme in the admin panel. But to avoid unexpected problems after installation, you should first prepare your Magento. Please strictly follow the steps described in this guide:</p>

<ol class="index-list">
	<li>First of all, please make sure your Magento installation version meets the template requirements.</li>
  <li>It is recommended to install the theme on a test server before you install it on a live store.</li>
  <li>Backup Magento files and the store database.</li>
  <p class="alert alert-warning"><span>Important: creating backup before installation of any themes or extensions in Magento is extremely important, especially if you are working on a live store. </span></p>
  <li>Disable all cache systems which you have in your Magento</li>
  <p class="alert alert-warning"><span>Important: when developing your Magento store, in order to be able to see changes immediately, you should completely disable the cache. You can enable it after you finish configuring your store.</span></p>
  <li>Disable Merge & Minify JavaScript Files in <strong>Stores > Configuration > Advanced > Developer > JavaScript Settings</strong> and Merge & Minify CSS Files in <strong>Stores > Configuration > Advanced > Developer > CSS Settings</strong>. You can enable this feature after installation.</strong>.</li>
  <li>Copy the content of the archive [<strong>app</strong> folder] to the root folder of your online shop. After copying run the console and navigate to the root shop folder.</li>

<div class="alert alert-danger">
    <p><strong>Attention!!!</strong></p>
    Due to the peculiarities of the engine you will have to use any console environment with the command line. Module configuration will be mainly performed via the command line. If you perform changes on the hosting server, you can contact your hosting provider for help and use the hosting command line.
</div>

<li>Run the following commands in the command line, one by one:</li> 
<ol class="marked-list">
    <li>
        <strong>bin/magento setup:upgrade</strong>
    </li>
    <li>
        <strong>bin/magento index:reindex </strong>       
    </li>
    <li>
    <strong>bin/magento cache:clean</strong></li>
</ol>
</ol>
<p align="justify">Press the &quot;<strong>Backup</strong>&quot; to perform a theme backup. Doing this will ensure that you will be able to   restore an older version of your theme.
</p>
<p>Theme backups are stored in &quot;pub/media/theme_backups&quot; directory.</p>
