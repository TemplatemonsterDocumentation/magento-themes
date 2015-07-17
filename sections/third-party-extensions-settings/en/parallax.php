<h3>Parallax</h3>
Parallax block can be set by adding the part of code to <strong>*.phtml</strong> files of your template. 
In order to add parallax-effect for certain content block you need:
<ol>
	<li>
		To add any class for parallax-effect block (e.g., <strong>parallax</strong>) and add attribute <strong>data-source-url="{{skin url='images/your_images.jpg'}}"</strong>.
	</li>
	<li>
		To add image into images folder <strong>skin\frontend\default\themeXXX\images\</strong>.
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
		Add into <strong>skin\frontend\default\themeXXX\js\scripts.js</strong> file following code:
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
Variable <strong>invert: true</strong> chooses the direction of the parallax effect, and <strong>offset: 300</strong> its density.
</p>		