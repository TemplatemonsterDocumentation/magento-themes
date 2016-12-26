<h2 class="item1">Site Maintenance</h2>
<p>
    The <strong>Site Maintenance</strong> module for Magento 2 allows you to display the “Site under maintenance” page and let your customers know that now there is some technical work going on and that the website will soon become available. <br>
        With the help of this plugin, you can change the appearance of this page. You can whitelist IPs, which allows users gain access to the frontend. You can specify the end time of the service work and display a timer to let your clients know the timing of this work. The module allows you display a subscription form for this page, and in the end of the work you can send e-mail notifications to your clients.
</p>
<h3>General</h3>
To set up the module, navigate to <strong>Stores -> Configuration</strong> and in the section on the right select <strong>Templatemonster -> Site maintenance</strong>. <br>
You’ll find three sections there:
<ul class="marked-list">
    <li>Page configuration;</li>
    <li>Timer section;</li>
    <li>Form settings.</li>
</ul>

<h3>Page configuration</h3>
This section serves for setting up the appearance of the page and contains a set of important settings.
<figure class="img-polaroid"><img src="img/magento/maintenance-2.png" alt="" /></figure>
Let’s take a look at the available options:
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Site Maintenance </strong></td>
        <td>-</td>
        <td>enables/disables the module on the whole.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Title</strong></td>
        <td>-</td>
        <td>the page title. It also serves as a heading in the page contents.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Allow frontend for current IP</strong></td>
        <td>-</td>
        <td>with the help of this button, you can automatically add your IP to the whitelist and gain access to the frontend, bypassing the maintenance page.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>IP Whitelist</strong></td>
        <td>-</td>
        <td>in this field, you can add the IP addresses of the clients, who need to get access to the website frontend, bypassing the maintenance page.</td>
    </tr>       
    <tr>
        <td class="col-1"><strong>Logo</strong></td>
        <td>-</td>
        <td>you can add the page logo as an image.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Background Type</strong></td>
        <td>-</td>
        <td>you can select the background type for the page. There are two available options: <strong>Image</strong>, <strong>Color</strong>. Depending on what option you choose, you’ll see more settings. If you select <strong>Color</strong>, you’ll see the <strong>Background color</strong> option. If you select the Image type, you’ll see additional settings.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Background Color</strong></td>
        <td>-</td>
        <td>the background color for the page.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Background Image</strong></td>
        <td>-</td>
        <td>the image that is displayed on the background of your page.</td>
    </tr>
    <tr>
        <td class="col-2"><strong><a href="http://www.w3schools.com/cssref/pr_background-repeat.asp" target="_blank">Background Repeat</a></strong>, <strong><a href="http://www.w3schools.com/cssref/pr_background-position.asp" target="_blank">Background Position</a></strong>, <strong><a href="http://www.w3schools.com/cssref/css3_pr_background-size.asp" target="_blank">Background Size</a></strong>, <strong><a href="http://www.w3schools.com/cssref/pr_background-attachment.asp" target="_blank">Background Attachment</a></strong></td>
        <td>-</td>
        <td>css-properties for managing the background in the image form.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Page Description</strong></td>
        <td>-</td>
        <td>the field for the page content management. You can either use the WYSIWYG-editor, or work with html-code.</td>
    </tr>
</table>

<h3>Timer section</h3>
This section is responsible for display and setup of the timer on the Maintenance page.
<figure class="img-polaroid"><img src="img/magento/maintenance-3.jpg" alt="" /></figure>
Let’s take a look at the options of this section.
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>enables/disables the timer on the page.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Timer Text</strong></td>
        <td>-</td>
        <td>Allows to display text before the timer with the help of WYSIWYG-editor or html-code.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Date/Time</strong></td>
        <td>-</td>
        <td>you can set up the end date of the service work.</td>
    </tr>      
    <tr>
        <td class="col-1"><strong>Timer Format</strong></td>
        <td>-</td>
        <td>the field to format the timer output. The field takes html-code. You can find the more detailed information on formatting the timer output on the plugin <a href="http://hilios.github.io/jQuery.countdown/" target="_blank">official website</a>.</td>
    </tr>           
</table>


<h4>Form settings section</h4>
This section is responsible for displaying and setting up the subscription form. 
<figure class="img-polaroid"><img src="img/magento/maintenance-4.jpg" alt="" /></figure>
Let’s take a look at the options of this section.
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>enables/disables subscription forms on the page.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Form Title</strong></td>
        <td>-</td>
        <td>the title of the block with the form, which will be displayed in front of the form.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Form Text</strong></td>
        <td>-</td>
        <td>allows displaying some text before the subscription form with the help of the WYSIWYG-editor or html-code.</td>
    </tr>              
</table>