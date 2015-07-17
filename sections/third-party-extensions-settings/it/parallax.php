<h3>Parallasse</h3>
Il blocco parallasse può essere impostato aggiungendo la parte di codice sul file <strong>*.phtml</strong> del tuo template.<br>
<p>Per aggiungere l'effetto parallasse in determinati blocchi di contenuti è necessario:</p>
<ol>
	<li>
		Aggiungere una classe per il blocco effetto parallasse (ad es., <strong>parallasse</strong>) e aggiungere l'attributo <strong>data-source-url="{{skin url='images/your_images.jpg'}}"</strong>.
	</li>
	<li>
		Aggiungere immagini nella cartella immagini <strong>skin\frontend\default\themeXXX\images\</strong>.
	</li>
	<li>
		Aggiungere stili nel file <strong>skin\frontend\default\themeXXX\css\style.css</strong>:
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
		Aggiungere il seguente codice nel file <strong>skin\frontend\default\themeXXX\js\scripts.js</strong> :
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
	La variable <strong>invert: true</strong> determina la direzione dell'effetto parallasse, mentre <strong>offset: 300</strong> ne determina la densità.
</p>		