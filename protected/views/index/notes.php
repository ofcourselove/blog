<!DOCTYPE HTML>

<html>
	<head>
		<title>my notes</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!-- <link href='http://fonts.useso.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'> -->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<!-- <script src="http://ajax.useso.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/skel.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/skel-panels.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/init.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/skel-noscript.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/style-desktop.css">

		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
<body>


		<!-- Header -->
		<div id="header">
			<div class="container">

				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">my notes</a></h1>
					<span> by ofcourse</span>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="/index">主页</a></li>
						<li class="active"><a href="/index/notes">笔记</a></li>
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

					<!-- Sidebar -->
					<div id="sidebar" class="4u" style="width:330px;">
						<section>
							<header>
								<h2>Pellentesque vulputate</h2>
							</header>
							<ul class="style">
								<li>
									<p class="posted">August 11, 2002  |  (10 )  Comments</p>
									<img src="images/pic04.jpg" alt="" />
									<p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
								</li>

							</ul>
						</section>
					</div>

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
				必出可以有一行——————————————————————————————————————————————————————————————————————
			</div>
		</div>

	</body>
</html>
