		
<h3>Install theme on live store</h3>

<p>If you already have a Magento store and want to apply the theme, follow the instruction below. To install the theme you only need to upload all the theme files to your server and then enable the theme in the admin panel. But to avoid unexpected problems after installation, you should first prepare your Magento. Please strictly follow the steps described in this guide:</p>
 


1. It is recommended to install the theme on a test server before you install it on a live store.
2. Backup Magento files and the store database.

Important: creating backup before installation of any themes or extensions in Magento is extremely important, especially if you are working on a live store.

4. Disable all cache systems which you have in your Magento:
4.a. Magento's cache (refer to 4.1.2 Disable cache for details)
4.b. full page cache and caching modules for Magento (such as Speedster)
4.c. any additional cache on your server, PHP cache engines, APC, etc.

Important: when developing your Magento store, in order to be able to see changes immediately, you should completely disable the cache. You can enable it after you finish configuring your store.

5. Disable Merge & Minify JavaScript Files in <strong>Stores > Configuration > Advanced > Developer > JavaScript Settings</strong> and Merge & Minify CSS Files in <strong>Stores > Configuration > Advanced > Developer > CSS Settings</strong>. You can enable this feature after installation.

7. Log out from Magento admin panel.

Important: do not just close the browser window: you need to click the Log Out link to refresh the access control system.

8. Before you install, make sure your store is disabled during the installation process.
Put Magento in the maintenance mode. To do this you can create a simple empty file named maintenance.flag in your Magento's root directory. Magento will be offline after that (and you will not be able to log in to the admin panel). You canremove the file after you finish.

           
<ol class="index-list">
  <li>It is recommended to install the theme on a test server before you install it on a live store.</li>
  <li>Backup Magento files and the store database.</li>
  <p class="alert alert-warning"><span>Important: creating backup before installation of any themes or extensions in Magento is extremely important, especially if you are working on a live store. </span></p>
  <li>Disable all cache systems which you have in your Magento</li>
  <p class="alert alert-warning"><span>Important: when developing your Magento store, in order to be able to see changes immediately, you should completely disable the cache. You can enable it after you finish configuring your store.</span></p>
  <li>Disable Merge & Minify JavaScript Files in <strong>Stores > Configuration > Advanced > Developer > JavaScript Settings</strong> and Merge & Minify CSS Files in <strong>Stores > Configuration > Advanced > Developer > CSS Settings</strong>. You can enable this feature after installation.</strong>.</li>
  <li>Copy the content of the archive (<strong>app</strong> folder) to the root folder of your online shop. After copying run the console and navigate to the root shop folder.</li>

<div class="alert alert-danger">
    <p><strong>Attention!!!</strong></p>
    Due to the peculiarities of the engine you will have to use any console environment with the command line. Module configuration will be mainly performed via the command line. If you perform changes on the hosting server, you can contact your hosting provider for help and use the hosting command line.
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
        <strong>bin/magento cache:clean</strong>
    </li>
</ol>

  <li>Click the <strong>'Unzip'</strong> button to proceed.</li>
</ol>
          

		
