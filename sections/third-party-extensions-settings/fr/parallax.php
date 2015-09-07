<h3>Parallax</h3>
Le bloc Parallax peut être réglée en ajoutant la partie de code aux fichiers<strong>*.phtml</strong>  de votre modèle. Afin d'ajouter l'effet de parallaxe aux contenus des blocs certains vous devez:

<ol class="index-list">
	<li>
		Ajouter toute classe pour le bloc de l'effet de parallaxe (e.g., <strong>parallax</strong>) et d'ajouter un attribut <strong>data-source-url="{{skin url='images/your_images.jpg'}}"</strong>.
	</li>
	<li>
		Télécharger un image dans le dossier des images<strong>skin\frontend\default\themeXXX\images\</strong>.
	</li>
	<li>
		Coller les styles dans le fichier <strong>skin\frontend\default\themeXXX\css\style.css</strong>:
	<pre class="prettyprint linenums ">
.parallax {
	background-image: url(../images/parallax-img.jpg);
	background-position: 50% 0%;
	background-repeat: no-repeat;
	background-size: cover;
	width: 3500px;
	left: 50%;
	margin-left: -1750px;
}
	</pre>
	</li>
	<li>
		Ajouter dans le fichier <strong>skin\frontend\default\themeXXX\js\scripts.js</strong> le code suivant:
	<pre class="prettyprint linenums ">
jQuery(window).load(function(){
	var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEmobile|Windows Phone|WPDesktop/i.test(navigator.userAgent);
	if(!isMobile) {  
		if(jQuery(".parallax").length){  
			jQuery(".parallax").cherryFixedParallax({  invert: true, 
				offset: 300 
			}); 
		}; 		
	};	
});
	</pre>
	</li>
</ol>

<p>
	<strong>Invert: true</strong> variable choisit la direction de l'effet de parallaxe, et  <strong>offset: 300</strong> sa densité.
</p>		