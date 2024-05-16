<?php 

include "config.php";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="SYNDVLaLnEMOsuv5vPYCkMMaNWaC4hFuVqSoFIaz">
    <meta name="viewport" content="width=width, height=height">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $server_name; ?> </title>
    <meta property="og:site_name" content=" <?php echo $server_name; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content=" <?php echo $server_name; ?>">
    <!-- <meta property="og:description" content="Evolve Role Play - Игровой сервер по игре Grand Theft Auto San Andreas на основе мультиплеера SA:MP">
    <meta name="description" content="Игровой сервер по игре Grand Theft Auto San Andreas на основе мультиплеера SA:MP">
    <meta name="keywords" content="evolverp, evolve, evolve samp, role play, roleplay, samp сервер, gta san andreas, gta samp"> -->
    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->
 <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/evolve.css">
     <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/loading-bar.min.css">
     <script src="js/loading-bar.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/ui.js"></script> 
    <script>
        new WOW().init();
    </script>
</head>
<body id="body" style="font-family: vz;">

<?php if($cr == "@ShayanXDD - @Diamond_Gaming") { ?>





<style>
	.btn {
		transition: all 0.3s ease-in-out;
		font-family: "Dosis", sans-serif;
	  }
	  
	  .btn {
		width: 90px;
		height: 35px;
		border-radius: 50px;
		background-image: linear-gradient(135deg, #feb692 0%, #ea5455 100%);
		box-shadow: 0 20px 30px -6px rgba(238, 103, 97, 0.5);
		outline: none;
		cursor: pointer;
		border: none;
		font-size: 24px;
		color: white;
	  }
	  
	  .btn:hover {
		transform: translateY(3px);
		box-shadow: none;
	  }
	  
	  .btn:active {
		opacity: 0.5;
	  }




	
</style>









	<div id="wrapper">
    <!-- NavMain Bootstrap 4 -->
    <div id="navbar" class="navMain--wrapper">
    <nav class="navbar navbar-expand-lg navMain">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMainToggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <img src="images/burger.png" alt="" width="100%">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navMainToggler">
            <a class="navbar-brand" >
                <!-- <img src="images/logo.png" alt="evolve role play logo png"> -->
            </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 flex-grow-1 justify-content-center">
                <li class="nav-item">
                    <button class="btn" href="#" onclick="contact()" style="font-family: vz; font-size:90%; color:white;">انجمن</button>
                    <div class="nav-item-hover" style="opacity: 0;">
                        <div class="nav-item-hover-circle"></div>
                        <div class="nav-item-hover-circle"></div>
                        <div class="nav-item-hover-circle"></div>
                    </div>
                </li>
                <li class="nav-item">
                    <button onclick="contact()" class="btn" href="#" style="font-family: vz;font-size:90%; color:white;">فروشگاه</button>
                    <div class="nav-item-hover" style="opacity: 0;">
                        <div class="nav-item-hover-circle"></div>
                        <div class="nav-item-hover-circle"></div>
                        <div class="nav-item-hover-circle"></div>
                    </div>
                </li>
                <li class="nav-item">
                    <button class="btn" href="/donate" onclick="contact()" style="font-family: vz;font-size:90%; color:white;" > اخبار سرور</button>
                    <div class="nav-item-hover" style="opacity: 0;">
                        <div class="nav-item-hover-circle"></div>
                        <div class="nav-item-hover-circle"></div>
                        <div class="nav-item-hover-circle"></div>
                    </div>
                </li>
				<li class="nav-item">
                    <a class="btn" href="#" style="font-family: vz;font-size:90%; color:white;"> خانه</a>
                    <div class="nav-item-hover" style="opacity: 0;">
                        <div class="nav-item-hover-circle"></div>
                        <div class="nav-item-hover-circle"></div>
                        <div class="nav-item-hover-circle"></div>
                    </div>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="/roulette">Рулетка</a>
                    <div class="nav-item-hover" style="opacity: 0;">
                        <div class="nav-item-hover-circle"></div>
                        <div class="nav-item-hover-circle"></div>
                        <div class="nav-item-hover-circle"></div>
                    </div>
                </li> -->
            </ul>
                        <ul class="my-2 my-lg-0">
                <li class="nav-item nav-item-ucp">
                    <img src="images/ucp-hover-icon.png" alt="">
                    <a  style="font-family: vz; font-size:90%; " href="#">ورود/ثبت نام</a>
                </li>
            </ul>
                    </div>
    </nav>
    </div>
<style>
	.pl
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    white 0%,
    white 29%,
    red 67%,
    Black 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
} 

.pl {
	font-size: 120%;
}

</style>

    <!-- NavMain Bootstrap 4 end -->
    <div class="header--wrapper">
        <header class="headerMain">
            <div class="row">
                <div class="col-12">
                    <h1 class="headerMain--headline" ><?php echo $server_name; ?></h1>
                    <h2 class="headerMain--slogan"  style="font-family: vz;color:white;">  <?php echo $header_text; ?> <br>  <a class="pl" style="margin-left: 5%; " href="samp://<?php include("config.php"); echo  "$ip" . ":" . "$port" ; ?>"><span><?php include("querysamp.php"); ?><b > / 1000 </b></span></a>  </h2>
                    <a  class="btn-start" role="button" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:90%;">
                        <button style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:120%;" onclick="copyText()" > IP : <?php echo $ip_copy; ?> </button>
                        <button style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:120%;" onclick="copyText()" > IP : <?php echo $ip_copy; ?> </button>
                    </a>
					 <!-- <a href="#connect" style="margin-left: 25%; margin-bottom:20%;" class="btn-start" role="button">
                        <button style="margin-left: 25%; margin-bottom:20%;">Как начать играть</button>
                        <button style="margin-left: 25%; margin-bottom:20%;">Как начать играть</button>
                    </a>  -->
                </div>
            </div>
			
		
            <!-- <a href="https://www.youtube.com/watch?v=V3HL-klIDCU"><img src="images/watch-promo.png" class="headerMain--watch" alt="evolve role play car png"></a> -->
        </header>
    </div>
    <div class="advantages--wrapper" id="connect">
		<section class="advantages--content">
				<div class="advantages--content__headline wow fadeInDown" data-wow-duration="2s" data-wow-delay="0s" data-wow-offset="10" data-wow-iteration="1">
						<h2 class="pl"> <?php echo $server_name; ?> </h2>
				</div>
				<div class="advantages--guide">
						<section id="samp" style="margin-bottom:25%; margin-left:4%; font-family: vz;" class="advantages-step wow fadeInLeft">
		<style>
			@font-face {
				font-family: vz;
				src: url(css/fonts/Vazir-Regular.eot);
				src: url(css/fonts/Vazir-Regular.woff) format('woff'),
				url(css/fonts/Vazir-Regular.ttf) format('ttf'),
				url(css/fonts/Vazir-Regular.woff2) format('woff2');
			}
		</style>						<h2 style="font-family: vz;">اموزش نصب سمپ برای اندروید</h2>
								<p style="font-family: vz;">  روی دکمه دانلود کلیک کنید و سمپ لانچر را بریزید و دیتا ان را از داخل برنامه کامل نصب کنید و برید داخل بخش سرور ها و قسمت موارد دلخواه یا همون (Favorites) <br> بعد روی دکمه اد سرور کلیک کنید و ایپی سرور رو داخل فیلدی که میاره وارد کنید و روی دکمه اد بزنید حالا سرور اظافه شده روی سرور کلیک کنید اسمی که میخواید باهاش وارد بازی بشید رو بنویسید و روی پلی بزنید  <br>   <a href<?php echo $samp_apk_link_and; ?> style="margin-left: 20%; margin-top:5%; "class="pl">!برای دانلود کلیک کنید</a>  </p>
								<a href="<?php echo $samp_apk_link_and; ?>" >
										
								</a>
						</section>
						<style>

						</style>
						<section style="margin-bottom:34%; margin-right: 5%;" class="advantages-step wow fadeInUp">
						
								<!--  -->
								<h2 style="font-family: vz;">اموزش دانلود سمپ برای پیسی</h2>
								<p style="font-family:vz;"> <?php echo $how_to_install_pc; ?> </p>
								<a href="<?php echo $samp_apk_link_pc; ?>">
										<div class="advantages-step__icon">
												<img src="images/download-icon.png" alt="">
										</div>
								</a>
						</section>
						<script>
 function copyText() { var textToCopy = "<?php echo $ip_copy; ?>"; var textArea = document.createElement("textarea"); textArea.value = textToCopy; document.body.appendChild(textArea); textArea.select(); document.execCommand("copy"); document.body.removeChild(textArea); alert("متن با موفقیت کپی شد!"); } 
						</script>
						
				</div>
				
		</section>
</div>
<div class="pluses--wrapper">
		<main class="pluses--content">
				<div class="pluses--content__headline wow fadeInDown">
						<h2 style="font-family: vz;"><?php echo $server_name; ?><br> چرا <?php echo $server_name_fa; ?>؟ </h2>
				</div>
				<div class="pluses--content--pluses">
						<section class="pluses--content--pluses__plus wow fadeInUp" data-wow-delay="1.5s">
								<img src="images/smile-icon.png" alt="">
								<h2 style="font-family: vz;">ساعت ها سرگرمی</h2>
								<p style="font-family: vz;">
                                <?php echo $mazayaye_server_saatHa_sargarmi; ?>
								</p>
						</section>
						<section class="pluses--content--pluses__plus wow fadeInUp" data-wow-delay="0.5s">
								<img src="images/puzzles-icon.png" alt="">
								<h2 style="font-family: vz;"> اپ تایم 24/7 </h2>
								<p style="font-family: vz;">
                                <?php echo $mazayaye_server_UpTime_Server; ?>
								</p>
						</section>
						<section class="pluses--content--pluses__plus wow fadeInDown" data-wow-delay="1s">
								<img src="images/online-icon.png" alt="">
								<h2 style="font-family: vz;"> پیشرفت <?php echo $server_name_fa; ?>  </h2>
								<p style="font-family: vz;">   <?php echo $mazayaye_server_UpTime_Server; ?></p>
															
						</section>
						<!-- <section class="pluses--content--pluses__plus wow fadeInDown" data-wow-delay="2s">
								<img src="images/update-icon.png" alt="">
								<h2>Команда</h2>
								<p>
									Опытные разработчики<br>
									Тех.поддержка игроков <br>
									Администрация с огромным опытом <br>
									Гарантия безопасности вашего аккаунта, любыми доступными способами
								</p>
						</section> -->
				</div>
		</main>
</div>
<div class="social--wrapper">
		<div class="social--content">
				<div class="social--content--headline wow fadeInDown">
						<h2 style="font-family: vz;" class=""> 
								لینک های شبکات اجتماعی ما
						</h2>
				</div>
				<div class="social--content--contacts">
						<section class="social--content--contacts__contact wow fadeInLeft" data-wow-delay="0.3s" style="">
								
								<img src="images/tel.png" height="100px" width="100px" style="margin-left: 31.3%;"		 alt="">
								<a style="font-family: vz;" href="<?php echo $server_tel_chanel;?>"role="button">
                                چنل تلگرام ما	
								</a>
						</section>
						<section class="social--content--contacts__contact wow fadeInLeft" data-wow-delay="0.3s" style="">
								
                        <img src="images/ins.png" width="100px" height="100px" style="margin-left: 33.5%; " alt="">
								<a onclick="" style="font-family: vz;" href="<?php echo $server_tel_chanel;?>" role="button">
                                چنل اینستاگرام ما	
        </a>
						</section>
						<section style="margin-bottom: 10%;" class="social--content--contacts__contact wow fadeInLeft" data-wow-delay="0.9s" >
								
								
								<img src="images/minimal.png" height="100px" width="100px" style="margin-left: 32.3%; margin-top:5%" alt="">
								<a style="font-family: vz;" href="<?php echo $server_rubika_chanel;?>" role="button">
                                چنل روبیکا ما
								</a>
						</section>
						<section style="margin-bottom: 10%;" class="social--content--contacts__contact wow fadeInLeft" data-wow-delay="0.9s" >
								
								
								<img src="images/discord.png" height="110px" width="110px" style="margin-left: 32.3%;" alt="">
								<a style="font-family: vz;"  href="<?php echo $server_disc_chanel;?>" role="button">
                               چنل دیسکورد ما
        </a>
						</section>
				</div>
				<script>
				function contact() {
alert(" بزودی | Coming Soon ");


}
 
				</script>
				<style>

				button{
		  display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -ms-flex-item-align: center;
              align-self: center;
          width: 145px;
          height: 32px;
          background-color: white;
          border-radius: 15px;
          font: 600 14px 'GothamPro';
          color: #246de6;
          text-transform: uppercase;
          line-height: 32px;
          -webkit-transition: 0.15s all;
          -o-transition: 0.15s all;
          transition: 0.15s all; 
		}
		button:hover {
            text-decoration: none;
            -webkit-box-shadow: 0px 3px 5px 2px rgba(255, 255, 255, 0.5);
                    box-shadow: 0px 3px 5px 2px rgba(255, 255, 255, 0.5); }
		  </style>
				<!-- <img src="images/car.png" alt="" class="social--car wow slideInRight"> -->
		</div>
</div>
<section class="window-connect" style="display:none; z-index: 2;">
	<div class="window-connect-2" style="display: flex; flex-direction: row; margin: auto;">
		<div class="window-connect-persons" style="z-index: 5; position: absolute; left: 0; bottom: 0; opacity: 0.7; width: 100%; text-align: center;"><img src="images/connect.png"></div>
		<div class="window-connect-block" style="z-index: 6; display: flex; flex-direction: column; width: 400px; margin-left: 50px; margin-right: 50px; background-color: #c31c35; border-radius: 49px; align-items: center; padding: 20px;">
			<h2 style="font: 600 22px 'GothamPro'; color: #fff;">С ГОЛОСОВЫМ ЧАТОМ
			<p style="color: #cacaca; font: 600 14px 'GothamPro'; text-align: center;">Станьте частью большого сообщества игроков и заводи новые знакомства, участвуй в голосовых мероприятиях и закрепляй свои позиции.</p>
			<button class="button--download" onclick="window.location = 'https://drive.google.com/file/d/1IUVl6zIW3VwEMNdNzkQlP1Yu4GUebaeR/view';" style="">Мне это нравится</button>
		</h2></div>
		<div class="window-connect-block" style="z-index: 6; display: flex; flex-direction: column; width: 400px; margin-left: 50px; margin-right: 50px; background-color: #c31c35; border-radius: 49px; align-items: center; padding: 20px;">
			<h2 style="font: 600 22px 'GothamPro'; color: #fff;">БЕЗ ГОЛОСОВОГО ЧАТА
			<p style="color: #cacaca; font: 600 14px 'GothamPro'; text-align: center;">Вам будет доступен полный функционал, но увы во многих моментах, вы сможете отвечать, только в письменной форме чата. Может, все же первый вариант?</p>
			<button class="button--download" onclick="window.location = 'https://drive.google.com/file/d/1Yxj5dsaMvZMdXbDPSzQOuWhnlvyBnYs0/view';">Выберу этот вариант</button>
		</h2></div>
	</div>
</section>
<script src="js/landing.js"></script>
    <script>
    
const registerOpenTab = () => {
  let tabsOpen = 1;
  while (localStorage.getItem('openTab' + tabsOpen) !== null) {
    tabsOpen++;
  }
  localStorage.setItem('openTab' + tabsOpen, 'open');
  if (localStorage.getItem('openTab2') !== null) {
      // console.log delete evolve
  }
}

const unregisterOpenTab = () => {
  let tabsOpen = 1;
  while (localStorage.getItem('openTab' + tabsOpen) !== null) {
    tabsOpen++;
  }
  localStorage.removeItem('openTab' + (tabsOpen - 1));
}

window.addEventListener('load', registerOpenTab);
window.addEventListener('beforeunload', unregisterOpenTab);
</script>
<?php include "footer.php"; ?>

<?php } else { echo 'متغیر $cr از پوشه کانفیگ را تغییر دادید'; } ?>
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50330155 = new Ya.Metrika2({
                    id:50330155,
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
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="50330155" style="position:absolute; left:-9999px;" alt=""></div></noscript>
</body>
</html>
