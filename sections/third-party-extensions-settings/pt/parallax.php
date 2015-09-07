<h3>Parallax</h3>
Para este bloco ser definido, você deve adicionar um código nos arquivos <strong>*.phtml</strong> do seu template. Para inlcuir um efeito parallax para determinado bloco de conteúdo você precisará:

<ol class="index-list">
	<li>
		Inlcuir uma classe para o bloco de efeito parallax (e.g., <strong>parallax</strong>) e inlcuir um atributo <strong>data-source-url="{{skin url='images/your_images.jpg'}}"</strong>.
	</li>
	<li>
		Incluir uma imagem na pasta de imagens <strong>skin\frontend\default\themeXXX\images\</strong>.
	</li>
	<li>
		Incluir essa definição de estilo no arquivo <strong>skin\frontend\default\themeXXX\css\style.css</strong>:
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
		Incluir no arquivo <strong>skin\frontend\default\themeXXX\js\scripts.js</strong> o seguinte código:
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
O atributo <strong>invert: true</strong> define a direção do efeito parallax, e  <strong>offset: 300</strong> define sua densidade.
</p>		