<h2 class="item1">Installation</h2>


<div class="alert alert-danger">
    <p><strong>Attention!!!</strong></p>
    Due to the peculiarities of the engine you will have to use any console environment with the command line. Module configuration will be mainly performed via the command line. If you perform changes on the hosting server, you can contact your hosting provider for help and use the hosting command line.
</div>

<p>First, copy the content of the archive (<strong>app</strong> folder) to the root folder of your online shop. After copying run the console and navigate to the root shop folder.<br>
Then run the following commands in the command line, one by one:</p> 
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
<div class="alert alert-warning">
    You can clear site cache and re-index data in your shop admin panel, in <strong>System -> Tools -> Cache Management/Index Management</strong> section. But we cannot guarantee these admin panel options will work properly due to the engine features and its novelty. We recommend that you use the command line. 
</div>

<p>
    After reindexing data and clearing cache, remove all the content from <strong>var</strong> and <strong>pub/static</strong> folders, except for <strong>.htaccess</strong> file. Now we are ready to navigate to the site admin panel to configure the module.    
</p>

