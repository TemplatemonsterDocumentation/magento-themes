<h3>Facebook like box</h3>
<p>The given module allows to display Facebook like box on your Magento store.<br>					
You can configure it via Magento Admin Panel in <strong>System > Configuration > Templatemonster > Facebook</strong> section.</p>
<figure class="img-polaroid"><img src="img/magento/facebook-2.jpg" alt="" /></figure>
<p>The module has the following options:</p>			
<table class="options-table">
	<tr>
		<td class="col-1"><strong>App ID</strong></td>
		<td>-</td>
		<td>the identifier of your Facebook account. In order to use Facebook Like box, you need to register your account. You can follow the link for further <a href="https://developers.facebook.com/" target="_blank">instructions</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Page URL</strong></td>
		<td>-</td>
		<td>the URL of the Facebook account page.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Show Faces</strong></td>
		<td>-</td>
		<td>allows you to hide or display the photo of the user who liked the page.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Hide cover</strong></td>
		<td>-</td>
		<td>allows to remove the background image in header.</td>
	</tr>	
	<tr>
		<td class="col-1"><strong>Show Posts</strong></td>
		<td>-</td>
		<td>allows you to enable/disable the recent posts on the page.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Height</strong></td>
		<td>-</td>
		<td>the height of the module area.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Width</strong></td>
		<td>-</td>
		<td>the width of the module area.</td>
	</tr>				
</table>
<p>By default, the module is displayed in the left column. But there are three display options: <strong>left</strong>, <strong>right</strong> and <strong>footer</strong>.
	In order to change the position of the block, you need to open <strong>tm_facebook.xml</strong> file located in <strong>app/design/frontend/default/themeXXX/layout</strong> folder of your installation.</p>

This file includes three <strong><em>reference</em></strong> blocks with <strong>name="left"</strong> (name="right", name="footer") parameters.
<pre class="prettyprint linenums">
&lt;reference name="left"&gt;
	&lt;block type="core/template" name="tm_facebook_like_left" as="tm_facebook_like_left" template="tm/facebook/facebook_like.phtml"/&gt;
&lt;/reference&gt;
&lt;!-- &lt;reference name="right"&gt;
	&lt;block type="core/template" name="tm_facebook_like_right" as="tm_facebook_like_right" template="tm/facebook/facebook_like.phtml"/&gt;
&lt;/reference&gt; --&gt;
&lt;!-- &lt;reference name="footer"&gt;
	&lt;block type="core/template" name="tm_facebook_like_footer" as="tm_facebook_like_footer" template="tm/facebook/facebook_like.phtml"/&gt;
&lt;/reference&gt; --&gt;</pre>
<p>Two blocks are commented out in this file. And only one block with <strong>name="left"</strong> is not commented out. It displays the module in the left column. <br>
		If you need to display the module in footer, you need to follow these instructions:
</p>
<ol class="index-list">
	<li>Uncomment lines of code for <strong>name="footer"</strong> block (the last one in the example of the code above) and comment out the block <strong>name="left"</strong> (the first one in the example of the code above).</li>
	<li>Open the file <strong>footer.phtml</strong>located in the <strong>app/design/frontend/default/themeXXX/template/page/html</strong> folder.</li>
	<li>Paste the following code to the needed place:
<pre class="prettyprint linenums">&lt;?php echo $this-&gt;getChildHtml('tm_facebook_like_footer') ?&gt;</pre>	
	</li>
</ol>
<p>Now the Facebook block will be displayed in footer.</p>
		