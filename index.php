<?php
// ID нашего сообщества или страницы вконтакте
$wall_id="-30602036";
 
// Удаляем минус у ID групп, что мы используем выше (понадобится для ссылки).
$group_id = preg_replace("/-/i", "", $wall_id);
 
// Количество записей, которое нам нужно получить.
$count = "1";
 
// Токен
$token = "93765754937657549376575420931f3e8d9937693765754cfe53efd24f86d05e31db9b3";
 
// Получаем информацию, подставив все данные выше.
$api = file_get_contents("https://api.vk.com/api.php?oauth=1&method=wall.get&owner_id={$wall_id}&count={$count}&v=5.58&access_token={$token}");
// Преобразуем JSON-строку в массив
$wall = json_decode($api);
//var_dump($wall);
 
// Получаем массив
$wall = $wall->response->items;


// Обрабатываем данные массива с помощью for и выводим нужные значения

?>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <meta name="description" content="" />
  <meta name="keywords" content="деталь штамповка, деталь штамповка симферополь, деталь заказчик чертеж крым, металлообработка заказ крым, деталь изготовление чертеж, деталь изготовление	крым, деталь заказчик изготовление чертеж, фрезерные работы, услуга металлообработка, металл штамповка, заказ работа токарный крым, работа токарный фрезерный, деталь заказчик чертеж, деталь заказчик изготовление чертеж, металлообработка чертеж	симферополь, листовой металл штамповка симферополь, деталь изготовление чертеж, механический обработка крым, работа токарный фрезерный, деталь изготовление, заказ деталь, услуга металлообработка, токарный заказ, токарная обработка крым, токарная обработка, обработка на токарных станках, токарно фрезерная обработка, токарная обработка металла, токарная обработка деталей, токарная обработка цилиндрических поверхностей, токарная обработка резанием, токарная обработка наружных поверхностей, токарная обработка стали, токарная обработка чпу, токарные работы обработка, обработка поверхностей +на токарных станках, токарная обработка вала, токарно фрезерная обработка деталей, " /> 
  <title>Компас-Деталь</title>
  <link rel="shortcut icon" href="/img/1.ico" type="image/x-icon">
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">     
        <title>Simply Carousel Demo 2</title>        

        <meta name="description" content="">
        <meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width">
		
		<link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/icons/favicon.ico" type="image/x-icon">		

		<link rel="stylesheet" href="font/css/font-awesome.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/prism.css">
        <link rel="stylesheet" href="css/stylesheet.css">

        <link rel="stylesheet" href="css/style-mobile.css">
        <link rel="stylesheet" href="css/carousel.css">

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/prism.js"></script>
		<script type="text/javascript" src="js/simplycarousel.js"></script>
		<script type="text/javascript" src="js/script2.js"></script>		
	</head>		

<script>
    function AjaxFormRequest(result_id,formMain,url) {
                jQuery.ajax({
                    url:     url,
                    type:     "POST",
                    dataType: "html",
                    data: jQuery("#"+formMain).serialize(), 
                    success: function(response) {
                    document.getElementById(result_id).innerHTML = response;
                },
                error: function(response) {
                document.getElementById(result_id).innerHTML = "<p>Возникла ошибка при отправке формы. Попробуйте еще раз</p>";
                }
             });

             $(':input','#formMain')
 				.not(':button, :submit, :reset, :hidden')
 				.val('')
 				.removeAttr('checked')
 				.removeAttr('selected');
    }
</script>

</head>
<body>
<div id="body">

	<div class="header">

		<div class="nav-bar" >
			<img src="img/logo.jpg">
			<div class="header-label">
				<div class="logo-text">НИТАР</div>
				<div >Производственная группа</div>
			</div>
			<div class="email-tel">
			<div class="header-phone-number" >
			    <a href="tel:+7(978)XXXXXXX">тел. +7(978)XXXXXXX</a>
			</div>
			<div class="split"> </div>
			<div class="header-phone-number">
			    <a href="mailto:your@mail.ru">your@mail.ru</a>			    
			</div>
			</div>
		</div>
	</div>
		<div class="top-line" id="top-line">
			<div class="bar-nav-buttons" >
				<div class="nav-button" style="box-shadow: 7px 0px 10px -1px #efefef;">
					<a href="#">Металообработка</a>
				</div>
				<div class="nav-button">
					<a href="#">Металоконструкции</a>
				</div>
				<div class="nav-button">
					<a href="#">Изделия на заказ</a>
				</div>
				<div class="nav-button" >
					<a href="#">Машиностроение</a>
				</div>
				<div class="nav-button" style="box-shadow: -7px 0px 10px -1px #efefef;">
					<a href="#">More</a>	
				</div>
			</div>
			<div class="mobile-menu">
			<div class="menu-icon" >
	         		<div class="container-box">
        				<input type="checkbox" id="checkbox4" class="checkbox4 visuallyHidden">
       					<label for="checkbox4"  onclick="showMenu()">
        				    <div class="hamburger hamburger4">
            	    			<span class="bar bar1"></span>
            	    			<span class="bar bar2"></span>
            	    			<span class="bar bar3"></span>
            		    		<span class="bar bar4"></span>
                				<span class="bar bar5"></span>
            				</div>
        				</label>
    				</div>
				</div>
				<div class="button-setting" id="menu-button" style="display: none;">

               	<ul type="none" class="none-copy">
               	<li><a href="#" style="-webkit-text-fill-color:#efefef">Металообработка</a></li>
               	<li><a href="#" style="-webkit-text-fill-color:#efefef">Металоконструкции</a></li>
                <li><a href="#" style="-webkit-text-fill-color:#efefef">Изделия на заказ</a></li>
               	<li><a href="#" style="-webkit-text-fill-color:#efefef">Машиностроение</a></li>
              	</ul>
          		</div>
          		

</div>
		</div>

	
	<!--
	<div id="main_banner" class="demo">
				<div class="carousel-slide" style="background: url(&quot;img/image1.jpg&quot;) 50% 50% / cover no-repeat; display: none;">
					<div class="caption">Simply Carousel</div>
				</div>			
				<div class="carousel-slide" style="background: url(&quot;img/image2.jpg&quot;) 50% 50% / cover no-repeat; display: none;">
					<div class="caption">Simple Image Slider</div>
				</div>
				<div class="carousel-slide" style="background: url(&quot;img/image3.jpg&quot;) 50% 50% / cover no-repeat; display: block; opacity: 0.504712;">
					<div class="caption">Hover to stop &amp; display arrows</div>
				</div>	
				<div class="carousel-slide on" style="background: url(&quot;img/image4.jpg&quot;) 50% 50% / cover no-repeat; display: block; opacity: 0.495288;">
					<div class="caption">All done with one single line</div>
				</div>
				<span class="arrow left select-none" style="display: none;">&lt;</span>
				<span class="arrow right select-none" style="display: none;">&gt;</span>
	</div>-->

	<div class="container">
		<div class="container-first">
		<div class="container-left">
			<div class="container-menu">
				<p>О НАС</p>
				<div class="container-menu-button">
					<a href="#">ПГ НИТАР</a>
				</div>
				<div class="container-menu-button">
					<a href="#">НАШЕ ПРОИЗВОДСТВО</a>
				</div>
				<div class="container-menu-button">
					<a href="#">НАШИ КЛИЕНТЫ</a>
				</div>
				<div class="container-menu-button">
					<a href="#">ПАРТНЕРСКАЯ ПРОГРАММА</a>
				</div>
				<a href="#">
					<div class="container-callback">
						Мы вам перезвоним
					</div>
				</a>
			</div>
			
		</div>

		<div class="container-right">
		<?
		for ($i = 0; $i < count($wall); $i++) {
	$a = $wall[$i]->attachments[0]->photo->photo_604;

	echo '
<img src='.$a.'>
<div class="vk-post">
<h1>'.$wall[$i]->text.'</h1>
<div>
<a href="https://vk.com/wall'.$wall[$i]->from_id.'_'.$wall[$i]->id.'">Перейти к записи </a>
<a href="https://vk.com/club'.$wall[$i]->from_id.'">Подписаться</a>
</div>
</div>

';
}?>
</div>
</div>
		<div class="container-index">
			<!--<span class="index-up-label" style="font-size: 25px;">Изготавливаем на заказ</span><br>
			<span class="index-label">Металлоконструкции</span><br>
			<span class="index-under-label">Производственная компания ООО «ПЗО» гарантирует качественное предоставление услуг по обработке металлов. С помощью современного оборудования мы готовы произвести детали любого размера и уровня сложности по приемлемым ценам.</span><br>-->
			
			<div class="index-services-3">
				<a href="#"><!--вставить ссылки--> 
				<div class="services-3-img">
					<img src="/img/polish.png">
					<div class="index-service-label">
						<span>
							Шлифовка металла
						</span>
					</div>

				</div>	
				</a>
				<a href="#"><!--вставить ссылки--> 
				<div class="services-3-img">
					<img src="/img/welding.png">
					<div class="index-service-label">
						<span>
							Сварка металла
						</span>
					</div>

				</div>	
				</a>
				<a href="#"><!--вставить ссылки--> 
				<div class="services-3-img">
					<img src="/img/drilling.png">
					<div class="index-service-label">
						<span>
							Сверление металла
						</span>
					</div>

				</div>	
				</a>
				<a href="#"><!--вставить ссылки--> 
				<div class="services-3-img">
					<img src="/img/cutting.png">
					<div class="index-service-label">
						<span>
							Резка металла
						</span>
					</div>

				</div>	
				</a>
				<a href="#"><!--вставить ссылки--> 
				<div class="services-3-img">
					<img src="/img/metal-dest.png">
					<div class="index-service-label">
						<span>
							Гибка листового металла
						</span>
					</div>

				</div>	
				</a>
				<a href="#"><!--вставить ссылки--> 
				<div class="services-3-img">
					<img src="/img/rolling.png">
					<div class="index-service-label">
						<span>
							Вальцовка металла
						</span>
					</div>

				</div>	
				</a>
				<a href="#"><!--вставить ссылки--> 
				<div class="services-3-img">
					<img src="/img/zxchto.png">
					<div class="index-service-label">
						<span>
							?????????????
						</span>
					</div>

				</div>	
				</a>
				<a href="#"><!--вставить ссылки--> 
				<div class="services-3-img">
					<img src="/img/wanish.png">
					<div class="index-service-label">
						<span>
							?????????????
						</span>
					</div>

				</div>	
				</a>
				<a href="#"><!--вставить ссылки--> 
				<div class="services-3-img">
					<img src="/img/painted.png">
					<div class="index-service-label">
						<span>
							?????????????
						</span>
					</div>

				</div>	
				</a>
							
			</div>
		</div>

	</div>
<br>
<br>

<!--
<div class="form" style="border: 1px solid black;
    border-radius: 5px;
    padding: 10;">
    <div id="messegeResult">
        <p> Оставьте ваши контакты и наш консультант свяжется с вами </p>
    </div>
       
    <form method="post" action="" id="formMain" name="formMain">

<input type="checkbox"   name="1" id="1" value="Gthyj">
<input type="checkbox"   name="2" id="2" value="Gthyasdfgj">

        <input id="name" type="text" name="name" placeholder="Введите ваше имя" maxlength="30" autocomplete="off" requi#ee584a/>
        <input id="telephone" type="Tel" name="telephone" placeholder="Введите ваш телефон" maxlength="30" autocomplete="off" requi#ee584a/>
        <input id="button" type="button"  value="Заказать обратный звонок" onclick="AjaxFormRequest('messegeResult', 'formMain', 'form.php')"/>
    </form>-->
   </div>
<br>
<br>
</div>
<script type="text/javascript">
	$('#osForm').submit(function(e){
    e.preventDefault();
    $.ajax({
      url: "sendOrderForm.php",
      type: "POST",
      data: $('#osForm').serialize(),
      success: function(response) {
        //обработка успешной отправки
      },
      error: function(response) {
        //обработка ошибок при отправке
     }
    });
});
</script>
	<script type='text/javascript'>
(function(){ var widget_id = 'Ytpug8MdWW';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
  s.src = '//code.jivosite.com/script/widget/'+widget_id
    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
  else{w.addEventListener('load',l,false);}}})();
</script>
<script type="text/javascript">
	function showMenu() {
    if ( document.getElementById("menu-button").style.display =="block") 
    {
    	document.getElementById("menu-button").style.display = "none";
    	document.getElementById("top-line").style.height = "70px";
    }else
    {
    	document.getElementById("menu-button").style.display = "block";
    	document.getElementById("top-line").style.height = "260px";
    }

}
</script>
</body>