<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Home Page</title>

	<!--Bootstrap CDN---->

	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">

	<!--Font Awesome---->

	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Mulish',sans-serif;

		}

		.grand_parent

		{
			width: 100%;
			height: 100%;
			background: #dfe6e9;
			color: white;
		}
/*
		h1

		{

			font-size: 4rem;
			padding: 50px 0;
			text-align: center;
			color: #000;
		}

		*/

		p

		{

			text-align: center;
		}

		.parents{

			width: 100%;
			height: auto;
			margin: auto;
			display: flex;
			justify-content: space-around;
			flex-wrap: wrap;
			transition: all 0.2 linear;
		}

		.child{

			height: 120px;
			background:white;
			box-shadow: 0 0 20px #bac3c3;
			flex: 1 1 150px;
			margin: 20px;
		}

		.child:first-child{

			border:1px solid #1ebba3;

			background:white;
		}

		.child:last-child{

			background:white;
			border:1px solid indianred;
		}

		@media(max-width: 768px){

			.grand_parent{

				height: auto;
			}
		}


@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');

.offset:before{
	height: 3.8rem;
	margin-top: -3.8rem;
	content: "";
	display: block;
}

/*---navbar----*/

.navbar{

	text-transform: uppercase;
	font-weight: 700;
	font-size: 1.1rem;
	letter-spacing: .2rem;
	/*background: #1ebba3;*/
	background: rgba(0,0,0,.5)!important;
}

.navbar-brand img{

	height: 2rem;


}

.navbar-nav li{

	padding-right: .7rem;
}

.navbar-nav .nav-item .nav-link{

	color: white;
}

.navbar-nav .nav-item .nav-link.active
.navbar-nav .nav-item .nav-link:hover{
	color: #1ebba3;
}

/*---Image slider---*/

.carousel-item{

	height: 100vh;
}

/*------course section------*/

.narrow{

	width: 75%;
	margin:0 auto;
	padding-top: 2rem;
}

.btn-md{

	border-radius: 0;
	border-width: medium;
	padding: .6rem 1.1rem;
	margin: 1rem;
	text-transform: uppercase;
}

.carousel-caption{

	position: absolute;
	top: 38%;
	text-transform: uppercase;
	width: 100%;
	right: 0;
	left: 0;
}

.carousel-caption h1{

	font-size: 3.8rem;
	font-weight: 700;
	letter-spacing: .1rem;
	text-shadow: .1rem .1rem .8rem #1ebba3;
}

.btn-lg{

	border-width: medium;
	border-radius: 0;
	font-size: 1rem;
}

.jumbotron{

	border-radius: 0;
	padding: 3rem 0 2rem;
}

h3 .heading{

	font-size: 1.9rem;
	font-weight: 700;
	text-transform: uppercase;
	padding-bottom: 1.9rem;


}

.heading-underline{

	width: 3rem;
	height: .2rem;
	background-color: #1ebba3;
}



	</style>
</head>
<body>

	<!--Home Start--->

	<div id="home">

		<!--Navigation--->

		<nav class="navbar navbar-expand-md navbar-dark  fixed-top" style="background-color: #1ebba3;">

			<a class="navbar-brand" href="index.html"><img src="images/l.jpg" ></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">

				<ul class="navbar-nav ml-auto" >
					<li class="nav-item">
						<a class="nav-link" href="#home" style="color: white; padding-top: .8rem;"><i class="fas fa-home"></i>&nbsp;Home</a>
					</li>

					<li class="nav-item" >
						<a class="nav-link" href="#course" style="color: white; padding-top: .8rem;">About</a>
					</li>


					<li class="nav-item dropdown">

					<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">Newspapers</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">

						<a href="#banglanewspaper" class="dropdown-item">All Bangla Newspaper</a>
						<div class="dropdown-divider"></div>

						<a href="#onlinenewspaper" class="dropdown-item">All Online Newspaper</a>

						<div class="dropdown-divider"></div>
						<a href="#localnewspaper" class="dropdown-item">All Local Newspaper</a>

						<div class="dropdown-divider"></div>
						<a href="#internationalnewspaper" class="dropdown-item">All International Newspaper</a>

						<div class="dropdown-divider"></div>
						<a href="#tvchannel" class="dropdown-item">All TV Channel</a>

						<div class="dropdown-divider"></div>

						<a href="#radiostation" class="dropdown-item">All Radio Station</a>

						<div class="dropdown-divider"></div>

						<a href="#indiannewspaper" class="dropdown-item">Popular Indian Newspaper</a>

						<div class="dropdown-divider"></div>

						<a href="#magazine" class="dropdown-item"> Popular Magazine</a>

						<div class="dropdown-divider"></div>

						<a href="#jobsite" class="dropdown-item"> Popular Job Site</a>

						<div class="dropdown-divider"></div>

						<a href="#education" class="dropdown-item"> Popular Educational Site</a>
						
					</div>
					
				</li>

					<li class="nav-item">
						<a class="nav-link" href="#team" style="color: white; padding-top: .8rem;">News Headlines</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#contact" style="color: white; padding-top: .8rem;">Contact</a>
					</li>
					
				</ul>
				
			</div>
			
		</nav>

		
	</div>

	<!--Home End-->


	<!---All Bangla Newspaper--->

	<div id="banglanewspaper" class="offset">

		<div class="jumbotron container-fluid">

			<div class="container" style="background-color: white; border:1px solid #1ebba3; border-radius: 10px;">

				<div class="col-12 text-center">
			<h3 class="heading" style="font-size: 1.5rem; font-weight: 700; text-transform: uppercase; padding-bottom: 1rem; padding-top: 1rem; color:#1ebba3; ">All Bangla Newspapers</h3>
			<div class="heading-underline" style="height: .4rem; width: 4.5rem; background-color: #1ebba3; margin: 0 auto .5rem;"></div>
		</div>


				<div class="grand_parent">

		

		<div class="parents">
			<div class="child text-center">

				<a  href="https://www.prothomalo.com/" target="_blank"><img alt="prothom-alo" src="images/img/prothom-alo.png"></a>
				<p>Prothom Alo</p>
				
			</div>

			<div class="child text-center">

				<a  href="https://www.bd-pratidin.com/" target="_blank" ><img alt="bd-pratidin" src="images/img/bd-pratidin.png"></a>

				<p>Bd Protidin</p>
				
			</div>

			<div class="child text-center">

				<a  href="https://bangla.bdnews24.com/" target="_blank" ><img alt="bdnews24" src="images/img/bdnews24.png"></a>

				<p>BD News-24</p>
				
			</div>

			<div class="child text-center">

				<a  href="https://www.kalerkantho.com/" target="_blank" ><img alt="kalerkantho" src="images/img/daily-kalerkantha.png"/></a>

				<p>Kaler-kantho</p>
				
			</div>

		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.dailyjanakantha.com/" target="_blank"><img src="images/img/janakantha.png" alt="dailyjanakantha" /></a>

				<p>Janakantha</p>
				
			</div>

			<div class="child text-center">

				<a  href="https://www.jaijaidinbd.com/" target="_blank"><img alt="jjdin" src="images/img/jjdin.png"></a>

				<p>jjdin</p>
				
			</div>

			<div class="child text-center">

				<a  href="https://www.dailyinqilab.com/" target="_blank"><img alt="the-daily-inqilab" src="images/img/inqilab.png"></a>

				<p>Inqilab</p>
				
			</div>

			<div class="child text-center">

				<a  href="https://www.jugantor.com/"  target="_blank"><img alt="jugantor" src="images/img/jugantor.png"></a>

				<p>Jugantor</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a  href="https://www.ittefaq.com.bd/" target="_blank" ><img alt="ittefaq" src="images/img/itteafaq.png"></a>

				<p>Ittefaq</p>
				
			</div>

			<div class="child text-center">

				<a href="https://mzamin.com/" target="_blank"><img src="images/img/mn-zamin.png" alt="mzamin" /></a>

				<p>Mzamin</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.dailynayadiganta.com/" target="_blank"><img src="images/img/nayagigonto.png" alt="nayadigonto" /></a>

				<p>Nayadigonto</p>
				
			</div>

			<div class="child text-center">

				<a href="https://samakal.com/" target="_blank"><img src="images/img/samakal.png" alt="samakal" /></a>

				<p>Samakal</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.bhorerkagoj.com/" target="_blank" ><img src="images/img/daily-vorerkagoj.png" alt="bhorerkagoj"></a>

				<p>Vorer-Kagaj</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.amadershomoy.com/" target="_blank"><img src="images/img/amader-somoy.png" alt="amader-somoy"></a>

				<p>Amader-Somoy</p>
				
			</div>

			<div class="child text-center">

				<a href="https://khoborpatrabd.com/" target="_blank"><img src="images/img/bd-khoborpotro.png" alt="daily-khoborpotro"></a>

				<p>Khobor-Patroo</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.bd-journal.com/" target="_blank"><img src="images/img/bd-jarnal.png" alt="bd-jarnal"></a>

				<p>BD-Journal</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.manobkantha.com.bd/" target="_blank"><img src="images/img/mn-kantha.png" alt="mn-kantha"></a>

				<p>Mn-Kantha</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.daily-bangladesh.com/" target="_blank"><img src="images/img/daily-bd.png" alt="daily-bd"></a>

				<p>Daily Bangladesh</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.alokitosakal.com/" target="_blank"><img src="images/img/daily-alokitosokal.png" alt="daily-alokitosokal"></a>

				<p>Alokito-Sokal</p>
				
			</div>

			<div class="child text-center">

				<a href="https://sangbadchorcha.com/" target="_blank"><img src="images/img/sangbad-charcha.png" alt="daily-alokitosokal"></a>

				<p>Sangbad-Charcha</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child">

				<p>Child One</p>
				
			</div>

			<div class="child">

				<p>Child Two</p>
				
			</div>

			<div class="child">

				<p>Child Three</p>
				
			</div>

			<div class="child">

				<p>Child Four</p>
				
			</div>

			
		</div>


		
	</div>
			</div>

			

	
		</div><!--end jumbotron--->
		
	</div>


	<!--End Bangla Newspaper---->


	<!---All Online Newspaper--->

	<div id="onlinenewspaper" class="offset">

		<div class="jumbotron container-fluid">

			<div class="container" style="background-color: white; border:1px solid #1ebba3; border-radius: 10px;">

			<div class="col-12 text-center">
			<h3 class="heading" style="font-size: 1.5rem; font-weight: 700; text-transform: uppercase; padding-bottom: 1rem; padding-top: 1rem; color:#1ebba3; ">All Online Newspapers</h3>
			<div class="heading-underline" style="height: .4rem; width: 4.5rem; background-color: #1ebba3; margin: 0 auto .5rem;"></div>
		    </div>

				

				<div class="grand_parent">

		

		<div class="parents">
			<div class="child text-center">

				<a href="https://www.onenewsbd.com/" target="_blank"><img src="images/online_news/1news-bd.png" alt="1news-bd"></a>

				<p>One News BD</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.jagonews24.com/" target="_blank"><img src="images/online_news/jago-bd.png" alt="jago-news24"></a>

				<p>Jago News 24</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.banglanews24.com/" target="_blank"><img src="images/online_news/bangla-news.png" alt="bangla-news24">

				</a><p>Bangla News 24</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.bdroyters.com/" target="_blank"><img src="images/online_news/bd-royter.png" alt="bd-royter"></a>

				<p>BD Royter</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.breakingnews.com.bd/" target="_blank"><img src="images/online_news/braking-news.png" alt="braking-news"></a>

				<p>Braking News</p>
				
			</div>

			<div class="child text-center">

				<a href="https://barta24.com/" target="_blank"><img src="images/online_news/barta24.png" alt="barta24"></a>

				<p>Barta 24</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.bd24live.com/bangla/" target="_blank"><img src="images/online_news/bd24live.png" alt="bd24live"></a>

				<p>BD-24live</p>
				
			</div>

			<div class="child text-center">

				<a href="http://www.bartaprokash.com/" target="_blank"><img src="images/online_news/baerta-prokash.png" alt="baerta-prokash"></a>

				<p>Barta Prokash</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.risingbd.com/" target="_blank"><img src="images/online_news/risingbd.png" alt="risingbd"></a>

				<p>Rising BD</p>
				
			</div>

			<div class="child text-center">

				<a href="http://www.bbarta24.net/" target="_blank"><img src="images/online_news/bd-barta24.png" alt="bd-barta24"></a>

				<p>BD Barta 24</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.amarbangla365.com/" target="_blank"><img src="images/online_news/amar-bd.png" alt="amar-bd"></a>

				<p>Amar BD</p>
				
			</div>

			<div class="child text-center">

				<a href="https://sunbd24.com/" target="_blank"><img src="images/online_news/sunbd.png" alt="sunbd"></a>

				<p>Sun BD</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://sarabangla.net/" target="_blank"><img src="images/online_news/sara-bangla.png" alt="sara-bangla"></a>

				<p>Sara Bangla</p>
				
			</div>

			<div class="child text-center">

				<a href="http://www.dainikamadershomoy.com/" target="_blank"><img src="images/online_news/amader-somoy.png" alt="amader-somoy"></a>

				<p>Amader Somoy</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.uttarbangasambad.com/" target="_blank"><img src="images/online_news/uttor-bd.png" alt="uttor-bd"></a>

				<p>Uttor Bangla</p>
				
			</div>

			<div class="child text-center">

				<a href="https://somoyerdhara.com/" target="_blank"><img src="images/online_news/somoyer-dhara.png" alt="somoyer-dhara"></a>

				<p>Somoyer Dhara</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.manobkantha.com.bd/" target="_blank"><img src="images/img/mn-kantha.png" alt="mn-kantha"></a>

				<p>Mn Kantha</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.daily-bangladesh.com/" target="_blank"><img src="images/img/daily-bd.png" alt="daily-bd"></a>

				<p>Daily BD</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.alokitosakal.com/" target="_blank"><img src="images/img/daily-alokitosokal.png" alt="daily-alokitosokal"></a>

				<p>Alokito Sokal</p>
				
			</div>

			<div class="child text-center">

				<a href="https://sangbadchorcha.com/" target="_blank"><img src="images/img/sangbad-charcha.png" alt="daily-alokitosokal"></a>

				<p>Sangbad Charcha</p>
				
			</div>

			

			
		</div>


		
	</div>
			</div>

			

	
		</div><!--end jumbotron--->
		
	</div>


	<!--All Local Newspaper---->


	<div id="localnewspaper" class="offset">

		<div class="jumbotron container-fluid">

			<div class="container" style="background-color: white; border:1px solid #1ebba3; border-radius: 10px;">

			<div class="col-12 text-center">
			<h3 class="heading" style="font-size: 1.5rem; font-weight: 700; text-transform: uppercase; padding-bottom: 1rem; padding-top: 1rem; color:#1ebba3; ">All Local Newspapers</h3>
			<div class="heading-underline" style="height: .4rem; width: 4.5rem; background-color: #1ebba3; margin: 0 auto .5rem;"></div>
		    </div>

				
		<div class="grand_parent">

		

		<div class="parents">
			<div class="child text-center">

				<a href="https://sottosangbad.com/" target="_blank"><img src="images/local_news/sotto-sonbad.png" alt="sotto-sonbad"></a>

				<p>Sotto Songbad</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.jagonews24.com/bangladesh/rajshahi/naogaon" target="_blank"><img src="images/local_news/naogaon-today.png" alt="naogaon-today"></a>

				<p>Naogaon Today</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.jugantor.com/country-news/rajshahi/naogaon" target="_blank"><img src="images/local_news/naogaon-news.png" alt="naogaon-news"></a>


				<p>Naogaon News</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.naogaondorpon.com/" target="_blank"><img src="images/local_news/naogaon-dorpon.png" alt="naogaon-dorpon"></a>

				<p>Naogaon Dorpon</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.dailykaratoa.com/" target="_blank"><img src="images/local_news/korotoya.png" alt="daily-korotoya"></a>

				<p>Korotoya</p>
            </div>

				

			<div class="child text-center">

				<a href="https://rajshahinews24.com/" target="_blank"><img src="images/local_news/rj-news24.png" alt="rj-news24"></a>

				<p>Rj-News-24</p>

            </div>

				

			<div class="child text-center">

				<a href="https://www.rajshahirsomoy.com/" target="_blank"><img src="images/local_news/rj-somoy1.png" alt="rj-somoy"></a>

				<p>Rj-Somoy</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.suprovatbogura.com/" target="_blank"><img src="images/local_news/suprovat-bogra.png" alt="suprovat-bogra"></a>

				<p>Suprovat Bogra</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://dailyrangpur.com/" target="_blank"><img src="images/local_news/daily-rangpur.png" alt="daily-rangpur"></a>

				<p>Daily Rangpur</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.dhakatoday.com/" target="_blank"><img src="images/local_news/dhaka-today.png" alt="dhaka-today"></a>

				<p>Dhaka Today</p>
				
			</div>

			<div class="child text-center">

				<a href="https://rangpurtimes.com/" target="_blank"><img src="images/local_news/rangpur-times.png" alt="rangpur-times"></a>

				<p>Rangpur Times</p>
            </div>

				
				
			

			<div class="child text-center">

				<a href="https://amar-desh24.com/bangla/" target="_blank"><img src="images/local_news/amar-desh24.png" alt="amar-desh24"></a>

				<p>Amar Desh 24</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.gramerkagoj.com/" target="_blank"><img src="images/local_news/gramer-kagoj.png" alt="gramer-kagoj"></a>

				<p>Gramer Kagoj</p>
				
			</div>

			<div class="child text-center">

				<a href="https://dinajpurnews.com/" target="_blank"><img src="images/local_news/dinajpur-news.png" alt="dinajpur-news"></a>

				<p>Dinajpur News</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.dinajpurdorpon.com/" target="_blank"><img src="images/local_news/dinajpur-dorpon.png" alt="dinajpur-dorpon"></a>

				<p>Dinajpur Dorpon</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.dinajpur24.com/" target="_blank"><img src="images/local_news/dj-news24.png" alt="dj-news24"></a>

				<p>Dj News 24</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.ajkerkhulna.com/" target="_blank"><img src="images/local_news/ajker-dinajpur.png" alt="ajker-khulna"></a>

				<p>Ajker Khulna</p>
				
			</div>

			<div class="child text-center">

				<a href="https://khulnanchal.com/" target="_blank"><img src="images/local_news/khulna.png" alt="khulna"></a>

				<p>Khulnachal</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.dailykagojkolom.com/" target="_blank"><img src="images/local_news/kagoj-kolom.png" alt="kagoj-kolom"></a>

				<p>Kagoj Kolom</p>
				
			</div>

			<div class="child text-center">

				<a href="https://dailykaljoyi.com/" target="_blank"><img src="images/local_news/kaljoyi.png" alt="kaljoyi"></a>

				<p>Kaljoyi</p>
				
			</div>

			
		</div>


	


		
	</div>
			</div>

			

	
		</div><!--end jumbotron--->
		
	</div>


	<!--End Local Newspaper---->


	<!--International Newspaper-->

	<div id="internationalnewspaper" class="offset">

		<div class="jumbotron container-fluid">

			<div class="container" style="background-color: white; border:1px solid #1ebba3; border-radius: 10px;">

			<div class="col-12 text-center">
			<h3 class="heading" style="font-size: 1.5rem; font-weight: 700; text-transform: uppercase; padding-bottom: 1rem; padding-top: 1rem; color:#1ebba3; ">All International Newspapers</h3>
			<div class="heading-underline" style="height: .4rem; width: 4.5rem; background-color: #1ebba3; margin: 0 auto .5rem;"></div>
		    </div>

				

				<div class="grand_parent">

		

		<div class="parents">
			<div class="child text-center">

				<a href="https://metro.co.uk/" target="_blank"><img src="images/in_news/metro.png" alt="metro-news"></a>

				<p>Metro News</p>
				
			</div>

			<div class="child text-center">

				<a href="https://abcnews.go.com/" target="_blank"><img src="images/in_news/abc-news.png" alt="abc-news"></a>

				<p>Abc News</p>
				
			</div>

			<div class="child text-center">

				<a href="https://thebangladeshtoday.com/" target="_blank"><img src="images/in_news/bd-today.png" alt="bd-today"></a>

				<p>BD Today</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.usatoday.com/" target="_blank"><img src="images/in_news/usa-today.png" alt="usa-today"></a>

				<p>USA Today</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.nytimes.com/" target="_blank"><img src="images/in_news/newyork-times.png" alt="newyork-times"></a>

				<p>Newyork Times</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.thepeninsulaqatar.com/" target="_blank"><img src="images/in_news/paninsula.png" alt="paninsula"></a>

				<p>Paninsula</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.themoscowtimes.com/" target="_blank"><img src="images/in_news/moscow-times.png" alt="moscow-times"></a>

				<p>Moscow Times</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.theguardian.com/international" target="_blank"><img src="images/in_news/the-gradian.png" alt="the-gradian"></a>

				<p>The Gradian</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://dailynewsegypt.com/" target="_blank"><img src="images/in_news/daily-news-egypt.png" alt="daily-news-egypt"></a>

				<p>Daily Egypt</p>
				
			</div>

			<div class="child text-center">

				<a href="https://timesofindia.indiatimes.com/" target="_blank"><img src="images/in_news/india-times.png" alt="india-times"></a>

				<p>India Times</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.straitstimes.com/global" target="_blank"><img src="images/in_news/straits-times.png" alt="straits-times"></a>

				<p>Straits Times</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.thedailystar.net/" target="_blank"><img src="images/in_news/the-dailystar.png" alt="the-dailystar"></a>

				<p>The Daily star</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.japantimes.co.jp/" target="_blank"><img src="images/in_news/japan-times.png" alt="japan-times"></a>

				<p>Japan Times</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.afp.com/en" target="_blank"><img src="images/in_news/afp.png" alt="afp-news"></a>

				<p>AFP News</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.hindustantimes.com/" target="_blank"><img src="images/in_news/hindustan-times.png" alt="hindustan-times"></a>

				<p>Hindustan Times</p>
				
			</div>

			<div class="child text-center">

				<a href="http://www.chinadaily.com.cn/" target="_blank"><img src="images/in_news/china-daily.png" alt="china-daily"></a>

				<p>China Daily</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.theborneopost.com/" target="_blank"><img src="images/in_news/broneo-post.png" alt="broneo-post"></a>

				<p>Broneo Post</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.thetimes.co.uk/" target="_blank"><img src="images/in_news/sunday-times.png" alt="sunday-times"></a>

				<p>Sunday Times</p>
				
			</div>

			<div class="child text-center">

				<a href="https://news.yahoo.com/" target="_blank"><img src="images/in_news/yahoo-news.png" alt="yahoo-news"></a>

				<p>Yahoo News</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.daily-sun.com/" target="_blank"><img src="images/in_news/daily-sun.png" alt="daily-sun"></a>

				<p>Daily Sun</p>
				
			</div>

			
		</div>


	
	</div>
			</div>

			

	
		</div><!--end jumbotron--->
		
	</div>


	<!--End International Newspaper---->


	<!---Popular Indian Newspaper-------->

	<div id="indiannewspaper" class="offset">

		<div class="jumbotron container-fluid">

			<div class="container" style="background-color: white; border:1px solid #1ebba3; border-radius: 10px;">

			<div class="col-12 text-center">
			<h3 class="heading" style="font-size: 1.5rem; font-weight: 700; text-transform: uppercase; padding-bottom: 1rem; padding-top: 1rem; color:#1ebba3; ">Popular Indian Newspapers</h3>
			<div class="heading-underline" style="height: .4rem; width: 4.5rem; background-color: #1ebba3; margin: 0 auto .5rem;"></div>
		    </div>

				

				<div class="grand_parent">

		

		<div class="parents">
			<div class="child text-center">

				<a href="https://www.sangbadpratidin.in/" target="_blank"><img src="images/indian/protidin.png" alt="protidin"></a>

				<p>Sangbad Protidin</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.anandabazar.com/" target="_blank"><img src="images/indian/anondo-bazer.png" alt="anondo-bazer"></a>

				<p>Anondo Bazer</p>
				
			</div>

			<div class="child text-center">

				<a href="https://zeenews.india.com/bengali" target="_blank"><img src="images/indian/24.png" alt="24"></a>

				<p>Zee News</p>
				
			</div>

			<div class="child text-center">

				<a href="https://indiarag.in/" target="_blank"><img src="images/indian/abela.png" alt="abela"></a>

				<p>Abela</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="http://www.amritabazar.com" target="_blank"><img src="images/indian/amrito-bazer.png" alt="amrito-bazer"></a>

				<p>Amrito Bazer</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.epaper.eisamay.com/" target="_blank"><img src="images/indian/ai-somoy.png" alt="ai-somoy"></a>

				<p>Ai-Somoy</p>
				
			</div>

			<div class="child text-center">

				<a href="https://bartamanpatrika.com/home" target="_blank"><img src="images/indian/bortoman.png" alt="bortoman"></a>

				<p>Bortoman Potrika</p>
				
			</div>

			<div class="child text-center">

				<a href="http://ekdin-epaper.com/" target="_blank"><img src="images/indian/ekdin.png" alt="ekdin"></a>

				<p>Ekdin</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://bengali.oneindia.com/" target="_blank"><img src="images/indian/one.png" alt="one"></a>

				<p>One India</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.dailyjagaran.com/" target="_blank"><img src="images/indian/jagoron.png" alt="jagoron"></a>

				<p>Jagoron</p>
				
			</div>

			<div class="child text-center">

				<a href="http://www.epaper-hub.com/india/karmakshetra.aspx" target="_blank"><img src="images/indian/kormo.png" alt="kormo"></a>

				<p>Kormo</p>
				
			</div>

			<div class="child text-center">

				<a href="http://ganadabi.com/" target="_blank"><img src="images/indian/gonodabi.png" alt="gonodabi"></a>

				<p>Gonodabi</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://aajkaal.in/" target="_blank"><img src="images/indian/ajkal1.png" alt="ajkal"></a>

				<p>Ajkal</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.kolkata24x7.com/" target="_blank"><img src="images/indian/kolkata.png" alt="kolkata"></a>

				<p>Kolkata 24*7</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.puberkalom.com/" target="_blank"><img src="images/indian/kolom.png" alt="kolom"></a>

				<p>Puber Kolom</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.uttarbangasambad.com/" target="_blank"><img src="images/indian/uttor.png" alt="uttor"></a>

				<p>Uttorbanga Sangbad</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.dailydesherkatha.net/" target="_blank"><img src="images/indian/desher-kptha.png" alt="desher-kptha"></a>

				<p>Desher Kotha</p>
				
			</div>

			<div class="child text-center">

				<a href="https://bengali.news18.com/" target="_blank"><img src="images/indian/news18.png" alt="news18"></a>

				<p>Bangla News 18</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.thestatesman.com/" target="_blank"><img src="images/indian/statsman.png" alt="statsman"></a>

				<p>Statsman</p>
				
			</div>

			<div class="child text-center">

				<a href="http://www.nababartaprasanga.com/" target="_blank"><img src="images/indian/nobojatra.png" alt="nobojatra"></a>

				<p>Nobo Barta</p>
				
			</div>

			
		</div>


	
	</div>
			</div>

			

	
		</div><!--end jumbotron--->
		
	</div>



	<!---End Popular Indian Newspaper-------->



	<!---Popular Magazine-------->

	<div id="magazine" class="offset">

		<div class="jumbotron container-fluid">

			<div class="container" style="background-color: white; border:1px solid #1ebba3; border-radius: 10px;">

			<div class="col-12 text-center">
			<h3 class="heading" style="font-size: 1.5rem; font-weight: 700; text-transform: uppercase; padding-bottom: 1rem; padding-top: 1rem; color:#1ebba3; ">Popular Magazine</h3>
			<div class="heading-underline" style="height: .4rem; width: 4.5rem; background-color: #1ebba3; margin: 0 auto .5rem;"></div>
		    </div>

				

				<div class="grand_parent">

		

		<div class="parents">
			<div class="child text-center">

				<a href="https://www.ananda-alo.com/" target="_blank"><img src="images/maz/ananda-alo.png" alt="ananda-alo"></a>

				<p>Ananda Alo</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.canvasmagazine.com.bd/" target="_blank"><img src="images/maz/canvas.png" alt="canvas"></a>

				<p>Canvas</p>
				
			</div>

			<div class="child text-center">

				<a href="https://anannya.com.bd/" target="_blank"><img src="images/maz/ananna.png" alt="ananna"></a>

				<p>Ananna</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.unmadmagazine.com/" target="_blank"><img src="images/maz/unmad.png" alt="unmad"></a>

				<p>Unmad</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.kaliokalam.com/" target="_blank"><img src="images/maz/kali-kolom.png" alt="kali-kolom"></a>

				<p>Kali Kolom</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.computerjagat.com.bd/home/articles/archive" target="_blank"><img src="images/maz/computer-jagat2.png" alt="computer-jagat"></a>

				<p>Computer Jaget</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.kishoralo.com/" target="_blank"><img src="images/maz/kisor-alo2.png" alt="kisor-alo"></a>

				<p>Kishor Alo</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.sananda.in/" target="_blank"><img src="images/maz/sananda.png" alt="sananda"></a>

				<p>Sananda</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.femina.in/bengali/" target="_blank"><img src="images/maz/femina.png" alt="femina"></a>

				<p>Femina</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.intouchweekly.com/" target="_blank"><img src="images/maz/star.png" alt="star"></a>

				<p>Star</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.filmfare.com/magazine" target="_blank"><img src="images/maz/filmfare.png" alt="filmfare"></a>

				<p>Filmfare</p>
				
			</div>

			<div class="child text-center">

				<a href="https://sportstar.thehindu.com/magazine/" target="_blank"><img src="images/maz/sportstar.png" alt="sportstar"></a>

				<p>Sportstar</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://time.com/" target="_blank"><img src="images/maz/time.png" alt="time"></a>

				<p>Time</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.menshealth.com/" target="_blank"><img src="images/maz/helth.png" alt="helth"></a>

				<p>Health</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.wired.com/tag/wired-magazine/" target="_blank"><img src="images/maz/wired.png" alt="wired"></a>

				<p>Wired</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.cooksillustrated.com/" target="_blank"><img src="images/maz/cooks.png" alt="cooks"></a>

				<p>Cooks</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="http://www.desh.co.in/" target="_blank"><img src="images/maz/desh.png" alt="desh"></a>

				<p>Desh</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.newyorker.com/magazine" target="_blank"><img src="images/maz/newyorker.png" alt="newyorker"></a>

				<p>Newyorker</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.realsimple.com/" target="_blank"><img src="images/maz/real-simple.png" alt="real-simple"></a>
				<p>Real Simple</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.facebook.com/pg/AamarBiye/about/" target="_blank"><img src="images/maz/amar-biya.png" alt="amar-biya"></a>

				<p>Amar Biya</p>
				
			</div>

			
		</div>


	
	</div>
			</div>

			

	
		</div><!--end jumbotron--->
		
	</div>


	<!---End Popular Magazine-------->


	<!---All TV Channel-------->

	<div id="tvchannel" class="offset">

		<div class="jumbotron container-fluid">

			<div class="container" style="background-color: white; border:1px solid #1ebba3; border-radius: 10px;">

			<div class="col-12 text-center">
			<h3 class="heading" style="font-size: 1.5rem; font-weight: 700; text-transform: uppercase; padding-bottom: 1rem; padding-top: 1rem; color:#1ebba3; ">All TV Channel</h3>
			<div class="heading-underline" style="height: .4rem; width: 4.5rem; background-color: #1ebba3; margin: 0 auto .5rem;"></div>
		    </div>

				

				<div class="grand_parent">

		

		<div class="parents">
			<div class="child text-center">

				<a href="https://www.independent24.com/" target="_blank"><img src="images/tv/independent-tv.png" alt="independent-tv"></a>

				<p>Indipendent TV</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.channelionline.com/" target="_blank"><img src="images/tv/channel-i.png" alt="channel-i"></a>

				<p>Channel I</p>
				
			</div>

			<div class="child text-center">

				<a href="http://somoynews.tv/" target="_blank"><img src="images/tv/somoy-tv.png" alt="somoy-tv"></a>

				<p>Somoy TV</p>
				
			</div>

			<div class="child text-center">

				<a href="https://ekattor.tv/" target="_blank"><img src="images/tv/71-tv.png" alt="71-tv"></a>

				<p>71 TV</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="http://atnnewstv.com/?app=home" target="_blank"><img src="images/tv/atn-news.png" alt="atn-news"></a>

				<p>ATN News</p>
				
			</div>

			<div class="child text-center">

				<a href="https://ekushey-tv.com/" target="_blank"><img src="images/tv/e-tv.png" alt="e-tv"></a>

				<p>E-TV</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.channel24bd.tv/" target="_blank"><img alt="channel24bd" src="images/tv/channel24.png"></a>

				<p>Channel 24</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.rtvonline.com/" target="_blank"><img src="images/tv/rtv.png" alt="rtv"></a>

				<p>RTV</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://jamuna.tv/" target="_blank"><img src="images/tv/jamuna-tv.png" alt="jamuna-tv"></a>

				<p>Jamuna TV</p>
				
			</div>

			<div class="child text-center">

				<a href="http://boishakhionline.com/" target="_blank"><img src="images/tv/boishakhi-tv.png" alt="boishakhi-tv"></a>

				<p>Boishakhi TV</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.satv.tv/" target="_blank"><img src="images/tv/satv.png" alt="sa-tv"></a>

				<p>Satv</p>
				
			</div>

			<div class="child text-center">

				<a href="https://desh.tv/" target="_blank"><img src="images/tv/desh-tv.png" alt="desh-tv"></a>

				<p>Desh TV</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="http://www.channelninebd.tv/channel9/" target="_blank"><img src="images/tv/channel-9.png" alt="channel-9"></a>

				<p>Channel 9</p>
				
			</div>

			<div class="child text-center">

				<a href="http://gazitv.com/" target="_blank"><img src="images/tv/gtv.png" alt="gazitv"></a>

				<p>Gazi TV</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.ntvbd.com/" target="_blank"><img src="images/tv/ntv.png" alt="ntv"></a>

				<p>Ntv</p>
				
			</div>

			<div class="child text-center">

				<a href="http://channel-16tv.com/" target="_blank"><img src="images/tv/channel-16.png" alt="channel-16tv"></a>

				<p>Channel 16</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="http://mytvbd.tv/" target="_blank"><img src="images/tv/mytv.png" alt="mytv"></a>

				<p>mytv</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.tsports.com/" target="_blank"><img src="images/tv/t-sports.png" alt="t-sports"></a>

				<p>T-Sports</p>
				
			</div>

			<div class="child text-center">

				<a href="http://btv.gov.bd/" target="_blank"><img src="images/tv/btv.png" alt="btv"></a>
				<p>Btv</p>
				
			</div>

			<div class="child text-center">

				<a href="https://banglavision.tv/" target="_blank"><img src="images/tv/bd-visiontv.png" alt="bdvision"></a></a>

				<p>Bangla Vision</p>
				
			</div>

			
		</div>


	
	</div>
			</div>

			

	
		</div><!--end jumbotron--->
		
	</div>



	<!---End all Tv Channel-------->


	<!---All Radio Station-------->

	<div id="radiostation" class="offset">

		<div class="jumbotron container-fluid">

			<div class="container" style="background-color: white; border:1px solid #1ebba3; border-radius: 10px;">

			<div class="col-12 text-center">
			<h3 class="heading" style="font-size: 1.5rem; font-weight: 700; text-transform: uppercase; padding-bottom: 1rem; padding-top: 1rem; color:#1ebba3; ">All Radio Station</h3>
			<div class="heading-underline" style="height: .4rem; width: 4.5rem; background-color: #1ebba3; margin: 0 auto .5rem;"></div>
		    </div>

				

				<div class="grand_parent">

		

		<div class="parents">
			<div class="child text-center">

				<a href="https://radio.net.bd/foorti/" target="_blank"><img src="images/radio/88fm.png" alt="88fm"></a>

				<p>88 fm</p>
				
			</div>

			<div class="child text-center">

				<a href="http://voabangla.com/" target="_blank"><img src="images/radio/voa.png" alt="voa"></a>

				<p>VOA</p>
				
			</div>

			<div class="child text-center">

				<a href="https://radio.net.bd/capital/" target="_blank"><img src="images/radio/94.8.png" alt="capital-fm"></a>

				<p>Capital fm</p>
				
			</div>

			<div class="child text-center">

				<a href="http://dhakafm904.com/" target="_blank"><img src="images/radio/90.4.png" alt="dhaka-fm"></a>

				<p>Dhaka fm</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="http://jago.fm/" target="_blank"><img src="images/radio/94.4.png" alt="94.4"></a>
				<p>94.4 fm</p>
				
			</div>

			<div class="child text-center">

				<a href="http://peoplesradio.fm/" target="_blank"><img src="images/radio/91.6.png" alt="peopels-fm"></a>

				<p>Peopels fm</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.abcradio.fm/" target="_blank"><img src="images/radio/abc.png" alt="abc"></a>

				<p>abc radio</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www3.nhk.or.jp/nhkworld/bn/" target="_blank"><img src="images/radio/nhk-world.png" alt="nhk-world"></a>

				<p>Nhk world</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.radiobhumi.fm/" target="_blank"><img src="images/radio/92.8.png" alt="vumi-fm"></a>

				<p>vumi fm</p>
				
			</div>

			<div class="child text-center">

				<a href="http://www.betar.gov.bd/" target="_blank"><img src="images/radio/bd-bater.png" alt="bd-bater"></a>

				<p>bd bater</p>
				
			</div>

			<div class="child text-center">

				<a href="http://ekattor.fm/" target="_blank"><img src="images/radio/71.png" alt="71-fm"></a>

				<p>71 fm</p>
				
			</div>

			<div class="child text-center">

				<a href="https://radiosarabela.fm/" target="_blank"><img src="images/radio/sarabala.png" alt="sarabala"></a>

				<p>sarabala</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://global.com/radio/" target="_blank"><img src="images/radio/99.5.png" alt="99.5"></a>

				<p>99.5 fm</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.radiotodaybd.fm/" target="_blank"><img src="images/radio/89.6.png" alt="radio-today"></a>

				<p>89.6 fm</p>
				
			</div>

			<div class="child text-center">

				<a href="http://www.bbc.com/bengali" target="_blank"><img src="images/radio/bbc-bangla.png" alt="bbc-bangla"></a>

				<p>bbc bangla</p>
				
			</div>

			<div class="child text-center">

				<a href="http://www.findglocal.com/BD/Dhaka/356237417920534/EDGE-95.6-FM" target="_blank"><img src="images/radio/95.6.png" alt="95.6"></a>
				<p>95.6 fm</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.radiomirchi.com/" target="_blank"><img src="images/radio/michri.png" alt="michri"></a>

				<p>Michri</p>
				
			</div>

			<div class="child text-center">

				<a href="https://radiogoongoon.com/" target="_blank"><img src="images/radio/goongoon.png" alt="goongoon"></a>

				<p>Goongoon</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.funfm.ro/" target="_blank"><img src="images/radio/funfm.png" alt="funfm"></a>
				<p>Fun fm</p>
				
			</div>

			<div class="child text-center">

				<a href="http://www.dw.com/bn/" target="_blank"><img src="images/radio/dw.png" alt="dw"></a>

				<p>DW</p>
				
			</div>

			
		</div>


	
	</div>
			</div>

			

	
		</div><!--end jumbotron--->
		
	</div>



	<!---End all radio station-------->



	<!---All popular job site-------->

	<div id="jobsite" class="offset">

		<div class="jumbotron container-fluid">

			<div class="container" style="background-color: white; border:1px solid #1ebba3; border-radius: 10px;">

			<div class="col-12 text-center">
			<h3 class="heading" style="font-size: 1.5rem; font-weight: 700; text-transform: uppercase; padding-bottom: 1rem; padding-top: 1rem; color:#1ebba3; ">Popular Job Site</h3>
			<div class="heading-underline" style="height: .4rem; width: 4.5rem; background-color: #1ebba3; margin: 0 auto .5rem;"></div>
		    </div>

				

				<div class="grand_parent">



		<div class="parents">
			<div class="child text-center">

				<a href="https://www.bdjobs.com/" target="_blank"><img src="images/job/bd1.png" alt="bdjobs" /></a>
				<p>Bdjobs</p>
				
			</div>

			<div class="child text-center">

				<a href="http://www.bdjobstoday.com/" target="_blank"><img src="images/job/bdjobs-today.png" alt="bdjobstoday" /></a>

				<p>Bdjobs Today</p>
				
			</div>

			<div class="child text-center">

				<a href="https://skill.jobs/" target="_blank"><img src="images/job/jobsbd.com.png" alt="jobsbd" /></a>

				<p>Jobsbd</p>
				
			</div>

			<div class="child text-center">

				<a href="https://jobsitebd.wordpress.com/httpjobsitebd-comemployee_reg1-php/" target="_blank"><img src="images/job/jobsite.png" alt="jobsite" /></a>

				<p>Jobsite</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.chakrirkhoborbd.com/" target="_blank"><img src="images/job/chakrir-khobor.png" alt="chakrir-khobor" /></a>

				<p>Chakrir Khobor</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.chakri.com/" target="_blank"><img src="images/job/chakri.png" alt="chakri" /></a>

				<p>Chakri</p>
				
			</div>

			<div class="child text-center">

				<a href="https://bd-career.com/" target="_blank"><img src="images/job/bd-career.png" alt="bd-career" /></a>

				<p>bd-career</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.jobsa1.com/" target="_blank"><img src="images/job/jobsA1.png" alt="jobsA1" /></a>

				<p>Jobs A1/p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.facebook.com/deshijobs24/" target="_blank"><img src="images/job/deshijob.png" alt="deshijob" /></a>

				<p>Deshi Job</p>
				
			</div>

			<div class="child text-center">

				<a href="https://skill.jobs/" target="_blank"><img src="images/job/job1.png" alt="jobs" /></a>

				<p>Jobs</p>
				
			</div>

			<div class="child text-center">

				<a href="https://jobsbd.net/" target="_blank"><img src="images/job/jobs-bd.png" alt="jobs-bd" /></a>

				<p>Jobs bd</p>
				
			</div>

			<div class="child text-center">

				<a href="https://kormokhali.com/" target="_blank"><img src="images/job/karmokhali.png" alt="karmokhali" /></a>
				<p>Karmokhali</p>
				
			</div>

			
		</div>


		<div class="parents">
			<div class="child text-center">

				<a href="https://www.tradebangla.com.bd/business/jobsinbdcom" target="_blank"><img src="images/job/jobsinbd.png" alt="jobsinbd" /></a>
				<p>Jobsinbd</p>
				
			</div>

			<div class="child text-center">

				<a href="https://bdgovtjob.net/" target="_blank"><img src="images/job/gov-job.png" alt="gov-jobs" /></a>

				<p>Gov-jobs</p>
				
			</div>

			<div class="child text-center">

				<a href="https://hotjobs.com.bd/" target="_blank"><img src="images/job/hot-jobbd.png" alt="hot-jobbd" /></a>
				<p>Hot-Jobbd</p>
				
			</div>

			<div class="child text-center">

				<a href="https://www.alljobsbd.com/" target="_blank"><img src="images/job/alljobsbd.png" alt="alljobsbd" /></a>

				<p>All Jobs bd</p>
				
			</div>

			
		</div>


	
	</div>
			</div>

			

	
		</div><!--end jumbotron--->
		
	</div>



	<!---End Popular job site-------->


	<!---All popular education site-------->

	<div id="education" class="offset">

		<div class="jumbotron container-fluid">

			<div class="container" style="background-color: white; border:1px solid #1ebba3; border-radius: 10px;">

			<div class="col-12 text-center">
			<h3 class="heading" style="font-size: 1.5rem; font-weight: 700; text-transform: uppercase; padding-bottom: 1rem; padding-top: 1rem; color:#1ebba3; ">Popular Educational Site</h3>
			<div class="heading-underline" style="height: .4rem; width: 4.5rem; background-color: #1ebba3; margin: 0 auto .5rem;"></div>
		    </div>

				

				<div class="grand_parent">



		<div class="parents">
			<div class="child text-center">

				<a href="https://educationbangla.com/" target="_blank"><img src="images/edu/ed-bangla.png" alt="education-bangla" /></a>

				<p>Education Bangla</p>
				
			</div>

			<div class="child text-center">

				<a href="http://www.educationboardresults.gov.bd/" target="_blank"><img src="images/edu/edu-result.png" alt="educationboardresults" /></a>

				<p>Results</p>
				
			</div>

			<div class="child text-center">

				<a href="http://www.nu.ac.bd/" target="_blank"><img src="images/edu/nu-result.png" alt="nu.edu.bd" /></a>
				<p>Nu result</p>
				
			</div>

			<div class="child text-center">

				<a href="http://bteb.gov.bd/" target="_blank"><img src="images/edu/bteb1.png" alt="bteb" /></a>

				<p>BTEB</p>
				
			</div>

			<div class="child text-center">

				<a href="https://careertimes24.com/" target="_blank"><img src="images/edu/career-times.png" alt="careertimes" /></a>
				<p>Careertimes</p>
				
			</div>


			
		</div>


	
	</div>
			</div>

			

	
		</div><!--end jumbotron--->
		
	</div>


	<!---End Popular education site-------->




	

	<!--Jquery & Js CDN----->

	<script type="text/javascript" src="bootstrap-4.4.1/js/jaquery_latest.js"></script>

	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

</body>
</html>