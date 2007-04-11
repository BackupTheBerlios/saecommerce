{if !$smarty.get.cPath}
<h1>What's New Here?</h1>
<p>
	Suspendisse potenti. Suspendisse feugiat sapien at nulla. Maecenas at erat. Pellentesque vehicula erat vitae enim. Pellentesque et libero id sapien sagittis consectetuer. Ut vitae urna a odio bibendum mattis. Duis molestie. Quisque varius, tortor ut consectetuer porttitor, orci lectus consectetuer elit, ut porta nisi dolor sed nisl. Quisque at risus. In vehicula laoreet arcu.
</p>
{/if}
{if $numberOfCategories}
<table width="100%">
<tr>
  <td>
    <table width="100%" cellspacing="0"
    cellpadding="0" class="main">
      <tr>
        <td>
          <table width="100%"
          cellspacing="0" cellpadding="0"
          class="headingCateg">
            <tr>
              <td class="tdheadingCateg2">
                <img
                src="images/arrow.gif" /><img
                 src="images/arrow.gif" /><img
                 src="images/arrow.gif" />&nbsp;&nbsp;Categories
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table width="100%" cellspacing="0"
          cellpadding="0" height="1">
            <tr>
              <td>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table width="100%"
          cellspacing="10" cellpadding="5"
          class="NewProduct">
          	{foreach name=categories from=$categories item=category}
          	{if $smarty.foreach.categories.iteration % 3 == 1}
            <tr align="center">
            {/if}
              <td>
	           {capture name=cPath}{sacpath id=$category.categories_id}{/capture}
              	<a href="{saurl page=default cPath=$smarty.capture.cPath}"><img src="{sabasehref}images/{$category.categories_image}" class="productimagelink" /></a>
              	<br/>
                <a href="{saurl page=default cPath=$smarty.capture.cPath}" class="linkmain">{$category.categories_name}</a>
              </td>
            {if $smarty.foreach.categories.iteration % 3 == 0}
            </tr>
            {/if}
            {/foreach}            
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
</table>
{/if}
{if $numberOfProducts}
<table width="100%" border="0">
<tr>
  <td>
    <table bgcolor="#EFD07E" width="100%" border="1" style="border: 1px solid gray;border-collapse:collapse">
      <tr>
        <td class="box">
          <img
          src="images/arrow.gif" />&nbsp;Let's See What We Have Here
        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td>
    	{foreach from=$products item=product}
    	<table width="100%" bgcolor="#DDD7C9" style="border: 1px solid gray;border-collapse:collapse"> 
	    	<tr>
	    		<td class="box"><img src="{sabasehref}images/{$product.products_image}"></td>
	    		<td class="box">{$product.products_name}</td>
	    		<td class="box">{sacurrency amount=$product.products_price}</td>
	    		<td align="right">
	    			<table cellpadding="0" cellspacing="0">
	    				<tr>
	    					<td class="tdbutton">
	    						<img src="images/arrow.gif" />
	    						<a href="{saurl page=cart}" class="linkmain">&nbsp;Buy Now!&nbsp;&nbsp;</a>
	    					</td>
				    	</tr>
				    </table>
				</td>
			</tr>
    	</table>    	
    	{/foreach}
  </td>
</tr>
</table>
{/if}
{if !$numberOfCategories && !$numberOfProducts && $smarty.get.cPath}
There are no products to list in this category.
{/if}