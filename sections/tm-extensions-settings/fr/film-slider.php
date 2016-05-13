<h3>Film Slider</h3>
<p>Module TemplateMonster FilmSlider est une mise en œuvre de plugin jQuery élégant et professionnel ‘Slider Pro’. Ce module vous permet d’ajouter un diaporama avec de multiples couches à la page d'accueil de votre boutique. De nombreuses options de configuration de diaporama et l'interface utilisateur vous aideront à configurer votre diaporama rapidement et facilement.
</p>
<p>Dans le menu principal de navigation, vous verrez une nouvelle option de menu <strong>TemplateMonster</strong>. <br>Pour commencer à travailler avec le module FilmSlider, cliquez sur <strong>Template Monster -> Sliders</strong>.</p>
<figure class="img-polaroid"><img src="img/magento/slide-1.png" alt="" /></figure>

<p>Vous pouvez voir une liste des diaporamas disponibles où vous pouvez désactiver/activer, supprimer ou modifier les diaporamas.</p>
<figure class="img-polaroid"><img src="img/magento/slide-2.png" alt="" /></figure>
<p>Pour ajouter un nouveau diaporama cliquez sur le bouton <strong>Add New Slider</strong> dans le coin en haut à droite. <br>
Sur l'écran de configuration de diaporama dans la section <strong>General Options</strong> vous pouvez voir tous les paramètres disponibles. La section <strong>Slider Items</strong> vous permet d'ajouter des diapositives à votre diaporama.</p>
<figure class="img-polaroid"><img src="img/magento/slide-3.png" alt="" /></figure>
<p>Voyons quelles options de diaporama sont disponibles. Comme vous pouvez le voir les options sont divisées en plusieurs parties pour rendre l'interface de configuration plus conviviale.</p>

<h4>Options Générales</h4>
<h5>Paramètres Principaux</h5>
<p>Cette section vous permet de définir le titre de diaporama, sélectionner vue magasin, activer/désactiver le diaporama, définir sa largeur et sa hauteur. Chaque option fait référence à caractéristique de plugin Slider Pro jQuery. Vous pouvez trouver une description plus spécifique de chaque caractéristique sur <a target='_blank' href="https://github.com/bqworks/slider-pro/blob/master/docs/api.md#1-properties">official Slider Pro documentation</a>. Certaines caractéristiques du plugin jQuery ne sont pas présentées dans la configuration de FilmSlider, nous allons les ajouter dans les prochaines versions.</p>
<figure class="img-polaroid"><img src="img/magento/slide-4.png" alt="" /></figure>
Dimensions de diaporama (largeur et hauteur) peuvent être réglés à une valeur fixe, comme 900 (indiquant 900 pixels), ou à une valeur de pourcentage, comme '100%'.
<div class="alert alert-warning">
	Veuillez noter: titre de la diapositive, vue magasin et le statut sont nécessaires, vous ne pouvez pas enregistrer la diapositive sans ces valeurs.
</div>

<h5>Paramètres d'image</h5>
<p>Dans la section d'image, vous pouvez régler les paramètres de configuration d'image de diaporama. Chaque option a une brève description. Décrivons certains d'entre eux plus précisément.</p>
<figure class="img-polaroid"><img src="img/magento/slide-5.png" alt="" /></figure>
<h6>aspectRatio</h6>
Définit le rapport d'aspect des diapositives. Si elle est définie à une valeur différente de -1, la hauteur des diapositives sera remplacée afin de maintenir le ratio d'aspect spécifié.
<h6>imageScaleMode</h6>
Définit le mode de l'échelle des principales images de diapositives (images ajoutées comme fond). 'cover' va écheller et recadrer l'image afin qu'elle remplisse la totalité de la diapositive. 'contain' gardera toute l'image visible à l'intérieur de la diapositive. 'exact'  la taille de l'image correspond à la taille de la diapositive. 'none' laissera l'image à sa taille originale.
<h6>forceSize</h6>
Indique si la taille de diaporama sera forcé à la pleine largeur ou pleine fenêtre.
<div class="alert alert-warning">
	Note: Il est possible de faire le diaporama pleine largeur ou pleine fenêtre en lui donnant une largeur et/ou la hauteur de '100%'. Cependant, parfois, le diaporama peut être à l'intérieur d'autres conteneurs qui sont inférieures à pleine largeur/fenêtre.Une option 'forceSize' est utile dans ces situations  parce qu'elle va agrandir le diaporama pour remplir la largeur ou de la fenêtre par débordement ses éléments parents.
</div>

<h5>Paramètres de Diapositives</h5>
Section de paramètres de diapositives vous permet de configurer le comportement des diapositives. Vous pouvez configurer l'animation des diapositives, la taille de diaporama,mélanger des diapositives et la boucle des diapositives.
<figure class="img-polaroid"><img src="img/magento/slide-6.png" alt="" /></figure>

<h5>Paramètres d'animation Fondu</h5>
Cette section contient les paramètres d'animation de fondu. Animation de fondu peut être activé sur le changement de diapositive.
<figure class="img-polaroid"><img src="img/magento/slide-7.png" alt="" /></figure>
Vous pouvez définir si vous voulez estomper la diapositive précédente et la durée de l'animation de fondu en millisecondes. 

<h5>Paramètres de lecture automatique</h5>
Lecture automatique permet de boucler les diapositives automatiquement. Ce paramètre de configuration contiennent des options pour configurer retard de lecture automatique, direction et la pause avec le curseur de la souris sur hover.
<figure class="img-polaroid"><img src="img/magento/slide-8.png" alt="" /></figure>

<h5>Paramètres de contrôles</h5>
Les contrôles sont les boutons de navigation qui vous permettent de passer les diapositives. Dans FilmSlider il y a plusieurs types de contrôles de navigation: flèches préc/suiv, boutons de pagination. Activation de la navigation au clavier vous permet de basculer entre les diapositives en utilisant le clavier. En outre, vous pouvez activer le bouton qui va passer le diaporama vers le mode plein écran.
<figure class="img-polaroid"><img src="img/magento/slide-9.png" alt="" /></figure>

<h5>Paramètres responsive</h5>
Section Paramètres Responsive configure le comportement de diaporama sur les appareils mobiles. Vous pouvez définir des points d'arrêt de la largeur d'écran (petit, moyen, grand). Vous pouvez activer la possibilité de basculer entre les diapositives en les touchant (pour les écrans tactiles). 
<figure class="img-polaroid"><img src="img/magento/slide-10.png" alt="" /></figure>

<h5>Paramètres de Légende</h5>
Légende permet d'ajouter du texte à chaque diapositive. Cette section vous permet d'activer l'animation de fondu de la légende  et de définir sa durée.
<figure class="img-polaroid"><img src="img/magento/slide-11.png" alt="" /></figure>

<h5>Principaux paramètres de couches</h5>
Paramètres de configuration de couches contiennent l’affichage de couches de diapositives. Chaque option a une brève description au-dessous des champs de saisie.
<figure class="img-polaroid"><img src="img/magento/slide-12.png" alt="" /></figure>

<h4>Ajout de Diapositives</h4>
Vous pouvez ajouter de nouvelles diapositives seulement après avoir sauvegardé le diaporama. Cliquez sur le bouton ‘Save and Continue Edit’ dans le coin en haut à droite. Lorsque le diaporama est enregistré, passez à l'onglet ‘Slider Items’.
<figure class="img-polaroid"><img src="img/magento/slide-13.png" alt="" /></figure>
Cliquez sur ‘Add Slider Item’ pour ajouter une nouvelle diapositive. Voyons quelles options de configuration sont disponibles.

<h5>Informations sur diapositive</h5>
Vous pouvez saisir le titre de diapositive et définir son état (activé/désactivé).
<figure class="img-polaroid"><img src="img/magento/slide-14.png" alt="" /></figure>

<h5>Images de diapositive</h5>
Cette section vous permet d'ajouter des images à la diapositive. Cliquez sur le bouton Insert Image pour ouvrir la bibliothèque d'images où vous pouvez sélectionner les images disponibles.
<figure class="img-polaroid"><img src="img/magento/slide-15.png" alt="" /></figure>
Vous pouvez également télécharger des images à partir de votre ordinateur.
<figure class="img-polaroid"><img src="img/magento/slide-16.png" alt="" /></figure>
Sous le champ Image vous pouvez voir votre aperçu de la diapositive. Vous êtes libre de définir la taille aperçu de la façon dont vous le souhaitez. Nous avons placé la prochaine section de configuration de diapositive à la section séparée car elle n'est liée qu'au travail avec les couches de diapositive. 

<h4>Travail avec des couches</h4>
FilmSlider est un diaporama multi-couche. Cela signifie que vous pouvez ajouter plusieurs couches indépendantes à votre diapositive. Les couches peuvent être ajoutées à la diapositive sur l’écran de configuration de diapositives décrit ci-dessus. Cet écran contient plusieurs sections de paramètres des couches.

<h5>Liste de couches</h5>
Section de la liste des couches permet d'ajouter des couches à votre diapositive. Vous pouvez ajouter des couches d'image et des couches de texte. Utilisez les boutons correspondants pour ajouter des couches.
<figure class="img-polaroid"><img src="img/magento/slide-17.png" alt="" /></figure>
En cliquant sur ‘Add layer image’ vous verrez une bibliothèque d'images où vous pouvez choisir parmi les images disponibles ou télécharger des images à partir de votre ordinateur. En cliquant sur ‘Add layer text’, vous verrez une nouvelle couche de texte ajoutée et les paramètres de la couche.
<figure class="img-polaroid"><img src="img/magento/slide-18.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/slide-19.png" alt="" /></figure>

<h5>Paramètres de texte de couche</h5>
En utilisant la section ‘Layer text settings’ vous pouvez saisir le texte de la couche, la taille de la couche, les couleurs, la police etc.
<figure class="img-polaroid"><img src="img/magento/slide-20.png" alt="" /></figure>
Dans le champ ‘Layer text/html’ vous pouvez entrer votre contenu de la couche dans deux formats - texte et html.

<h5>Réglages de position de texte de couche</h5>
Dans cette section, vous pouvez définir la position de texte de la couche.
<figure class="img-polaroid"><img src="img/magento/slide-21.png" alt="" /></figure>

<h5>Paramètres d'animation de la couche</h5>
Cette section vous permet de définir l'animation de la couche. Vous pouvez définir sa position sur la diapositive, la transition, les offsets, le retard, la durée, etc.
<figure class="img-polaroid"><img src="img/magento/slide-22.png" alt="" /></figure>
Lorsque vous ajoutez plusieurs couches, les paramètres de configuration de bas (position et animation) affichent les paramètres de la couche sélectionnée.
<figure class="img-polaroid"><img src="img/magento/slide-23.png" alt="" /></figure>

<h4>Adding slider to page</h4>
To add slider to your page please use Magento widgets. In the main admin panel menu click <strong>Content -> Pages</strong> item.
<figure class="img-polaroid"><img src="img/magento/slide-24.png" alt="" /></figure>
Select the page you want to add slider to and click <strong>Edit</strong>.
<figure class="img-polaroid"><img src="img/magento/slide-25.png" alt="" /></figure>
At the page editing screen switch to <strong>Content</strong> section and click <strong>Insert Widget</strong> button.
<figure class="img-polaroid"><img src="img/magento/slide-27.png" alt="" /></figure>
In the appeared window select widget type <strong>Template Monster FilmSlider</strong>, select the slider you want to insert and click <strong>Insert Widget</strong> button. 
<figure class="img-polaroid"><img src="img/magento/slide-28.png" alt="" /></figure>
When you are done adding the widget click <strong>Save Page</strong> button and switch to store frontend to see the result.