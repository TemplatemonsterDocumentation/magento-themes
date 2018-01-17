<h3>Magento Installation</h3>
<p align="justify">When you are done with uploading files, you can move on to Magento engine installation process. Open your browser and in the address bar type your <strong>'domain name/path to your Magento directory'</strong>. You should see the <strong>Sample Data Installer</strong> welcome screen. Please follow the instructions below to install Magento. </p>
<div class="alert alert-warning">
Before you begin, make sure that your system meets the requirements discussed in <a href="http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements2.html">Magento System Requirements</a>.</div>
<p align="justify"><strong>Step 1: Sample Data Installer</strong></p>
<p align="justify">Magento<strong> Sample Data Installer</strong> — is a module that allows you install quickly and easily the full version of a Magento template (with pictures of products, categories, settings, etc.) After installation, you'll get a fully-functioning and fully-configured store, the one you can see on any livedemo.</p>
<p align="justify">Please <strong>DO NOT </strong>import sample data  if you have a live website as it will completely replace your database contents, and all your website data will be lost.</p>
<p>
  <figure class="img-polaroid"><img src="img/magento/sample.jpg" alt="" /></figure>
</p>

    <p>Enter the following information:</p>
  <table class="options-table">
    <tr>
        <td class="col-1"><strong>Database Server Host</strong></td><td>-</td>
        <td><div align="justify">If the web server and database server are located on the same host, enter <tt>localhost</tt>. If the database server is located on a different host, enter its fully qualified host name or IP address.</div></td>
    </tr>
    <tr>
        <td class="col-1"><strong>Database Server Username</strong></td><td>-</td>
        <td>Enter the user name of the Magento database instance owner.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Database Server Password</strong></td><td>-</td>
        <td><div align="justify">Enter the Magento database user's password, if any. Leave this field blank if you did not configure a password.</div></td>
    </tr>
    <tr>
        <td class="col-1"><strong>Database Name</strong></td><td>-</td>
        <td>Enter the Magento database instance name.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Table prefix</strong></td><td>-</td>
        <td><p align="justify">Use only if you're installing the Magento database tables in a database instance that has Magento tables in it already. </p>
          <p align="justify">In that case, use a prefix to identify the Magento tables for   this installation. Some customers have more than one Magento instance   running on a server with all tables in the same database.</p>
          <p align="justify">The prefix can be a maximum of five characters in length. It must   begin with a letter and can include only letters, numbers, and   underscore characters.</p>
      <p>This option enables those customers to share the database server with more than one Magento installation.</p></td>
    </tr>
</table>

    <p>Click <strong>Check Connection</strong> to proceed.</p>

<h4>Step 2: Installation Assistant</h4>
<p align="justify">PLEASE READ THE AGREEMENT CAREFULLY AND MAKE SURE YOU FULLY UNDERSTAND ITS CONTENTS.</p>
<p> If  you agree to the Terms click the "Agree and Setup Magento"  to continue the installation.</p>
<figure class="img-polaroid"><img src="img/magento/how-to-install-1.jpg" alt="" /></figure>
<h5>Server Readiness Check</h5>
<p>Click the "Start Readiness Check" button to check your server settings compatibility with the Magento 2 engine requirements. </p>
<figure class="img-polaroid"><img src="img/magento/how-to-install-2.jpg" alt="" /></figure>
<p>Once the  process is done, click <strong>Next</strong> button. </p>
<figure class="img-polaroid"><img src="img/magento/how-to-install-3.jpg" alt="" /></figure>

<h4>Step 3: Database connection</h4>
<p align="justify">Here you need to input the database details and some initial settings. 
<strong>Add a Database</strong> – input your host name, database name, database user and password. Contact your hosting provider, if you don't have the necessary details.</p>
<p align="justify">Make sure that you have a database created for the Magento installation. Remember, it should be clear and  shall not contain   any tables. 
  <figure class="img-polaroid"><br />
  <img src="img/magento/how-to-install-4.jpg" alt="" /></figure>
<p>If everything is correct, click <strong>Next</strong> button. </p>

<h4>Step 4: Web Configuration</h4>
<p>Here you can change Magento admin panel URL and the main store address. Other settings you can leave unchanged. </p>
<div class="alert alert-warning">Make a point of the admin panel path. Note it or insert your specific admin panel URL to remember the admin panel access.</span></div>
<figure class="img-polaroid"><img src="img/magento/how-to-install-5.jpg" alt="" /></figure>
<p>When you are done, click <strong>Next</strong> button. </p>

<h4>Step 5: Localization</h4>
<p align="justify">Select the required time zone, default currency and store language. You can select default modules that should/shouldn't be installed, in the <strong>Advanced Modules Configurations</strong> section.  We recommend  you  not to perform changes in this section. </p>
<figure class="img-polaroid"><img src="img/magento/how-to-install-6.jpg" alt="" /></figure>
<p>When you are done, click <strong>Next</strong> button.</p>

<h4>Step 6: Create Admin Account</h4>
<p>Here you need to input personal details for the store owner. You also will need to specify the slog-in data for web-site administrator.</p>
<div class="alert alert-warning">
  <div align="justify"><strong>New Email</strong>, <strong>New Username</strong> and <strong>New Password</strong> each, is necessary for accessing Magento website admin panel. Please keep the data confidential.</div>
</div>
<figure class="img-polaroid"><img src="img/magento/how-to-install-7.jpg" alt="" /></figure>

<h4>Step 7: Install</h4>
<p>The store configuration is done. Press the <strong>Install Now</strong> button to start the store installation process. </p>
<figure class="img-polaroid"><img src="img/magento/how-to-install-8.jpg" alt="" /></figure>

<h4>Step 8: Success</h4>
<p>This is the final installation step. Copy the generated encryption key and keep it safe. </p>
<figure class="img-polaroid"><img src="img/magento/how-to-install-9.jpg" alt="" /></figure>
<p class="alert alert-info custom">If you don't want to spend your time installing the template, don't hesitate to <span class="label label-warning opener" onclick="showChat()">order</span> installation service using our live-chat.</p>