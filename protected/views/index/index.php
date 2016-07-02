<!DOCTYPE HTML>
<html>
	<head>
		<title>Iridium by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!-- <link href='http://fonts.useso.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'> -->
		<!--[if lte IE 8]><script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/html5shiv.js"></script><![endif]-->
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/skel.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/skel-panels.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/init.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/skel-noscript.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/style-desktop.css">
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/ie/v9.css" /><![endif]-->
  <style media="screen">
  	 li{display:inline}
		  .ep-pages{padding:10px 12px;clear:both;text-align:center;
			font-family:Arial, "\5B8B\4F53", sans-serif;font-size:14px;vertical-align:top}
			.ep-pages a, .ep-pages span{display:inline-block;height:23px;line-height:23px;padding:0 8px;
			margin:5px 1px 0 0;background:#fff;border:1px solid #e5e5e5;overflow:hidden;vertical-align:top}
			.ep-pages a:hover{background:#cc1b1b;border:1px solid #cc1b1b;text-decoration:none}
			.ep-pages a, .ep-pages a:visited{color:#252525}
			.ep-pages a:hover, .ep-pages a:active{color:#ffffff}
			.ep-pages .current{background:#cc1b1b;border:1px solid #cc1b1b;color:#fff}
			.ep-pages a.current, .ep-pages a.current:visited{color:#ffffff}
			.ep-pages a.current:hover, .ep-pages a.current:active{color:#ffffff}
			.ep-pages-ctrl{font-family:"\5B8B\4F53", sans-serif;font-weight:bold;font-size:16px}
			.ep-pages-e5e5e5{color:#e5e5e5}
			.ep-pages-all{font-size:12px;vertical-align:top}

  </style>
	</head>
<body class="homepage">
<!-- Header -->
		<div id="header">
			<div class="container">

				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">blog</a></h1>
					<span>Design by ofcourse</span>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index">主页</a></li>
						<li><a href="/index/notes">笔记</a></li>
						<li><a href="/index/mend">踩过的坑</a></li>
						<li><a href="/index/think">思考</a></li>

					</ul>
				</nav>
			</div>
		</div>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<?php  foreach($art as $a) { ?>
            <article>

                <h2 style="font-size:30px;"><a href=""><?php echo $a['title'];?></a></h2>
								&nbsp;
                <div class="entry_header" style="font-size:20px;">
                    <time><?php echo date('Y/m/d',$a['pubtime']); ?> </time>
                    by
                    ofcause
                    <a class="catlink" href="/index/<?php
										                 if ($a['cat_id']==1) {
																			 echo 'notes';
																		 } elseif ($a['cat_id']==2) {
																			 echo 'mend';
																		 } elseif ($a['cat_id']==3) {
																			 echo 'think';
																		 } else {
																			 echo 'index';
																		 }?>" >
                        <?php echo $a['cat']['catname'];?></a>
                    <!-- <a class="comment" href="#"><?php echo $a['comm'];?></a> -->
                </div>
								&nbsp;
                <div class="entry_content" style="font-size:15px;">
                    <?php if($a['thumb']) {?>
                    <img src="<?php echo $a['thumb'];?>" alt="">
                    <?php }else{ ?>
                    <?php echo '此处本应有图片' ; } ?>
                    <p><?php echo $a['content']; ?></p>
                </div>

            </article>
                  <?php } ?>

							<a href="#" class="image full"><img style="width:300px;height:200px;" src="	<?php echo Yii::app()->request->baseUrl; ?>/images/pic07.jpg" alt="" /></a>

						</section>
						<div class="ep-pages" style="display:inline">
							  <nav>
									<?php $this->widget('CLinkPager',array(
										'header' => '',
										'firstPageLabel' => '首页',
										'lastPageLabel' => '尾页',
										'prevPageLabel' => '&lt;',
										'nextPageLabel' => '&gt;',
										'pages' => $pages,
										'maxButtonCount'=>3,
										'cssFile'=>false,
										'htmlOptions' =>array("class"=>"pagination"),
                    'selectedPageCssClass'=>"active" //分页要使用的css样式
									));?>
							  </nav>
							</div>
					</div>


					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								   <input type="text" name="wordname" value="站内搜索" style=" border-radius: 14px; ">
									 <input type="button" name="nam" value="搜" style=" border-radius: 8px; " onclick=search() >
									 <ul id="good"></ul>
							</header>
							<?php for ($i=0; $i < 1 ; $i++) { ?>
							<ul class="style">
									<p class="posted"><?php echo $art[$i]['title'].' '.date('Y/m/d',$art[$i]['pubtime']);?> |  (10 )  Comments</p>
									<img src="images/pic04.jpg" alt="" />
									<p class="text"><?php echo mb_substr($art[$i]['content'],0,6,'utf-8');?></p>
							</ul>
							<?php } ?>
						</section>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<div id="featured">
			<div class="container">
				<div class="row">
					<div class="4u">
						<h2>Aenean elementum facilisis</h2>
						<a href="#" class="image full"><img src="images/pic01.jpg" alt="" /></a>
						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
						<p><a href="#" class="button">More Details</a></p>
					</div>
					<div class="4u">
						<h2>Fusce ultrices fringilla</h2>
						<a href="#" class="image full"><img src="images/pic02.jpg" alt="" /></a>
						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
						<p><a href="#" class="button">More Details</a></p>
					</div>
					<div class="4u">
						<h2>Etiam rhoncus volutpat erat</h2>
						<a href="#" class="image full"><img src="images/pic03.jpg" alt="" /></a>
						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
						<p><a href="#" class="button">More Details</a></p>
					</div>
				</div>
			</div>
		</div>


		<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="4u">
						<section>
							<h2>Latest Posts</h2>
							<ul class="default">
								<li><a href="#">Pellentesque lectus gravida blandit</a></li>
								<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>
								<li><a href="#">Phasellus nibh pellentesque congue</a></li>
								<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
								<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>
							</ul>
						</section>
					</div>
					<div class="4u">
						<section>
							<h2>Ultrices fringilla</h2>
							<ul class="default">
								<li><a href="#">Pellentesque lectus gravida blandit</a></li>
								<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>
								<li><a href="#">Phasellus nibh pellentesque congue</a></li>
								<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
								<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>
							</ul>
						</section>
					</div>
					<div class="4u">
						<section>
							<h2>Aenean elementum</h2>
							<ul class="default">
								<li><a href="#">Pellentesque lectus gravida blandit</a></li>
								<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>
								<li><a href="#">Phasellus nibh pellentesque congue</a></li>
								<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
								<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>

		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				More Templates  - Collect from
			</div>
		</div>
	</body>
</html>
<script type="text/javascript">
   function search()
	 {
      var wordname = $("[name='wordname']").val()
		 // alert(wordname);

		  var dataa ={'wordname':wordname}
		  var dataa =  eval(dataa)
		 //alert(dataa)
			$.post("http://myblog.com/index/search",dataa, function (data)
			{

						//var	data = JSON.stringify(data); //JSON序列化形式->调用麻烦
						//var	data = eval(data);
						// if (data==null)
						// {
						// 	alert('no');
						// }else {
						// 	alert('yes');
						// }
						var str
						var strr
						for (var i = 0; i < data.length; i++) {
            // alert(data[i].art_id)
            // alert(data[i].content)
            strr = str
				    str = '<a href="http://myblog.com/index/index/art_id/'+data[i].art_id+'">'+data[i].content+ ' </a><br>  ';
            str = strr + str
						$('#good').html(str)

						}
			  //  alert(data[1].art_id);
      },'json');
	 }
</script>
