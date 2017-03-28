<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title># PHP Painkiller Sergei Philippov/ Full-ctack developer</title>
<?
	echo $this->Html->charset();
	echo $this->Html->meta('icon');
	echo $this->Html->css(array(
		'jquery.mCustomScrollbar',
		'prettyPhoto',
		'style',
		'extra'
	));

	$js = array(
		'jquery-1.6.4.min',
		'cufon-yui',
		'Yanone_Kaffeesatz_400-700.font',
		'jquery.prettyPhoto',
		'jquery.easing.1.3',
		'jquery.mousewheel',
		'jquery.jscrollpane',
		'jquery.progression.1.3',
		'jquery.text-effects',
		'jquery.mCustomScrollbar.concat.min',
	);
	if (TEST_ENV || !isset($isHome)) {
		$js[] = 'custom2';
	} else {
		$js[] = 'custom';
	}
	echo $this->Html->script($js);

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
?>
</head>

<body>
<!-- wrappage begin here -->
<div id="wrappage">
	<!-- container begin here -->
	<div class="container">

		<div class="top">
			<div class="energy">
			</div>
			<div class="top-block">
				<a href="/" class="logo">
					# PHP PainKiller
				</a>

				<div class="bg-e-button"></div>
				<div class="bg-button"></div>
				<a href="" class="open">
					<img src="/img/flash.png" alt="" />
				</a>

				<ul class="contacts">
					<li><a href="#"><span class="icon skype"></span> <span>Sergei Phillipov</span></a></li>
					<li><a href="#"><span class="icon email"></span> <span>fyr@tut.by</span></a></li>
					<!--li><a href="#"><span class="icon phone"></span> <span>+37529123456</span></a></li-->
				</ul>
				<p class="subText">Избавляю от головной боли на веб-проектах</p>
			</div>
		</div>

		<!-- center block begin here -->
		<div class="center-block">
			<div class="scanner clearfix">
				<div class="scanner-box">
					<div class="scanner-line"></div>
				</div>

				<ul class="data">
					<li class="search"># wait... identify... </li>
					<li class="search-d"># / > Sergei Philippov</li>
					<li class="search-d"># / > web-developer</li>
					<li class="search-d"># / > access granted...</li>
				</ul>
			</div>

			<div class="main">
				<div class="handle closed">&laquo;</div>
				<div class="mobileMenu closed">
					<?=$this->element('menu')?>
				</div>

				<div class="load"></div>
				<div class="shut-left"></div>
				<div class="shut-right"></div>

				<div class="page">
					<div class="box-left">
						<div class="info">
							<!--
							<ul class="socicon left">
								<li>
									<a href="#">
										<img src="/img/facebook.png" alt="" />
									</a>
								</li>
								<li>
									<a href="#">
										<img src="/img/twitter.png" alt="" />
									</a>
								</li>
								<li class="last">
									<a href="#">
										<img src="/img/dribbble.png" alt="" />
									</a>
								</li>
							</ul>
							-->
							<?=$this->element('who')?>
						</div>
						<?=$this->element('menu')?>
					</div>

					<div class="cont">
						<div id="about" class="box left">
							<div class="box-content">
								<div class="info">
									<?=$this->element('who')?>
								</div>
								<div class="main-content">
									<?=$this->fetch('content')?>
								</div>
							</div>
						</div>

						<div id="resume" class="box left">
							<div class="box-content">
								<?=$this->element('skills');?>
							</div>
						</div>

						<div id="portfolio" class="box left">
							<div class="box-content">
								<?=$this->element('portfolio');?>
							</div>
						</div>

						<div id="contact" class="box left">
							<div class="box-content-c left">
								<div class="cont-block left">
									<h3>
										# Contact
									</h3>
									<p class="sub">
										Lorem ipsum dolor sit amet
									</p>
									<p>
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
										doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
										veritatis et quasi architecto beatae vitae dicta sunt explicabo.
									</p>
									<ul class="contact">
										<li>
											John Doe
										</li>
										<li>
											Chicago, IL, 111 Webdev St
										</li>
										<li>
											Phone: 111-11-11
										</li>
										<li>
											Site: www.dev.com
										</li>
										<li>
											Email: web@dev.com
										</li>
										<li>
											Download
											<a href="#">
												vCard
											</a>
										</li>
									</ul>
								</div>
								<div class="cont-block left last">
									<div class="contactusb">
										<form action="#" id="contactus" method="post">
											<div>
												<label for="name">
													Name
												</label>
												<input type="text" name="name" class="textfield req-string" id="name" value="" />
												<label for="email">
													E-mail
												</label>
												<input type="text" name="email" class="textfield req-email" id="email" value="" />
												<label for="message">
													Message
												</label>
												<textarea name="message" id="message" class="textarea req-string" cols="8" rows="12"></textarea>
												<button id="send" type="submit">
													send message
												</button>
											</div>
										</form>
									</div>
                                        <span class="sending">
                                            send...
                                        </span>
									<div class="mess center">
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>

		</div>


		<div class="bottom">
			<div class="bottom-block">
				<h1 class="left">Blog of professional web-developer</h1>
				<h5 class="right">Personal site of Sergei Philippov (aka PHP PainKiller)</h5>
			</div>
		</div>
		<!-- bottom block end here -->
	</div>
	<!-- container end here -->
</div>
<!-- wrappage end here -->
<?
	if (!TEST_ENV) {
?>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">
			(function (d, w, c) {
				(w[c] = w[c] || []).push(function() {
					try {
						w.yaCounter43226444 = new Ya.Metrika({
							id:43226444,
							clickmap:true,
							trackLinks:true,
							accurateTrackBounce:true
						});
					} catch(e) { }
				});

				var n = d.getElementsByTagName("script")[0],
					s = d.createElement("script"),
					f = function () { n.parentNode.insertBefore(s, n); };
				s.type = "text/javascript";
				s.async = true;
				s.src = "https://mc.yandex.ru/metrika/watch.js";

				if (w.opera == "[object Opera]") {
					d.addEventListener("DOMContentLoaded", f, false);
				} else { f(); }
			})(document, window, "yandex_metrika_callbacks");
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/43226444" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
<?
	}
?>
</body>
</html>