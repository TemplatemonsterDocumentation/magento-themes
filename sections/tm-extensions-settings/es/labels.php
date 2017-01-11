 <h2 class="item1">Smart Product Labels</h2>
<p align="justify" class="indent">TemplateMonster <strong>Smart Product Labels</strong> module allows you to make labels appear automatically according to configured rules.</p>
<p align="justify" class="indent"><strong>Magento Product Labels Extension</strong>  provides an opportunity to add labels on product thumbnails. You are free to use unlimited types of label. You can also create your own label rules extremely easy by using the smart and user-friendly interface. You are able to add your own icons as well as your own custom CSS. You have an option to add text without background image as a label. Moreover, you will be able to display labels both on categories and products page (even different labels, if you want). 
</p>
 <h2 class="item1">Extension settings</h2>
<p>In order to customize the module, click the <strong>Stores -> Settings -> Configuration</strong>.</p> 

<figure class="img-polaroid"><img src="img/magento/stores.png" alt="" /></figure>  
<p align="justify">Then choose the <strong>TEMPLATEMONSTER -> Product Smart Label</strong> in the left side menu and you'll move to the module settings interface.</p>
<figure class="img-polaroid"><img src="img/magento/config.png" alt="" /></figure>

<p align="justify">This module has 3 options:</p>
<ul class="marked-list">
<li>
<strong>Enable</strong> — hire you can enable or disable the module if needed.
<p><figure class="img-polaroid"><img src="img/magento/enab.png" alt="" /></figure></p>
</li> 
<li>
  <div align="justify">
    In Display Settings, specify containers for product and category pages — <strong>Product Page Label Container</strong> and <strong>Category Page Label Container</strong>.
  </div>
  <p align="justify"><figure class="img-polaroid"><img src="img/magento/prodcat.png" alt="" /></figure></p>
</li>
</ul>

<p align="justify"><strong>Product Page Label Container</strong> is responsible for displaying the lable on the PRODUCT PAGE by the certain container. You need to type the class of the chosen container in the <strong>Product Page Label Container</strong> field (e.g. product-item-info, product-item-photo or product-image-container). To find out what container class you ought to write open your store product page in the browser and right-click the the product image. Select <strong>Inspect</strong> in the context menu.</p>
<figure class="img-polaroid"><img src="img/magento/inspect.png" alt="" /></figure>



<p align="justify"> A window with the html-code will appear on the right. The code which is related to your product image will be highlighted. </p>
<figure class="img-polaroid"><img src="img/magento/code.png" alt="" /></figure>

<p> You can preview the container area by hovering over the html-code. </p> 
<figure class="img-polaroid"><img src="img/magento/highl.png" alt="" /></figure>

<p>Then, copy the phrase in brackets which is always situated after the  <strong>div class=</strong> tag.


<div class="alert alert-warning ">
    <p>E.g. you have the html-code:<p align="justify"> div class="fotorama__stage__shaft fotorama__grab" tabindex="0" data-gallery-role="stage-shaft" style="width: 707px; margin-left: 0px; left: 0px;" </p>
</div>

<p align="justify">Copy the <strong>fotorama__stage__shaft fotorama__grab</strong> and that will be your certain container which you want the lable should be displayed by. Paste the <strong>fotorama__stage__shaft fotorama__grab</strong> in the <strong>Product Page Label Container</strong> field.</p>

<p align="justify">Do the same with the <strong>Category Page Label Container</strong> if you want label be shown in your shop product CATALOG PAGE.</p> 


    
<h3>Label Manager</h3>
<div align="justify">In the Admin panel, go to <strong>Content -> Smart Product Labels</strong>. This will bring you to the <strong>Label Manager</strong>.
</div>
<p align="justify">Hire you are allow to create, edit, and manage all labels in the easy-to-use <strong>Label Manager</strong>.</p> 
<figure class="img-polaroid"><img src="img/magento/splmang.png" alt="" /></figure>


<p align="justify">All labels are gathered in a grid that displays <strong>Label ID</strong>, <strong>Name</strong> (e.g. New Product, Sale, or 10% discount), <strong>Product Page Label</strong> (label image for product pages), <strong>Product Page Text</strong> (variables for text displayed on product page label images), <strong>Category Page Label</strong> (label image for category pages), and <strong>Category Page Text</strong> (variables for text displayed on category page label images). All columns support sorting and filtering. Their order can be rearranged.</p>
<figure class="img-polaroid"><img src="img/magento/table.png" alt="" /></figure>

<p>The labels can easily be filtered. To set filter parameters click the <strong>Filters</strong> button.</p>
<figure class="img-polaroid"><img src="img/magento/filt.png" alt="" /></figure>
<div class="alert alert-info">
<p><strong>Advise</strong></p>
    <div align="justify">You can delete or edit multiple labels. In order to do this check all the labels you need to edit or delete. Then, click the <strong>Actions</strong> button and choose the action (edit or delete). 
    </div>
  <p><figure class="img-polaroid"><img src="img/magento/act.png" alt="" /></figure></p>
</div>




<h3>Creation of product labels</h3>



To add a new product label press <strong>Add New Label</strong> button.
<p><figure class="img-polaroid"><img src="img/magento/add.png" alt="" /></figure></p>
<p><h5>You have to deal with 3 tabs of options: <strong>General</strong>, <strong>Images</strong>, and <strong>Conditions</strong>.</h5></p>

<h5>GENERAL TAB</h5>
<div align="justify">In <strong>GENERAL</strong>, you specify such core label information as <strong>Name</strong> and <strong>Priority</strong> (0 is for the highest priority and 99 is for the lowest). Besides, you can enable the feature that hides the label if another one with higher priority is applied (<strong>Hide if label with higher priority is already applied</strong>). Another interesting parameter — <strong>Use for Parent</strong> — displays a child’s label for the parent product (but it works for configurable and grouped products only). Finally, you should decide what store view to apply the label to. 
</div>
<p><figure class="img-polaroid"><img src="img/magento/opti.png" alt="" /></figure></p>

<h5>IMAGE TAB</h5>
<p align="justify"> Next you can see the <strong>IMAGE</strong> tab. Effective immediately, you can choose the <strong>Label Type</strong>. Now you have the option to add text without images as a label. At the <strong>Image</strong> tab you also can indicate the <strong>text</strong> that should be displayed on the label.</p>

<figure class="img-polaroid"><img src="img/magento/ime.png" alt="" /></figure>
   

<p>You can utilize following variables in the label texts:</p>

<ul class="marked-list">
<li>
      <div align="justify"><strong>{ATTR:code}</strong> — with this variable you can display value of any attribute in the label text. 
            Please replace 'code' with the code of the actual attribute. For example, {ATTR:manufacturer}
            would display the product manufacturer. </div>
</li>
<li>
  <div align="justify"><strong>{SAVE_PERCENT}</strong>. Saving percentage, it's the percentage margin between regular price
        and special price. If you specify in admin panel 'Sale! {SAVE_PERCENT} OFF!', on front end
        it will be 'Sale! X% OFF!', X stands for the percent number.  </div>
</li>
<li>
  <div align="justify"><strong>{SAVE_AMOUNT}</strong>. Flat savings amount, represents flat difference between regular price
        and special price. So 'Save {SAVE_AMOUNT}!' results into 'Save $X!'. X is the amount, '$'
        sign will be automatically replaced with the symbol of your currency.  </div>
</li>
<li>
  <div align="justify"><strong>{PRICE}</strong> displays regular price.  </div>
</li>
<li>
  <div align="justify"><strong>{SPECIAL_PRICE}</strong> displays special price.  </div>
</li>
<li>
  <div align="justify"><strong>{NEW_FOR}</strong> shows how many days ago a product was added. 'NEW! Arrived just
        {NEW_FOR} days ago!' will be shown as 'NEW! Arrived just X days ago!', where X is the
        amount of days.  </div>
</li>
<li>

  <div align="justify"> <strong>{BR}</strong> — new line. The extension automatically breaks messages into several lines if they are
        too long. If you need to display some word or phrase in a separate line, please use {BR}
  variable. </div>
</li>

<div align="justify">You are able to select background image for <strong>text</strong> label. Then, customize <strong>Fonts size</strong> (e.g. 12pt, 15pt, etc) and <strong>Font color</strong>, <strong>Text position</strong> (Right, Left, Center).</div>
   </ul> 
   

<p><figure class="img-polaroid"><img src="img/magento/text.png" alt="" /></figure></p>


<br>
<p align="justify">In case you've chosen the <strong>image</strong> label type you should upload an image for your label and choose <strong>Label Position</strong> (Right/Top, Left/Top, Center/Top, Left/Middle, Right/Middle, Center/Middle, Left/Bottom, Right/Bottom, Center/Bottom). Then, customize <strong>Label css class</strong> (textbox-label, checkbox-label, etc.). <strong>Label width</strong> and <strong>Label height</strong> (e.g. 12px, 15px, etc ) and Custom CSS.</p>
<div align="justify">Note that the same options are available for both PRODUCT and CATEGORY pages. </div>
<p><figure class="img-polaroid"><img src="img/magento/image.png" alt="" /></figure></p>



<div class="alert alert-info">
    <p><strong>Advise</strong></p>
    <p>You can use different labels for category and product pages (e.g. smaller image for category page and a bigger one for product page).</p>
</div>

<h5>CONDITIONS TAB</h5>
<p align="justify">As for the <strong>CONDITIONS</strong> tab, it lets you make the selection of product to apply the label to more precise. 
<p><figure class="img-polaroid"><img src="img/magento/cond.png" alt="" /></figure></p>

The dab is divided into several sections:

<ol class="marked-list">
    <p><li>
        <div align="justify"><strong>Conditions;</strong>
        <br>In the first one, you have to deal with the expression if ALL/ANY of these conditions are TRUE/FALSE. You also can add the condition.
        </div>
        <p align="justify"><figure class="img-polaroid"><img src="img/magento/cons.png" alt="" /></figure></p>
    </li>
    </p>
   
    <p>    
    <li>
       <div align="justify"><strong>Date Range;</strong>
        <br>The second section is designed to specify date range. It sets a time period during which the label will be displayed on your online store website. Activate the feature, and you will get 4 new fields: <strong>From Date, From Time, To Date, To Time</strong>.  
      </div>
        <p align="justify"><figure class="img-polaroid"><img src="img/magento/date.png" alt="" /></figure></p>
    </li></p>
    
    <p><li>
        <div align="justify"><strong>State;</strong>
        <br>Next, fine-tune the state of items you are going to apply the label to. In the State section, there are just two options: <strong>Is New</strong> and <strong>Is on Sale</strong>. For each one you should choose one of three parameters: 'No Use' (the option will be ignored), 'Yes' (the label will be applied only to products that are set as new/on sale), 'No' (the label will be applied only to products that are NOT set as new/on sale).
        </div>
        <p align="justify"><figure class="img-polaroid"><img src="img/magento/state.png" alt="" /></figure></p>
    </li></p>
    
    <p><li>
        <div align="justify"><strong>Stock;</strong>   
        <br>The same is about the <strong>Stock</strong> section, but there is only one option here, so you should decide what role does a stock status play. You need to choose: 'No Use' (the option will be ignored), 'Yes' (out of stock), 'No' (in stock).  
        </div>
        <p align="justify"><figure class="img-polaroid"><img src="img/magento/stock.png" alt="" /></figure></p>
    </li></p>
   
    <p><li>
        <div align="justify"><strong>Price Range;</strong>
        <br>The next section is Price Range. After activating the appropriate feature, you can choose what price (Base Price, Special Price, Final Price, Final Price Including Tax, Starting From Price, or Starting To Price) and price diapason must be taken into account by the algorithm.
      </div>
            <figure class="img-polaroid">
              <div align="justify"><img src="img/magento/price.png" alt="" /></div>
            </figure>
    </li>
  <div align="justify">
      </p>
      
    </div>
  <li><p align="justify">
        <strong>Customer Groups;</strong>  
        <br>The final section lets you choose customer groups that will see the label (NOT LOGGED IN, General, Wholesale, Retailer). 
         <p><figure class="img-polaroid"><img src="img/magento/gro.png" alt="" /></figure></p>
    </li></p>       
   
</ol>


<div class="alert alert-info">
<p><strong>Advise</strong></p>
   Don't forget to click <strong>Save</strong> button after you finish the customization. 
   <p><figure class="img-polaroid"><img src="img/magento/save.png" alt="" /></figure></p>
</div>
 



























    
 
    
    















 

