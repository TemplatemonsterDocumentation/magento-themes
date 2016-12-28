<h2 class="item1">Image Zoom</h2>
<p><strong>Image Zoom</strong> module is a Magento 2 Extension that implements jQuery ElevateZoom Plus Plugin into
    Magento online store. It replaces default product image zoom (photorama) script functionality with more flexible
    and feature-rich solution.</p>
<p>
    In order to configure the module, navigate to <strong>Stores -> Settings -> Configuration</strong> section. <br>
    Choose the <strong>TEMPLATEMONSTER -> Image Zoom</strong> in the left side menu to go to the module settings
    interface.
</p>

<p>Image Zoom plugin implements almost all configuration options provided by the Elevate Zoom API. You can see full
    list of options with examples at the <a href="http://igorlino.github.io/elevatezoom-plus/api.htm">official
        website</a>. Let's see how the Image Zoom plugin can be configured.
</p>

<h3>General</h3>

<table class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled</strong></td><td>-</td>
        <td>Allows to enable Image Zoom module. If disabled default Magento image zoom will be displayed. </td>
    </tr>
    <tr>
        <td class="col-1"><strong>Zoom Type</strong></td><td>-</td>
        <td>You can choose from three options: <b>Window</b>, <b>Lens</b> and <b>Inner</b>. Some options are
            available for specific zoom type.
        </td>
    </tr>
    <tr>
        <td class="col-1"><strong>Lens shape</strong></td><td>-</td>
        <td>Select the zoom lens shape: round or square.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Lens fade in/out</strong></td><td>-</td>
        <td>Defines lens fade in/out animation duration in milliseconds.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Lens size</strong></td><td>-</td>
        <td>Defines lens size in pixels. Diameter for round and side length for square lens. </td>
    </tr>
    <tr>
        <td class="col-1"><strong>Contain Lens Zoom</strong></td><td>-</td>
        <td>This makes sure the lens does not fall outside of the image.</td>
    </tr>
</table>

<div class="container">
    <div class="row">
        <div class="grid_4">
            <figure class="img-polaroid"><img src="img/magento/image-zoom_2.jpg" alt="" />
                <figcaption>Window mode with round lens</figcaption></figure>
        </div>
        <div class="grid_4">
            <figure class="img-polaroid"><img src="img/magento/image-zoom_3.jpg" alt="" />
                <figcaption>Lens mode with square lens</figcaption></figure>
        </div>
        <div class="grid_4">
            <figure class="img-polaroid"><img src="img/magento/image-zoom_4.jpg" alt="" />
                <figcaption>Inner mode</figcaption></figure>
        </div>
    </div>
</div>

<table class="options-table">
    <tr>
        <td class="col-1"><strong>Responsive</strong></td><td>-</td>
        <td>Set to true to activate responsiveness.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Scroll zoom</strong></td><td>-</td>
        <td>Set to true to activate zoom on mouse scroll.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Image cross fade</strong></td><td>-</td>
        <td>Set to true to activate simultaneous crossfade of images on gallery change.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Show loading icon</strong></td><td>-</td>
        <td>Set to true to show loading icon. If set to true you'll be able to upload your loading icon. </td>
    </tr>
    <tr>
        <td class="col-1"><strong>Cursor</strong></td><td>-</td>
        <td>Select cursor type</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Border Size</strong></td><td>-</td>
        <td>Border Size of the zoom window. Window and Inner modes.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Border Color</strong></td><td>-</td>
        <td>Set zoom window border color. Window and Inner modes.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Gallery selector</strong></td><td>-</td>
        <td>Input gallery ID selector. Please leave unchanged if you are not sure about the correct ID. </td>
    </tr>
    <tr>
        <td class="col-1"><strong>Responsive range</strong></td><td>-</td>
        <td>Specify the window width range for responsive behaviour. For example: 220-900</td>
    </tr>
</table>

<h3>Window Mode</h3>
<p>This configuration section is available only if "window" option is selected in Zoom Type field.</p>

<table class="options-table">
    <tr>
        <td class="col-1"><strong>Lens Border</strong></td><td>-</td>
        <td>Set lens border width.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Lens border color</strong></td><td>-</td>
        <td>Set lens border color.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Lens color</strong></td><td>-</td>
        <td>Set lens background color.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Lens opacity</strong></td><td>-</td>
        <td>Set lens background opacity.</td>
    </tr><tr>
        <td class="col-1"><strong>Zoom window width</strong></td><td>-</td>
        <td>Zoom window width in pixels. (Make sure the value is greater than product main image dimensions.)</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Zoom window height</strong></td><td>-</td>
        <td>Zoom window height in pixels. (Make sure the value is greater than product main image dimensions.)</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Zoom window position</strong></td><td>-</td>
        <td>Field is provided with schematic description and allows you to choose zoom window position. </td>
    </tr>
</table>

<div class="alert alert-warning">
    <p><strong>Please note.</strong></p>
    Zoom window width and height should be more than zoomed image container dimensions. Otherwise it will not appear.
    Please check an example below.
</div>

<p>To get main image dimensions you can use browser developer tools (F12 hotkey)</p>
<figure class="img-polaroid"><img src="img/magento/image-zoom_5.jpg" alt="" /></figure>
<p>So the image dimensions are 452 x 500 so your zoom window dimensions should be at least 453x501 pixels.</p>

<table class="options-table">
    <tr>
        <td class="col-1"><strong>X/Y-axis offset</strong></td><td>-</td>
        <td>Defines offset of the zoom window. Allows to fine tune window position in relation to main image container.
        </td>
    </tr>
    <tr>
        <td class="col-1"><strong>Window fade in/out.</strong></td><td>-</td>
        <td>Defines window fade in/out animation speed in milliseconds.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Easing</strong></td><td>-</td>
        <td>Set to true to activate easing. (Can be used with Window zoom type only.)</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Easing Amount</strong></td><td>-</td>
        <td>Select easing effect intensity in milliseconds.</td>
    </tr>
</table>

<h4>Tint</h4>
<p>Tint configuration section allows you to define the appearance settings for the zoom overlay. Can be used with Window zoom type only.</p>

<figure class="img-polaroid"><img src="img/magento/image-zoom_6.jpg" alt="" /></figure>

<table class="options-table">
    <tr>
        </tr>
        <td class="col-1"><strong>Tint</strong></td><td>-</td>
        <td>Activate tint.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Tint color</strong></td><td>-</td>
        <td>Set tint background opacity.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Tint opacity</strong></td><td>-</td>
        <td>Set tint opacity.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Tint fade in.</strong></td><td>-</td>
        <td>Set tint fade in speed.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Tint fade out.</strong></td><td>-</td>
        <td>Set tint fade out speed.</td>
    </tr>
</table>