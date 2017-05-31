 <h3 class="item1">Product Smart  Labels</h3>
<p class="indent">TemplateMonster <strong> Product<strong> Smart</strong> Labels</strong> module allows you to make labels appear automatically according to configured rules.</p>
 <p class="indent"><strong>Category Page  Label</strong>:</p>
<p>
  <figure class="img-polaroid"><img src="img/magento/smart-product-labels-70.png" alt="" /></figure>
</p>

<p>In order to customize the module, click the <strong>Stores > Settings > Configuration</strong>.</p> 

<p>
  <figure class="img-polaroid"><img src="img/magento/stores.png" alt="" /></figure>  
</p>
<p align="justify">Then choose the <strong>TEMPLATEMONSTER > Product Smart Label</strong> in the left side menu and you'll move to the module settings interface.</p>
<p>
  <figure class="img-polaroid"><img src="img/magento/smart-product-labels-2.png" alt="" /></figure>
  
  This module has 3 options:
</p>
<ul class="marked-list">
<li>
<strong>Enable</strong> — hire you can enable or disable the module if needed.
<figure class="img-polaroid"><img src="img/magento/smart-product-labels-3.png" alt="" /></figure>
</li> 
<li>
  <div align="justify">
    In Display Settings, specify containers for product and category pages — <strong>Product Page Label Container</strong> and <strong>Category Page Label Container</strong>.
  </div>
  <figure class="img-polaroid">
   <img src="img/magento/smart-product-labels-4.png" alt="" />
  </figure>
</li>
</ul>

<p align="justify"><strong>Product Page Label Container</strong> is responsible for displaying the label on the PRODUCT PAGE by the certain container. You need to type the class of the chosen container in the <strong>Product Page Label Container</strong> field [e.g. product-item-info, product-item-photo or product-image-container]. To find out what container class you ought to write open your store product page in the browser and right-click the product image. Select <strong>Inspect</strong> in the context menu.</p>
<p align="justify">The example is based on the default Magento store.</p>
<figure class="img-polaroid"><img src="img/magento/smart-product-labels-5.png" alt="" /></figure>



<p> A window with the html-code will appear. The code which is related to your product image will be highlighted. </p>
<figure class="img-polaroid"><img src="img/magento/smart-product-labels-6.png" alt="" /></figure>

<p> You can preview the container area by hovering over the html-code. </p> 
<figure class="img-polaroid"><img src="img/magento/smart-product-labels-7.png" alt="" /></figure>

<p>Then, copy the phrase in brackets which is always situated after the  <strong>div class=</strong>&quot;.


<div class="alert alert-warning ">
    <p>E.g. you have the html-code:<p> div class="gallery-placeholder" data-gallery-role="gallery-placeholder" </p>
</div>
<p align="justify">Copy the <strong>gallery-placeholder</strong> and that will be your certain container which you want the label should be displayed by. Paste the <strong>gallery-placeholder</strong> in the <strong>Product Page Label Container</strong> field. Note the dot (&quot;.&quot;) before the contaner class.</p>
<p align="justify">The default <strong>Product Page Label Container</strong> class is .product-media.</p>
<p>Do the same with the <strong>Category Page Label Container</strong> if you want label be shown by  the certain container in your shop product CATALOG PAGE.</p>
<p>The default <strong>Category Page  Label Container</strong> class is .product-item.</p>
<div class="alert alert-warning ">
  <p>Note  the dot (&quot;.&quot;) before the contaner class. E.g.<strong> .product-media</strong>.</p>
</div>
<h3>Label Manager</h3>
In the Admin panel, go to  <strong>TEMPLATEMONSTER > Smart Product Labels</strong>. This will bring you to the <strong>Label Manager</strong>.
<p>Hire able to create, edit, and manage all labels in the easy-to-use <strong>Label Manager</strong>.</p> 
<figure class="img-polaroid"><img src="img/magento/smart-product-labels-8.png" alt="" /></figure>


<p align="justify">All labels are gathered in a grid that displays <strong>Label ID</strong>, <strong>Name</strong> [e.g. New Product, Sale, or 10% discount], <strong>Product Page Label</strong> [label image for product pages], <strong>Product Page Text</strong> [variables for text displayed on product page label images], <strong>Category Page Label</strong> [label image for category pages], and <strong>Category Page Text</strong> [variables for text displayed on category page label images]. All columns support sorting and filtering. Their order can be rearranged.</p>


<p>The labels can easily be filtered. To set filter parameters click the <strong>Filters</strong> button.</p>
<figure class="img-polaroid"><img src="img/magento/smart-product-labels-10.png" alt="" /></figure>
<div class="alert alert-info">
<p><strong>Advise</strong></p>
    <p align="justify">You can delete or edit multiple labels. In order to do this check all the labels you need to edit or delete. Then, click the <strong>Actions</strong> button and choose the action [edit or delete]. </p>
<figure class="img-polaroid"><img src="img/magento/smart-product-labels-11.png" alt="" /></figure>
</div>




<h3>Add product label</h3>



To add a new product label press <strong>Add New Label</strong> button.
<figure class="img-polaroid"><img src="img/magento/smart-product-labels-12.png" alt="" /></figure><h5>You have to deal with 3 tabs of options: <strong>General</strong>, <strong>Images</strong>, and <strong>Conditions</strong>.

</h5>
<h5>GENERAL TAB</h5>
<p align="justify">In <strong>GENERAL</strong>, you specify such core label information as <strong>Name</strong> and <strong>Priority</strong> [0 is for the highest priority and 99 is for the lowest]. Besides, you can enable the feature that hides the label if another one with higher priority is applied [<strong>Hide if label with higher priority is already applied</strong>]. Another interesting parameter — <strong>Use for Parent</strong> — displays a child’s label for the parent product [but it works for configurable and grouped products only]. Finally, you should decide what store view to apply the label to.</p>
<p>
  <figure class="img-polaroid"><img src="img/magento/smart-product-labels-13.png" alt="" /></figure>
  
</p>
<h5>IMAGE TAB</h5>
<p align="justify">Next you can see the <strong>IMAGE</strong> tab. Effective immediately, you can choose the <strong>Label Type</strong>. Now you have the option to add text without images as a label. At the <strong>Image</strong> tab you also can indicate the <strong>text</strong> that should be displayed on the label.</p>
<figure class="img-polaroid"><img src="img/magento/smart-product-labels-14.png" alt="" /></figure>
<p align="justify">You are able to select background image for <strong>text</strong> label. Then, customize <strong>Font size</strong> [e.g. 12pt, 15pt, etc] and <strong>Font color</strong>, <strong>Text position</strong> [Right, Left, Center].</p>
<p>
  <figure class="img-polaroid"><img src="img/magento/smart-product-labels-15.png" alt="" /></figure>
</p>
<p align="justify">In case, you've chosen the <strong>image</strong> label type you should upload an image for your label and choose <strong>Label Position</strong> [Right/Top, Left/Top, Center/Top, Left/Middle, Right/Middle, Center/Middle, Left/Bottom, Right/Bottom, Center/Bottom]. Then, customize <strong>Label css class</strong> [textbox-label, checkbox-label, etc.]. <strong>Label width</strong> and <strong>Label height</strong> [e.g. 12px, 15px, etc ] and Custom CSS.</p>
Note that the same options are available for both PRODUCT and CATEGORY pages.
<figure class="img-polaroid"><img src="img/magento/smart-product-labels-16.png" alt="" /></figure>



<div class="alert alert-info">
    <p><strong>Advise</strong></p>
    <p>You can use different labels for category and product pages [e.g. smaller image for category page and a bigger one for product page].</p>
</div>

<p>You can utilize following variables in the label text:</p>
<ul class="marked-list">

<li>
  <div align="justify"><strong>{SAVE_PERCENT}</strong>. Saving percentage, it's the percentage margin between regular price
        and special price. If you specify in admin panel 'Sale! {SAVE_PERCENT} OFF!', on front end
        it will be 'Sale! X% OFF!', X stands for the percent number. [if special price is set] </div>
</li>
<li>
  <div align="justify"><strong>{SAVE_AMOUNT}</strong>. Flat savings amount, represents flat difference between regular price
        and special price. So 'Save {SAVE_AMOUNT}!' results into 'Save $X!'. X is the amount, '$'
        sign will be automatically replaced with the symbol of your currency. [if special price is set]</div>
</li>
<li><strong>{ SKU}</strong>.  Displays product SKU. </li>
<li>
  <div align="justify"><strong>{PRICE}</strong>. Displays regular price.  </div>
</li>
<li>
  <div align="justify"><strong>{SPECIAL_PRICE}</strong> displays special price. [if special price is set] </div>
</li>
<li>
  <div align="justify"><strong>{NEW_FOR}</strong> shows how many days ago a product was added. 'NEW! Arrived just
        {NEW_FOR} days ago!' will be shown as 'NEW! Arrived just X days ago!', where X is the
        amount of days. [if assigned to the new product] </div>
</li>
<li>

  <div align="justify"> <strong>{BR}</strong> — new line. The extension automatically breaks messages into several lines if they are
        too long. If you need to display some word or phrase in a separate line, please use {BR}
  variable. </div>
</li>

</ul> 
<div class="alert alert-info">
   The variables works for <strong>Simple </strong>and<strong> Downloadable</strong> products only.</div>
<h5>How to set the Special Price:</h5>
<p>On the Admin sidebar, tap <strong>Products</strong>. Then under the Inventory, choose <strong>Catalog</strong>.</p>

<p>Find the product you want special price add to.  	 Open the product in Edit mode. </p>

<p>Tab <strong>Advanced Pricing</strong> under the Price opton.</p>

<p>Enter the special price in the <strong>Special Price</strong> option field.</p>

<p>When complete, tap <strong>Done</strong>. Then save the product settings.</p>
<h5>CONDITIONS TAB</h5>
<p>As for the <strong>CONDITIONS</strong> tab, it lets you make the selection of product to apply the label to more precise. 
<figure class="img-polaroid"><img src="img/magento/smart-product-labels-17.png" alt="" /></figure>

The tab is divided into several sections:

<ol class="marked-list"><li>
      <div align="justify"><strong>Conditions</strong><br>In the first one, you have to deal with the expression if ALL/ANY of these conditions are TRUE/FALSE. You also can add the condition.</div>
</li>

  <figure class="img-polaroid">
  <img src="img/magento/smart-product-labels-18.png" alt="" />
    
  </figure>

  <li>
     <div align="justify"><strong>Date Range</strong><br>The second section is designed to specify date range. It sets a time period during which the label will be displayed on your online store website. Activate the feature, and you will get 4 new fields: <strong>From Date, From Time, To Date, To Time</strong>.
     </div>
    <figure class="img-polaroid">
    <img src="img/magento/smart-product-labels-19.png" alt="" />
    </figure>
  </li>
  <li>
      <div align="justify"><strong>State</strong>
        <br>Next, fine-tune the state of items you are going to apply the label to. In the State section, there are just two options: <strong>Is New</strong> and <strong>Is on Sale</strong>. For each one you should choose one of three parameters: 'No Use' [the option will be ignored], 'Yes' [the label will be applied only to products that are set as new/on sale], 'No' [the label will be applied only to products that are NOT set as new/on sale].
      </div>
    <figure class="img-polaroid">
  <img src="img/magento/smart-product-labels-20.png" alt="" /></li>
  <li>
      <div align="justify"><strong>Stock</strong><br>The same is about the <strong>Stock</strong> section, but there is only one option here, so you should decide what role does a stock status play. You need to choose: 'No Use' [the option will be ignored], 'Yes' [out of stock], 'No' [in stock].  
      </div>
      <figure class="img-polaroid">
        <img src="img/magento/smart-product-labels-21.png" alt="" />
      </figure>
  </li>
  <li>
        <div align="justify"><strong>Price Range</strong><br>The next section is Price Range. After activating the appropriate feature, you can choose what price [Base Price, Special Price, Final Price, Final Price Including Tax, Starting From Price, or Starting To Price] and price diapason must be taken into account by the algorithm.
    </div>
            <figure class="img-polaroid">
              <img src="img/magento/smart-product-labels-22.png" alt="" />
            </figure>
    </li>
  <li>
    <p>
        <strong>Customer Groups</strong><br>The final section lets you choose customer groups that will see the label [NOT LOGGED IN, General, Wholesale, Retailer]. 
         <figure class="img-polaroid"><img src="img/magento/smart-product-labels-23.png" alt="" /></figure></li></ol>


<div class="alert alert-info">
<p><strong>Advise</strong></p>
   Don't forget to click <strong>Save</strong> button after you finish the customization. 
   <figure class="img-polaroid"><img src="img/magento/smart-product-labels-24.png" alt="" /></figure>
</div>
 



























    
 
    
    















 

