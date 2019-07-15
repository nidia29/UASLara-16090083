@extends('templates.default')
@section('content')
<div class="content">
			<div class="container-fluid">
				<div class="page-title-box">
					<div class="row align-items-center">
						<div class="col-sm-6">
							<h4 class="page-title">Data Pendaftaran Siswa</h4>
							
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
									<th>No</th>
									<th>Nama</th>
									<th>Asal sekolah</th>
									<th>Nem</th>
									<th>Foto</th>
									<th>Action</th>
									
								</tr>
								</thead>
								<tbody>
									<?php $no=1 ?>
									@foreach ($pendaftaran as $pendaftaran)
								<tr>
									<td>{{$no}}</td>
									<td>{{$pendaftaran->nama}}</td>
									<td>{{$pendaftaran->asal_sekolah}}</</td>
									<td>{{$pendaftaran->nilai}}</</td>
									<td><img src="{{asset('images/'.$pendaftaran->ijazah)}}" width="50" height="50"></td>
									<td>
										<a href="{{route('pendaftaran.edit',$pendaftaran->id)}}" class="btn btn-warning"><i class="ion ion-md-create"></i></a>
										<a href="#" class="btn btn-danger" data-toggle="modal"
                                               data-target=".bs-example-modal-lg"><i class="ti-trash"></i></a>
										 <!--  Modal content for the above example -->
                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                                 aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Hapus
                                                                Siswa</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('pendaftaran.destroy',$pendaftaran->id)}}" method="POST">
                                                            	@csrf
                                                            	@method('DELETE')
                                                  
                                                                <p>
                                                                    Apakah Anda Mau Menghapus Siswa  ?
                                                                </p>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Ya
                                                                    </button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Kembali
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

									</td>

									
								</tr>
								<?php $no++ ?>
								@endforeach
								
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