<h2 class="item1">Introduction</h2>
<p>
    Merci d'avoir téléchargé un thème Magento. Cette documentation se compose de plusieurs parties et couvre 
	l'ensemble du processus d'installation et de mise en place de thème Magento à partir de zéro.
</p>

<article id="whatismagento">
    <h3>Qu'est-ce que Magento Commerce?</h3>
    <p>Magento est une plate-forme d'eCommerce riche en fonctionnalités construite sur une technologie open-source. Elle fournit flexibilité et contrôle sur l'aspect, le contenu et le fonctionnement de la boutique d'eCommerce. L'interface d'administration intuitive de Magento fournit de puissants outils de marketing, de référencement et de gestion de catalogue pour donner aux commerçants le pouvoir de créer des sites adaptés à leurs besoins uniques. Conçu pour être complètement évolutif et soutenu par le réseau de support de Varien, Magento propose aux entreprises l'ultime solution d'eCommerce. <a href="http://www.magentocommerce.com/download" target="_blank">Plus d'informations</a></p>
</article>

<article id="whatismagentotheme">
    <h3>Qu'est-ce qu'un thème Magento?</h3>
    <p>Un thème Magento est un design complet pour votre boutique en ligne basé sur le moteur Magento. En d'autres termes, vous pouvez facilement changer l'apparence de votre boutique Magento en installant un nouveau thème en quelques étapes faciles. Avec toute cette simplicité, un thème Magento est fourni avec tous les fichiers source nécessaires que vous pouvez modifier ou étendre selon vos besoins.</p>
</article>

<article id="file_structure">
    <h4>Structure des fichiers Magento</h4>

    <p>Le package de thème que vous avez téléchargé comprend plusieurs dossiers.  Voyons ce que chaque dossier contient:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> contient les fichiers de documentation.</dd>
            </dl>
            <ul>
                <li>
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
                <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                <dd> contient les fichiers source du thème.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>psd</strong></dt>
                        <dd>
                            contient les fichiers source Adobe Photoshop (.psd) du thème.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                        <dd>
                            contient les pages additionnelles et les blocs personnalisés avec le thème.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                        <dd>
                            contient les fichiers de données du thème Magento.
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>pub</strong></dt>
                                <dd>
                                    contient les fichiers et répertoires devant être uploadés dans le dossier racine de votre installation Magento.
                                </dd>
                            </dl>
                        </li>
                        <li>
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
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                <dd> fichier utilisé pour extraire les fichiers de fullpackage.zip une fois il est envoyé sur le serveur d'hébergement.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> contient les liens où les polices spéciales du template peuvent être téléchargées.</dd>
            </dl>            
        </li>
        <li>
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
        <span>Les deux codes, le balisage HTML (Langage hypertexte) et les styles CSS, utilisés dans nos modèles, sont sémantiquement corrects et valides. Néanmoins, certaines erreurs W3C peuvent toujours avoir lieu.  Rendre valide le code 100% W3C élimine l'utilisation des technologies modernes de site web comme les fonctions de CSS3 et des balises HTML5. Notre objectif est de fournir une riche expérience de l'utilisateur avec des modèles de haute qualité et parfois nous devons enfreindre certaines règles.</span>
    </div>
</article>
<article id="prepare">
    <h3>Préparations</h3>

    <p>Avant de commencer à mettre en place une boutique Magento, assurez-vous d'être complètement préparé. Respectez les étapes de préparation suivantes:</p>

    <h4>Logiciel d'édition</h4>

    <p>Pour être à l'aise en travaillant avec un template Magento, nous recommandons de télécharger toutes les applications requises.  Vous pouvez consulter la liste des logiciels requis sur la page de prévisualisation du template. </br> Les besoins peuvent varier selon les templates, pour la plupart des templates ce sont les suivants:</p>
    <ol class="index-list">
        <li>D'abord, vous devez utiliser WinZip 9+ (Windows) et Stuffit Expander 10+ (Mac) pour extraire les archives sources_#########.zip protégées par mot de passe. </li>
        <li>Vous pouvez avoir également besoin de l'application Adobe Photoshop. Elle sert à modifier les fichiers source .PSD, ce qui est nécessaire si vous voulez modifier les images et graphiques du template.</li>
        <li>Pour modifier les fichiers de code source du template, il vous faut un éditeur de code comme Adobe Dreamweaver, Notepad++, Sublime Text, etc.</li>
        <li>Pour uploader des fichiers sur le serveur d'hébergement, vous pouvez avoir besoin d'un Gestionnaire FTP comme Total Commander, FileZilla, CuteFTP, etc.</li>
    </ol>
    
    <h4>Hébergement</h4>
    <p>Comme Magento Commerce est une application basée sur PHP/MySQL, vous devez préparer un environnement d'hébergement pour faire tourner Magento.</p>
    <p>Si vous avez un hébergeur, assurez-vous qu'il est conforme aux <a href="http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements.html" target="_blank"> besoin de magento </a> et qu'il est prêt à être utilisé pour la boutique Magento.</p>
    <p>Sinon, vous pouvez faire tourner Magento localement sur votre ordinateur à l'aide d'un serveur local. Pour créer un serveur d'hébergement local, veuillez utiliser les applications localhost telles que <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> etc. Elles sont toutes facilement installables comme tout autre programme, et servent à faire tourner Magento. </p>
    <p>Veuillez consulter les tutoriels suivants sur la configuration d'un environnement de développement local:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">Comment installer l'environnement de développement web AppServ</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">Comment installer l'environnement de développement web WAMP</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">Comment installer l'environnement de développement web XAMP</a></li>
    </ul>
</article>