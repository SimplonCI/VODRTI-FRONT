<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<!-- Mirrored from 51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Emission-1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 01:06:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<?php include 'headfile.php';?>



	<title>RTIPLAY:::DIVERTISSEMENT</title>

<style>
	font-family: 'Raleway', sans-serif;
</style>
</head>
<body data-ma-header="Black">




<?php include 'header.php'; ?>

<link rel="stylesheet" href="assets/css/slider.css">
<style>
	.slider-arrow--big {
		/* width: 60px; */
		/* height: 130px; */
		top: calc(30% - 40px);
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
													<svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="square" stroke="#fff" stroke-width="8" d="M40 16l43 44m0 0l-43 44" transform="translate(110, 0) scale(-1, 1)"></path></svg>
												</button>


												<button
													class="btn btn-lg waves-effect slider-arrow slider-arrow--right slider-arrow--big"
													side="right">
													<svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="square" stroke="#fff" stroke-width="8" d="M40 16l43 44m0 0l-43 44"></path></svg>
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

	$.getJSON("Emission/bindex/1/0/0.json", function (data) {


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

			ch += '<div class="mosaic__bloc"><div class="mosaic__tile mosaic__tile--large"><a class="tile tile--16-9 tile--large" href="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Emission/' + slugify(data.data[i].r_nom) + '/1-' + slugify(data.data[i].r_i) + '">' +
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

				mosaic__tile += '<div class="mosaic__tile" id="'+z+'"><a class="tile tile--16-9" href="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Emission/' + slugify(data.data[i].r_nom) + '/1-' + slugify(data.data[i].r_i) + '"><div class="tile__image">' +
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

				<a href="" onclick="ffiltreemission(1,1);"> <img class="chaine_1" src="assets/img/1.png" width="auto" height="22px" style="margin-right:30px;"></a>
				<a href="" onclick="ffiltreemission(2,1);"> <img class="chaine_2" src="assets/img/2.png" width="auto" height="22px" style="margin-right:30px;"></a>
				<a href="" onclick="ffiltreemission(3,1);"> <img class="chaine_3" src="assets/img/3.png" width="auto" height="22px" style="margin-right:30px;"></a>
				<a href="" onclick="ffiltreemission(4,1);"> <img class="chaine_4" src="assets/img/4.png" width="auto" height="22px" style="margin-right:30px;"></a>
				<a href="" onclick="ffiltreemission(5,1);"> <img class="chaine_5" src="assets/img/5.png" width="auto" height="22px" style="margin-right:30px;"></a>
				<a href="programmes.php" onclick="ffiltreemission(5,1);" title='Accéder à la grille des programmes' class="btn palette-Light-Green bg waves-effect" style="border-radius: 25px; background: linear-gradient(to right, #e21d71 56%,#70248b 100%);">Programmes</a>
							</div>
		</div>
	</footer>
	


</section>





<!-- Page Loader -->
<div class="page-loader palette-Grey-900 bg">
	<div class="preloader pl-xl pls-white">
		<svg class="pl-circular" viewBox="25 25 50 50">
			<circle class="plc-path" cx="50" cy="50" r="20"/>
		</svg>
	</div>
</div>

<?php include 'navigation.php'; ?>
</div>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>

<script src="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//assets/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->


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

				ch += '<div class="mosaic__bloc"><div class="mosaic__tile mosaic__tile--large"><a class="tile tile--16-9 tile--large" href="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Emission/' + slugify(data.data[i].r_nom) + '/1-' + slugify(data.data[i].r_i) + '">' +
					'<div class="tile__image"><img class="tile__thumb" alt="' + data.data[i].r_nom + '" src="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Miniature/300/500/' + data.data[i].r_image + '.jpeg" ' +
					'sizes="(min-width: 20px) 1120px, (min-width: 1024px) 800px, (min-width: 1024px) 592px, 480px">' +
					'<div class="tile__service"><span style="min-height:3px" class="icon-service icon-service-m6replay_s tile__service-logo"' +
					' title="M6"></span></div></div><div class="tile__label"><div class="tile__title">' + data.data[i].r_nom + '</div>' +
					'<div class="tile__subtitle"><span>' + data.data[i].r_videos + ' vidéos</span></div></div><div class="tile__polaroid"></div></a></div></div>';

				if (z === 4) {
					chcas1 = ch;
					$('.mosaic__spit').append(chcas1);
				}
				if (z > 4) {

					mosaic__tile += '<div class="mosaic__tile" id="'+z+'"><a class="tile tile--16-9" href="http://51.75.197.3/plesk-site-preview/rtiplay.ci/51.75.197.3//Emission/' + slugify(data.data[i].r_nom) + '/1-' + slugify(data.data[i].r_i) + '"><div class="tile__image">' +
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

</html>
