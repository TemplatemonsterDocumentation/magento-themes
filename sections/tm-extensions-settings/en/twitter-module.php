<h3>Twitter module</h3>
	<p>Twitter module allows to display tweets feed on your store. <br>					
	All configuration options are available in admin panel in <strong>System > Configuration > Templatemonster > Twitter</strong> section.</p>
	<figure class="img-polaroid"><img src="img/magento/twitter-1.jpg" alt="" /></figure>					
	<p>The module has the following options:</p>			
	<table  class="options-table">
		<tr>
			<td class="col-1"><strong>Widget ID</strong></td>
			<td>-</td>
			<td>Twitter widget identifier. The identifier can be received after the registration of your widget <a href="https://twitter.com/settings/widgets/new" target="_blank">account</a> in settings.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Account name</strong></td>
			<td>-</td>
			<td>Twitter account username whose feed you want to display.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Color Scheme</strong></td>
			<td>-</td>
			<td>widget skin color. It can be light or dark.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Layout enhancements</strong></td>
			<td>-</td>
			<td>allows to partially hide elements of widget formatting.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Tweet limit</strong></td>
			<td>-</td>
			<td>amount of tweets displayed in the feed.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Link color</strong></td>
			<td>-</td>
			<td>allows to change the links color in the feed.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Border color</strong></td>
			<td>-</td>
			<td>allows to change the border color in feed.</td>
		</tr>			
		<tr>
			<td class="col-1"><strong>Height</strong></td>
			<td>-</td>
			<td>height of the widget window.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Width</strong></td>
			<td>-</td>
			<td>the width of the widget window.</td>
		</tr>
	</table>
	<p>By default, the block is displayed in the left column. But there are three display options: <strong>left</strong>, <strong>right</strong> and <strong>footer</strong>. <br>
		In order to change the position of block, you need to open <strong>tm_twitter.xml</strong> file located in the <strong>/app/design/frontend/tm_themes/themeXXX/layout</strong> folder of your installation.</p>
	This file includes three <strong><em>reference</em></strong> blocks with <strong>name="left"</strong> (name="right", name="footer") parameters.
	<pre class="prettyprint linenums">
&lt;reference name="left"&gt;
	&lt;block type="core/template" name="tm_twitter_timeline" as="tm_twitter_timeline" template="tm/twitter/twitter_timeline.phtml"/&gt;
&lt;/reference&gt;
&lt;!-- &lt;reference name="footer"&gt;
	&lt;block type="core/template" name="tm_twitter_timeline" as="tm_twitter_timeline" template="tm/twitter/twitter_timeline.phtml"/&gt;
&lt;/reference&gt;
&lt;reference name="right"&gt;
	&lt;block type="core/template" name="tm_twitter_timeline" as="tm_twitter_timeline" template="tm/twitter/twitter_timeline.phtml"/&gt;
&lt;/reference&gt; --&gt;</pre>
<p>Two blocks are commented out in this file. And only one block with <strong>name="left"</strong> is not commented out. It displays the block in the left column. <br>
	If you need to display the module in footer, you need to follow these instructions:</p>

<ol class="index-list">
	<li>Uncomment lines of code for <strong>name="footer"</strong> block (the last one in the example of the code above) and comment out the <strong>name="left"</strong> block (the first one in the example of code above).</li>
	<li>Open <strong>footer.phtml</strong> file located in the <strong>app/design/frontend/tm_themes/themeXXX/template/page/html</strong> folder.</li>
	<li>Paste the following code to the needed place:
		<pre class="prettyprint linenums">&lt;?php echo $this-&gt;getChildHtml('tm_twitter_timeline') ?&gt;</pre>	
	</li>
</ol>
<p>Now the Twitter block will be displayed in footer.</p>
		