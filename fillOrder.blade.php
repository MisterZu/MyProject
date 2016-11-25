<!DOCTYPE html>
<!-- saved from url=(0028)http://www.opposhop.cn/trade -->
<html class=" js no-touch backgroundsize cssanimations csstransforms svg inlinesvg"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE">
    <meta content="width=device-width,initial-scale=1, user-scalable=no" name="viewport">
    <title> 『OPPO最新款智能手机在线订购』OPPO最新款智能手机在线购买_OPPO最新款智能手机快捷支付-OPPO智能手机官网 </title>
    <meta name="keywords" content=" OPPO最新款智能手机在线订购,OPPO最新款智能手机在线购买,OPPO最新款智能手机快捷支付 ">
    <meta name="description" content=" OPPO官网购物首页为您提供OPPO最新款智能手机在线订购,OPPO最新款智能手机在线购买,OPPO最新款智能手机快捷支付等信息,多种OPPO智能手机任您选择与订购,智能手机网上购买尽在OPPO官网。 ">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('Home/shop/css/styles.css')}}">

    <script type="text/javascript" defer="" async="" src="{{asset('Home/shop/js/uta.js')}}"></script><script src="{{asset('Home/shop/js/optj-1.0.4.min.js')}}"></script><script async="" src="{{asset('Home/shop/js/analytics.js')}}"></script><script src="{{asset('Home/shop/js/hm.js')}}"></script><script type="text/javascript">
		function checkBrowser(){
			var browser = {};
			var div = document.createElement( "div" );
			div.innerHTML = "<link/><table></table><a href='/a'>a</a><input type='checkbox'/>";
            var a = div.getElementsByTagName( "a" )[0];
			style = a && a.style;
			if (!style) {
				return;
			}
			style.cssText = "float:left;opacity:.5";
			// Support: IE<9
			// Make sure that element opacity exists (as opposed to filter)
			browser.opacity = style.opacity === "0.5";
			// Verify style float existence
			// (IE uses styleFloat instead of cssFloat)
			browser.cssFloat = !!style.cssFloat;
			if(browser.opacity && browser.cssFloat){
				return true;
			}else{
                //IE 8测试
                var userAgent = navigator.userAgent.toLocaleUpperCase();
                var msie = /MSIE [\d\.]+/;
                var version = msie.exec(userAgent);
                if (version<"MSIE 8") return false;
                else return true;
			}
		}
        var v = checkBrowser();
		if (!v) {
			window.location.href = "http://www.opposhop.cn/lower.html";
		}
    </script>

    <script src="{{asset('Home/shop/js/modernizr.custom.js')}}"></script>

        <script>var is_cod_allowed = true;</script>
  </head>
  <body>
		@include('Home/oppozhu/header');
      <main class="main-content slab-light">
    <div class="wrapper">
      <ul class="breadcrumb">
  <li>
    <a href="http://www.oppo.com/cn/">
      首页
      <span>/</span>
    </a>
  </li>
            <li>
                  <a href="http://www.opposhop.cn/products?is_promotion=0&category=1">
            在线购物
            <span>/</span>
          </a>
              </li>
          <li>
                  <a href="http://www.opposhop.cn/cart">
            购物车结算
            <span>/</span>
          </a>
              </li>
          <li>
                  填写订单
              </li>
      </ul>
      <div class="brick-bottom">
        <ul class="steps"><li class="one active ">
    <div class="step-content">
            <h5 class="step-heading">购物车</h5>
      <div class="step-gradient"></div>
    </div>
  </li><li class="two step-completed active ">
    <div class="step-content palm-right-text">
            <h5 class="step-heading">填写订单</h5>
      <div class="step-gradient"></div>
    </div>
  </li><li class="three ">
    <div class="step-content">
            <h5 class="step-heading">支付</h5>
      <div class="step-gradient"></div>
    </div>
  </li></ul>

        <div class="row">
          <div class="col-md-12">
          <div class="alert alert-danger" role="alert">
            <ul class="list-unstyled">
              <strong class="error_msg_note">
                              </strong>
            </ul>
          </div>
          </div>
        </div>

    <form id="order-create-form" class="g">
          <div class="gi one-whole slab-white-border">
            <div class="delivery-header">
              <h1 class="h-epsilon">选择配送方式:</h1>
                                                        </div>
            <div class="brick-shadow">
	<!--------------------------------------------地址开始----------------------------------------------------->
				<div class="address-form-item">
    <div class="address-form" style="display: none;" data-address-id="1121815">
   <div id="address-edit-1121815" class="g">
  <div class="gi field lap-one-whole desk-one-quarter">
  
   <label>*收货人姓名</label>
    <input type="text" name="unames" value="{{$order['name']}}">
  </div>
  <div class="g">
    <div class="gi field lap-one-whole desk-one-quarter">
      <label>*手机号码</label>
      <input type="text" name="utels" value="{{$order['utel']}}">
    </div>
  </div>
    <div class="g field">
    <label>*收货地址</label>

    <div class="g">
      <div class="gi desk-two-thirds one-whole">
        <input type="text" name="uaddresss" value="详细地址">
      </div>
    </div>
  </div>
  <div class="g">
    <div class="gi field lap-one-whole desk-one-quarter">
      <label>联系邮箱</label>
      <input type="text" name="uemails" value="{{$order['uemail']}}">
    </div>
  </div>
  <div class="form-actions">
    <div class="pull-left">
      <a class="button-light pull-left update" data-id="{{$order['uid']}}" href="javascript:;">保存</a>
      <a class="button-light pull-left resect" data-id="{{$order['uid']}}" href="javascript:;">取消</a>
    </div>
  </div>
  <div class="dividing-line"></div>
</div>
		
                </div>
                <div id="yc" class="field radio-item dark xl address_list_0" style="display: block;">
                  <input type="hidden"  class="address-form-receiver" value="{{$order['name']}}">
                  <input type="hidden"  class="address-form-mobile" value="{{$order['utel']}}">
                  <input type="hidden"  class="address-form-email" value="{{$order['uemail']}}">
                  <input type="hidden"  class="address-form-address" value="{{$order['address']}}">
                  <!--<span class="radio webkit webkit46 not_msie custom-form_radio0 checked_radio">-->
				  <input id="" name="" type="radio" value="" checked=""></span>
                    <label for="radio0">
                      <div class="g address-form-content">
                        <div class="gi desk-one-fifth one-whole title">{{$order['name']}}</div>
                        <div class="gi desk-one-fifth one-whole">{{$order['utel']}}</div>
                        <div class="gi desk-one-fifth one-whole">{{$order['uemail']}}</div>
                        <div class="gi desk-two-fifths one-whole">{{$order['address']}}</div>
                      </div>
                      <div class="links">
                        <a href="javascript:;" id="cl" onclick="vm.edit(&quot;1121815&quot;)">编辑</a>
                        <a href="javascript:;" class="remove-address" data-id="1121815">删除</a>
                      </div>
                    </label>
                  
                </div>

              </div>
	<!--------------------------------------------地址结束----------------------------------------------------->

				
                                          <p class="field">
                <a href="javascript:;" id="address_new" class="button-light">添加新地址</a>
                </p><div class="js-content address-form-new" style="display:none;">
				
				
                  <div id="address-create" class="g">
  <div class="gi field lap-one-whole desk-one-quarter">
    <label>*收货人姓名</label>
    <input type="text" name="uname" value="" />
  </div>
  <div class="g">
    <div class="gi field lap-one-whole desk-one-quarter">
      <label>*手机号码</label>
      <input type="text" name="utel" value="">
    </div>
  </div>
    <div class="g field">
  <label>*收货地址</label>
  <div class="g">
    <div class="gi desk-two-thirds one-whole">
      <input class="address-detail" type="text" name="uaddress" value="" placeholder="详细街道地址">
    </div>
  </div>
</div>
  <div class="g">
    <div class="gi field lap-one-whole desk-one-quarter">
      <label>联系邮箱</label>
      <input type="text" name="uemail" value="">
    </div>
  </div>
  <div class="form-actions">
    <div class="pull-left">
      <a class="button-light pull-left address-store" href="">保存</a>
      <a class="button-light pull-left address-new-cancel" href=" ">取消</a>
    </div>
  </div>
</div>

                </div>
              <p></p>
            </div>

                        <div class="brick-shadow" id="payment_method_filed">
              <h3 class="h-epsilon">支付方式:</h3>
              <div class="g g-wrapper-s">
                                <div class="gi one-whole desk-one-half g-hide">
                  <div class="field radio-item payment_method_jsd">
                    <span class="radio webkit webkit46 not_msie custom-form_payment_method_radio11"><input id="payment_method_radio11" name="payment_method_radio" type="radio" value="11" data-fee="0"></span>
                    <label for="payment_method_radio11">
                      <span class="main">
                        货到付款<font class="payment_inside">（当日下单，当日送达）</font>
                        <a class="color-primary font-weight-normal" href="http://hd.oppo.com/act/2016/fast/index.html" target="_blank">&nbsp;“去了解当日达”&gt;&gt;</a>
                      </span>
                    </label>
                  </div>
                </div>
                                <div class="gi one-whole desk-one-half g-hide">
                  <div class="field radio-item payment_method_online">
                                         <input id="payment_method_radio0" name="payment_method_radio" type="radio" value="0" data-fee="0"></span>
                    <label for="payment_method_radio0">
                      <span class="main">
                        在线支付
                      </span>
                    </label>
                  </div>
                </div>
                                <div class="gi one-whole desk-one-half g-hide">
                  <div class="field radio-item payment_method_cod">
                    <span class="radio webkit webkit46 not_msie custom-form_payment_method_radio4"><input id="payment_method_radio4" name="payment_method_radio" type="radio" value="4" data-fee="0"></span>
                    <label for="payment_method_radio4">
                      <span class="main">
                        我想要货到付款
                        <a class="color-primary font-weight-normal" href="http://www.oppo.com/cn/service/help/596?name=%E8%B4%AD%E4%B9%B0%E5%B8%AE%E5%8A%A9" target="_blank">&nbsp;  了解更多货到付款详情&gt;&gt;</a>
                      </span>
                    </label>
                  </div>
                </div>
              </div>

                            <div class="g-hide">
                <div class="field radio-item">
                  <span class="radio webkit webkit46 not_msie custom-form_payment_method_radio3"><input id="payment_method_radio3" name="payment_method_radio" type="radio" value="3" data-fee="0"></span>
                    <label for="payment_method_radio3">
                      <span class="main">
                        自提
                        <a class="subtitle" href="http://www.opposhop.cn/trade#">了解上门自提流程</a>
                      </span>
                    </label>
                  
                </div>
                <div class="g g-wrapper-s delivery-pick" style="display:none">
                  <div class="gi lap-one-half">
                    <div class="field">
                      <label for="text1">选择自提点</label>
                      <input id="text1" type="text">
                      <p class="instructions">请在支付完成后到您选择的实体店自提</p>
                    </div>
                  </div>
                  <div class="gi lap-one-half field">
                    <div class="radio-title">选择自提时间</div>
                    <div class="g g-wrapper-s">
                      <div class="gi field one-half">
                        <div class="basic-input">
                          <span class="icon icon-grey-arrow-down"></span>
                          <select id="select">
                            <option value="option1">8月6日</option>
                            <option value="option2">8月7日</option>
                            <option value="option3">8月8日</option>
                            <option value="option4">8月9日</option>
                            <option value="option5">8月10日</option>
                          </select><a class="select webkit webkit46 not_msie custom-form_select responsive_select"><span class="select_content"><span class="select_button"><span class="select_button_icon"></span></span><span class="select_label"><span>8月6日</span></span></span></a>
                        </div>
                      </div>
                      <div class="gi field one-half">
                        <div class="basic-input">
                          <span class="icon icon-grey-arrow-down"></span>
                          <select id="select">
                            <option value="option1">9:00 - 12:00</option>
                            <option value="option2">14:00 - 18:00</option>
                          </select><a class="select webkit webkit46 not_msie custom-form_select responsive_select"><span class="select_content"><span class="select_button"><span class="select_button_icon"></span></span><span class="select_label"><span>9:00 - 12:00</span></span></span></a>
                        </div>
                      </div>
                      <p class="instructions gi one-whole">请在下单7天内到对应自提店自提</p>
                    </div>
                  </div>
                  <div class="gi lap-one-half">
                    <div class="field">
                      <label for="text2">填写接受自提券码的手机号</label>
                      <input id="text1" type="text">
                      <p class="instructions">我们会将自提券码发送到该手机号</p>
                    </div>
                  </div>
                  <div class="gi one-whole">
                    <button class="button" type="button">确认</button>
                  </div>
                </div>
              </div>
            </div>
            
                        <div class="brick-shadow">
              <div class="invoice-head js-collapse">
                <a class="js-collapse-open" style="display:inline-block">
                  <h3 class="h-epsilon">发票:<span class="icon icon-arrow-light-down"></span></h3>
                </a>
                <p class="invoice-head-tip">
                  商城默认为您开具普通发票，发票金额均以实际支付为准，<br>
                  一个订单只能开具一张发票，如果您需要开具多张发票，请您分开下单。
                </p>
              </div>
              <div class="lap-one-whole field">
                  *发票抬头：<span id="invoice-title"></span>
                  <input type="hidden" name="invoice_title" value="">
              </div>
              <div class="invoice" id="invoice-new" style="display:none">
                <div class="g field lap-one-whole desk-two-thirds">
                  <input class="edit-invoice-title" type="text" name="invoicetitle">
                </div>
                <div class="form-actions">
                  <div class="form-actions-left">
                    <a class="button-light" href="javascript:;" id="save-invoice-title">保存</a>
                  </div>
                </div>
              </div>
              <div>
                <a href="javascript:;" id="update-invoice-btn" class="button button-light">重新编辑</a>
              </div>
            </div>
            
                        <div class="brick-shadow">
                          <h4>商品清单：</h4>
                            <div class="goods-list">
                <div class="goods-list-show">
                  <a class="goods-list-image" href="http://www.opposhop.cn/products/393" target="_blank">
                    <img src="{{asset('Home/shop/image/20161103021129581ad27db5225.png')}}">
                  </a>
                </div>
                <div class="goods-list-detail">
                  <div class="goods-list-info goods-list-main">
                    <div class="goods-list-description">
                      <h4 class="heading">
                        <a href="http://www.opposhop.cn/products/393" target="_blank">{{$order['gname']}}</a>
                      </h4>
                      <p>{{$order['gcolor']}}|全网通|64G</p>
                    </div>
                    <div class="goods-list-quantity"><strong>×1</strong></div>
                    <div class="goods-list-price"><strong>￥
					{{$order['gprice']}}
                                        </strong></div>
                  </div>
                                    <div class="goods-list-info goods-list-attach goods-list-gift">
                    <div class="goods-list-description">
                      <i class="goods-list-flag-gift">赠品</i>
                      <a href="http://www.opposhop.cn/products/383" target="_blank">蓝牙音箱Q9</a>
                    </div>
                    <div class="goods-list-quantity">×1</div>
                  </div>
                                    <div class="goods-list-info goods-list-attach goods-list-gift">
                    <div class="goods-list-description">
                      <i class="goods-list-flag-gift">赠品</i>
                      <a href="http://www.opposhop.cn/products/386" target="_blank">收纳包</a>
                    </div>
                    <div class="goods-list-quantity">×1</div>
                  </div>
                  
        		         		                                                                                           </div>
              </div>
                                      </div>

                        <input type="hidden" name="voucher" value="">
<div class="brick-shadow coupon-p">
  <div class="g">
    <div class="radio-item simple">
      
	  <input id="coupon-type-2" name="coupon-type" type="radio" value="2">
      <label for="coupon-type-2">
        <span class="main">使用优惠码</span>
      </label>
    </div>
    <div class="coupon-code" style="display: block;">
      <div class="g g-wrapper-s coupon-code-field">
        <div class="gi one-half desk-one-quarter">
          <input type="text" name="coupon-code" placeholder="请输入优惠码">
        </div>
        <div class="gi one-half desk-three-quarters">
          <a class="button button-light coupon-code-use">立即使用</a>
          <a class="coupon-code-clear">清空</a>
        </div>
      </div>
      <p class="coupon-code-result" style="display: none;">优惠码已成功使用。现已为你减免<span></span>元。</p>
      <p class="alert-danger"></p>
      <p class="clickable">（优惠码一旦使用，不可取消）</p>
    </div>
  </div>

    </div>

<div class="brick-shadow coupon-m">
  <div class="coupon-choice-m">
    <div class="g">
      <div class="gi one-half">
        <a class="button button-light coupon-choice-code">使用优惠码</a>
      </div>
      <div class="gi one-half coupon-choice-2"></div>
    </div>
              </div>

    <div id="dialog-coupon-voucher" class="hidden">
    <div class="mask"></div>
    <div class="dialog-common dialog-box-common">
      <div class="dialog-container">
        <a class="dialog-close">×</a>
        <div class="dialog-content">玩命加载中。。。</div>
      </div>
    </div>
  </div>

    <div id="dialog-coupon-code" class="hidden">
    <div class="mask"></div>
    <div class="dialog-common dialog-box-common">
      <div class="dialog-container">
        <a class="dialog-close">×</a>
        <div class="dialog-content">
          <div class="g">
            <input type="text" name="coupon-code-m" placeholder="请输入优惠码">
          </div>
          <p class="alert-danger"></p>
          <p>（优惠码一旦使用，不可取消）</p>
          <p><a class="button one-whole use-btn">立即使用</a></p>
        </div>
      </div>
    </div>
  </div>

    <div id="dialog-coupon-mykq" class="hidden">
    <div class="mask"></div>
    <div class="dialog-common dialog-box-common">
      <div class="dialog-container">
        <a class="dialog-close">×</a>
        <div class="dialog-content">
          <div class="g">
            <input type="text" name="coupon-mykq-m" placeholder="输入口令有惊喜">
          </div>
          <p class="alert-danger"></p>
          <p>（优惠码一旦使用，不可取消）</p>
          <p><a class="button one-whole use-btn">立即使用</a></p>
        </div>
      </div>
    </div>
  </div>

</div>


                        <div class="brick-shadow fee-list">
              <input type="hidden" name="goods_fee" value="{{$order['gprice']}}">
              <input type="hidden" name="shipping_fee" value="0.00">
              <input type="hidden" name="shipping_id" value="0">
              <input type="hidden" name="discount_fee" value="0.00">
              <input type="hidden" name="payment_fee" value="0">
              <input type="hidden" name="payment_id" value="0">
              <input type="hidden" name="amount_fee" value="{{$order['gprice']}}">
              <input type="hidden" name="quickbuy" value="">
              <ul>
                <li>
                  <span class="fee-list-title">商品数量：</span>
                  <span class="fee-list-data">3</span>
                </li>
                <li>
                  <span class="fee-list-title">合计：</span>
                  <span class="fee-list-data" id="trade_total_fee">￥<font>{{$order['gprice']}}</font></span>
                </li>
                <li>
                  <span class="fee-list-title">优惠券/码：</span>
                  <span class="fee-list-data" id="discount_fee_price">- ￥0.00</span>
                </li>
                                <li>
                    <span class="fee-list-title">邮费（<font color="color_red">全场包邮</font>）：</span>
                  <span class="fee-list-data" id="shipping_fee_price">+ ￥0.00</span>
                </li>
                <li class="fee-list-payment">
                  <span class="fee-list-title">手续费（货到付款手续费）：</span>
                  <span class="fee-list-data" id="payment_fee_price">+ ￥0.00</span>
                </li>
                <li>
                  <span class="fee-list-title">应付金额：</span>
                                      <span class="fee-list-data fee-list-amount" id="amount_fee_price">￥{{$order['gprice']}}</span>
                                  </li>
                                <li class="cart-alipay-hb" data-checkfree="0">
                  <span class="fee-list-title"><i class="icon-hb"></i>花呗最低月供：</span>
                  <span class="fee-list-data total-hb">￥251.91x12期</span>
                </li>
                              </ul>
            </div>

            <div class="form-actions brick-shadow right-text">
                                  <a class="button cart-button" href="myOrder">提交订单</a>
            </div>
          </div>

        </form>
      </div>
    </div>
  </main>
		@include('Home/oppozhu/footer');
    <div class="navi-scroll" style="display: block;">
  <div class="navi-scroll-content">
    <a href="javascript:;" class="scroll-top-btn"><span>回到顶部</span><i></i></a>
    <a href="https://www.wenjuan.com/s/2AzYrm/" target="_blank" class="survey-btn survey-btn-normal"><span>意见反馈</span><i></i></a>
    <a href="https://www.wenjuan.com/s/2AzYrm/" class="survey-btn survey-btn-mobile"><span>意见反馈m</span><i></i></a>
  </div>
</div>

    
    <div class="purchase-advisory">
        <a href="" target="_blank" id="advisory">购机咨询</a>
    </div>

    <script src="{{asset('Home/shop/js/jquery-1.9.1.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/jquery.lazyload.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/underscore-min.js')}}"></script>

    <script src="{{asset('Home/shop/js/es5-shim.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/base64.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/custom_form.js')}}"></script>

    <script src="{{asset('Home/shop/js/jquery.countdown.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/slick.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/responsive.js')}}"></script>

    <script src="{{asset('Home/shop/js/picturefill.min.js')}}"></script>

    <script src="{{asset('Home/shop/js/scripts.js')}}"></script>

    <script src="{{asset('Home/shop/js/region0.js')}}"></script>

<script src="{{asset('Home/shop/js/region-select.js')}}"></script>

    <script src="{{asset('Home/shop/js/opposhop.min.js')}}"></script>

            <script type="text/javascript">
    var vm;
    OPPO.conf.BASE_URL = "http://www.opposhop.cn";
    OPPO.conf.STORE_URL = 'http://www.opposhop.cn';
    OPPO.conf.ACCOUNT_URL = 'http://my.oppo.com';
    OPPO.conf.WWW_URL = "http://www.oppo.com/cn/";
    OPPO.conf.SSO_LOGIN_URL = "http://id.oppo.com/login";

    var url = OPPO.conf.STORE_URL + '/auth/check';
    //callback for jsonp
    var successCallback = function(data){
        $('ul.log-area .hasLogout').removeClass('show').addClass('hidden');
        $('ul.log-area .hasLogin').removeClass('hidden').addClass('show');
        $('.cart_number').text(data['cart_number']);
        $('.n-messages').text("(" + data['message_number'] + ")");
        $('.user-menu').addClass('isLogin');
        $('.user-menu-toLogin').hide();
        if (data['message_number']>0 || data['cart_number']>0) {
          $('.js-open-user').addClass('point-red');
          if (data['message_number']>0) $('.user-menu-message a').addClass('point-red');
          if (data['cart_number']>0) $('.user-menu-cart a').addClass('point-red');
        };
        if (data['append'] != '') $('body').append(data['append']);
    };
    var errorCallback = function(){
        $('ul.log-area .hasLogin').removeClass('show').addClass('hidden');
        $('ul.log-area .hasLogout').removeClass('hidden').addClass('show');
        $('.cart_number').text(0);
    };
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'jsonp',
        error: function() {
            errorCallback();
        },
        success: function(data){
            successCallback(data);
        }
    });

    (function () {
        var controllerNameWithAction = "TradesController@index".split('@');
        var controllerName = controllerNameWithAction[0];
        var actionName = controllerNameWithAction[1];
        var controller = OPPO.controller[controllerName];
        if (controller) {
            action = controller()[actionName];
            if (action) {
                $(function () {
                    vm = action();
                });
            }
        }
        // else console.log(controllerNameWithAction);
    })();
    </script>

    <script type="text/javascript">
      $(function(){
        $("#coupon-type-2").trigger('click');
$('#coupon-type-2').parent().addClass('checked_radio');//IE8 兼容
      });
    </script>
<noscript>&lt;img src="http://sit.gentags.net/site/img?site=1351" style="border:0" alt="" /&gt;</noscript>


<script type="text/javascript">
$(function(){
  $("body").on("click",".oppo-tj",function(){
    if (typeof $(this).data('tj') != 'undefined' && typeof _optj != 'undefined') {
      var tj = $(this).data('tj');
      var tjs = tj.split("|");
      _optj.push(['_trackEvent', tjs[0], tjs[1], tjs[2], tjs[3]]);
    };
  });
});
</script>
<script src="{{asset('Home/shop/js/tingyun-rum.js')}}"></script>

<script>
	$(function(){
		//绑定点击事件
		$('.update').bind('click',function(){
			//获取uid
			var uid = $(this).attr('data-id');
			//获取input表单地址值
			var unames = $('input[name="unames"]').val();
			var utels = $('input[name="utels"]').val();
			var uaddresss = $('input[name="uaddresss"]').val();
			var uemails = $('input[name="uemails"]').val();
			
			//alert(uid+unames+utels+uaddresss+uemails);
			//进行ajax传输请求
			//准备请求url地址
			var url = '/order/address/update?unames='+unames+'&utels='+utels+'&uaddresss='+uaddresss+'&uemails='+uemails;
			
			$.ajax({
				//请求地址
				url:url,
				data:'uid='+uid,
				type:'GET',
				dataType:'text',
				success:function(data){
					if(data == 1){
						window.location.reload();
					}else{
						alert('0');
					}
				}
			});
		});
		
		//取消操作
		$('.resect').bind('click',function(){
			//点击按钮  隐藏表单
			$('#address-edit-1121815').css({display:'none'});
			$('#yc').css({display:'block'});
			//刷新页面
			window.location.reload();
		});
		
		//编辑表单
		$('#cl').bind('click',function(){
			//显示隐藏表单
			$('.address-form').attr('style','display:block');
		});
		
	});
</script>
 </body>
 </html>