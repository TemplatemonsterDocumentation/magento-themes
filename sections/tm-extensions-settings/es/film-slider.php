<h3>Film Slider</h3>
<p>TemplateMonster FilmSlider module is an implementation of elegant and professional jQuery plugin ‘Slider Pro’. Allows you to add slider with multiple layers to your store home page. Rich collection of slider configuration options and user interface will help you to configure your slider fast and easily.</p>
<p>In the main navigation menu you’ll see new menu option <strong>TemplateMonster</strong>. <br>To start working with the FilmSlider module, click <strong>Template Monster -> Sliders</strong> menu item.</p>
<figure class="img-polaroid"><img src="img/magento/slide-1.png" alt="" /></figure>
<p>Here you can see a list of available sliders where you can <strong>disable/enable</strong>, <strong>delete</strong> or <strong>edit</strong> sliders.</p>
<figure class="img-polaroid"><img src="img/magento/slide-2.png" alt="" /></figure>
<p>To add new slider click <strong>Add New Slider</strong> button in the top right corner. <br>
On the slider configuration screen in <strong>General Options</strong> section you can see all available slider settings. <strong>Slider Items</strong> section allows you to add slides to your slider.</p>
<figure class="img-polaroid"><img src="img/magento/slide-3.png" alt="" /></figure>
<p>Let’s see what slider options are available. As you can see options are divided into several parts to make the configuration interface more user friendly. </p>

<h4>General Options</h4>
<h5>Main Settings</h5>
<p>This section allows you to set slider title, select store view, enable/disable slider, set its width and height. Each option refers to <strong>Slider Pro jQuery plugin</strong> property. You can find more specific description of each property in <a target='blank_' href="https://github.com/bqworks/slider-pro/blob/master/docs/api.md#1-properties">official Slider Pro</a> documentation. Some jQuery plugin properties may not present in the <strong>FilmSlider</strong> configuration, we will add them in future releases.</p>
<figure class="img-polaroid"><img src="img/magento/slide-4.png" alt="" /></figure>
Slider dimensions (width and height) can be set to a fixed value, like 900 (indicating 900 pixels), or to a percentage value, like '100%'.
<div class="alert alert-warning">
	Please note: slide title, store view and status are required, you cannot save the slide without these values set.
</div>

<h5>Image Settings</h5>
<p>In image section you can adjust slider image configuration settings. Each option has a brief description. Let’s describe some of them more specifically.</p>
<figure class="img-polaroid"><img src="img/magento/slide-5.png" alt="" /></figure>
<h6>aspectRatio</h6>
Sets the aspect ratio of the slides. If set to a value different than -1, the height of the slides will be overridden in order to maintain the specified aspect ratio.
<h6>imageScaleMode</h6>
Sets the scale mode of the main slide images (images added as background). 'cover' will scale and crop the image so that it fills the entire slide. 'contain' will keep the entire image visible inside the slide. 'exact' will match the size of the image to the size of the slide. 'none' will leave the image to its original size.
<h6>forceSize</h6>
Indicates if the size of the slider will be forced to full width or full window.
<div class="alert alert-warning">
	Note: It's possible to make the slider full width or full window by giving it a width and/or height of '100%'. However, sometimes the slider might be inside other containers which are less than full width/window. The 'forceSize' property is useful in those situations because it will still enlarge the slider to fill the width or window by overflowing its parent elements.
</div>

<h5>Slides settings</h5>
Slides settings section allows to configure slides behaviour. Here you can configure slides animation, visible slider size, slides shuffle and loop.
<figure class="img-polaroid"><img src="img/magento/slide-6.png" alt="" /></figure>

<h5>Fade animation settings</h5>
This section contains settings for fade animation. Fade animation can be enabled on slide switch.
<figure class="img-polaroid"><img src="img/magento/slide-7.png" alt="" /></figure>
You can set if you want to fade out previous slide and fade animation duration in milliseconds. 

<h5>Auto play settings</h5>
Autoplay feature in Film Slider allows to loop through the slides automatically. This configuration settings contain options to configure auto play delay, direction and pause with mouse cursor on hover. 
<figure class="img-polaroid"><img src="img/magento/slide-8.png" alt="" /></figure>

<h5>Controls settings</h5>
Slider controls are the navigation buttons that let you switch the slides. In <strong>FilmSlider</strong> there are several types of navigation controls: <strong>prev/next</strong> arrows,  <strong>pagination</strong> buttons. Enabled keyboard navigation allows you to switch between the slides using keyboard. Also, you can enable button that will switch slider to the full screen mode.
<figure class="img-polaroid"><img src="img/magento/slide-9.png" alt="" /></figure>

<h5>Responsive settings</h5>
Responsive settings section configures slider behaviour on mobile devices. Here you can define screen width breakpoints (<strong>small, medium, large</strong>). Also, you can enable touch swipe behaviour to let user switch between the slides with swipe gestures. 
<figure class="img-polaroid"><img src="img/magento/slide-10.png" alt="" /></figure>

<h5>Caption Settings</h5>
Caption feature allows to add text to each slide. This section allows you to enable caption fade animation and set its duration.
<figure class="img-polaroid"><img src="img/magento/slide-11.png" alt="" /></figure>

<h5>Layers main settings</h5>
Layers configuration settings contain slides layers behaviour. Each option has a brief description under the input fields.
<figure class="img-polaroid"><img src="img/magento/slide-12.png" alt="" /></figure>

<h4>Adding Slides</h4>
You can add new slides only after saving the slider. Click <strong>Save and Continue Edit</strong> button in the top right corner. When the slider is saved, switch to <strong>Slider Items</strong> tab.
<figure class="img-polaroid"><img src="img/magento/slide-13.png" alt="" /></figure>
Click <strong>Add Slider Item</strong> to add a new slide. Let’s see what slide configuration options are available.

<h5>Slide Information</h5>
Here you can input slide title and set its status (<strong>enabled/disabled</strong>).
<figure class="img-polaroid"><img src="img/magento/slide-14.png" alt="" /></figure>

<h5>Slide Images</h5>
This section allows you to add images to the slide. Click Insert Image button to open Image library where you can select available images.
<figure class="img-polaroid"><img src="img/magento/slide-15.png" alt="" /></figure>
You can also upload images from your computer.
<figure class="img-polaroid"><img src="img/magento/slide-16.png" alt="" /></figure>
Under the Image field you can see your slide preview. You are free to set preview size the way you like. We moved the next section of slide configuration to the separate section as it is fully related to slide layers. 

<h4>Working with layers</h4>
<strong>FilmSlider</strong> is a multi-layer slider. This mean that your can add multiple independent layers to your slide. Layers can be added to the slide on the slide configuration screen described above. This screen contains several sections of layers settings.

<h5>Layers list</h5>
Layers list section allows to add layers to your slide. You can add image layers and text layers. Use corresponding buttons to add layers.
<figure class="img-polaroid"><img src="img/magento/slide-17.png" alt="" /></figure>
By clicking on <strong>Add layer image</strong> you’ll see an image library where you can select from available images or upload images from your computer. By clicking <strong>Add layer text</strong>, you’ll see new text layer added and layer settings became associated with your new particular layer.
<figure class="img-polaroid"><img src="img/magento/slide-18.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/slide-19.png" alt="" /></figure>

<h5>Layer text settings</h5>
Using <strong>Layer text settings</strong> section you can input layer text, layer size, colors, font styling, etc.
<figure class="img-polaroid"><img src="img/magento/slide-20.png" alt="" /></figure>
In the <strong>Layer text/html</strong> field you can input your layer content in both text and html format. 

<h5>Layer text position settings</h5>
In this section you can define text layer position.
<figure class="img-polaroid"><img src="img/magento/slide-21.png" alt="" /></figure>

<h5>Layer animation settings</h5>
This section allows you to define layer animation. You can set its position on the slide, set transition, offsets, delay, duration, etc.
<figure class="img-polaroid"><img src="img/magento/slide-22.png" alt="" /></figure>
When you add several layers, bottom configuration settings (position and animation) will show settings for the selected layer.
<figure class="img-polaroid"><img src="img/magento/slide-23.png" alt="" /></figure>

<h4>Adding slider to page</h4>
To add slider to your page please use Magento widgets. In the main admin panel menu click <strong>Content -> Pages</strong> item.
<figure class="img-polaroid"><img src="img/magento/slide-24.png" alt="" /></figure>
Select the page you want to add slider to and click <strong>Edit</strong>.
<figure class="img-polaroid"><img src="img/magento/slide-25.png" alt="" /></figure>
At the page editing screen switch to <strong>Content</strong> section and click <strong>Insert Widget</strong> button.
<figure class="img-polaroid"><img src="img/magento/slide-27.png" alt="" /></figure>
In the appeared window select widget type <strong>Template Monster FilmSlider</strong>, select the slider you want to insert and click <strong>Insert Widget</strong> button. 
<figure class="img-polaroid"><img src="img/magento/slide-28.png" alt="" /></figure>
When you are done adding the widget click <strong>Save Page</strong> button and switch to store frontend to see the result.