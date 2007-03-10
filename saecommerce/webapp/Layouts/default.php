<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  	<base href="<?= SAUrl::baseHref() ?>" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>
    </title>
    <script type="text/javascript" src="yui/yahoo-dom-event/yahoo-dom-event.js" ></script>
    <script type="text/javascript" src="yui/dragdrop/dragdrop-min.js" ></script>
    <script src="yui/dom/dom-min.js"></script>
    <script>
    	YAHOO.util.DDM.mode = YAHOO.util.DDM.INTERSECT;
    	var ddProduct3 = new YAHOO.util.DDProxy("product3");
    	var ddCart = new YAHOO.util.DDTarget("cart");

		ddProduct3.onDragDrop = function(e, id) {
			alert('droped');
		}
    	ddProduct3.onMouseUp = function(e) {
    		var el = this.getEl();
	    	el.style.top = 0;
	    	el.style.left = 0;
    	}
    </script>

  </head>
  <body leftmargin="0" topmargin="0" bottommargin="0">
    <table cellpadding="0" cellspacing="0" width="790"
    align="center" height="100%"
    style="border: 1px solid black; border-collapse: collapse">
      <tr>
        <td>
          <table width="100%" height="100%" bgcolor="white"
          border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top" height="130">
                <!-- header -->
                <table width="100%" height="130" cellpadding="0"
                cellspacing="0">
                  <tr>
                    <td width="100%" class="tdbannerrepeat">
                      <img src="images/logob.gif" align="bottom" />

                    </td>
                    <td align="right">
                      <img src="images/banner.gif" />
                    </td>
                    <td>
                      <table cellpadding="0" cellspacing="0">
                        <tr>
                          <td>
                            <img src="images/bannertop4.gif" />
                          </td>
                        </tr>
                        <tr height="68px">
                          <td class="tdbottomleftrepeat">
                            <table width="100%" cellpadding="0"
                            cellspacing="3">
                              <tr>
                                <td class="search" colspan="2">
                                  Quick Find
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input type="text"
                                  name="email_address"
                                  class="coolinput" size="13"
                                  value="" />
                                </td>
                                <td width="100%">
                                  <input type="image"
                                  src="images/buttonGo.gif" />
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                <!-- end header -->
                <!-- menu top -->
                <table class="mainline" cellpadding="0"
                cellspacing="0">
                  <tr>
                    <td align="right">
                      <table cellpadding="0" cellspacing="10"
                      class="mainlinetable">
                        <tr>
                          <td class="tdbutton" align="center" id="top_menu">
                            <img src="images/arrow.gif" /><a
                            href=""
                            class="linkmain">&nbsp;Home&nbsp;&nbsp;</a>

                          </td>
                          <td class="tdbutton" align="center">
                            <img src="images/arrow.gif" /><a
                            href=""
                            class="linkmain">&nbsp;Login&nbsp;&nbsp;</a>

                          </td>
                          <td class="tdbutton">
                            <img src="images/arrow.gif" /><a
                            href="" class="linkmain">&nbsp;Shopping
                            Cart&nbsp;&nbsp;</a>
                          </td>
                          <td class="tdbutton">
                            <img src="images/arrow.gif" /><a
                            href=""
                            class="linkmain">&nbsp;Checkout&nbsp;&nbsp;</a>

                          </td>
                          <td class="tdbutton">
                            <img src="images/arrow.gif" /><a
                            href=""
                            class="linkmain">&nbsp;Members&nbsp;&nbsp;</a>

                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                <!-- end menu top -->
              </td>
            </tr>
            <tr>
              <td valign="top" height="1">
                <!-- login -->
                <table cellspacing="0" cellpadding="3" width="100%"
                style="border-bottom:1px solid black; border-collapse: collapse">
                  <!-- loginbox //-->
                  <tr>
                    <td align="left" class="boxText">
                      <form name="login" method="post" action="">
                      </form>
                      <table width="400" cellspacing="0"
                      cellpadding="0">
                        <tr>
                          <td align="left" nowrap="nowrap"
                          class="login">
                            &nbsp;&nbsp;E-Mail Address:
                          </td>
                          <td align="left" class="login">
                            <input type="text" name="email_address"
                            class="coolinput" maxlength="96"
                            size="15" value="" />
                          </td>
                          <td align="left" class="login">
                            &nbsp;Password:
                          </td>
                          <td align="left" class="login">
                            <input type="password" name="password"
                            class="coolinput" maxlength="40"
                            size="15" value="" />
                          </td>
                          <td align="center" class="login">
                            <input type="image"
                            src="images/button.gif" alt="Sign In"
                            title=" Sign In " />
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                <!-- end login -->
              </td>
            </tr>
            <tr>
              <td valign="top">
                <!-- begin canvas -->
                <table width="100%">
                  <tr>
                    <td width="150">
                      <!-- begin categories -->
                      <table width="150" border="0">
                        <tr>
                          <td>
                            <table bgcolor="#EFD07E" width="100%"
                            border="1"
                            style="border: 1px solid gray;border-collapse:collapse">
                              <tr>
                                <td class="box">
                                  <img
                                  src="images/arrow.gif" />&nbsp;Categories
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
                                  &nbsp;
                                </td>
                                <td width="10">
                                  <img src="images/arrow.gif" />
                                </td>
                                <td class="box"
                                style="border-bottom:1px solid grey">
                                  Hardware
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  &nbsp;
                                </td>
                                <td>
                                  <img src="images/arrow.gif" />
                                </td>
                                <td class="box"
                                style="border-bottom:1px solid grey">
                                  Software
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  &nbsp;
                                </td>
                                <td>
                                  <img src="images/arrow.gif" />
                                </td>
                                <td class="box"
                                style="border-bottom:1px solid grey">
                                  DVD
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <!-- end categories -->
                      <!-- begin whats' new -->
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
                                  src="images/product1.gif" /><br >

                                   product1<br >
                                   $ 39.-
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <!-- end whats' new -->
                      <!-- begin special -->
                      <table width="150" border="0">
                        <tr>
                          <td>
                            <table bgcolor="#EFD07E" width="100%"
                            border="1"
                            style="border: 1px solid gray;border-collapse:collapse">
                              <tr>
                                <td class="box">
                                  <img
                                  src="images/arrow.gif" />&nbsp;Special
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
                                  src="images/product2.gif" /><br >

                                   product2<br >
                                   $ 39.-
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <!-- end special -->
                    </td>
                    <td valign="top" width="490">
                      <div id="content">
                      <?= $this->getContents(CONTENT_FOR_LAYOUT) ?>
                      <table>
                        <tr>
                          <td>
                            <!-- begin new products -->
                            <table width="100%" cellspacing="0"
                            cellpadding="0" class="main">
                              <tr>
                                <td>
                                </td>
                              </tr>
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
                                    <tr align="center">
                                      <td width="50%">
                                        <table width="200"
                                        class="NewProduct" id="product3">
                                          <tr align="center">
                                            <td>
                                              <a href=""><img
                                              src="images/product3.gif"
                                               class="productimagelink" /></a>

                                            </td>
                                            <td>
                                              <a href=""
                                              class="linkmain">product3</a><br >

                                               $35.99<br >
                                               <br >

                                              <table>
                                                <tr>
                                                  <td
                                                  class="tdbutton">
                                                    <img
                                                    src="images/arrow.gif" />
                                                    <a href=""
                                                    class="linkmain">
                                                    Buy now</a>
                                                  </td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                      <td width="50%">
                                        <table width="200"
                                        class="NewProduct">
                                          <tr align="center">
                                            <td>
                                              <a href=""><img
                                              src="images/product4.gif"
                                               class="productimagelink" /></a>

                                            </td>
                                            <td>
                                              <a href=""
                                              class="linkmain">product4</a><br >

                                               $35.99<br >
                                               <br >

                                              <table>
                                                <tr>
                                                  <td
                                                  class="tdbutton">
                                                    <img
                                                    src="images/arrow.gif" />
                                                    <a href=""
                                                    class="linkmain">
                                                    Buy now</a>
                                                  </td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                    <tr align="center">
                                      <td width="50%">
                                        <table width="200"
                                        class="NewProduct">
                                          <tr align="center">
                                            <td>
                                              <a href=""><img
                                              src="images/product5.gif"
                                               class="productimagelink" /></a>

                                            </td>
                                            <td>
                                              <a href=""
                                              class="linkmain">product5</a><br >

                                               $35.99<br >
                                               <br >

                                              <table>
                                                <tr>
                                                  <td
                                                  class="tdbutton">
                                                    <img
                                                    src="images/arrow.gif" />
                                                    <a href=""
                                                    class="linkmain">
                                                    Buy now</a>
                                                  </td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                      <td width="50%">
                                        <table width="200"
                                        class="NewProduct">
                                          <tr align="center">
                                            <td>
                                              <a href=""><img
                                              src="images/product6.gif"
                                               class="productimagelink" /></a>

                                            </td>
                                            <td>
                                              <a href=""
                                              class="linkmain">product6</a><br >

                                               $35.99<br >
                                               <br >

                                              <table>
                                                <tr>
                                                  <td
                                                  class="tdbutton">
                                                    <img
                                                    src="images/arrow.gif" />
                                                    <a href=""
                                                    class="linkmain">
                                                    Buy now</a>
                                                  </td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                              <!--</td>--><!--</tr>-->
                            </table>
                          </td>
                        </tr>
                      </table>
                      <!-- end new products -->
                      </div>
                    </td>
                    <td valign="top">
                      <!-- begin shopping cart -->
                      <table width="150" border="0">
                        <tr>
                          <td>
                            <table bgcolor="#EFD07E" width="100%"
                            border="1"
                            style="border: 1px solid gray;border-collapse:collapse">
                              <tr>
                                <td class="box">
                                  <img
                                  src="images/arrow.gif" />&nbsp;Shopping
                                  cart
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <table width="100%" bgcolor="#DDD7C9"
                            style="border: 1px solid gray;border-collapse:collapse" id="cart">
                              <tr>
                                <td>
                                  <table width="100%"
                                  cellspacing="0" cellpadding="0"
                                  class="Category_link">
                                    <tr>
                                      <td class="box">
                                        0 items
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <!-- end shopping cart -->
                      <!-- begin best sellers -->
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
                                        <a href=""
                                        class="linksubmain">01.
                                        blaaaaaaa</a><br >
                                         <a href=""
                                        class="linksubmain">02.
                                        blaaaaaaa</a><br >

                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <!-- end best sellers -->
                      <!-- begin currencies -->
                      <table width="150" border="0">
                        <tr>
                          <td>
                            <table bgcolor="#EFD07E" width="100%"
                            border="1"
                            style="border: 1px solid gray;border-collapse:collapse">
                              <tr>
                                <td class="box">
                                  <img
                                  src="images/arrow.gif" />&nbsp;Currencies
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
                                <td align="center">
                                  <table width="100%"
                                  cellspacing="0" cellpadding="0"
                                  class="Category_link">
                                    <tr>
                                      <td class="box">
                                        <select name="Curency"
                                        class="coolcombo">
                                          <option>
                                            USD
                                          </option>
                                          <option>
                                            EUR
                                          </option>
                                        </select>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <!-- end currencies -->
                      <!-- begin information -->
                      <table width="150" border="0">
                        <tr>
                          <td>
                            <table bgcolor="#EFD07E" width="100%"
                            border="1"
                            style="border: 1px solid gray;border-collapse:collapse">
                              <tr>
                                <td class="box">
                                  <img
                                  src="images/arrow.gif" />&nbsp;Information
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
                                        <a href=""
                                        class="linksubmain">Shipping
                                        Returns</a><br >
                                         <a href=""
                                        class="linksubmain">Privacy
                                        Notice</a><br >
                                         <a href=""
                                        class="linksubmain">Conditions
                                        of use</a><br >
                                         <a href=""
                                        class="linksubmain">Contact
                                        us</a><br >

                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <!-- end information -->
                    </td>
                  </tr>
                </table>
                <!-- end canvas -->
              </td>
            </tr>
            <!-- footer -->
            <tr>
              <td valign="bottom">
                <table width="100%" class="main" height="20"
                cellpadding="0" cellspacing="0"
                style="border-top: 1px solid black; border-bottom: 1px solid black">
                  <tr>
                    <td width="20%" align="center">
                      <a href="" class="linkbottom">Home</a>
                    </td>
                    <td width="20%" align="center">
                      <a href="" class="linkbottom">Contact us</a>
                    </td>
                    <td width="20%" align="center">
                      <a href="" class="linkbottom">Shopping
                      Cart</a>
                    </td>
                    <td width="20%" align="center">
                      <a href="" class="linkbottom">Checkout</a>
                    </td>
                    <td width="20%" align="center">
                      <a href="" class="linkbottom">Members</a>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td valign="bottom" height="10">
                <table width="100%" class="mainlinebottom"
                cellpadding="0" cellspacing="0">
                  <tr>
                    <td>
                      &copy; copyleft&nbsp; <a
                      href="mailto:andi.trinculescu@gmail.com">skywebro</a>&nbsp;
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <!-- end footer -->
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>