<table width="150" border="0">
<tr>
  <td>
    <table bgcolor="#EFD07E" width="100%"
    border="1"
    style="border: 1px solid gray;border-collapse:collapse">
      <tr>
        <td class="box">
          <img
          src="images/arrow.gif" />&nbsp;Best
          sellers
        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" bgcolor="#DDD7C9"
    style="border: 1px solid gray;border-collapse:collapse">
      <tr>
        <td>
          <table width="100%"
          cellspacing="0" cellpadding="0"
          class="Category_link">
            <tr>
              <td>
              	{foreach name="best_sellers" from=$products item=product}
                	<a href="{saurl page=product pId=$product.products_id}" class="linksubmain">{$smarty.foreach.best_sellers.iteration}.&nbsp;{$product._products_id.products_name}</a>
                	<br/>
				{/foreach}
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
</table>