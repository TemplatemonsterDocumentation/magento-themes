<h2>Introduction</h2>
                                <p align="justify">
                                    Thank you for downloading Magento <strong>Stormage</strong> theme. This documentation consists of several parts and covers the entire process of installing and setting up the Magento theme starting from a zero basis. </p>
                                    <p align="justify">We did our best to make this manual information to be presented in a simple, straightforward manner. For ease of reference, the text the manual provides has been restructured in different chapters, you can see in the left-side menu. You are able to navigate to any part of the documentation using the active content headers' links.</p>
                                    <p align="justify">We recommend that you start reading the documentation at the first section. </p>
                                <article id="whatismagento">
                                    <h3 align="justify">What is Magento Commerce?</h3>
                                    <p align="justify">Magento is a feature-rich eCommerce platform built on the open-source technology. It provides flexibility and control over the look, content and functionality of the eCommerce store. Magento's user-friendly administration interface features powerful marketing, search engine optimization and catalog-management tools to give merchants the power to create sites that are tailored to their unique business needs. Designed to be completely scalable and backed by Varien's support network, Magento offers companies the ultimate eCommerce solution. </p>
                                </article>
                                <article id="whatismagentotheme">
                                    <h3 align="justify">What is a Magento theme?</h3>
                                    <p align="justify">Magento theme is a complete design for your online store based on Magento engine. In other words, you can easily change your Magento shop appearance by installing a new theme in a few easy steps. With all of its simplicity a Magento theme is provided with all the necessary source files that you can edit or extend the way you need.</p>
                                </article>
                                <article id="file_structure">
                                    <h4 align="justify">Magento files structure</h4>
                                    <p align="justify">The theme package you have downloaded consists of several folders. Let's see what each folder contains:</p>
                                    <div align="justify">
                                      <ul class="files_structure">
                                            <li>
                                                <dl class="inline-term">
                                                    <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                                                    <dd> contains documentation files.</dd>
                                                </dl>
                                                <ul>
                                                    <li>
                                                        <dl class="inline-term">
                                                            <dt><i class="fa fa-file"></i> <strong>Stormage_documentation.html</strong></dt>
                                                            <dd>
                                                                a main documentation file you are reading at the moment.
                                                            </dd>
                                                        </dl>
                                                    </li>
                                                </ul>
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
                                                </ul>
                                            </li>
                                            <li>
                                        <dl class="inline-term">
                                                    <dt><i class="fa fa-folder-open"></i> <strong>Stormage(theme)</strong></dt>
                                                    <dd>contains the theme files.</dd>
                                              </dl>
                                              <ul>
                                                  <li>
                                                      <dl class="inline-term">
                                                          <dt><i class="fa fa-folder"></i> <strong>Stormage(theme).zip</strong></dt>
                                                          <dd>
                                                              contains theme files & sample data.
                                                          </dd>
                                                      </dl>
                                                  </li>
                                                  <ul>
                                                    <li>
                                                        <dl class="inline-term">
                                                            <dt><i class="fa fa-folder"></i> <strong>stormage(theme).zip</strong></dt>
                                        
                                                        </dl>
                                                    </li>
                                                    <ul>
                                                    <li>
                                                        <dl class="inline-term">
                                                            <dt><i class="fa fa-folder"></i> <strong>stormage(theme).zip</strong></dt>
                                                            <dd>
                                                                contains the app folder and .htaccess file.
                                                            </dd>
                                                        </dl>
                                                    </li>
                                                </ul>
                                                </ul>
                                                <ul>
                                                   <li>
                                                       <dl class="inline-term">
                                                           <dt><i class="fa fa-folder"></i> <strong>sample_data</strong></dt>
                                                           <dd>
                                                               contains the pub folder and dump.sql file.
                                                           </dd>
                                                       </dl>
                                                   </li>
                                                </ul>
                                                 <li>
                                                     <dl class="inline-term">
                                                         <dt><i class="fa fa-folder"></i> <strong>Stormage(fullpackage).zip</strong></dt>
                                                         <dd>
                                                             contains engine, theme files & sample data.
                                                         </dd>
                                                     </dl>
                                                  </li>
                                              </ul>
                                          </li>
                                        </ul>
                                    </div>
                                </article>
                                <article id="validation">
                                    <h3 align="justify">Validation</h3>
                                    <div class="alert alert-warning">
                                        <div align="justify"><span>Both HTML markup and CSS styles used in our templates are semantically correct and valid. However some W3C errors still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3 features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes we have to break some rules.</span>
                                        </div>
                                    </div>
                                </article>
                                <article id="prepare">
                                    <h3 align="justify">Preparation</h3>
                                    <p align="justify">Before you proceed to setup your Magento store, please make sure you are fully prepared. Please complete the following preparation steps:</p>
                                    <h4 align="justify">Editing software</h4>
                                    <p align="justify">To feel comfortable working with Magento template, we recommend you to download all the applications required. You can see the list of all required software on the template preview page.
                                        <br> Requirements can vary significantly depending upon the template, the common ones will be defined only:</p>
                                    <div align="justify">
                                        <ol class="index-list">
                                            <li>You need to use WinZip 9+ (for Windows) or Stuffit Expander 10+ (for Mac) to extract the password protected sources_#########.zip archive. </li>
                                            <li>You may also need the Adobe Photoshop application. It can be used to edit .psd source files and is necessary, in case, you want to change the template graphics and images.</li>
                                            <li>To edit template source code files, you need the code editor such as Adobe Dreamweaver, Notepad++, Sublime Text, etc.</li>
                                            <li>To upload files to the hosting server, you may need an FTP Manager like Total Commander, FileZilla, CuteFTP, etc.</li>
                                        </ol>
                                    </div>
                                    <h4 align="justify">Hosting</h4>
                                    <p align="justify">As Magento Commerce is a PHP/MySQL based application, you need to prepare a hosting environment to run Magento.</p>
                                    <p align="justify">If you have a live hosting, please make sure it matches the<a href="http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements.html" target="_blank"> Magento requirements </a> and is ready to be used for Magento store.</p>
                                    <p align="justify">You can run Magento locally (on your computer) using the local server. To create a local hosting server please use the localhost applications, such as <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> etc. Any of those can be easily installed as any other software and used to run Magento. </p>
                        