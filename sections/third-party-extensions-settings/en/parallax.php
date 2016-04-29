<h3>Parallax</h3>
Parallax block can be set by adding the part of code to the <strong>*.phtml</strong> files of your template. 
In order to add parallax-effect to a certain content block you need:
<ol class="index-list">
	<li>
		To add any class for parallax-effect block (e.g., <strong>parallax</strong>) and add the <strong>data-source-url="{{skin url='images/your_images.jpg'}}"</strong> attribute.
	</li>
	<li>
		To add an image into the images folder <strong>skin\frontend\default\themeXXX\images\</strong>.
	</li>
	<li>
		To add styles into the <strong>skin\frontend\default\themeXXX\css\style.css</strong> file:
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
		Add to the <strong>skin\frontend\default\themeXXX\js\scripts.js</strong> file the following code:
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
Variable <strong>invert: true</strong> indicates the direction of the parallax effect, and <strong>offset: 300</strong> indicates its density.
</p>		