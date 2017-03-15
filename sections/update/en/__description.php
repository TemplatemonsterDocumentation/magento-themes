<h2>How to Update a Magetique Template </h2>
<p>This guide will cover the necessary steps and precautions involved with updating a Magetique Template.</p>

<p align="justify">Regularly updating <strong>Magetique Template</strong> brings you not only the newest features, but also security
    fixes, which is highly important for your Magento store's safety.</p>

<div class="alert alert-danger">
  <p align="justify"><strong>Attention!</strong> Please make sure to create a full backup of your Magento store files. Any manual
      changes your performed to the theme files will be replace by the update. </p>
</div>

<p align="justify">If you want to customize theme files and still be able to receive updates please create a child theme and perform
    all modifications there. The process of creating child themes is described in the <a href="//devdocs.magento.com/guides/v2.0/frontend-dev-guide/themes/theme-inherit.html">official documentation</a> </p>

<article id="manual-update">
<h3>Manual update</h3>

    <p align="justify"><b>1.</b> To install Magetique theme update upload updated theme files to your hosting server. Upload the
        <b>app</b>
        directory from the template archive to your Magento store root directory.</p>

    <p><b>2.</b> Delete all files <b>except .htaccess file</b> from <b>pub/static/frontend</b>,
      <b>pub/static/_requirejs/frontend</b> directories. </p>

    <p><b>3.</b> Run the following commands in the command line, one by one:</p>
    <ul>
        <li> <strong>bin/magento setup:upgrade</strong></li>
        <li> <strong>bin/magento index:reindex </strong></li>
        <li> <strong>bin/magento cache:clean</strong></li>
    </ul>

    <p><b>4.</b> Clear your browser cache.</p>
</article>


<div class="alert alert-warning">
    <p align="justify">In case you have any issues with modules or widgets after the update try to recreate widgets and module
        settings. If this won't help feel free to contact our support team for help and <a href="/magetique/index.php?lang=en&section=conclusion">assistance</a></p>
</div>