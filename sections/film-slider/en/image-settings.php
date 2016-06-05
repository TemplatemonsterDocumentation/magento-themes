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