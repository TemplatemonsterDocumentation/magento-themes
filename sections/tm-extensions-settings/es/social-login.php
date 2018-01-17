<h3 class="item1">Social Login</h3>
<h4>General</h4>
<div align="justify">The General section allows you to enable or disable the module whenever you need. Even after disabling the module, all the changes made previously will be preserved. <br>
  In order to configure the module, navigate to <strong>Stores > Settings > Configuration</strong> section. <br>
  
<p>
  <figure class="img-polaroid"><img src="img/magento/stores.png" alt="" /></figure>  
</p>
  Choose the <strong>TEMPLATEMONSTER > Social login</strong> in the left side menu to go to the module settings interface.
</div>
<figure class="img-polaroid">
  <img src="img/magento/social-1.jpg" alt="" />
</figure>

<table  class="options-table">
  <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>turn on to enable the module.</td>
    </tr>      
</table>

<h4>Social Providers</h4>
Here you can customize each social media platform separately. Just fill in several fields to make the login button appear on the site.

<h5><strong>Google+</strong></h5> 
This section allows you to enable the Google+ login button.   
<figure class="img-polaroid"><img src="img/magento/social-2.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>turn on to enable the module.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Client id</strong></td>
        <td>-</td>
        <td>Google+ client id.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Client secret</strong></td>
        <td>-</td>
        <td>Google+ client secret.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Redirect Uri</strong></td>
        <td>-</td>
        <td>use this uri to configure your application on Google Developers Console.</td>
    </tr>       
    <tr>
        <td class="col-1"><strong>Sort order</strong></td>
        <td>-</td>
        <td>sort order of the Google+ icon on frontend.</td>
    </tr>           
</table>
<h4>How to obtain Google Client ID and Secret? </h4>
    <p>Following are the simple steps which can help you to get your Client ID and Client Secret for your Web Apps. </p>
    <ol class="marked-list">
      <li>
        <div align="justify"> You need to create a Project in Google Developer Console. Click <a title="https://console.developers.google.com/project" href="https://console.developers.google.com/project" target="_blank">here</a> to go to Console page. It will ask you to   login with your Google Account if you are not logged in already. If you   have created Projects in Google Developers Console before you will see   list of already created projects. If not, press <strong>Project</strong> button  &gt; <strong>Create project</strong>. </div>
      </li>
     <figure class="img-polaroid">
       <img src="img/magento/1.png" />
      </figure>
      <li>A popup will appear, where you will enter   &lsquo;Project Name&rsquo; and &lsquo;Project ID&rsquo; which will help you to recognize your   project in console.</li> 
       <figure class="img-polaroid"> <img src="img/magento/2.png" /></figure>
       
      <li>By clicking on <strong>Create</strong> button, Your project will be created and redirects you to your projects list in Console.</li>
      <li>Clicking on the project name which you have recently created will take you to your Project Dashboard.</li>
      <li>Go to   <strong>Other popular APIs</strong> and Select &lsquo;Analytics API&rsquo; and Turn in &lsquo;ON&rsquo;.</li> 
      <figure class="img-polaroid"><img src="img/magento/3.png" /></figure>
     
      <li>  See left side navigation menu. Go to <strong>Credentials</strong>. </li>
           <figure class="img-polaroid"><img src="img/magento/4.png" /></figure>
      <li>Click on <strong>Create Credentials</strong> &gt; <strong>OAuth 2.0 Client ID</strong>.</li> 
      
        <figure class="img-polaroid"><img src="img/magento/5.png" /></figure>
      <li>
        <div align="justify"> To create an OAuth client ID, you must first set a product name on the consent screen 
        Click on <strong>Configure Consent Screen.</strong>and </div>
      </li><figure class="img-polaroid"><img src="img/magento/6.png" /></figure>
      <li>
        <div align="justify">Enter your Product name &ldquo;My Project&rdquo; and Save it.   </div>
      </li>
      <figure class="img-polaroid"><img src="img/magento/7.png" /></figure> 
              
      <li>Once the Consent Screen is filled and saved,   the page will redirect itself prompting that the data is saved and   ready for next step. <br />
      Select &quot;Web Application&quot; and few other options are enabled.</li>
     
  <figure class="img-polaroid">
   <img src="img/magento/8.jpg" alt="" />
  </figure>
      
        
     
      <li>
        <div align="justify">Leave the name AS IS. At &quot;Authorized JavaScript origins&quot; fill in the host address of your web application. This can only be one URL. At &quot;Authorized redirect URIs&quot; fill in the URL path where you want to handle the authentication.  
        Click on <strong>Create</strong> button. </div>
      </li>
      <li>You will see a popup containing Client ID   and Client Secret. Copy that and paste it in the Google Analytics   Profile Setup of the application.</li> 
            <figure class="img-polaroid"><img src="img/magento/9.png" /></figure> 
      <li> 
       Next steps are required, only if you   forgot to capture your Client ID and Client Secret as part of previous   screen or if you want to retrieve later.
        Go to left side navigation menu &gt; <strong>Credentials</strong>. </li>  
        Click on Name [Web client 1]. 
    
        <figure class="img-polaroid">
   <img src="img/magento/10.png" alt="" />
  </figure>
      <li>  <div align="justify">      From this screen you can get your Client ID   and Client Secret and use them in creating the profile in your   application.</div></li>
     
       <figure class="img-polaroid">
   <img src="img/magento/11.png" alt="" />
  </figure>
      
</ol>
<h5><strong>Facebook Options</strong></h5>
This section allows you to enable the Facebook login button.   
<figure class="img-polaroid"><img src="img/magento/social-3.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>turn on to enable the module.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Client id</strong></td>
        <td>-</td>
        <td>Facebook client id.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Client secret</strong></td>
        <td>-</td>
        <td>Facebook client secret.</td>
    </tr>      
    <tr>
        <td class="col-1"><strong>Sort order</strong></td>
        <td>-</td>
        <td>sort order of the Facebook icon on frontend.</td>
    </tr>           
</table>
<p>To obtain a <strong>Client secret</strong>  from Facebook  just follow the steps below.</p>
<ol class="marked-list">
  <li>Go to <a href="https://developers.facebook.com" target="_blank">developers.facebook.com</a> and click on <strong>Log In</strong> in the top right.  Log in using your personal Facebook credentials.</li>
<p align="justify"><em style="line-height: 1.714285714; font-size: 1rem;"><strong>Note:</strong> You cannot log in to the Developer site using a Facebook Page or   Business account. You must use the username and password from your   personal Facebook profile. Facebook doesn&rsquo;t allow businesses to register   as developers, only individuals.</em></p>
<p> <figure class="img-polaroid"><img src="https://smashballoon.com/wp-content/uploads/2013/05/1-1.jpg"/></figure></p>
  <li>If this is your first time signing in to the Facebook Developer portal then click on <strong>Register</strong>.   Registering is a quick an easy process which will take less than a   couple of minutes.  If you&rsquo;re already registered then you can skip ahead   to step 7.</li>

<p><figure class="img-polaroid"><img src="https://smashballoon.com/wp-content/uploads/2013/05/2-1.jpg"/></figure></p>

<li>  Accept the Facebook terms and click <strong>Next</strong>.</span></p>
  </li>

<p><figure class="img-polaroid"><img src="https://smashballoon.com/wp-content/uploads/2013/05/3-1.jpg" /></figure></p>

  <li>Enter your phone number to confirm your account.</li>

<p><figure class="img-polaroid"><img src="https://smashballoon.com/wp-content/uploads/2013/05/4-1.png"/></figure></p>

  <li>Facebook will send you an automated text message containing a confirmation code. Enter it in the box and click <strong>Register</strong>.</li>

<p><figure class="img-polaroid"><img src="https://smashballoon.com/wp-content/uploads/2013/05/5-1.png" /></figure></p>

  <li>You&rsquo;re now registered as a Facebook Developer. Click <strong>Done</strong>.</li>

<p><figure class="img-polaroid"><img src="https://smashballoon.com/wp-content/uploads/2013/05/6-1.jpg" /></figure></p>

  <li>Hover over <strong>My Apps</strong> and then click on <strong>Add a New App.</strong></li>

<p><figure class="img-polaroid"><img src="https://smashballoon.com/wp-content/uploads/2013/05/add-new-app.jpg" /></figure></p>

  <li>Click on <strong>basic setup.</strong></li>

<p><figure class="img-polaroid"><img src="https://smashballoon.com/wp-content/uploads/2013/05/7-1.png" /></figure></p>

  <li>Enter your <strong>App Name</strong>. This can be anything you like. Choose a <strong>Category</strong>. Click <strong>Continue</strong>.</li>

<p><figure class="img-polaroid"><img src="https://smashballoon.com/wp-content/uploads/2013/05/8-1.png" /></figure></p>

  <li>Complete the Security Check and click <strong>Submit</strong>.</li>

<p><figure class="img-polaroid"><img src="https://smashballoon.com/wp-content/uploads/2013/05/9-1.png" alt="Complete the Facebook security check"  /></figure></p>

  <li>Your App should now be set up.<span style="font-size:1rem; "> <strong>C</strong></span><strong><span style="font-size:1rem; ">opy and paste your </span>App Secret<span style="font-size:1rem; "> into the required field.</span></strong></li></ol>

<p><figure class="img-polaroid"><img src="https://smashballoon.com/wp-content/uploads/2013/05/10-1.png" /></figure></p><blockquote><p>This information was taken from the <a href="https://smashballoon.com/custom-facebook-feed/access-token/ ">official sources</a>.</p></blockquote>
<h5><strong>Instagram Options</strong></h5>
This section allows you to enable the Instagram login button.   
<figure class="img-polaroid"><img src="img/magento/social-4.jpg" alt="" /></figure>

<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>turn on to enable the module.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Client id</strong></td>
        <td>-</td>
        <td>Instagram client id.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Client secret</strong></td>
        <td>-</td>
        <td>Instagram client secret.</td>
    </tr>      
    <tr>
        <td class="col-1"><strong>Sort order</strong></td>
        <td>-</td>
        <td>sort order of the Instagram icon on frontend.</td>
    </tr>           
</table>


<h5>How to Get Instagram Client ID and Client Secret</h5>
<p>First things   first you need and Instagram profile. If you don&rsquo;t have it then it&rsquo;s   obligatory to register in social media. You have to complete 4 main   steps for getting the desired keys:</p>
<ul class="marked-list">
  <li>Visit the page <a href="http://instagram.com/developer/clients/register/" target="_blank" rel="nofollow">http://instagram.com/developer/clients/register/</a>;</li>
  <li>Log in Instagram;</li>
  <li>Fill in a developer signup;</li>
  <li>Register an application and a new client;</li>
</ul>
<blockquote>To do all steps correctly we&rsquo;ve prepared the detailed instruction with attached photos of the process.</blockquote>
<h5>1. Visit The Mentioned Webpage</h5>
<p>While opening this link you see the next page [if you don&rsquo;t log in Instagram].</p>
<figure class="img-polaroid"><img src="https://elfsight.com/wp-content/uploads/2016/05/instagram-welcome-window.jpg" /></figure>
<p>The first thing you should do is to log in as an Instagram user.</p>
<h5>2. Log in Instagram</h5>
<p>To get a Client ID and Client Secret you need to be registered in Instagram. Create an account or log in to proceed the guide.</p>
<figure class="img-polaroid"><img src="https://elfsight.com/wp-content/uploads/2016/05/instagram-log-in.jpg" /></figure>
<h5>3. Fill in A Developer Signup</h5>
<p align="justify">As   you are going to implement the special tool on your website, you have   to sign up as a developer. After login in Instagram, you will see the   next window.</p>
<figure class="img-polaroid"><img src="https://elfsight.com/wp-content/uploads/2016/05/instagram-developer-signup.jpg"/></figure>
<p>Check all the fields on the web page:</p>
<ol class="marked-list">
  <li>Your website – the URL where you are going to implement the Instagram feed</li>
  <li>Phone number – any phone number</li>
  <li>What do you want to build with API – any short description</li>
</ol>
<p>After this signup the Instagram Developer Documentation will appear where you will see greetings and the following overview.</p>
<figure class="img-polaroid"><img src="https://elfsight.com/wp-content/uploads/2016/05/instagram-greetings.jpg"  /></figure>
<p align="justify">Now   you can register your application as a developer. To do that click on   the link marked above. Instagram will notify you that at the moment you   don&rsquo;t have any apps and will offer you to create a new one.</p>
<p>
  <figure class="img-polaroid"><img src="https://elfsight.com/wp-content/uploads/2016/05/instagram-manage-clients.jpg" /></figure>
</p>
<p>The next step is to authorize your new application and new client.</p>
<h5>4. Register A New Client ID</h5>
<p>The next page has more fields for filling so be attentive!</p>
<p>
  <figure class="img-polaroid"><img src="https://elfsight.com/wp-content/uploads/2016/05/instagram-new-client-id.jpg"/></figure>
</p>
<p>Check all the fields on the web page:</p>
<ol class="marked-list">
  <li>Application name – choose any appropriate name, which fits Instagram requirements</li>
  <li>Description – any short description</li>
  <li>Website URL – has to be <a href="https://elfsight.com/service/generate-instagram-access-token/" target="_blank">https://elfsight.com/service/generate-instagram-access-token/</a></li>
  <li>Valid redirect URIs – have to be <a href="https://elfsight.com/service/generate-instagram-access-token/" target="_blank">https://elfsight.com/service/generate-instagram-access-token/</a></li>
  <li>Contact email – so that Instagram can stay in touch with you</li>
</ol>
<blockquote>Now confirm your data for the final result.</blockquote>
<h5>5. Successful Result</h5>
<p>The mission accomplished! You&rsquo;ve got your all-new Instagram Client ID and Client Secret!</p>
<p><figure class="img-polaroid"><img src="https://elfsight.com/wp-content/uploads/2016/05/instagram-client-id.jpg" /></figure> </p>
<p>Here is your Client ID and Client Secret </p>
<p align="justify">Note that if you are going to work with square photos on your website then turn on the <strong>non-square media option</strong>. Just edit your client and find &ldquo;Migrations&rdquo; section. Don&rsquo;t forget to click &ldquo;Update Plugin&rdquo;.</p>
<blockquote><p>This information was taken from the <a href="https://www.instagram.com/developer/authentication/ ">official sources</a>.</p></blockquote>
<h5><strong>Twitter Options</strong></h5>
This section allows you to enable the Twitter login button.   
<figure class="img-polaroid"><img src="img/magento/social-5.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>turn on to enable the module.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Client id</strong></td>
        <td>-</td>
        <td>Twitter client id.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Client secret</strong></td>
        <td>-</td>
        <td>Twitter client secret.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Redirect Uri</strong></td>
        <td>-</td>
        <td>use this uri to configure your application on Twitter Apps.</td>
    </tr>       
    <tr>
        <td class="col-1"><strong>Sort order</strong></td>
        <td>-</td>
        <td>sort order of the Twitter icon on frontend.</td>
    </tr>           
</table>
<ol class="marked-list">
  <li><span class="wysiwyg-font-size-medium">Go to <a title="https://dev.twitter.com/apps/new" href="https://dev.twitter.com/apps/new">https://dev.twitter.com/apps/new</a> and log in, if necessary</span></li>
  <li><span class="wysiwyg-font-size-medium">Supply the necessary required fields, accept the Terms Of Service, and solve the CAPTCHA.</span></li>
  <li><span class="wysiwyg-font-size-medium">Submit the form</span>.</li>
  <li><span class="wysiwyg-font-size-medium">Go to the API Keys tab, there you will find your Consumer key and Consumer secret keys.</span></li>
  <li><span class="wysiwyg-font-size-medium">Copy the consumer key [API key] and consumer secret from the screen into your application.</span></li>
</ol>