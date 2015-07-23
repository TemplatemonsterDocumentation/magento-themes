<h3>Parallax</h3>
Der Parallax Block wird eingestellt, indem Sie Teile des Codes zu <strong>*.phtml</strong> Dateien Ihrer Vorlage hinzufügen. Um den Parallax-Effekt zum einen bestimmten Inhaltsblock hinzuzufügen, machen Sie das Folgende:

<ol class="index-list">
	<li>
		Fügen Sie die Klasse für den Block mit dem Parallax-Effekt (zum Beispiel, <strong>parallax</strong>) hinzu und fügen Sie das  Attribut <strong>data-source-url="{{skin url='images/your_images.jpg'}}"</strong> hinzu.
	</li>
	<li>
		Fügen Sie ein Bild zum Ordner mit den Bildern <strong>skin\frontend\default\themeXXX\images\</strong> hinzu.
	</li>
	<li>
		Fügen Sie Stile zur Datei <strong>skin\frontend\default\themeXXX\css\style.css</strong> hinzu:
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
		4. Fügen Sie zur Datei <strong>skin\frontend\default\themeXXX\scripts.js</strong> den folgenden Code hinzu:
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
	Der Wert <strong>invert: true</strong> wählt die Richtung des Parallax-Effektes, und <strong>offset: 300</strong> seine Intensität.
</p>		