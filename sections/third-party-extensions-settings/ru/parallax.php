<h3>Параллакс</h3>
Настройка параллакса блока осуществляется посредством добавления части кода в <strong>*.phtml</strong> файлы вашего шаблона. Чтобы добавить параллакс-эффект  на определённый блок контента, необходимо:

<ol>
	<li>
		Добавить любой класс для блока с параллакс эффектом (к примеру, <strong>parallax</strong>) и добавить атрибут <strong>data-source-url="{{skin url='images/your_images.jpg'}}"</strong>.
	</li>
	<li>
		Добавить изображение в папку с изображениями <strong>skin\frontend\default\themeXXX\images\</strong>.
	</li>
	<li>
		Добавить стили в файл <strong>skin\frontend\default\themeXXX\css\style.css</strong>:
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
		Добавить в файл <strong>skin\frontend\default\themeXXX\js\scripts.js</strong> следующий код:
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
Значение <strong>invert: true</strong> выбирает направление параллакс эффекта, а <strong>offset: 300</strong> его интенсивность.
</p>		