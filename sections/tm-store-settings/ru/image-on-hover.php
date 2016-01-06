<h3>Смена картинки продукта при ховере</h3>
<p>В начале необходимо добавить атрибут <strong>image_hover</strong>.</p>
<ol class="index-list">
	<li>
		Зайдите на вкладку <strong>Catalog -> Attributes -> Manage Attributes</strong> и нажмите кнопку <strong>Add New Attribute</strong>.<a class="pretty_image" href="img/magento/image-on-hover-1.jpg"><figure class="img-polaroid"><img src="img/magento/image-on-hover-1.jpg" alt="" /></figure></a>
	</li>
	<li>
		В поле <strong>Attribute Code</strong> введите значение <strong>image_hover</strong>.<br>
		А так же в поле <strong>Catalog Input Type for Store Owner</strong> выберите значение <strong>Media Image</strong>.
		<a class="pretty_image" href="img/magento/image-on-hover-2.jpg"><figure class="img-polaroid"><img src="img/magento/image-on-hover-2.jpg" alt="" /></figure></a>
	</li>
	<li>
		Перейдите на вкладку <strong>Manage Label / Options</strong> слева и в поле <strong>Admin</strong> введите любое значение (например: Hover image).
		<a class="pretty_image" href="img/magento/image-on-hover-3.jpg"><figure class="img-polaroid"><img src="img/magento/image-on-hover-3.jpg" alt="" /></figure></a>
	</li>
</ol>

<p>Включить смену картинки при ховере можно для каждого отдельного продукта. Для того, чтобы это сделать, вам нужно зайти в продукт и перейти на вкладку <strong>Images</strong>. В колонке <strong>Hover image</strong> отметить нужную картинку. </p>
<div class="alert alert-warning">
	<span>
		Обратите внимание, что данный функционал не будет работать для продуктов с Configurable Swatches.
	</span>
</div>
<a class="pretty_image" href="img/magento/image-on-hover.jpg"><figure class="img-polaroid"><img src="img/magento/image-on-hover.jpg" alt="" /></figure></a>
<p>
	После проделанных манипуляций вам необходимо перейти в вкладку <strong>TM Store settings -> Settings</strong>. В секциях <strong>Grid View</strong> и <strong>Homepage Grid View</strong> для поля <strong>Type of the product's image preview:</strong> выбрать значение <strong>Hover images</strong>.
</p>
