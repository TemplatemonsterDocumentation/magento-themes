		
<h3>Install theme on live store</h3>

<p align="justify">If you already have a Magento store and want to apply the theme, follow the instruction below. To install the theme you only need to upload all the theme files to your server and then enable the theme in the admin panel. But to avoid unexpected problems after installation, you should first prepare your Magento. Please strictly follow the steps described in this guide:</p>
<ol class="index-list">
  <li>
    <div align="justify">It is recommended to install the theme on a test server before you install it on a live store.</div>
  </li>
  <li>
    <div align="justify">Backup Magento files and the store database.</div>
  </li>
  <p align="justify" class="alert alert-warning"><span>Important: creating backup before installation of any themes or extensions in Magento is extremely important, especially if you are working on a live store. </span></p>
  <li>
    <div align="justify">Disable all cache systems which you have in your Magento</div>
  </li>
  <p align="justify" class="alert alert-warning"><span>Important: when developing your Magento store, in order to be able to see changes immediately, you should completely disable the cache. You can enable it after you finish configuring your store.</span></p>
  <li>
    <div align="justify">Disable Merge & Minify JavaScript Files in <strong>Stores > Configuration > Advanced > Developer > JavaScript Settings</strong> and Merge & Minify CSS Files in <strong>Stores > Configuration > Advanced > Developer > CSS Settings</strong>. You can enable this feature after installation.</strong>.</div>
  </li>
  <li>
    <div align="justify">Copy the content of the archive (<strong>app</strong> folder) to the root folder of your online shop. After copying run the console and navigate to the root shop folder.</div>
  </li>

<div class="alert alert-danger">
    <p><strong>Attention!!!</strong></p>
    <div align="justify">Due to the peculiarities of the engine you will have to use any console environment with the command line. Module configuration will be mainly performed via the command line. If you perform changes on the hosting server, you can contact your hosting provider for help and use the hosting command line. </div>
</div>

<p>Run the following commands in the command line, one by one:</p> 
<ol class="marked-list">
    <li>
        <strong>bin/magento setup:upgrade</strong>
    </li>
    <li>
        <strong>bin/magento index:reindex </strong>       
    </li>
    <li>
    <strong>bin/magento cache:clean</strong> </li>
</ol>

  <li>Click the <strong>'Unzip'</strong> button to proceed.</li>
</ol>
          

		
