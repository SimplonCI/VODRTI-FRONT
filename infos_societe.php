<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<!-- Mirrored from 51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Emission-2 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 01:06:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<?php include 'headfile.php';?>

	<title>RTIPLAY:::INFO/SOCIETE</title>

<style>
	font-family: 'Raleway', sans-serif;
</style>
</head>
<body data-ma-header="Black">


<?php include 'header.php';?>


<link rel="stylesheet" href="assets/css/slider.css">
<style>
	.slider-arrow--big {
		/* width: 60px; */
		/* height: 130px; */
		top: calc(50% - 60px);
	}
</style>



<div class="app app--full-features app--6play app--m6web">
	<div class="app__content">
		<div>
			<div>
				<div>
					<div class="app__wrapper folder">
						<div>
							<div class="app-content app-content--6play">
								<div class="service">
									<div class="folderpage folderpage--humour">
										<div>
											<div class="slider"  style='background-image: url(assets/img/c-3.jpg); height: 100%; background-position: center;background-repeat: no-repeat;background-size: cover;'>

												<button
													class="btn  btn-lg waves-effect slider-arrow slider-arrow--left slider-arrow--big"
													side="left">
													<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="square" stroke="#fff" stroke-width="8" d="M40 16l43 44m0 0l-43 44" transform="translate(100, 0) scale(0, 1)"></path></svg>
												</button>


												<button
														class="btn btn-lg waves-effect slider-arrow slider-arrow--right slider-arrow--big"
														side="right">
														<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="square" stroke="#fff" stroke-width="8" d="M40 16l43 44m0 0l-43 44"></path></svg>
												</button>

												<div id="grid-scroll" class="mosaic-programs scrollable-content mosaic-bloc-padding" style=" background: rgba(0, 0, 0, 0.7);">
													<div class="mosaic__spit">
														<!--Block Mosaic -->
													</div>


												</div>

												<div class="fin-slide">

												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function slugify(string) {
		var a = 'àáäâãåèéëêìíïîòóöôùúüûñçßÿœæŕśńṕẃǵǹḿǘẍźḧ·/_,:;'
		var b = 'aaaaaaeeeeiiiioooouuuuncsyoarsnpwgnmuxzh------'
		var p = new RegExp(a.split('').join('|'), 'g')
		return string.toString().toLowerCase()
			.replace(/\s+/g, '-') // Replace spaces with
			.replace(p, c => b.charAt(a.indexOf(c))) // Replace special characters
	.replace(/&/g, '-and-') // Replace & with ‘and’
			.replace(/[^\w\-]+/g, '') // Remove all non-word characters
			.replace(/\-\-+/g, '-') // Replace multiple — with single -
			.replace(/^-+/, '') // Trim — from start of text .replace(/-+$/, '') // Trim — from end of text
	}

	$.getJSON("Emission/bindex/2/0/0.json", function (data) {


		var ch = "";
		var k = 0;
		var t = 0;
		var chcas1 = '';
		var tautrecas = '';
		var mosaic__tile = '';
		var toutcas = '';
		var z = 0;

		for (i = 0; i < data.data.length; i++) {
			z++;

			ch += '<div class="mosaic__bloc"><div class="mosaic__tile mosaic__tile--large"><a class="tile tile--16-9 tile--large" href="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Emission/' + slugify(data.data[i].r_nom) + '/2-' + slugify(data.data[i].r_i) + '">' +
				'<div class="tile__image"><img class="tile__thumb" alt="' + data.data[i].r_nom + '" src="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Miniature/300/500/' + data.data[i].r_image + '.jpeg" ' +
				'sizes="(min-width: 4096px) 1120px, (min-width: 2048px) 800px, (min-width: 1024px) 592px, 480px">' +
				'<div class="tile__service"><span style="min-height:3px" class="icon-service icon-service-m6replay_s tile__service-logo"' +
				' title="M6"></span></div></div><div class="tile__label"><div class="tile__title">' + data.data[i].r_nom + '</div>' +
				'<div class="tile__subtitle"><span>' + data.data[i].r_videos + ' vidéos | </span></div></div><div class="tile__polaroid"></div></a></div></div>';

			if (z === 4) {
				chcas1 = ch;
				$('.mosaic__spit').append(chcas1);
			}
			if (z > 4) {

				mosaic__tile += '<div class="mosaic__tile" id="'+z+'"><a class="tile tile--16-9" href="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Emission/' + slugify(data.data[i].r_nom) + '/2-' + slugify(data.data[i].r_i) + '"><div class="tile__image">' +
					'<img class="tile__thumb" alt="' + data.data[i].r_nom + '" src="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Miniature/300/500/' + data.data[i].r_image + '.jpeg" srcset="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Miniature/300/500/' + data.data[i].r_image + '.jpeg"' +
					' sizes="(min-width: 4096px) 592px, (min-width: 2048px) 400px, (min-width: 1024px) 320px, 272px">' +
					'<div class="tile__service"><span style="min-height:3px" class="icon-service icon-service-w9replay_s tile__service-logo"' +
					' title="W9"></span></div></div><div class="tile__label"><div class="tile__title">' + data.data[i].r_nom + '</div>' +
					'<div class="tile__subtitle"><span>' + data.data[i].r_videos + ' vidéos</span></div></div><div class="tile__polaroid"></div></a></div>';


				if ((z % 4) === 0) {
					k++;
					tautrecas += '<div class="mosaic__page">\n' +
						'\t<div class="mosaic__bloc">\n' +
						mosaic__tile
						+ '\t</div>\n' +
						'</div>';
					toutcas += tautrecas;
					////////console.log(tautrecas);
					//$('.petit_block').append(tautrecas);
					//$(".mosaic__spit").insertAfter(tautrecas);
					tautrecas = '';
					mosaic__tile = '';
					//alert(k);
				}
			}


		}
		//console.log(toutcas);
		$('.mosaic__spit').after(toutcas);


	});

	/* CLICK SCROLL FUNCTIONS JQUERY */
	$('.slider-arrow--left').click(function() {
		event.preventDefault();
		$('#grid-scroll').animate({
			scrollLeft: "-=775px"
		}, "slow");
	});

	$('.slider-arrow--right').click(function() {
		event.preventDefault();
		$('#grid-scroll').animate({
			scrollLeft: "+=775px"
		}, "slow");
	});
	/* CLICK SCROLL FUNCTIONS JQUERY */


</script>


	<footer class="fixed-footer" style="">
		<div class="text-center" style="padding:15px;">
			<div class="container">

				<a href="#" onclick="ffiltreemission(1,2);"> <img class="chaine_1" src="assets/img/1.png" width="auto" height="22px" style="margin-right:30px;"></a>
				<a href="#" onclick="ffiltreemission(2,2);"> <img class="chaine_2" src="assets/img/2.png" width="auto" height="22px" style="margin-right:30px;"></a>
				<a href="#" onclick="ffiltreemission(3,2);"> <img class="chaine_3" src="assets/img/3.png" width="auto" height="22px" style="margin-right:30px;"></a>
				<a href="#" onclick="ffiltreemission(4,2);"> <img class="chaine_4" src="assets/img/4.png" width="auto" height="22px" style="margin-right:30px;"></a>
				<a href="#" onclick="ffiltreemission(5,2);"> <img class="chaine_5" src="assets/img/5.png" width="auto" height="22px" style="margin-right:30px;"></a>
				<a id="programe_link" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="" title="" data-original-title="Accéder à la grille des programmes"href="Programme.html" class="btn palette-Light-Green bg waves-effect" style="background: linear-gradient(to right, #e21d71 56%,#70248b 100%);"><i class="zmdi zmdi-menu"></i> Programme</a>
							</div>
		</div>
	</footer>
	


</section>



<?php include 'navigation.php';?>

<!-- Page Loader -->
<div class="page-loader palette-Grey-900 bg">
	<div class="preloader pl-xl pls-white">
		<svg class="pl-circular" viewBox="25 25 50 50">
			<circle class="plc-path" cx="50" cy="50" r="20"/>
		</svg>
	</div>
</div>






<div class="modal fade" id="profilemodal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><i class="zmdi zmdi-account m-r-5"></i> Mon espace</h4>
			</div>
			<div class="modal-body">
				<div role="tabpanel">
					<ul class="tab-nav" role="tablist">
						<li class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Mon Profile</a></li>
						<li><a href="#paramcpt" aria-controls="paramcpt" role="tab" data-toggle="tab">Mes Favories</a></li>

					</ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="profile">
							<div class="form-group">
								<div class="fg-line">
									<input type="text" id="nom_prenom_afficher" class="form-control" placeholder="Nom & prénoms">
								</div>
							</div>

							<div class="form-group">
								<div class="fg-line">
									<input type="text" id="email_afficher" class="form-control" placeholder="Adresse électronique">
								</div>
							</div>
							<div class="form-group">
								<div class="fg-line">
									<input type="password" id="mdp_afficher" class="form-control" placeholder="Mot de passe">
								</div>
							</div>
							<div class="form-group">
								<div class="fg-line">
									<input type="password" id="pwd_afficher" class="form-control" placeholder="Confirmer Mot de passe">
								</div>
							</div>
							<button class="btn palette-Pink bg waves-effect btn-afficher">Valider</button>
						</div>
						<div role="tabpanel" class="tab-pane" id="paramcpt">

							<div id="favorie_list">

							</div>



						</div>

					</div>
				</div>

			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-link" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>



<script>
	function validEmail(e) {
		var filter = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
		return String(e).search (filter) != -1;
	}
	function setCookie(cname, cvalue, exdays)
	{
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}


	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}


	$('.prelod-login').hide();
	$('.prelod-register').hide();

	$(".btn-register").click(function(){
		var nom_prenom = $('#nom_prenom_register').val();
		var email = $('#email_register').val();
		var mdp1 = $('#mdp_register').val();
		var mdp2 = $('#pwd_rep').val();



		if(nom_prenom ==='' || nom_prenom.length < 4)
		{
			toast('Veuillez entrer vos noms & prénoms','warning');
			return false;
		}


		if(email ==='' || email.length < 4)
		{
			toast('Veuillez entrer un mail valide','warning');
			return false;
		}


		if(!validEmail(email))
		{
			toast('Veuillez entrer un mail valide','warning');
			return false;
		}



		if(mdp1 !== mdp2)
		{
			toast('Veuillez vérifier votre mot de passe','warning');
			return false;
		}


		var data =
			{
				"nom_prenom":nom_prenom,
				"email":email,
				"pass1":mdp1,
				"pass2":mdp2
			};
		var url= 'Users/register.html';
		$('.prelod-register').show();
		$.ajax({
			url: url,
			type: 'post',
			dataType: 'json',
			data: JSON.stringify(data),
			headers: {
				"Auth-Key": 'Weenbuzz@2016+',   //If your header name has spaces or any other char not appropriate
				"Client-Service": 'P001',
				"Accept": "application/json; charset=utf-8",
				"Content-Type": "application/json; charset=utf-8"
				//for object property name, use quoted notation shown in second
			},
			success: function (data) {

				var obj = data;


				if (obj.status == 200) {


					$('.prelod-register').hide();


					$('#nom_prenom_register').val('');
					$('#email_register').val('');
					$('#mdp_register').val('');
					$('#pwd_rep').val('');
					toast(obj.message, 'success');

				}

				else {
					$('.prelod-register').hide();
					toast(obj.message, 'error');
				}


			},
			error: function (xhr, status, error) {
				$('.prelod-register').hide();

				toast(obj.message, 'error');
			}

		});




	});


	$(".btn-login").click(function(){
		$('.prelod-login').show();
		var user = $('#login_cnx').val();
		var pwd = $('#password_cnx').val();

		if(pwd ==='' || pwd.lenght < 4 )
		{
			toast('Merci de saisir vos informations de connexion', 'error');
			return false;
		}

		if(user ==='' || user.lenght < 4 )
		{
			toast('Merci de saisir vos informations de connexion', 'error');
			return false;
		}


		var login = {
			user:user,
			mdp:pwd
		}

		$.ajax({
			url: 'http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Users/login',
			type: 'post',
			dataType: 'json',
			data: JSON.stringify(login),
			headers: {
				"Auth-Key": 'Weenbuzz@2016+',   //If your header name has spaces or any other char not appropriate
				"Client-Service": 'P001',
				"Accept": "application/json; charset=utf-8",
				"Content-Type": "application/json; charset=utf-8"
				//for object property name, use quoted notation shown in second
			},
			success: function (data) {

				var obj = data;


				if (obj.status == 200) {
					$('.prelod-login').hide();

					$('#login_cnx').val('');
					$('#password_cnx').val('');
					setCookie("data-user",JSON.stringify(data.message),10);
					toast('Connexion éffectué avec succès', 'success');
					window.setTimeout(function(){

						window.location.href=window.location.href;

					}, 2000);
				}

				else {
					$('.prelod-login').hide();
					toast(obj.message, 'error');
				}


			},
			error: function (xhr, status, error) {
				$("#load").hide();
				toast('Erreur d accèes réseau veuillez rééssayer', 'error');
			}

		});


	});
	setCookie('data-url',window.location,25);
	if(getCookie('data-user') !='')
	{

		var data = JSON.parse(getCookie('data-user'));

		$('#nom_prenom_afficher').val(data.nom_prenom);
		$('#email_afficher').val(data.email);
	}


	$( ".recherche" ).on( "keydown", function(event) {
		if(event.which == 13)
		{
			//alert($('.recherche').val());
			$('#modalWider').modal('toggle');

			$.ajax({
				url: 'http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Video/getByTag',
				type: 'post',
				data: $('.recherche').val(),
				success: function (data) {

					$('#rechres').html('<b><i>'+$('.recherche').val()+'</i></b> nombre de résulats: <b>'+data.length+'</b>');

					var afficher ='';
					var iurl ='';
					var vurl ='';

					for (i = 0; i < data.length; i++) {
						iurl = 'https://i.ytimg.com/vi/'+data[i].r_url+'/hqdefault.jpg';
						vurl = 'https://www.youtube.com/embed/'+data[i].r_url+'?autoplay=1';



						if(getCookie('data-user')=="")
						{

							afficher +='<div onclick="fopenSecure()" style="width:50px;" class="col-sm-2 card--content slider__item slider__item--s" ' +
								'data-iframe="true" id="open-website" data-src="'+iurl+'" ><a class="tile tile--16-9"' +
								' href="#"><div class="tile__image"><img style="width:140px;height:100px" class="tile__thumb"\n' +
								' alt="'+data[i].r_titre+'"\n' +
								' src="'+iurl+'"\n' +
								' srcset="'+iurl+'"\n' +
								'<div class="tile__detail" style="width:150px;"><h2 class="tile__name"\n' +
								'title="'+data[i].r_titre+'">'+data[i].r_titre+'</div></a></div></div>';

							/*afficher +='<div onclick="fopenSecure()" class="col-sm-2 col-xs-6 tile">\n' +
								'                                    <div class="lightbox-item tile__media">\n' +
								'                                        <img class="tile__img" src="'+iurl+'" alt=""  />\n' +
								'                                    </div>\n' +
								'<div class="tile__details"><div class="tile__title">'+data[i].r_titre+'</div></div>'+
								'                                </div>';*/
						}
						else
						{

							afficher +='<div onclick="openNav(\'\'+vurl+\'\')"  class="col-md-2 card--content slider__item slider__item--s" ' +
								'data-iframe="true" id="open-website" data-src="'+iurl+'" ><a class="tile tile--16-9"' +
								' href="#"><div class="tile__image"><img class="tile__thumb"\n' +
								' alt="'+data[i].r_titre+'"\n' +
								' src="'+iurl+'"\n' +
								' srcset="'+iurl+'"\n' +
								'<div class="tile__detail" style="width:150px;"><h2 class="tile__name"\n' +
								'title="'+data[i].r_titre+'">'+data[i].r_titre+'</div></a></div></div>';

							/*afficher +='<div onclick="openNav(\''+vurl+'\')" class="col-sm-2 col-xs-6 tile">\n' +
								'                                    <div class="lightbox-item tile__media">\n' +
								'                                        <img class="tile__img" src="'+iurl+'" alt=""  />\n' +
								'                                    </div>\n' +
								'<div class="tile__details"><div class="tile__title">'+data[i].r_titre+'</div></div>'+
								'                                </div>';*/
						}





					}

					$('.resultat').html(afficher);
					$('.prelod-recherche').hide();

				},
				error: function (xhr, status, error) {

				}

			});
		}












	});




	function openNav(uri) {
		$('.video-cont').attr('src',uri);
		$('#modalvideo').modal('toggle');
	}


	function fopenSecure() {
		if(getCookie('data-user')=="")
		{
			$('#modalWider').modal('hide');
			$("#dismiss").hide();
			$("#modalNarrower").modal();
		}
	}




	function closeNav() {
		document.getElementById("myNav").style.width = "0%";
	}
</script>

<style>

	.dropbtn {
		color: white;
		padding: 5px;
		font-size: 16px;
		border: none;
		width: 40px;
	}



	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color:  rgba(0,0,0,0.2);
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	.dropdown-content a {
		color: #fff;
		padding: 8px 8px;
		text-decoration: none;
		display: block;
		font-size:14px;
	}

	.dropdown-content a:hover {}

	.dropdown:hover .dropdown-content {display: block;}

	.dropdown:hover .dropbtn {}

</style>


<div class="modal fade" id="modalWider" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<div class="text-right"> <button type="button" class="btn btn-danger text-black" data-dismiss="modal">Fermer</button></div>
				<h4 class="modal-title">Résultat de recherche pour : <span id="rechres"></span>  <i class="zmdi zmdi-search zmdi-hc-fw"></i></h4>

			</div>
			<div class="modal-body">
				<div class="preloader pls-red prelod-recherche">
					<svg class="pl-circular" viewBox="25 25 50 50">
						<circle class="plc-path" cx="50" cy="50" r="20"></circle>
					</svg>
				</div>

				<section class="row resultat text-center" id="video-gallery" >

				</section>




			</div>
			<div class="modal-footer">


			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modalvideo" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg ">
		<div class="modal-content trans">
			<div class="modal-header">
				<a href="#" data-dismiss="modal">Fermer</a>
			</div>
			<div class="modal-body">

				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item video-cont"  src="#" allowfullscreen></iframe>
				</div>



			</div>
		</div>
	</div>
</div>
<script>



	$('#video-gallery').lightGallery({
		youtubePlayerParams: {
			modestbranding: 1,
			showinfo: 0,
			rel: 0,
			controls: 0
		},
		vimeoPlayerParams: {
			byline : 0,
			portrait : 0,
			color : 'A90707'
		}
	});


	function ffiltreemission($chaine,$thematic) {
		$('.mosaic__spit').text('');
		$('.mosaic__page').text('');
		$('.fin-slide').text('');
		$.getJSON("http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Emission/bindex/"+$thematic+"/"+$chaine+"/0", function (data) {


			var ch = "";
			var k = 0;
			var t = 0;
			var chcas1 = '';
			var tautrecas = '';
			var mosaic__tile = '';
			var toutcas = '';
			var z = 0;

			for (i = 0; i < data.data.length; i++) {
				z++;

				ch += '<div class="mosaic__bloc"><div class="mosaic__tile mosaic__tile--large"><a class="tile tile--16-9 tile--large" href="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Emission/' + slugify(data.data[i].r_nom) + '/2-' + slugify(data.data[i].r_i) + '">' +
					'<div class="tile__image"><img class="tile__thumb" alt="' + data.data[i].r_nom + '" src="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Miniature/300/500/' + data.data[i].r_image + '.jpeg" ' +
					'sizes="(min-width: 4096px) 1120px, (min-width: 2048px) 800px, (min-width: 1024px) 592px, 480px">' +
					'<div class="tile__service"><span style="min-height:3px" class="icon-service icon-service-m6replay_s tile__service-logo"' +
					' title="M6"></span></div></div><div class="tile__label"><div class="tile__title">' + data.data[i].r_nom + '</div>' +
					'<div class="tile__subtitle"><span>' + data.data[i].r_videos + ' vidéos</span></div></div><div class="tile__polaroid"></div></a></div></div>';

				if (z === 4) {
					chcas1 = ch;
					$('.mosaic__spit').append(chcas1);
				}
				if (z > 4) {

					mosaic__tile += '<div class="mosaic__tile" id="'+z+'"><a class="tile tile--16-9" href="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Emission/' + slugify(data.data[i].r_nom) + '/2-' + slugify(data.data[i].r_i) + '"><div class="tile__image">' +
						'<img class="tile__thumb" alt="' + data.data[i].r_nom + '" src="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Miniature/300/500/' + data.data[i].r_image + '.jpeg" srcset="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Miniature/300/500/' + data.data[i].r_image + '.jpeg"' +
						' sizes="(min-width: 4096px) 592px, (min-width: 2048px) 400px, (min-width: 1024px) 320px, 272px">' +
						'<div class="tile__service"><span style="min-height:3px" class="icon-service icon-service-w9replay_s tile__service-logo"' +
						' title="W9"></span></div></div><div class="tile__label"><div class="tile__title">' + data.data[i].r_nom + '</div>' +
						'<div class="tile__subtitle"><span>' + data.data[i].r_videos + ' vidéos</span></div></div><div class="tile__polaroid"></div></a></div>';


					if ((z % 4) === 0) {
						k++;
						tautrecas += '<div class="mosaic__page">\n' +
							'\t<div class="mosaic__bloc">\n' +
							mosaic__tile
							+ '\t</div>\n' +
							'</div>';
						toutcas += tautrecas;
						////////console.log(tautrecas);
						//$('.petit_block').append(tautrecas);
						//$(".mosaic__spit").insertAfter(tautrecas);
						tautrecas = '';
						mosaic__tile = '';
						//alert(k);
					}
				}


			}
			//console.log(toutcas);
			$('.mosaic__spit').after(toutcas);


		});
	}


	if(getCookie("data-user") !=='')
	{
		var _d = JSON.parse(getCookie("data-user"));
		$('#add_favorie').click(function(){





			var data = {
				"r_iuser":_d.i,
				"r_iemission":0			};
			//alert();
			$.ajax({
				url: 'http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Favorie',
				type: 'put',
				data: JSON.stringify(data),
				success: function (data) {
					if(data.status !==200)
					{
						toast(data.message,'error')
					}
					else
					{
						toast(data.message,'success');
						maj_favori(_d.i);
					}
				}
			});
		});


		maj_favori(_d.i);
	}




	function maj_favori(_icli)
	{
		$.ajax({
			url: 'http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Favorie/index/'+_icli,
			type: 'get',
			data: JSON.stringify(data),
			success: function (data) {
				if(data.status !==200)
				{
					toast(data.message,'error')
				}
				else
				{
					var thematic ='';
					var emission ='';
					for (i = 0; i < data.message.thematic.length; i++) {

						for (z = 0; z < data.message.emmission.length; z++) {
							if(data.message.emmission[z].r_ithematique ===data.message.thematic[i].r_i)
							{

								//emission +='  <li class="list-inline-item"><div class="card" style="width: 11rem;"><img class="card-img-top" src="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Miniature/100/130/'+data.message.emmission[z].r_image+'.jpeg"" alt="Card image cap"><div class="card-body"><p class="card-text">'+data.message.emmission[z].r_nom+'</p></div></div></li>';

								emission +='<li class="list-inline-item"><div class="card"><div class="card--content slider__item slider__item--s" data-iframe="true" id="open-website" data-src="" ><a class="tile tile--16-9" href="#"><div class="tile__image border"><img class="tile__thumb"\n' +
									' alt="'+data.message.emmission[z].r_nom+'"\n' +
									' src="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Miniature/100/130/'+data.message.emmission[z].r_image+'.jpeg"\n' +
									' srcset="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Miniature/100/130/'+data.message.emmission[z].r_image+'.jpeg"\n' +
									'<div class="tile__detail"><h2 class="tile__name m-0 p-5"\n' +
									'title="'+data.message.emmission[z].r_nom+'">'+data.message.emmission[z].r_nom+'</div></a></div></div></li>';


							}
						}
						thematic+='<div class="text-black" style="border-bottom: 1px solid #0a0a0a;"><h5>'+data.message.thematic[i].r_libelle+'</h5>' +
							'<br/>' +
							'<ul id="example'+i+'"  class="list-inline">'+emission+'</ul>'+
							'<nav aria-label="Page navigation example" id="example'+i+'-pagination">'+
							' <ul class="pagination">'+
							' <li class="page-item"><a id="example'+i+'-previous" class="page-link" href="#"><i class="zmdi zmdi-chevron-left zmdi-hc-fw"></i></a></li>'+
							' <li class="page-item"><a id="example'+i+'-next" class="page-link" href="#"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i></a></li>'+
							'  </ul></nav>'+
							'</div>';
						emission='';


					}
					$('#favorie_list').append('');
					$('#favorie_list').append(thematic);

					for (i = 0; i < data.message.thematic.length; i++) {
						$('#example'+i).paginate({itemsPerPage: 5});
					}





				}
			}
		});
	}





	if(getCookie('data-user') ==='')
	{
		$('#programe_link').hide();
	}


</script>


</body>

<!-- Mirrored from 51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Emission-2 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 01:06:39 GMT -->
</html>
