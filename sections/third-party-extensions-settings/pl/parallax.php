<h3>Parallax</h3>
Parallax można ustawić, dodając kod do plików <strong>*.phtml</strong> w Twoim szablonie. Aby dodać efekt parallax do bloku musisz:
<ol class="index-list">
	<li>Aby dodać jakąś klasę do bloku z efektem parallax (e.g., <strong>parallax</strong>) i dodać atrybut <strong>data-source-url="{{skin url='images/your_images.jpg'}}"</strong>.</li>
	<li>Aby dodać obraz do folderu z obrazami <strong>skin\frontend\default\themeXXX\images\</strong>.</li>
	<li>Aby dodać style do pliku <strong>skin\frontend\default\themeXXX\css\style.css</strong>:
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
	<li>Dodaj do pliku <strong>skin\frontend\default\themeXXX\js\scripts.js</strong> następujący kod:
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
	Zmienna <strong>invert: true</strong> wybiera kierunek efektu parallax, natomiast <strong>offset: 300</strong> jego gęstość (density).
</p>		