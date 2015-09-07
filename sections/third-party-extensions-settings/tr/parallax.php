<h3>Parallax</h3>
Şablonunuzdaki <strong>*.phtml</strong> dosyalarına kod ekleyerek Parallax kutusu oluşturabilirsiniz.
Belli bir içerik kutusuna parallax-efekti eklemek için:
<ol class="index-list">
	<li>
		Herhangi bir parallax-efekti için (örn, <strong>parallax</strong>) ve özellik <strong>data-source-url="{{skin url='images/your_images.jpg'}}"</strong>.
	</li>
	<li>
		Medya klasörüne görsel eklemek için <strong>skin\frontend\default\themeXXX\images\</strong>.
	</li>
	<li>
		Stil eklemek için <strong>skin\frontend\default\themeXXX\css\style.css</strong> dosyasına aşağıdaki kodu ekleyin:
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
		Aşağıdaki kodu <strong>skin\frontend\default\themeXXX\js\scripts.js</strong> dosyasına ekleyin:
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
	Parallax efektinin yönünü düzenlemek için <strong>invert: true</strong> ve yoğunluğunu düzenlemek için <strong>offset: 300</strong> şeklinde yer alan değerleri değiştirebilirsiniz.
</p>		