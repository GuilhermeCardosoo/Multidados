<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<title>Multidados TI</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
	<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="page-header-fixed">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<!-- INCLUDE HEADER -->
		<?php
		include('./layout/cabecalho.php');
		?>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<div class="clearfix">
	</div>
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<!-- INCLUDE MENU -->
				<?php
				include('./layout/menu.php');

				require_once 'DataRequest.php';
				$datesRequests = new DataRequest();
				//CLIENTES;
				// $cliente = $datesRequests->dadosClientes();
				$clienteContagem = $datesRequests->dadosClientes('c');
				//FORNECEDORES;
				// $fornecedor = json_decode($datesRequests->dadosFornecedores());
				$fornecedorContagem = $datesRequests->dadosFornecedores('c');
				//USUARIOS;
				// $usuario = $datesRequests->dadosUsuarios();
				$usuarioContagem = $datesRequests->dadosUsuarios('c');
				// ---------------------
				// var_dump($usuarios);
				?>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								Widget settings form goes here
							</div>
							<div class="modal-footer">
								<button type="button" class="btn blue">Save changes</button>
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- BEGIN PAGE HEADER-->
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							Dashboard <small>tudo que você precisa à um click.</small>
						</h3>
						<ul class="page-breadcrumb breadcrumb">
							<li>
								<i class="fa fa-home"></i>
								<a href="index.html">Home</a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li>
								<a href="#">Dashboard</a>
							</li>
							<li class="pull-right">
								<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
									<i class="fa fa-calendar"></i>
									<span>
									</span>
									<i class="fa fa-angle-down"></i>
								</div>
							</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN DASHBOARD STATS -->
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="dashboard-stat blue">
							<div class="visual">
								<i class="fa fa-shopping-cart"></i>
							</div>
							<div class="details">
								<div class="number">
									<?php echo $clienteContagem ?>
								</div>
								<div class="desc">
									Clientes
								</div>
							</div>
							<a class="more" href="#" id="viewTableCliente">
								Visualizar <i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="dashboard-stat green">
							<div class="visual">
								<i class="fa fa-group"></i>
							</div>
							<div class="details">
								<div class="number">
									<?php echo $usuarioContagem ?>
								</div>
								<div class="desc">
									Usuários
								</div>
							</div>
							<a class="more" href="#" id="viewTableUsuario">
								Visualizar <i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="dashboard-stat purple">
							<div class="visual">
								<i class="fa fa-globe"></i>
							</div>
							<div class="details">
								<div class="number">
									<?php echo $fornecedorContagem ?>
								</div>
								<div class="desc">
									Fornecedores
								</div>
							</div>
							<a class="more" href="#" id="viewTableFornecedor">
								Visualizar <i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- END DASHBOARD STATS -->
				<div class="clearfix">
				</div>
				<!--Tabela-->
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN SAMPLE TABLE PORTLET-->
						<div class="portlet box grey">
							<div class="portlet-title" id="table">
								<div class="caption">
									<i class="fa fa-folder-open"></i>Tabela Simples
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-responsive">
									<table class="table table-hover" id="tabela">
										<thead id="tableHead">
											<tr>
												<th>
													#
												</th>
												<th>
													Nome
												</th>
												<th>
													Sobrenome
												</th>
												<th>
													Usuario
												</th>
												<th>
													Status
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													1
												</td>
												<td>
													Mark
												</td>
												<td>
													Otto
												</td>
												<td>
													makr124
												</td>
												<td>
													<span class="label label-sm label-success">
														Aprovado
													</span>
												</td>
											</tr>
											<tr>
												<td>
													2
												</td>
												<td>
													Jacob
												</td>
												<td>
													Nilson
												</td>
												<td>
													jac123
												</td>
												<td>
													<span class="label label-sm label-info">
														Pendente
													</span>
												</td>
											</tr>
											<tr>
												<td>
													3
												</td>
												<td>
													Larry
												</td>
												<td>
													Cooper
												</td>
												<td>
													lar
												</td>
												<td>
													<span class="label label-sm label-warning">
														Suspenso
													</span>
												</td>
											</tr>
											<tr>
												<td>
													4
												</td>
												<td>
													Sandy
												</td>
												<td>
													Lim
												</td>
												<td>
													sanlim
												</td>
												<td>
													<span class="label label-sm label-danger">
														Bloqueado
													</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- END SAMPLE TABLE PORTLET-->
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<!-- INCLUDE FOOTER -->
	<?php
	include('./layout/rodape.php');
	?>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.cockie.min.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js" type="text/javascript"></script>
	<script src="assets/scripts/index.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<style>
		.tableCliente {
			background-color: #208dbe !important;
		}

		.tableUsuario {
			background-color: #10a062 !important;
		}

		.tableFornecedor {
			background-color: #6e1881 !important;
		}
		#tableHead {
			font-weight: bold;
			text-transform: capitalize;
		}
	</style>
	<script>
		jQuery(document).ready(function() {
			App.init(); // initlayout and core plugins
			Index.init();
		});
		// BOTTON CLIENTE 
		$("#viewTableCliente").on("click", function() {
			if ($("#table").hasClass("tableUsuario")) {
				$("#table").removeClass("tableUsuario").addClass("tableCliente");
			}
			if ($("#table").hasClass("tableFornecedor")) {
				$("#table").removeClass("tableFornecedor").addClass("tableCliente");
			}
			$("#table").addClass("tableCliente");
			getDados('dadosClientes');
		});
		// BOTTON USUARIO 
		$("#viewTableUsuario").on("click", function() {
			if ($("#table").hasClass("tableCliente")) {
				$("#table").removeClass("tableCliente").addClass("tableUsuario");
			}
			if ($("#table").hasClass("tableFornecedor")) {
				$("#table").removeClass("tableFornecedor").addClass("tableUsuario");
			}
			$("#table").addClass("tableUsuario");
			getDados('dadosUsuarios');
		});
		// BOTTON FORNECEDOR 
		$("#viewTableFornecedor").on("click", function() {
			if ($("#table").hasClass("tableCliente")) {
				$("#table").removeClass("tableCliente").addClass("tableFornecedor");
			}
			if ($("#table").hasClass("tableUsuario")) {
				$("#table").removeClass("tableUsuario").addClass("tableFornecedor");
			}
			$("#table").addClass("tableFornecedor");
			getDados('dadosFornecedores');
		});

		function getDados(action) {
			$.ajax({
				url: 'DataRequest.php',
				type: 'POST',
				dataType: 'json',
				data: {
					action: action
				},
				success: function(response) {
					$("#tabela tr").remove();
					var tabela = document.getElementById("tabela");				
						for (let i = 0; i < response.length; i++) {
							var linha = tabela.insertRow(i);
							var item = Object.values(response[i]);
							//FOR BODY TABLE
							for (let j = 0; j < item.length; j++) {
								var celula = linha.insertCell(j);
								celula.innerHTML = item[j];

							}
						}
						var cabecalho = Object.keys(response[0]);
						//FOR HEADER TABLE
						linhaCabecalho= tableHead.insertRow(0);
						for (let y = 0; y < cabecalho.length; y++) {
							var celula = linhaCabecalho.insertCell(y);
								celula.innerHTML = cabecalho[y];
						}
				},
				error: function(xhr, status, error) {
					console.error(error);
				}
			});
		}
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>