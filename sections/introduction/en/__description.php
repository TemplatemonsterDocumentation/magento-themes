<h2 class="item1">Introduction</h2>
<p class="intro">
    Thank you for downloading Magento theme. This documentation consists of several parts and covers
    the entire process of installing and setting up Magento theme starting from scratch.
</p>

<h3>What is Magento Commerce?</h3>
<p>Magento is a feature-rich eCommerce platform built with open-source technology. It provides flexibility and control over the look, content and functionality of the eCommerce store. Magento’s intuitive administration interface features powerful marketing, search engine optimization and catalog-management tools to give merchants the power to create sites that are tailored to their unique business needs. Designed to be completely scalable and backed by Varien's support network, Magento offers companies the ultimate eCommerce solution. <a href="http://www.magentocommerce.com/download" target="_blank">More information</a></p>

<h3>What is a Magento theme?</h3>
<p>Magento theme is a complete design for your online store based on Magento engine. In other words, you can easily change your Magento shop appearance by installing a new theme in a few easy steps. With all of its simplicity a Magento theme is provided with all the necessary source files that you can edit or extend the way you need.</p>

<article id="file_structure">
    <h4>Magento files structure</h4>

    The theme package you have downloaded consists of several folders.  Let's see what each folder contains:

    <ul class="files_structure">
        <li class="folder"><i class="fa fa-folder-open"></i><b>documentation</b>
            <small class="muted"> - contains documentation files.</small>
            <ul>
                <li class="file"><i class="fa fa-file"></i> documentation.html<small class="muted"> - a main documentation file you are reading at the moment.</small></li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i><b>screenshots</b>
            <small class="muted"> - contains the theme screenshots. Not for production.</small>
        </li>
        <li class="folder"><i class="fa fa-folder-open"></i><b>sources</b>
            <small class="muted"> - contains the theme source files.</small>
            <ul>
                <li class="folder"><i class="fa fa-folder"></i> psd<small class="muted"> - contains the theme Adobe Photoshop source files (.psd).</small></li>
                <li class="folder"><i class="fa fa-folder"></i> demo<small class="muted"> - contains additional pages and custom blocks provided with the theme.</small></li>
                <li class="folder"><i class="fa fa-folder-open"></i> sample_data<small class="muted"> - contains Magento theme sample data files.</small>
                    <ul>
                        <li class="folder"><i class="fa fa-folder"></i> media<small class="muted"> - contains files and directories that should be uploaded to the root directory of your Magento installation.</small></li>
                        <li class="file"><i class="fa fa-file"></i> dump.sql.gz<small class="muted"> -  the database backup file. Contains the theme sample content. </small></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i> <b>theme###</b><small class="muted"> - contains Magento theme files and directories that should be uploaded to the root directory of your Magento installation.</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>fullpackage.zip</b><small class="muted"> - contains the complete Magento installation package with engine files, theme and sample content (sample images).</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>unzip.php</b><small class="muted"> - the file used to extract files from the fullpackage.zip when uploaded to the hosting server.</small></li>
        <li class="file"><i class="fa fa-file"></i> fonts_info.txt<small class="muted"> - contains the links where the template custom fonts can be downloaded.</small></li>
        <li class="file"><i class="fa fa-file"></i> info.txt<small class="muted"> - contains instructions on how to extract source files.</small></li>
    </ul>
</article>
<article id="validation">
    <h3>Validation</h3>
    <div class="alert alert-warning">
        <span>Both HTML markup and CSS styles used in our templates are semantically correct and valid. However some W3C errors still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3 features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes we have to break some rules.</span>
    </div>
</article>
<article id="prepare">
    <h3>Preparation</h3>

    <p>Before you proceed to set up your Magento store, please make sure you are fully prepared. Please complete the following preparation steps:</p>

    <h4>Editing software</h4>

    <p>To feel comfortable working with Magento template, we recommend downloading all the applications required. You can see the list of required software on the template preview page. </br> The requirements may vary for different templates, for most templates they are the following:</p>
    <ol>
        <li>First, you need to use WinZip 9+ (Windows) and Stuffit Expander 10+ (Mac) to extract the password protected sources_#########.zip archive. </li>
        <li>You may also need the Adobe Photoshop application. It is used to edit .PSD source files, and it is necessary if you want to edit template design graphics and images.</li>
        <li>To edit template source code files, you need some code editor like Adobe Dreamweaver, Notepad++, Sublime Text, etc.</li>
        <li>To upload files to the hosting server you may need an FTP Manager like Total Commander, FileZilla, CuteFTP, etc.</li>
    </ol>
    <h4>Hosting</h4>
    <p>As Magento Commerce is a PHP/MySQL based application, you need to prepare a hosting environment to run Magento.</p>
    <p>If you have live hosting, please make sure it matches <a href="http://magento.com/resources/system-requirements" target="_blank"> Magento requirements </a> and is ready to be used for Magento store.</p>
    <p>Otherwise, you can run Magento locally on your computer using the local server. To create a local hosting server please use the localhost applications such as <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> etc. Any of those can be easily installed as any other program and used to run Magento. </p>
    <p>Please check the following tutorials on how to configure the local development environment:</p>
    <ul>
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">How to install AppServ web development environment</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">How to install WAMP web development environment</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">How to install XAMP web development environment</a></li>
    </ul>
</article>