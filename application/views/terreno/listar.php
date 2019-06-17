<?php $this->load->view('head_foot/topo')?>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<?php $this->load->view('head_foot/menu');?>
		<!-- END SIDEBAR -->
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<!-- BEGIN CONTENT BODY -->
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE BAR -->
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<a href="javascript:;" class="text-capitalize"><?= $this->uri->segment(1)?></a>
						<i class="fa fa-circle"></i>
					</li>
					<li class="text-capitalize">
						<span><?= $this->uri->segment(2)?></span>
					</li>
				</ul>
			</div>
			<!-- END PAGE BAR -->
			<!-- BEGIN PAGE TITLE-->
			<p></p>
			<!-- END PAGE TITLE-->
			<!-- END PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<div class="form-wizard">
						<div class="form-body">

							<div class="tab-content">
								<div class="">
									<div class="alert alert-info">
										<h4 class="form-section">Listagem de Terrenos</h4>
									</div>
									<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
										<thead style="font-weight: bold">
										<tr>
											<th>#</th>
											<th><i class="fa fa-code"></i> Código</th>
											<th><i class="fa fa-user"></i> Proprietário</th>
											<th><i class="fa fa-map-marker"></i> Comuna </th></th>
											<th><i class="fa fa-map-marker"></i> Bairro </th></th>
											<th><i class="fa fa-square"></i> Área </th></th>
											<th><i class="fa fa-square"></i> Quarteirão </th></th>
											<th><i class="fa fa-square"></i> Lote </th></th>
											<th><i class="fa fa-gear"></i> Opções </th></th>
										</tr>
										</thead>
										<tbody>
										<?php
										if(true) {
											echo "<div class=\"alert alert-danger\"><strong><i class='fa fa-exclamation-triangle'></i></strong> Não existe nenhum terreno registrado... </div>";
										}?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT BODY -->
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
