<h2 class="item1">Social Sharing</h2>
<p>This module allows you to display social icons that are set on the product page. In this way, it gives your site visitors an opportunity to share links to the products of your store in different social networks</p>
<h3>General</h3>
<p>To set up the module, navigate to <strong>Store -> Configuration ->  Templatemonster-> Social Sharing tab</strong>. Here you’ll find all the settings that are necessary to set up the module.<br>There are 2 main options in this section.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-2.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>enable/disable the module.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Profile id </strong></td>
        <td>-</td>
        <td>Addthis identifier.</td>
    </tr>    
</table>
<p>
    To get the <strong>Profile Id</strong>, register at the <a target="_blank" href="https://www.addthis.com/">Addthis</a> website. After this, you need to create a project in your Dashboard. When creating a project, you’ll be redirected to the General settings, where you’ll see the ID field in General section. You should use this very identifier.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-3.jpg" alt="" /></figure>
<h3>Look &amp; Feel</h3>
<p>In this section, you can set up the appearance of the icons. You can choose one of the predefined presets, or you can add your own icons.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-4.jpg" alt="" /></figure>
<p>
    Add your own icons. There are 2 options in this section:
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-5.jpg" alt="" /></figure>
<p><strong>Custom button</strong> - select this option and specify the link to your image in the input field. When clicking the link, you’ll see a popup for selecting a sharing service.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-7.jpg" alt="" /></figure>
<p>
    <strong>Custom code</strong> - if you select this option, you can fully replace to display of the icons with a custom one. The field can take html and css code. If you need to add a custom Facebook, Twitter or other service’s icon, and want to make it work, you need to add a corresponding class to the link. For Facebook, this will be class="addthis_button_facebook", for Twitter - class="addthis_button_twitter", for a popup with selection of social networks - class="addthis_button_more".
</p>
<h3>Custom Metadata</h3>
<p>In this section, you can set up sharing for a custom page.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-8.jpg" alt="" /></figure>
<p>
    Having specified all the data, you’ll see their output in the sharing dialogue window. You’ll see the specified data there.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-10.jpg" alt="" /></figure>
<h3>Custom Sharing Service</h3>
<figure class="img-polaroid"><img src="img/magento/sharing-12.jpg" alt="" /></figure>
<p>
    In this section, you can add an icon of your social network, and users will be able to share, using your service.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-9.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Name </strong></td>
        <td>-</td>
        <td>sharing service name.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Url </strong></td>
        <td>-</td>
        <td>sharing service link.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Icon </strong></td>
        <td>-</td>
        <td>sharing service icon.</td>
    </tr>   
</table>
<p>Your module will be changed accordingly.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-11.jpg" alt="" /></figure>

<h3>Api Configuration Options</h3>
<p>This section contains the API settings of the Addthis service.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-13.jpg" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/sharing-14.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Exclude Services </strong></td>
        <td>-</td>
        <td>services to exclude from all menus. For example, setting this to 'facebook,myspace' would hide Facebook and MySpace on all our menus.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Compact Menu Services </strong></td>
        <td>-</td>
        <td>services to use in the compact menu. For example, setting this to 'print,email,favorites' would result in only those three services appearing.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Expanded Menu Service </strong></td>
        <td>-</td>
        <td>services to use in the expanded menu. Useful if very few services are desired - specifying a long list via services_exclude could be tiresome, and wouldn’t catch a new service added later. For example, setting this to 'bebo,misterwong,netvibes' would result in only those three services appearing in the expanded menu..</td>
    </tr>   

    <tr>
        <td class="col-1"><strong>Compact Menu Hover </strong></td>
        <td>-</td>
        <td>turn off to not to show the compact menu upon mousing over the regular button. Instead, it will be revealed upon clicking the button.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Delay </strong></td>
        <td>-</td>
        <td>delay, in milliseconds, before compact menu appears when mousing over a regular button. Capped at 500 ms.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Compact Menu Direction </strong></td>
        <td>-</td>
        <td>normally, we show the compact menu in the direction of the user’s browser that has the most space. Change to customize the default behaviour.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>New Window </strong></td>
        <td>-</td>
        <td>If true, clicking the AddThis button will open a new window to a page supporting sharing without JavaScript.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Menu Language </strong></td>
        <td>-</td>
        <td>force the menu to use a particular language.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Top </strong></td>
        <td>-</td>
        <td>number of pixels to offset the top of the compact menu from its parent element.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Left </strong></td>
        <td>-</td>
        <td>number of pixels to offset the left of the compact menu from its parent element.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Load AddThis CSS </strong></td>
        <td>-</td>
        <td>turn off to not load our standard CSS file, allowing you to style everything yourself.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Track Clickbacks </strong></td>
        <td>-</td>
        <td>turn on to allow us to append a variable to your URLs upon sharing. We’ll use this to track how many people come back to your content via links shared with AddThis.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Google Analytics Id </strong></td>
        <td>-</td>
        <td>turn on to enable the module.</td>
    </tr>
</table>
