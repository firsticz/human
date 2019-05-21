<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wongnok</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/stylesheet-2018-a42a36b295.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>
<body>
<header>
  <div class="header-location " ng-controller="headerLocationController">
    <div class="container">
      <div class="row">
        <div class="header-logo">
          <a href="http://localhost/human/"><img class="logo" src="img/test.png"></a>
        </div>
        <div class="header-location-container">


          <div class="header-menu">
            <div class="menu-right">
              <ul class="menu screen">
                                  <li class="user-menu no-border hidden-xs hidden-sm hidden-md">
                    <a class="login" href="http://localhost/human/welcome/login"><i class="icon icon-user icon-hw"></i> เข้าสู่ระบบ</a>
                  </li>
                                
                <li>
                  <div id="cart" class="cart-btn" ng-controller="cartController">
                    <a href="javascript:void(0);"><i class="fas fa-cart-plus"></i> <span class="item-count">0</span></a>
                    <div class="cart-container">
	<div class="cart-empty">
		<div class="cart-icon">
			<i class="fa fa-shopping-basket"></i>
		</div>
		<h3>คุณยังไม่มีสินค้าในตะกร้า!</h3>
		<p>คลิกที่ปุ่ม +<i class="fa fa-shopping-basket"></i> เพื่อใส่สินค้าลงในตะกร้า</p>
	</div>
		<div class="cart-item-list hide" style="max-height: 276px;">
		<!---->
	</div>

				<div class="cart-summary-list delivery-charge" ng-show="deliveryType=='delivery'">
			<div class="cart-summary-label">ค่าจัดส่ง</div>
			<div class="cart-summary-value">
				50 ฿			</div>
		</div>
		<div class="cart-summary-list cart-sub-total">
			<div class="cart-summary-label">ราคารวม <br><small>ไม่รวมส่วนลด</small></div>
			<div class="cart-summary-value"><span data-subtotal-price="0" data-total-price="50" id="cart-total-price">50</span> ฿</div>
		</div>
		<div class="checkout">
			<a class="btn btn-red" href="javascript:void(0)" ng-click="checkout()">ทำการสั่งซื้อ</a>
			
		</div>
	</div>
</div>
                  </div>

                </li>
              </ul>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="header-menu">
      <div class="container">
        <div class="toggle-menu">
          <span class="icon-toggle"></span>
          <span class="icon-toggle short"></span>
          <span class="icon-toggle"></span>
        </div>
        <div class="menu-overlay"></div>
        <div class="menu-left">
          <div class="close-menu">
            <span class="icon-close"></span>
            <span class="icon-close"></span>
          </div>
          
          <ul class="menu">

                                      <li class="promo-menu">
                <a href=""></a>
              </li>
              <li>
                <a href="">อาหาร</a>
              </li>
                        <li>
              <a href="">เครื่องดื่ม</a>
            </li>
            <li>
              <a href="">ของหวาน</a>
            </li>
            <li>
              <a href="">สลัด</a>
            </li>
            <li>
              <a href="">อาหารรองท้อง</a>
            </li>
            <li>
              <a href="">รายการอาหาร</a>
            </li>
            
           

                        
          </ul>

          
        </div>
        <div class="menu-right menu mobile">
                
                </div>
      </div>
    </div>
  </div>
</header>



      <section class="body-container">
				<!-- <div class="promote-tab text-center ng-hide" ng-show="promote">
    <div class="container">
        <div class="promote-text ng-hide" ng-show="promote.text"></div>
        <button class="promote-btn ng-hide" ng-show="promote.btn_status" ng-click="promoteApply()" ng-disabled="$root.promoteRoot.promote_apply"></button>
    </div>
</div> -->
				<section class="product">
	<div class="container item-container" ng-controller="itemController" ng-init="init()">
		<h1 class="heading"><font color="#000"> อาหาร </font></h1>

		
		<div class="category">
			<!----><h3 class="category-list ng-hide active" ng-class="(category.category_id == selected_category? 'active':'')" ng-repeat="category in brand_categories" ng-show="category.category_id != 0" ng-click="changeCategory(category.category_id)">
			<font color="#000"> อาหารคาว </font>
			</h3><!---->
		</div>

		<!----><div ng-repeat="category in brand_categories">
			<div class="flex-container" ng-show="selected_category == category.category_id">
				<!----><div class="flex-item" ng-repeat="item in items | filter: { brand_category: { category_id: category.category_id } }">
					<div class="product-item">
	<div class="item-image">
		<img class="product-image" ng-src="img/pat.png" src="img/pat.png">
	</div>
	<div class="item-content-container">
		<div class="item-name" style="padding-top: 10%;">
			<h1>ข้าวผัด</h1>
		</div>
		
	</div>
</div>

<div class="item-footer">
		<button class="btn add-to-cart non-pizza-item btn-red btn-block " onclick="conferm()">
			<span class="left price">30 ฿</span>
			<span class="right txt"><i class="fa fa-plus"></i> <i class="fa fa-shopping-basket"></i></span>
			<span class="loading">
				<img src="https://1112.minorcdn.com/1112/public/images/spinner.svg">
				<span class="small">กำลังใส่สินค้าลงตะกร้า</span>
			</span>
		</button>
	</div>
				</div><!----><div class="flex-item" ng-repeat="item in items | filter: { brand_category: { category_id: category.category_id } }">
					<div class="product-item">
	<div class="item-image">
		<img class="product-image" ng-src="img/kai.jpg" src="img/kai.jpg">
	</div>
	<div class="item-content-container">
		<div class="item-name" style="padding-top: 10%;">
			<h1>ผัดผักบุ้ง</h1>
		</div>
		
	</div>
</div>

<div class="item-footer">
			
		<button class="btn add-to-cart non-pizza-item btn-red btn-block " onclick="conferm()">
			<span class="left price">20 ฿</span>
			<span class="right txt"><i class="fa fa-plus"></i> <i class="fa fa-shopping-basket"></i></span>
			<span class="loading">
				<img src="https://1112.minorcdn.com/1112/public/images/spinner.svg">
				<span class="small">กำลังใส่สินค้าลงตะกร้า</span>
			</span>
		</button>
	</div>
				</div><!----><div class="flex-item" ng-repeat="item in items | filter: { brand_category: { category_id: category.category_id } }">
					<div class="product-item">
	<div class="item-image">
		<img class="product-image" ng-src="img/tomyum.png" src="img/tomyum.png">
	</div>
	<div class="item-content-container">
		<div class="item-name" style="padding-top: 10%;">
			<h1>ไข่เจียว</h1>
		</div>
		
	</div>
</div>

<div class="item-footer">
			
		<button class="btn add-to-cart non-pizza-item btn-red btn-block " onclick="conferm()">
			<span class="left price">25 ฿</span>
			<span class="right txt"><i class="fa fa-plus"></i> <i class="fa fa-shopping-basket"></i></span>
			<span class="loading">
				<img src="https://1112.minorcdn.com/1112/public/images/spinner.svg">
				<span class="small">กำลังใส่สินค้าลงตะกร้า</span>
			</span>
		</button>
	</div>
				</div><!----><div class="flex-item" ng-repeat="item in items | filter: { brand_category: { category_id: category.category_id } }">
					<div class="product-item">
	<div class="item-image">
		<img class="product-image" ng-src="img/yum.png" src="img/yum.png">
	</div>
	<div class="item-content-container">
		<div class="item-name" style="padding-top: 10%;">
			<h1>ยำวุ้นเส้น</h1>
		</div>
		
	</div>
</div>

<div class="item-footer">
			
		<button class="btn add-to-cart non-pizza-item btn-red btn-block " onclick="conferm()">
			<span class="left price">40 ฿</span>
			<span class="right txt"><i class="fa fa-plus"></i> <i class="fa fa-shopping-basket"></i></span>
			<span class="loading">
				<img src="https://1112.minorcdn.com/1112/public/images/spinner.svg">
				<span class="small">กำลังใส่สินค้าลงตะกร้า</span>
			</span>
		</button>
	</div>
				</div><!----><div class="flex-item" ng-repeat="item in items | filter: { brand_category: { category_id: category.category_id } }">
					<div class="product-item">
	<div class="item-image">
		<img class="product-image" ng-src="img/patk.png" src="img/patk.png">
	</div>
	<div class="item-content-container">
		<div class="item-name" style="padding-top: 10%;">
			<h1>ผัดกะเพรา</h1>
		</div>
		
	</div>
</div>

<div class="item-footer">
			
		<button class="btn add-to-cart non-pizza-item btn-red btn-block " onclick="conferm()">
			<span class="left price">40 ฿</span>
			<span class="right txt"><i class="fa fa-plus"></i> <i class="fa fa-shopping-basket"></i></span>
			<span class="loading">
				<img src="https://1112.minorcdn.com/1112/public/images/spinner.svg">
				<span class="small">กำลังใส่สินค้าลงตะกร้า</span>
			</span>
		</button>
	</div>
				</div><!---->
			</div>
		</div><!---->

	</div>
</section>
			</section>
<script>
	function conferm(){
		var txt;
  var r = confirm("ยืนยันการสั่ง!\nEither OK or Cancel.\n");
  if (r == true) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
	}
</script>
</body>
</html>