		
<h3>Sample data import</h3>
<p align="justify">Magento template package contains the sample data file [<strong>dump.sql</strong> or <strong>dump.gz</strong>]. This file is located under the <strong>/sources/sample_data</strong> folder of your template. It allows you to load sample data, so that your website looks exactly like our demo template.</p>
<p align="justify" class="alert alert-danger"><span>Do not import <strong>dump.sql.gz</strong> if you already have the data on your site. By importing <strong>dump.sql.gz</strong> all the products will be erased from your store. If you do not want to install sample data, use clean database while installing Magento. Skip the sample data installation step. </span></p>	
<p>In order to install the dump file, follow the steps below:</p>
<ol class="index-list">
	<li>
	  <div align="justify">Log into PhpMyAdmin and the select the database that you will use for Magento Commerce [It was created by you with the help of the steps provided earlier]. </div>
	  <figure class="img-polaroid">
	    <img src="img/magento/import-dump-1.jpg" alt="" />
	  </figure>
	</li>
<li>Navigate to <strong>"Import"</strong> tab and click <strong>"Browse"</strong> button. <figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>Find the <strong>"/sources/sample_data"</strong> folder of your template and select the <strong>dump.sql.gz.</strong>file. Click <strong>"GO"</strong>. <figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure> The import process can take a few minutes.</li>
</ol>