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
                    	<a href="<?= SAUrl::baseHref() ?>"><img src="images/logob.gif" align="bottom" border="0" /></a>

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
                  	<td align="left">&nbsp;BREADCRUMB</td>
                    <td align="right">
                      <table cellpadding="0" cellspacing="10"
                      class="mainlinetable">
                        <tr>
                          <td class="tdbutton" align="center">
                            <img src="images/arrow.gif" /><a
                            href="<?= SAUrl::Url('account') ?>"
                            class="linkmain">&nbsp;My Account&nbsp;&nbsp;</a>

                          </td>
                          <td class="tdbutton">
                            <img src="images/arrow.gif" /><a
                            href="<?= SAUrl::Url('cart') ?>" class="linkmain">&nbsp;Cart Contents&nbsp;&nbsp;</a>
                          </td>
                          <td class="tdbutton">
                            <img src="images/arrow.gif" /><a
                            href="<?= SAUrl::Url('checkout') ?>"
                            class="linkmain">&nbsp;Checkout&nbsp;&nbsp;</a>

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
              <td valign="top">
                <!-- begin canvas -->
                <table width="100%">
                  <tr>
                    <td width="150" valign="top">
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
                            <?php
                            	$this->boxCategories($this->tree->getFirstRoot());
                           	?>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <!-- end categories -->
                      <!-- begin whats' new -->
						<?= $this->getContents('WHATS_NEW') ?>
                      <!-- end whats' new -->
                      <!-- begin special -->
						<?= $this->getContents('SPECIAL') ?>
                      <!-- end special -->
                    </td>
                    <td valign="top" width="490">
                      <div id="content">
						<?= $this->getContents(CONTENT_FOR_LAYOUT) ?>
						<?= $this->getContents('MIDDLE_BOX') ?>
                      </div>
                    </td>
                    <td valign="top">
                      <!-- begin shopping cart -->
						<?= $this->getContents('SHOPPING_CART') ?>
                      <!-- end shopping cart -->
                      <!-- begin best sellers -->
						<?= $this->getContents('BEST_SELLERS') ?>
                      <!-- end best sellers -->
                      <!-- begin currencies -->
						<?= $this->getContents('CURRENCIES') ?>
                      <!-- end currencies -->
                      <!-- begin information -->
						<?= $this->getContents('INFORMATION') ?>
                      <!-- end information -->
                      <!-- begin languages -->
						<?= $this->getContents('LANGUAGES') ?>
                      <!-- end languages -->
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
                      <a href="<?= SAUrl::baseHref() ?>" class="linkbottom">Home</a>
                    </td>
                    <td width="20%" align="center">
                      <a href="<?= SAUrl::Url('contact') ?>" class="linkbottom">Contact us</a>
                    </td>
                    <td width="20%" align="center">
                      <a href="<?= SAUrl::Url('cart') ?>" class="linkbottom">Shopping
                      Cart</a>
                    </td>
                    <td width="20%" align="center">
                      <a href="<?= SAUrl::Url('checkout') ?>" class="linkbottom">Checkout</a>
                    </td>
                    <td width="20%" align="center">
                      <a href="<?= SAUrl::Url('account') ?>" class="linkbottom">Members</a>
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