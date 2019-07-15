@extends('templates.default')
@section('content')
<div class="content">
			<div class="container-fluid">
				<div class="page-title-box">
					<div class="row align-items-center">
						<div class="col-sm-6">
							<h4 class="page-title">Data Nilai Siswa</h4>
							
						</div>
						<div class="col-sm-6">
							<div class="float-right d-none d-md-block">
								<div class="dropdown">
									<button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-settings mr-2"></i> Settings</button>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end row -->
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								
								<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
								<thead>
								<tr>
									<th>Nomor Pendaftaran</th>
									<th>Nama</th>
									<th>Nem</th>
									
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>1</td>
									<td>Nidiya Albarida</td>
									<td>25.00</td>
									
								</tr>
								<tr>
									<td>2</td>
									<td>Amanda Putri </td>
									<td>26.00</td>
									
								</tr>
								
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- end col --></div>
				<!-- end row -->
				
				<!-- end row --></div>
			<!-- container-fluid --></div>
@endsection