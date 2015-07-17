<h2 class="item1">Introduction</h2>
<p class="intro">
    Merci d'avoir acheté un template Magento. Cette documentation est faite de plusieurs parties et décrit le processus entier de mise en place et d'administration d'une boutique Magento en partant de zéro. Nous avons fait de notre mieux pour rendre ce manuel aussi clair et facile à suivre que possible.
</p>

<h3>Qu'est-ce que Magento Commerce?</h3>
<p>Magento est une plate-forme d'eCommerce riche en fonctionnalités construite sur une technologie open-source. Elle fournit flexibilité et contrôle sur l'aspect, le contenu et le fonctionnement de la boutique d'eCommerce. L'interface d'administration intuitive de Magento fournit de puissants outils de marketing, de référencement et de gestion de catalogue pour donner aux commerçants le pouvoir de créer des sites adaptés à leurs besoins uniques. Conçu pour être complètement évolutif et soutenu par le réseau de support de Varien, Magento propose aux entreprises l'ultime solution d'eCommerce. <a href="http://www.magentocommerce.com/download" target="_blank">Plus d'informations</a></p>

<h3>Qu'est-ce qu'un thème Magento?</h3>
<p>Un thème Magento est un design complet pour votre boutique en ligne basé sur le moteur Magento. En d'autres termes, vous pouvez facilement changer l'apparence de votre boutique Magento en installant un nouveau thème en quelques étapes faciles. Avec toute cette simplicité, un thème Magento est fourni avec tous les fichiers source nécessaires que vous pouvez modifier ou étendre selon vos besoins.</p>

<article id="file_structure">
    <h4>Structure des fichiers</h4>

    Le package de thème que vous avez téléchargé comprend plusieurs dossiers. Voyons ce que chaque dossier contient:

    <ul class="files_structure">
        <li class="folder"><i class="fa fa-folder-open"></i><b>documentation</b>
            <small class="muted"> - contient les fichiers de documentation.</small>
            <ul>
                <li class="file"><i class="fa fa-file"></i> documentation.html<small class="muted"> - un fichier principal de documentation que vous lisez en ce moment.</small></li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i><b>screenshots</b>
            <small class="muted"> - contient les captures d'écran du thème. À ne pas mettre en production.</small>
        </li>
        <li class="folder"><i class="fa fa-folder-open"></i><b>sources</b>
            <small class="muted"> - contient les fichiers source du thème.</small>
            <ul>
                <li class="folder"><i class="fa fa-folder"></i> psd<small class="muted"> - contient les fichiers source Adobe Photoshop (.psd) du thème.</small></li>
                <li class="folder"><i class="fa fa-folder"></i> demo<small class="muted"> - contient les pages additionnelles et les blocs personnalisés avec le thème.</small></li>
                <li class="folder"><i class="fa fa-folder-open"></i> sample_data<small class="muted"> - contient les fichiers de données du thème Magento.</small>
                    <ul>
                        <li class="folder"><i class="fa fa-folder"></i> media<small class="muted"> - contient les fichiers et répertoires devant être uploadés dans le dossier racine de votre installation Magento.</small></li>
                        <li class="file"><i class="fa fa-file"></i> dump.sql.gz<small class="muted"> -  le fichier de sauvegarde de la base de données. Contient l'exemple de contenu du thème. </small></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i> <b>theme###</b><small class="muted"> - contient les fichiers et répertoires du thème Magento devant être uploadés dans le dossier racine de votre installation Magento.</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>fullpackage.zip</b><small class="muted"> - contient le paquet d'installation complète de Magento avec les fichiers du moteur, le thème, et du contenu de test (images de test).</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>unzip.php</b><small class="muted"> - fichier utilisé pour estraire les fichiers de fullpackage.zip une fois envoyé sur le serveur d'hébergement.</small></li>
        <li class="file"><i class="fa fa-file"></i> fonts_info.txt<small class="muted"> - contient les liens où les polices spéciales du template peuvent être téléchargées.</small></li>
        <li class="file"><i class="fa fa-file"></i> info.txt<small class="muted"> - contient des instructions sur l'extraction des fichiers source.</small></li>
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
    <ol>
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