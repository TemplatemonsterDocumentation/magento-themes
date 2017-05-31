<h2 class="item1">Magento theme installation</h2>
<div class="alert alert-danger">
  <div align="justify">This theme is not compatible with Magento 1.9 engine. It will work with the Magento 2.1.6 engine only.</div>
</div>
<p>If you already have a Magento store and want to apply the theme, follow the instruction below. To install the theme you only need to upload all the theme files to your server and then enable the theme in the admin panel. But to avoid unexpected problems after installation, you should first prepare your Magento. Please strictly follow the steps described in this guide:</p>

<ol class="index-list">
	<li>First of all, please make sure your Magento installation version meets the template requirements. The detailed Magento update guide you will find on the site <a target="_blank" href="http://www.magentocommerce.com/wiki/">Magento Wiki</a>.</li>
  <li>It is recommended to install the theme on a test server before you install it on a live store.</li>
  <li>Backup Magento files and the store database.</li>
  <p class="alert alert-warning"><span>Important: creating backup before installation of any themes or extensions in Magento is extremely important, especially if you are working on a live store. </span></p>
  <li>Copy the content of the archive [<strong>app</strong> folder] to the root folder of your online shop. After copying run the console and navigate to the root shop folder.</li>

<div class="alert alert-danger">
    <p><strong>Attention!!!</strong></p>
    <div align="justify">Due to the peculiarities of the engine you will have to use any console environment with the command line. Module configuration will be mainly performed via the command line. If you perform changes on the hosting server, you can contact your hosting provider for help and use the hosting command line. </div>
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
        <strong>bin/magento cache:clean</strong>
    </li>
</ol>
<li>Then follow the instructions for setting up the theme.</li>
</ol>