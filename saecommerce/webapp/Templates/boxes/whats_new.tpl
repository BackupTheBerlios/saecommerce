<table width="150" border="0">
<tr>
  <td>
    <table bgcolor="#EFD07E" width="100%"
    border="1"
    style="border: 1px solid gray;border-collapse:collapse">
      <tr>
        <td class="box">
          <img
          src="images/arrow.gif" />&nbsp;Whats'
          new
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
        <td class="box"
        style="border-bottom:1px solid grey"
         align="center">
          <img
          src="{sabasehref}images/{$product.products_image}" /><br >

           <a href="{saurl page=product pId=$product.products_id}">{$product._products_id.products_name}</a><br >
           {sacurrency amount=$product.products_price}
        </td>
      </tr>
    </table>
  </td>
</tr>
</table>