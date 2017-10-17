<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="SHORTCUT ICON" href="favicon.ico">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="jquery/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<title>1курс</title>
</head>
<body>
	<div id="page-preloader"><span class="spinner"></span></div>
	<script>
		$(window).on('load', function () {
			var $preloader = $('#page-preloader'),
			$spinner = $preloader.find('.spinner');
			$spinner.fadeOut();
			$preloader.delay(350).fadeOut('slow');
		}); 
	</script>
	<div class="navbar navbar-inverse navbar-fixed-top">
	   <div class="container">
	     <div class="navbar-header">
	       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	       <span class="icon-bar"></span>
	       <span class="icon-bar"></span>
	       <span class="icon-bar"></span>
	       </button>
	       <a class="navbar-brand center"  href="index.php">Matematica</a>
	 </style>
	     </div>
	<div class="navbar-collapse collapse">
	  <ul class="nav navbar-nav navbar-right">
	    <li>
 <form action="search.php" method="post" name="form" class="form-search" onsubmit="return false;">
	  		<input id="search" type="text" name="search" value="" class="input-text" placeholder="Поищем...">
            <i class="fa fa-search search-input fa-lg" aria-hidden="true"></i>
            </form>
	  	</li>
	  </ul>
	  	</div>
	   </div>
	 </div>
	 <?php 
	$db = mysql_connect("localhost", "root", "");
	mysql_select_db("my_site", $db);
	$errq = mysql_query("SELECT * FROM `1`");
	  ?>
<div class="blog-header">
      <div class="container">
        <h1 class="blog-title centered">Тема</h1>
      </div>
      <hr>
    </div>
	  <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h1 class="blog-post-title centered">Подтема</h1>
            <hr>
            <p>Penatibus и великие <a href="#">боги гор роженицы</a>, nascetur школьника МУЗ. Aenean EU Лев. Дети украшают юбку завода. Но поставить трайнин. Завтра-это всеобъемлющий онлайн бронирования путешествий.</p>
            <blockquote>
              <p>Ух ты, захватывающих самолет время. <strong>Nullam магазина рисус егет урненском моллис</strong> на ваш компьютер или iPad к компьютеру. Нет боли, что дизельные автомобили для путешествий.</p>
            </blockquote>
            <p>Кроме того, ворота <em>семь malesuada большую</em> мягкую производительность. Завтра-это всеобъемлющий онлайн бронирования путешествий. Добро пожаловать в Оклахоме, но не пить за рулем.</p>
            <h2>Заголовок</h2>
            <p>Посетители озеро живых выступлений или организационной макияж горла отвечает. Мягкий фильм, не предполагаемое luctus, но был лигулы, егет лациния одио ФЭУ NEC элит. Сроки смех, ворота миннеаполис переменного тока, входами, в США.</p>
            <h3>В рубрике</h3>
            <p>Penatibus и великих богов гор отелившаяся, nascetur школьника МУЗ.</p>
            <pre><code>Example code block</code></pre>
            <p>Добро пожаловать в Оклахоме, но не пить за рулем. Кроме того, ворота большой мягкой Рэм malesuada euismod. Как выбрать протеин, часы и commodo программа, политика системы mauris condimentum жилая площадь, для того, чтобы разрыхлять массы.</p>
            <h3>В рубрике</h3>
            <p>Penatibus и великих богов гор отелившаяся, nascetur школьника МУЗ. Добро пожаловать в Оклахоме, но не пить за рулем. Кроме того, ворота большой мягкой Рэм malesuada euismod. Как выбрать протеин, часы и программа commodo, политика маурис condimentum жилая площадь, для того, чтобы закваска масса хусто сидеть амет рисус.</p>
            <ul>
              <li>Эректильная дисфункция большое преимущество на поле, или потребление шоколада и усиливается.</li>
              <li>Донец ID элит не ми Porta беременность на eget метус.</li>
              <li>Жизнь без свободы, колчан пропаганды.</li>
            </ul>
            <p>К сожалению, ни одного негативного отзыва и автора. Жизнь без свободы, колчан пропаганды.</p>
            <ol>
              <li>О показателях отпирающее всегда.</li>
              <li>Penatibus и великих богов гор отелившаяся, nascetur школьника МУЗ.</li>
              <li>Меценат СЭД диам рисус егет blandit вариус сидеть амет не многие.</li>
            </ol>
            <p>Завтра-это всеобъемлющий онлайн бронирования путешествий. Но поставить трайнин.</p>
          </div><!-- /.blog-post -->
	  <div class="reds">we</div>

          <div class="blog-post">
            <h2 class="blog-post-title">Еще один блог</h2>
            <p class="blog-post-meta">23 декабря, 2013 год <a href="#">Иакова</a></p>

            <p>Penatibus и великие <a href="#">боги гор роженицы</a>, nascetur школьника МУЗ. Aenean EU Лев. Дети украшают юбку завода. Но поставить трайнин. Завтра-это всеобъемлющий онлайн бронирования путешествий.</p>
            <blockquote>
              <p>Ух ты, захватывающих самолет время. <strong>Nullam магазина рисус егет урненском моллис</strong> на ваш компьютер или iPad к компьютеру. Нет боли, что дизельные автомобили для путешествий.</p>
            </blockquote>
            <p>Кроме того, ворота <em>семь malesuada большую</em> мягкую производительность. Завтра-это всеобъемлющий онлайн бронирования путешествий. Добро пожаловать в Оклахоме, но не пить за рулем.</p>
            <p>Посетители озеро живых выступлений или организационной макияж горла отвечает. Мягкий фильм, не предполагаемое luctus, но был лигулы, егет лациния одио ФЭУ NEC элит. Сроки смех, ворота миннеаполис переменного тока, входами, в США.</p>
          </div><!-- /.blog-post -->

          <div class="blog-post">
            <h2 class="blog-post-title">Новая функция</h2>
            <p class="blog-post-meta">14 декабря 2013 года <a href="#">Крис</a></p>

            <p>Penatibus и великих богов гор отелившаяся, nascetur школьника МУЗ. Добро пожаловать в Оклахоме, но не пить за рулем. Кроме того, ворота большой мягкой Рэм malesuada euismod. Как выбрать протеин, часы и программа commodo, политика маурис condimentum жилая площадь, для того, чтобы закваска масса хусто сидеть амет рисус.</p>
            <ul>
              <li>Эректильная дисфункция большое преимущество на поле, или потребление шоколада и усиливается.</li>
              <li>Донец ID элит не ми Porta беременность на eget метус.</li>
              <li>Жизнь без свободы, колчан пропаганды.</li>
            </ul>
            <p>Кроме того, ворота <em>семь malesuada большую</em> мягкую производительность. Завтра-это всеобъемлющий онлайн бронирования путешествий. Добро пожаловать в Оклахоме, но не пить за рулем.</p>
            <p>К сожалению, ни одного негативного отзыва и автора. Жизнь без свободы, колчан пропаганды.</p>
          </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">
            <h4>Архивы</h4>
            <ol class="list-unstyled">
              <li><a href="#">Март 2014</a></li>
              <li><a href="#">Февраль 2014</a></li>
              <li><a href="#">Январь 2014</a></li>
              <li><a href="#">Декабря 2013 года</a></li>
              <li><a href="#">Ноябрь 2013</a></li>
              <li><a href="#">Октябрь 2013</a></li>
              <li><a href="#">Сентябрь 2013</a></li>
              <li><a href="#">Август 2013</a></li>
              <li><a href="#">Июль 2013</a></li>
              <li><a href="#">Июнь 2013</a></li>
              <li><a href="#">Мая 2013 года</a></li>
              <li><a href="#">Апрель 2013</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div>
	 <div class="text">
	 	<div class="centered">
	 		<div id="resSearch"><?php 
    			if (mysql_num_rows($errq) > 0) {

    				do {
    					echo "<div>".$sqli['head']."</div>";
    				} while ($sqli = mysql_fetch_array($errq));
    			}
    			 ?></div>
	 	</div>
	 </div>
    <script type="text/javascript">
    	$(function () {
    		$("#search").keyup(function () {
    			var search = $("#search").val();
    			$.ajax({
    				type: "POST",
    				url: "search.php",
    				data: {"search" : search},
    				cache: false,
    				success: function(response) {
    					$("#resSearch").html(response);
    				}
    			});
    			return false;
    		});
    	});
    </script>
</form>
</body>
</html>
