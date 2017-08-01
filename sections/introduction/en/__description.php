<h2 class="item1">Introduction</h2>
<p>
    Thank you for downloading Magento theme. This documentation consists of several parts and covers
    the entire process of installing and setting up Magento theme starting from scratch.
</p>

<article id="whatismagento">
    <h3>What is Magento Commerce?</h3>
    <p>Magento is a feature-rich eCommerce platform built with open-source technology. It provides flexibility and control over the look, content and functionality of the eCommerce store. Magento’s intuitive administration interface features powerful marketing, search engine optimization and catalog-management tools to give merchants the power to create sites that are tailored to their unique business needs. Designed to be completely scalable and backed by Varien's support network, Magento offers companies the ultimate eCommerce solution. <a href="http://www.magentocommerce.com/download" target="_blank">More information</a></p>
</article>

<article id="whatismagentotheme">
    <h3>What is a Magento theme?</h3>
    <p>Magento theme is a complete design for your online store based on Magento engine. In other words, you can easily change your Magento shop appearance by installing a new theme in a few easy steps. With all of its simplicity a Magento theme is provided with all the necessary source files that you can edit or extend the way you need.</p>
</article>

<article id="file_structure">
    <h4>Magento files structure</h4>

    <p>The theme package you have downloaded consists of several folders.  Let's see what each folder contains:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> contains documentation files.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            a main documentation file you are reading at the moment.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
                <dd> contains the theme screenshots. Not for production.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                <dd> contains the theme source files.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>psd</strong></dt>
                        <dd>
                            contains the theme Adobe Photoshop source files (.psd).
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                        <dd>
                            contains additional pages and custom blocks provided with the theme.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                        <dd>
                            contains Magento theme sample data files.
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>pub</strong></dt>
                                <dd>
                                    contains files and directories that should be uploaded to the root directory of your Magento installation.
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                <dd>
                                    the database backup file. Contains the theme sample content.
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>theme###</strong></dt>
                <dd> contains Magento theme files and directories that should be uploaded to the root directory of your Magento installation.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                <dd> contains the complete Magento installation package with engine files, theme and sample content (sample images).</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                <dd> the file used to extract files from the fullpackage.zip when uploaded to the hosting server.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> contains instructions on how to extract source files.</dd>
            </dl>            
        </li>
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
    <ol class="index-list">
        <li>First, you need to use WinZip 9+ (Windows) and Stuffit Expander 10+ (Mac) to extract the password protected sources_#########.zip archive. </li>
        <li>You may also need the Adobe Photoshop application. It is used to edit .PSD source files, and it is necessary if you want to edit template design graphics and images.</li>
        <li>To edit template source code files, you need some code editor like Adobe Dreamweaver, Notepad++, Sublime Text, etc.</li>
        <li>To upload files to the hosting server you may need an FTP Manager like Total Commander, FileZilla, CuteFTP, etc.</li>
    </ol>
    
    <h4>Hosting</h4>
    <p>As Magento Commerce is a PHP/MySQL based application, you need to prepare a hosting environment to run Magento.</p>
    <p>If you have live hosting, please make sure it matches <a href="http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements.html" target="_blank"> Magento requirements </a> and is ready to be used for Magento store.</p>
    <p>Otherwise, you can run Magento locally on your computer using the local server. To create a local hosting server please use the localhost applications such as <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> etc. Any of those can be easily installed as any other program and used to run Magento. </p>
    <p>Please check the following tutorials on how to configure the local development environment:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">How to install AppServ web development environment</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">How to install WAMP web development environment</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">How to install XAMP web development environment</a></li>
    </ul>
</article>
