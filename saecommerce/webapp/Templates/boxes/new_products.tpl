<table>
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
                 src="images/arrow.gif" />&nbsp;&nbsp;New
                products&nbsp;
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table cellspacing="0"
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
          	{foreach name=new_products from=$products item=product}
          	{if $smarty.foreach.new_products.iteration % 2 == 1}
            <tr align="center">
            {/if}
              <td width="50%">
                <table width="200"
                class="NewProduct" id="product3">
                  <tr align="center">
                    <td>
                      <a href="{saurl page=product productId=$product.products_id}"><img
                      src="{sabasehref}images/{$product.products_image}"
                       class="productimagelink" /></a>

                    </td>
                    <td>
                      <a href=""
                      class="linkmain">{$product.products_name}</a><br >

                       {sacurrency amount=$product.products_price}<br >
                       <br >
                    </td>
                  </tr>
                </table>
              </td>
            {if $smarty.foreach.new_products.iteration % 2 == 0}
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