<h3>Parallax</h3>
El bloque parallax se puede configurar añadiendo la parte de código a los archivos <strong>*.phtml</strong> de su plantilla. Para añadir efecto parallax a cierto bloque de contenido necesita:
<ol class="index-list">
	<li>
		Añadir alguna clase para el bloque de efecto parallax (por ejemplo, <strong>parallax</strong>) y añadir el atributo <strong>data-source-url="{{skin url='images/your_images.jpg'}}"</strong>.
	<li>
		Añadir la imagen dentro de la carpetas de imágenes <strong>skin\frontend\default\themeXXX\images\</strong>.
	</li>
	<li>
		Añadir los estilos dentro del archivo <strong>skin\frontend\default\themeXXX\css\style.css</strong>:
<pre class="prettyprint linenums">
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
		Añadir el siguiente código dentro archivo <strong>skin\frontend\default\themeXXX\js\scripts.js</strong>:
<pre class="prettyprint linenums">
jQuery(window).load(function(){
	var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEmobile|Windows Phone|WPDesktop/i.test(navigator.userAgent);
	if(!isMobile) {  
	    if(jQuery(".parallax").length){  jQuery(".parallax").cherryFixedParallax({  invert: true, 
	    		offset: 300 
	    }); 
	  }; 		
	};	
});
</pre>
	</li>
</ol>
<p>
	La variable <strong>invert: true</strong> elige la dirección del efecto parallax, y <strong>offset: 300</strong> es la densidad.
</p>		