<!DOCTYPE html>
<html class="loading">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>𝙂 𝙊 𝙊 𝘿 𝐂𝐡𝐞𝐜𝐤𝐞𝐫</title>
	<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
	<link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
	<link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
	<link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="vertical-layout" style="background-color:#141414;" data-color="bg-gradient-x-purple-blue">
	<style>
		h5,
		h4 {
			color: white;
		}

		p.uk-margin-small-top {
			margin-top: 0px !important;
			margin-bottom: 1px;
			color: #959191;
			letter-spacing: 1px;
			font: bold;
		}

		.text-centere {
			background-color: #2C2C2C;
			border: 1px solid;
			border-color: #18d6a3;
			border-radius: 15px;
			font-family: 'Fjalla One', sans-serif;
			letter-spacing: 2px;
			width: 150px;

		}

		.text-center {
			background-color: #2C2C2C;
			border: 1px solid;
			border-color: #18d6a3;
			border-radius: 15px;
			font-family: 'Fjalla One', sans-serif;
			letter-spacing: 2px;

		}

		textarea {
			color: white;
			resize: none;
			border: 1px white solid;
		}

		.text-center::placeholder {
			color: grey;
		}

		.text-center:focus {
			background-color: #21212e;
			border: 1px solid cyan;
			transition: 0.5s;
		}

		textarea::-webkit-scrollbar {
			width: 2px;
			background-color: #112132;
		}

		textarea::-webkit-scrollbar-thumb {
			border-radius: 10px;
			background-color: #2e4964;
		}

		.lista_reprovadass {
			color: #747474;
		}

		.card-body {
			background-color: black;
			border: 1px solid;
			border-color: #18d6a3;
			border-radius: 15px;
			box-shadow: 0 0 5px white;
		}

		.text-center {
			background-color: black;
			border: 1px solid;
			border-color: #18d6a3;
			border-radius: 15px;

		}

		.badge-success,
		.btn-success {
			background-color: #5ed84f;
			color: black;
			border: none;
		}

		.btn-success:hover {
			background-color: #28af17;
			border: none;
			color: black;
			box-shadow: hidden;
		}

		.aprovadas {
			background-color: #35a7ff;
			color: black;
		}

		.badge-danger {
			background-color: #ff1b23;
			color: black;
		}

		.html body .content .content-wrapper {
			background-color: #112132;
		}

		.statusbar {
			height: 320px;
			padding-top: 50px;
		}

		.hr-statusbar {
			border: none;
			height: 0.5px;
			background-image: linear-gradient(to right, #6f1ad6, #1ad6d0);
		}

		.footer-C {
			background-color: #1f1f29;
			color: white;
			text-align: center;
			font-family: 'Fjalla One', sans-serif;

			font-size: 17px;
			letter-spacing: 1px;

		}
	</style>
	<div class="app-content content" style="display:block;background-color:#1f1f29;">
		<div class="content" style="background-color:#1f1f29;">
			<br>
			<h4 class="mb-2" style="text-align:center;"><strong>𝙂 𝙊 𝙊 𝘿 𝐂𝐡𝐞𝐜𝐤𝐞𝐫</strong></h4>

		</div>
		<div class="content-body">
			<div class="mt-2"></div>
			<div class="row" style="max-width: 950px; margin: auto;">
				<div class="col-md-8">
					<div class="card" style="background-color:transparent;">
						<div class="card-body text-center" style="box-shadow: 0 0 10px white;">

							<textarea id="listaa" rows="8" class="form-control text-center form-checker mb-2" placeholder="PUT YOUR CARDS HERE"></textarea>
							<textarea rows="1" class="form-control text-center" style="width: 100%; float: left ; margin-bottom : 5px" id="sec" placeholder="𝗦𝗞 𝗟𝗜𝗩𝗘 (Leave Empty For NonSK)"></textarea>
							<textarea rows="1" class="form-control text-center" style="width: 49%; float: left ; margin-bottom : 5px" id="amt" placeholder="𝗔𝗠𝗢𝗨𝗡𝗧"></textarea>
							<textarea rows="1" class="form-control text-center" style="width: 49%; float: right ; margin-bottom : 5px" id="tgid" placeholder="𝗧𝗚 𝗜𝗗 69xx"></textarea>
							<select name="cur" id="cur" class="form-control text-center" style="width: 49%; float: left ; margin-bottom : 5px">
								<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="usd">𝗨𝗦𝗗 $</option>
								<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="eur">𝗘𝗨𝗥 €</option>
								<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="inr">𝗜𝗡𝗥 ₹</option>
								<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gbp">𝗚𝗕𝗣 £</option>
							</select>
							<select name="gate" id="gate" class="form-control text-center" style="width: 49%; float: right ; margin-bottom : 5px">
								<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="ccn">𝗦𝘁𝗿𝗶𝗽𝗲 𝗖𝗖𝗡</option>
								<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="cvv">𝗦𝘁𝗿𝗶𝗽𝗲 𝗖𝗩𝗩</option>
							</select>
							<button class="btn btn-play btn-glow btn-bg-gradient-x-blue-cyan text-white" style="width: 49%; float: left;"><i class="fa fa-play"></i>START</button>
							<button class="btn btn-stop btn-glow btn-bg-gradient-x-red-pink text-white" style="width: 49%; float: right;" disabled><i class="fa fa-stop"></i>STOP</button>



						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-2" style="background-color:transparent;">
						<div class="card-body" style="box-shadow: 0 0 5px white;">

							<h5>TOTAL :<span class="badge badge-primary float-right carregadas">0</span></h5>
							<hr class="hr-statusbar">

							<h5>CHARGED :<span class="badge badge-success float-right charge">0</span></h5>
							<hr class="hr-statusbar">

							<h5>CVV :<span class="badge badge-success float-right cvvs">0</span></h5>
							<hr class="hr-statusbar">

							<h5>CCN :<span class="badge badge-success float-right aprovadas">0</span></h5>
							<hr class="hr-statusbar">

							<h5>DECLINED :<span class="badge badge-danger float-right reprovadas">0</span></h5>
							<hr class="hr-statusbar">

						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="card" style="background-color:transparent;">
						<div class="card-body">
							<div class="float-right">
								<button type="show" class="btn btn-primary btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
								<button class="btn btn-success btn-sm btn-copy1"><i class="fa fa-copy"></i></button>
							</div>
							<h4 class="card-title mb-1"><i class="fa fa-check-circle text-success"></i> CHARGED</h4>
							<div id='lista_charge'></div>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="card" style="background-color:transparent;">
						<div class="card-body">
							<div class="float-right">
								<button type="show" class="btn btn-primary btn-sm show-live"><i class="fa fa-eye-slash"></i></button>
								<button class="btn btn-success btn-sm btn-copy2"><i class="fa fa-copy"></i></button>
							</div>
							<h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> CVV</h4>
							<div id='lista_cvvs'></div>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="card" style="background-color:transparent;">
						<div class="card-body">
							<div class="float-right">
								<button type="show" class="btn btn-primary btn-sm show-lives"><i class="fa fa-eye-slash"></i></button>
								<button class="btn btn-success btn-sm btn-copy"><i class="fa fa-copy"></i></button>
							</div>
							<h4 class="card-title mb-1"><i class="fa fa-times text-success"></i> CCN</h4>
							<div id='lista_aprovadas'></div>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="card" style="background-color:transparent;">
						<div class="card-body">
							<div class="float-right">
								<button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
								<button class="btn btn-danger btn-sm btn-trash"><i class="fa fa-trash"></i></button>
							</div>
							<h4 class="card-title mb-1"><i class="fa fa-times text-danger"></i> DECLINED</h4>
							<div style='display: none;' id='lista_reprovadas'></div>
						</div>
					</div>
				</div>

				</section>
			</div>
		</div>
	</div>

	<script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>


	<footer class="footer-C">𝐌𝐚𝐝𝐞 𝐁𝐲 <a href="https://t.me/Good_Shadow_XD">𝙂 𝙊 𝙊 𝘿 𝙎 𝙃 𝘼 𝘿 𝙊 𝙒</a></footer>
	<script>
		$(document).ready(function() {


			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-success',
					cancelButton: 'btn btn-danger'
				},
				buttonsStyling: false
			})

			swalWithBootstrapButtons.fire({
				title: "Private Charge Cards",
				text: "Join Our Telegram Channel !",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Click To Join',
				cancelButtonText: 'Already Joined',
				reverseButtons: false
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire({
						title: 'Redirecting.',
						text: 'You are now being redirected towards my channel, make sure to join it!',
						timer: 1500,
						timerProgressBar: true,
						icon: 'success'
					})
					setTimeout(RedirectUrl, 1500);
				} else if (
					result.dismiss === Swal.DismissReason.cancel
				) {
					Swal.fire({
						title: 'Great!',
						text: '',
						timer: 1000,
						timerProgressBar: true,
						icon: 'success'
					})
				}
			})

			function RedirectUrl() {
				window.location.href = "https://t.me/Stripe_Charge_Group";
			}

			$('.show-charge').click(function() {
				var type = $('.show-charge').attr('type');
				$('#lista_charge').slideToggle();
				if (type == 'show') {
					$('.show-charge').html('<i class="fa fa-eye"></i>');
					$('.show-charge').attr('type', 'hidden');
				} else {
					$('.show-charge').html('<i class="fa fa-eye-slash"></i>');
					$('.show-charge').attr('type', 'show');
				}
			});

			$('.show-live').click(function() {
				var type = $('.show-live').attr('type');
				$('#lista_cvvs').slideToggle();
				if (type == 'show') {
					$('.show-live').html('<i class="fa fa-eye"></i>');
					$('.show-live').attr('type', 'hidden');
				} else {
					$('.show-live').html('<i class="fa fa-eye-slash"></i>');
					$('.show-live').attr('type', 'show');
				}
			});

			$('.show-lives').click(function() {
				var type = $('.show-lives').attr('type');
				$('#lista_aprovadas').slideToggle();
				if (type == 'show') {
					$('.show-lives').html('<i class="fa fa-eye"></i>');
					$('.show-lives').attr('type', 'hidden');
				} else {
					$('.show-lives').html('<i class="fa fa-eye-slash"></i>');
					$('.show-lives').attr('type', 'show');
				}
			});

			$('.show-dies').click(function() {
				var type = $('.show-dies').attr('type');
				$('#lista_reprovadas').slideToggle();
				if (type == 'show') {
					$('.show-dies').html('<i class="fa fa-eye"></i>');
					$('.show-dies').attr('type', 'hidden');
				} else {
					$('.show-dies').html('<i class="fa fa-eye-slash"></i>');
					$('.show-dies').attr('type', 'show');
				}
			});

			$('.btn-trash').click(function() {
				Swal.fire({
					title: 'REMOVED DEAD',
					icon: 'success',
					showConfirmButton: false,
					toast: true,
					position: 'top-end',
					timer: 3000
				});
				$('#lista_reprovadas').text('');
			});

			$('.btn-copy1').click(function() {
				Swal.fire({
					title: 'COPIED LIVE',
					icon: 'success',
					showConfirmButton: false,
					toast: true,
					position: 'top-end',
					timer: 3000
				});
				var lista_charge = document.getElementById('lista_charge').innerText;
				var textarea = document.createElement("textarea");
				textarea.value = lista_charge;
				document.body.appendChild(textarea);
				textarea.select();
				document.execCommand('copy');
				document.body.removeChild(textarea);
			});

			$('.btn-copy2').click(function() {
				Swal.fire({
					title: 'COPIED CVV',
					icon: 'success',
					showConfirmButton: false,
					toast: true,
					position: 'top-end',
					timer: 3000
				});
				var lista_live = document.getElementById('lista_cvvs').innerText;
				var textarea = document.createElement("textarea");
				textarea.value = lista_live;
				document.body.appendChild(textarea);
				textarea.select();
				document.execCommand('copy');
				document.body.removeChild(textarea);
			});

			$('.btn-copy').click(function() {
				Swal.fire({
					title: 'COPIED CCN',
					icon: 'success',
					showConfirmButton: false,
					toast: true,
					position: 'top-end',
					timer: 3000
				});
				var lista_lives = document.getElementById('lista_aprovadas').innerText;
				var textarea = document.createElement("textarea");
				textarea.value = lista_lives;
				document.body.appendChild(textarea);
				textarea.select();
				document.execCommand('copy');
				document.body.removeChild(textarea);
			});


			$('.btn-play').click(function() {
				var sk = $("#sec").val();
				var amt = $("#amt").val();
				var cur = $("#cur").val();
				var tgid = $("#tgid").val();
				var gate = document.getElementById("gate").value;
				var lista = $("#listaa").val().trim();
				var array = lista.split('\n');
				var charge = 0,
					live = 0,
					lives = 0,
					dies = 0,
					testadas = 0,
					txt = '';

				if (!lista) {
					Swal.fire({
						title: 'You did not provide a card :(',
						icon: 'error',
						showConfirmButton: false,
						toast: true,
						position: 'top-end',
						timer: 3000
					});
					return false;
				}
				if (!tgid) {
					Swal.fire({
						title: 'You did not provide TG id :(',
						icon: 'error',
						showConfirmButton: false,
						toast: true,
						position: 'top-end',
						timer: 3000
					});
					return false;
				}
				if (cur === 'inr' && amt < 100) {
					Swal.fire({
						title: 'Minimum amount for INR is 100 :(',
						icon: 'error',
						showConfirmButton: false,
						toast: true,
						position: 'top-end',
						timer: 3000
					});
					return false;
				}
				if (!sk) {
					Swal.fire({
						title: 'Non Sk Activated',
						icon: 'success',
						showConfirmButton: false,
						toast: true,
						position: 'top-end',
						timer: 3000
					});
				} else {
					Swal.fire({
						title: 'Sk based Activated',
						icon: 'success',
						showConfirmButton: false,
						toast: true,
						position: 'top-end',
						timer: 3000
					});
				}
				var line = array.filter(function(value) {
					if (value.trim() !== "") {
						txt += value.trim() + '\n';
						return value.trim();
					}
				});

				/*
				var line = array.filter(function(value){
				return(value.trim() !== "");
				});
				*/

				var total = line.length;


				/*
				line.forEach(function(value){
				txt += value + '\n';
				});
				*/

				$("#listaa").val(txt.trim());
				// ảo ma hả, đừng lấy code chứ !!
				if (total > 5000) {
					Swal.fire({
						title: ' < 5000 CCS',
						icon: 'warning',
						showConfirmButton: false,
						toast: true,
						position: 'top-end',
						timer: 3000
					});
					return false;
				}

				$('.carregadas').text(total);
				$('.btn-play').attr('disabled', true);
				$('.btn-stop').attr('disabled', false);

				line.every(function(data, index) {
					setTimeout(
						function() {
							var callBack = $.ajax({
								url: 'api/skbased.php' + '?lista=' + data + '&sk=' + sk + '&amt=' + amt + '&cur=' + cur + '&tgid=' + tgid + '&gate=' + gate,
								success: function(retorno) {
									if ((retorno.indexOf("〔ϟ〕CHARGED")) === 31) {
										$('#lista_charge').append(retorno);
										removelinha();
										charge = charge + 1;
									} else if ((retorno.indexOf("〔ϟ〕CVV")) === 31) {
										$('#lista_cvvs').append(retorno);
										removelinha();
										live = live + 1;
									} else if ((retorno.indexOf("〔ϟ〕CCN")) === 31) {
										$('#lista_aprovadas').append(retorno);
										removelinha();
										lives = lives + 1;
									} else {
										$('#lista_reprovadas').append(retorno);
										removelinha();
										dies = dies + 1;
									}
									testadas = charge + live + lives + dies;
									$('.charge').text(charge);
									$('.cvvs').text(live);
									$('.aprovadas').text(lives);
									$('.reprovadas').text(dies);
									$('.testadas').text(testadas);

									if (testadas == total) {
										Swal.fire({
											title: 'ALL CARDS HAS BEEN CHECKED',
											icon: 'success',
											showConfirmButton: false,
											toast: true,
											position: 'top-end',
											timer: 3000
										});
										$('.btn-play').attr('disabled', false);
										$('.btn-stop').attr('disabled', true);
									}
								}
							});
						}, 1 * index);
					return true;
					$('.btn-stop').click(function() {
						Swal.fire({
							title: 'PAUSED',
							icon: 'warning',
							showConfirmButton: false,
							toast: true,
							position: 'top-end',
							timer: 3000
						});
						$('.btn-play').attr('disabled', false);
						$('.btn-stop').attr('disabled', true);
						callBack.abort();
						return false;
					});
				});
			});
		});

		function removelinha() {
			var lines = $("#listaa").val().split('\n');
			lines.splice(0, 1);
			$("#listaa").val(lines.join("\n"));
		}
	</script>

</body>

</html>