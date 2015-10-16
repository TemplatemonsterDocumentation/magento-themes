<h2 class="item1">Introduction</h2>
<p>
    Merci d'avoir acheté un template Magento. Cette documentation est faite de plusieurs parties et décrit le processus entier de mise en place et d'administration d'une boutique Magento en partant de zéro. Nous avons fait de notre mieux pour rendre ce manuel aussi clair et facile à suivre que possible.
</p>

<article id="whatismagento">
    <h3>Qu'est-ce que Magento Commerce?</h3>
    <p>Magento est une plate-forme d'eCommerce riche en fonctionnalités construite sur une technologie open-source. Elle fournit flexibilité et contrôle sur l'aspect, le contenu et le fonctionnement de la boutique d'eCommerce. L'interface d'administration intuitive de Magento fournit de puissants outils de marketing, de référencement et de gestion de catalogue pour donner aux commerçants le pouvoir de créer des sites adaptés à leurs besoins uniques. Conçu pour être complètement évolutif et soutenu par le réseau de support de Varien, Magento propose aux entreprises l'ultime solution d'eCommerce. <a href="http://www.magentocommerce.com/download" target="_blank">Plus d'informations</a></p>
</article>

<article id="whatismagentotheme">
    <h3>Qu'est-ce qu'un thème Magento?</h3>
    <p>Un thème Magento est un design complet pour votre boutique en ligne basé sur le moteur Magento. En d'autres termes, vous pouvez facilement changer l'apparence de votre boutique Magento en installant un nouveau thème en quelques étapes faciles. Avec toute cette simplicité, un thème Magento est fourni avec tous les fichiers source nécessaires que vous pouvez modifier ou étendre selon vos besoins.</p>
</article>

<article id="updatabletheme">
    <h3>Ketty theme</h3>
    <p>Nous sommes heureux de vous présenter une nouvelle conception et la fonctionnalité du thème premium. </p>
    <h4>Journal des changements</h4>
    <h6>Mise à jour Majeure:</h6>
    <ul class="line-list">
        <li>Publication de paquet de thème compatible avec la version de l'engine Magento 1.9.2.1;</li>
        <li>Ajout des échantillons configurables de produit demo.</li>
    </ul>
    <h6>Autres mises à jour:</h6>
    <ul class="line-list">
        <li>Ajout de About Us page 2;</li>
        <li>Ajout de Contact us page 2;</li>
        <li>Ajout de Warranty page;</li>
        <li>Ajout de Shipping &amp; Delivery page;</li>
        <li>Ajout de 24/7 Support page;</li>
        <li>Ajout de 404 page;</li>
        <li>Ajout de FAQ page;</li>
        <li>Publication de template Ketty Newsletter;</li>
        <li>Ajout des nouveaux designs des sous-pages et des pages de produits.</li>
    </ul>
    <h6>Ketty v2.0.1(September 14, 2015):</h6>
    <ul class="line-list">
        <li>Added the Home layout;</li>
        <li>Added the Listing layout;</li>
        <li>Added the Blog layout 2;</li>
        <li>Added the Blog layout 3;</li>
        <li>Added the Special Price countdown;</li>
        <li>Bug fixes.</li>
    </ul>

    <h6>Ketty v2.0.2(September 30, 2015):</h6>
    <ul class="line-list">
        <li>Added the Home layout;</li>
        <li>Added the Listing layout;</li>
        <li>Added the Blog layout 4;</li>        
        <li>Added the Footer layout;</li>
        <li>Added the Facebook module;</li>
        <li>Added the Twitter module;</li>
        <li>Added the Background video (layout 2);</li>
        <li>Bug fixes.</li>
    </ul>

    <h6>Ketty v2.0.3(October 19, 2015):</h6>
    <ul class="line-list">        
        <li>Added the Home layout;</li>
        <li>Added the Listing layout;</li>       
        <li>Added Products slider widget;</li>
        <li>Added "change image on hover" functionality;</li>
        <li>Added the Instagram feed;</li>
        <li>Added the Google structured data optimization;</li>
        <li>Added the admin panel logo upload functionality.</li>
    </ul>
    <p>Le contenu du paquet de modèle diffère de nos  modèles standards de Magento, laissez-nous vous aider à travailler avec elle. </p>
    <p>L'archive contient deux dossiers :</p>
    <ul class="marked-list">
        <li><strong>magento_1.9x_v.1.0</strong></li>
        <li><strong>magento_1.9x_v.2.0</strong></li>
    </ul>
    <p>dossier <strong>magento_1.9x_v.1.0</strong> contient le thème pour la version de Magento 1.9.1.0 basé sur le thème standard. Ce thème était disponible à l'achat plus tôt.</p>
    <p>dossier <strong>magento_1.9x_v.2.0</strong> contient le thème mis à jour pour la version de Magento 1.9.2.1 basée sur RWD thème. Ce thème inclut la conception des sous-pages mise à jour et la fonctionnalité configurable des échantillons.</p>
    <div class="alert alert-warning">
        <p>L'ancien thème n'est pas compatible avec le nouveau thème. Ne chargez pas nouveau thème sur l'ancien.</p>
    </div>

    <h4>Mise à jour du modèle</h4>
    <p>Chaque mise à jour inclut dump de la base de données séparé qui contient les réglages de la page principale,les réglages de la page du blog et les réglages de la page avec la liste des catégories</p> 

    <p>Si vous n'effectuez pas dump re-import il n'y aura aucune modification visuelle du design. Cependant, vous verrez la nouvelle section dans la section  <strong>TM Store Setting</strong> de votre panneau d'administration, où vous pouvez partiellement configurer l'apparence de la mise en page. Tous les autres paramètres doivent être configurés selon les instructions dans la section <strong>Ketty Theme Configuration</strong>.</p>




    <p>Pour obtenir plus d'information sur comment configurer les pages, consultez les rubriques suivantes: <strong>Installation de thème Magento</strong> et <strong>Configuration de thème unique</strong>.</p>
</article>

<article id="file_structure">
    <h4>Structure des fichiers</h4>

    <p>Le package de thème que vous avez téléchargé comprend plusieurs dossiers. Voyons ce que chaque dossier contient:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> contient les fichiers de documentation.</dd>
            </dl>
            <ul>
                <li class="last-example">
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            un fichier principal de documentation que vous lisez en ce moment.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
                <dd> contient les captures d'écran du thème. À ne pas mettre en production.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>magento_1.9x_v.1.0</strong></dt>
                <dd> contient les fichiers de l'ancienne version de template basée sur <strong>base -> default</strong> Magento 1.9.x. theme.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                        <dd> contient les fichiers source du thème.</dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                                <dd>
                                    contient les pages additionnelles et les blocs personnalisés avec le thème.
                                </dd>
                            </dl>
                        </li>
                        <li class="last-example">
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                                <dd>
                                    contient les fichiers de données du thème Magento.
                                </dd>
                            </dl>
                            <ul>
                                <li>
                                    <dl class="inline-term">
                                        <dt><i class="fa fa-folder"></i> <strong>media</strong></dt>
                                        <dd>
                                            contient les fichiers et répertoires devant être uploadés dans le dossier racine de votre installation Magento.
                                        </dd>
                                    </dl>
                                </li>
                                <li class="last-example">
                                    <dl class="inline-term">
                                        <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                        <dd>
                                            le fichier de sauvegarde de la base de données. Contient l'exemple de contenu du thème.
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </li>                        
                    </ul>
                </li>
                <li class="last-example">
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>theme###</strong></dt>
                        <dd> contient les fichiers et répertoires du thème Magento devant être uploadés dans le dossier racine de votre installation Magento.</dd>
                    </dl>            
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>magento_1.9x_v.2.0</strong></dt>
                 <dd> contient les fichiers de la nouvelle version de template basée sur <strong>RWD -> default</strong>  Magento 1.9.x. theme.</dd>
            </dl>
            <ul>                
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>newsletter</strong></dt>
                         <dd> contient des fichiers et des dossiers du modèle de bulletin créé spécifiquement pour correspondre au design exact de ce thème.</dd>
                    </dl>            
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                        <dd> contient les fichiers source du thème.</dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                                <dd>
                                    contient les pages additionnelles et les blocs personnalisés avec le thème.
                                </dd>
                            </dl>
                        </li>
                        <li class="last-example">
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                                <dd>
                                    contient les fichiers de données du thème Magento.
                                </dd>
                            </dl>
                            <ul>
                                <li>
                                    <dl class="inline-term">
                                        <dt><i class="fa fa-folder"></i> <strong>media</strong></dt>
                                        <dd>
                                            contient les fichiers et répertoires devant être uploadés dans le dossier racine de votre installation Magento.
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="inline-term">
                                        <dt><i class="fa fa-file"></i> <strong>dump_layout_1.sql.gz</strong></dt>
                                        <dd>
                                            sauvegarde de la base de données. Contient des données de démo seulement pour la première mise à jour du modèle.
                                        </dd>
                                    </dl>
                                </li>
                                <li class="last-example">
                                    <dl class="inline-term">
                                        <dt><i class="fa fa-file"></i> <strong>dump_layout_2.sql.gz</strong></dt>
                                        <dd>
                                            sauvegarde de la base de données. Contient des données de démo seulement pour la deuxième mise à jour du modèle.
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
                        <dd> contient les fichiers et répertoires du thème Magento devant être uploadés dans le dossier racine de votre installation Magento.</dd>
                    </dl>            
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                        <dd> contient le paquet d'installation complète de Magento avec les fichiers du moteur, le thème, et du contenu de test (images de test).</dd>
                    </dl>            
                </li>
                <li class="last-example">
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                        <dd> fichier utilisé pour estraire les fichiers de fullpackage.zip une fois envoyé sur le serveur d'hébergement.</dd>
                    </dl>            
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> contient les liens où les polices spéciales du template peuvent être téléchargées.</dd>
            </dl>            
        </li>
        <li class="last-example">
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> contient des instructions sur l'extraction des fichiers source.</dd>
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
    <h3>Préparations</h3>

    <p>Avant de commencer à mettre en place une boutique Magento, assurez-vous d'être complètement préparé. Respectez les étapes de préparation suivantes:</p>

    <h4>Logiciel d'édition</h4>

    <p>Pour être à l'aise en travaillant avec un template Magento, nous recommandons de télécharger toutes les applications requises. Vous pouvez consulter la liste des logiciels requis sur la page de prévisualisation du template.<br /> Les besoins peuvent varier selon les templates, pour la plupart des templates ce sont les suivants:</p>
    <ol class="index-list">
        <li>D'abord, vous devez utiliser WinZip 9 et + (Windows) et Stuffit Expander 10 et + (Mac) pour extraire les archives sources_#########.zip protégées par mot de passe. </li>
        <li>Vous pouvez avoir également besoin de l'application Adobe Photoshop. Elle sert à modifier les fichiers source .PSD, ce qui est nécessaire si vous voulez modifier les images et graphiques du template.</li>
        <li>Pour modifier les fichiers de code source du template, il vous faut un éditeur de code comme Adobe Dreamweaver, Notepad++, Sublime Text, etc.</li>
        <li>Pour uploader des fichiers sur le serveur d'hébergement, vous pouvez avoir besoin d'un Gestionnaire FTP comme Total Commander, FileZilla, CuteFTP, etc.</li>
    </ol>
    
    <h4>Hébergement</h4>
    <p>Comme Magento Commerce est une application basée sur PHP/MySQL, vous devez préparer un environnement d'hébergement pour faire tourner Magento.</p>
    <p>Si vous avez un hébergeur, assurez-vous qu'il est conforme aux <a href="http://magento.com/resources/system-requirements" target="_blank"> besoins de Magento </a> et qu'il est prêt à être utilisé pour la boutique Magento.</p>
    <p>Sinon, vous pouvez faire tourner Magento localement sur votre ordinateur à l'aide d'un serveur local. Pour créer un serveur d'hébergement local, veuillez utiliser les applications localhost telles que <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> etc. Elles sont toutes facilement installables comme tout autre programme, et servent à faire tourner Magento. </p>
    <p>Veuillez consulter les tutoriels suivants sur la configuration d'un environnement de développement local:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">Comment installer l'environnement de développement web AppServ</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">Comment installer l'environnement de développement web WAMP</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">Comment installer l'environnement de développement web XAMP</a></li>
    </ul>
</article>