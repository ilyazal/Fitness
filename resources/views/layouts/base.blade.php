<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/prettyPhoto.css" rel="stylesheet">
        <link href="../css/price-range.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="../images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +38 093 000 11 22</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> zinchenko.us@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.html"><img src="../images/home/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                               
								<!-- Корзинка -->
<div id="basket">
<table>
<tbody>
<tr style="display: none;" class="hPb">
<td>Выбрано:</td>
<td><span id="totalGoods">0</span> товаров</td>
</tr>
<tr style="display: none;" class="hPb">
<td>Сумма: &asymp; </td>
<td><span id="totalPrice">0</span> руб.</td>
</tr>
<tr style="display: none;" class="hPb">
<td>Куки:</td>
<td><span id="gugu">0</span> </td>
</tr>
<tr style="display: table-row;" class="hPe">
<td colspan="2">Корзина пуста</td>
</tr>
<tr>
<td><a style="display: none;" id="clearBasket" href="#">Очистить</a></td>
<td><a style="display: none;" id="checkOut" href="#">Оформить</a></td>
</tr>
</tbody>
</table>
</div>
								 <ul class="nav navbar-nav navbar-right">
								 <li><a href="#"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i>Вход</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-user"></i>Регистрация</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выйти
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="#">Главная</a></li>
                                    <li class="dropdown"><a href="#">Магазин<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="#">Каталог товаров</a></li>
                                            <li><a href="#">Корзина</a></li> 
                                        </ul>
                                    </li> 
                                    <li><a href="#">Блог</a></li> 
                                    <li><a href="#">О магазине</a></li>
                                    <li><a href="#">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
            
        </header><!--/header-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <div class="panel-group category-products">
							<form action ="/subscribe" method="post">
							{!!csrf_field()!!}
							@foreach($cats as $one)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><input type="checkbox" name="{{$one->id}}" value="{{$one->id}}"/><a href="{{asset ('/cat/'.$one->id)}}">{{$one->name}}</a></h4>
                                    </div>
                                </div>
							@endforeach	
							<input type="submit" value="Подписаться"/>
                            </form>    
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        @yield('content')

                    </div>
                </div>
            </div>
        </section>

        <footer id="footer"><!--Footer-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2015</p>
                        <p class="pull-right">Курс PHP Start</p>
                    </div>
                </div>
            </div>
        </footer><!--/Footer-->



        <script src="/js/jquery.js"></script>
        <script src="/js/jquery-cookie.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.scrollUp.min.js"></script>
        <script src="/js/price-range.js"></script>
        <script src="/js/jquery.prettyPhoto.js"></script>
        <script src="/js/main.js"></script>
		
<script type="text/javascript">
$(document).ready(function(){
		msg = new Array();
		var basket = '';
		var totalprice = 0;
		var totalCountGoods = 0;
		if (!$.cookie("basket")) {$.cookie("basket", '', {path: "/"});}
		basket = decodeURI($.cookie("basket"));
		basketArray = basket.split(",");// Находим все товары
		for(var i=0; i<basketArray.length-1;i++) {
			goodsId = basketArray[i].split(":"); // Находим id товара, цену и количество
			totalCountGoods+=parseInt(goodsId[1]);
			totalprice+=parseInt(goodsId[1])*parseInt(goodsId[2]);
		}
		if (totalprice > 0) {
			$('#clearBasket').show();
			$('#checkOut').show();
			$('#gugu').show();
			$('.hPb').show();
			$('.hPe').hide();
		}
		if (!totalprice) {totalprice = 0;}
		$('#totalPrice').text(totalprice);
		$('#totalGoods').text(totalCountGoods);
		$('#gugu').text($.cookie("basket"));
});



$('a.addCart').click(function() {
   data = $(this).attr('id').split('-');
   addCart(data[1], data[2], 1);
   return false;
  });
  
  
  
  function addCart(p1, p2, p3){
    if (!p3 || p3==0) {p3=1;}
    msg.id = p1; 		  // АйДи
    msg.price =  p2; // Цена
    msg.count = parseInt(p3); // Количество
    var check = false;
    var cnt = false;
    var totalCountGoods = 0;
    var totalprice = 0;
    var goodsId = 0;
    var basket = '';
    $('#clearBasket').show();
    $('#checkOut').show();
    $('#gugu').show();
    $('.hPb').show();
    $('.hPe').hide();
    basket = decodeURI($.cookie("basket"));
    if (basket=='null') {basket = '';}
    basketArray = basket.split(",");
    for(var i=0; i<basketArray.length-1;i++) {
        goodsId = basketArray[i].split(":");
	if(goodsId[0]==msg.id)	// ищем, не покупали ли мы этот товар ранее
	{
            check = true;
	    cnt   = goodsId[1];
	    break;
	}
    }
    if(!check) {
        basket+= msg.id + ':' + msg.count + ':' + msg.price + ',';
    } else {
       alert("Уже есть в корзине! Количество товаров можно будет изменить при оформлении заказа");
    }
    if(!check) {
        basketArray = basket.split(",");// Находим все товары
        for(var i=0; i<basketArray.length-1;i++) {
	    goodsId = basketArray[i].split(":"); // Находим id товара, цену и количество
	    totalCountGoods+=parseInt(goodsId[1]);
	    totalprice+=parseInt(goodsId[1])*parseInt(goodsId[2]);
	}
	$('#totalGoods').text(totalCountGoods);
	$('#totalPrice').text(totalprice);
	$.cookie("totalPrice", totalprice, {path: "/"});
	$.cookie("basket", basket, {path: "/"});
	$('#gugu').text($.cookie("basket"));
    }
}

$('#clearBasket').click(function() {
			$.cookie("totalPrice", '', {path: "/"});
			$.cookie("basket", '', {path: "/"});
			$('#totalPrice').text('0');
			$('#totalGoods').text('0');
			$('#gugu').text('0');
			$('.hPb').hide();
			$('.hPe').show();
			$(this).hide();
			$('#checkOut').hide();
			$.jGrowl("Корзина очищена!");
			return false;
		});

</script>
    </body>
</html>