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
								<form action="{{route('pendaftaran.update',$pendaftaran->id)}}" enctype="multipart/form-data" method="post">
								{{csrf_field()}}
                                {{method_field('PATCH')}}
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nama" value="{{$pendaftaran->nama}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nama_ayah" value="{{$pendaftaran->nama_ayah}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nama_ibu" value="{{$pendaftaran->nama_ibu}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nomor Hp</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="no_hp" value="{{$pendaftaran->no_hp}}">
                                    </div>
                                </div>



                        

                                <h4 class="mt-0 header-title">Alamat</h4>
                                <textarea class="form-control"  name="alamat"
                                          value="{{$pendaftaran->alamat}}">{{$pendaftaran->alamat}}</textarea>
                                <br>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button href="{{url('pendaftaran')}}" type="button" class="btn btn-success">Kembali</button>
									
								</form>
								
								
							</div>
						</div>
					</div>
		        </div>
				<!-- end row -->
				
			</div>
</div>
@endsection