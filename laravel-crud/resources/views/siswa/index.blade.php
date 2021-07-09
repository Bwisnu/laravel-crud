@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Siswa</h3>
									<div class="right">
										<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
									</div>
										
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>NAMA</th>
												<th>KELAS</th>
												<th>JURUSAN</th>
												<th>ALAMAT</th>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_siswa as $siswa)
											<tr>
												<td>{{$siswa->nama}}</td>
												<td>{{$siswa->kelas}}</td>
												<td>{{$siswa->jurusan}}</td>
												<td>{{$siswa->alamat}}</td>
												<td>
													<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
													<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Kamu Mau Hapus Data Ini?')">Delete</a>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	 <div class="modal-dialog">
		 <div class="modal-content">
			 <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			 </div>
			<div class="modal-body">
			<form action="/siswa/create" method="POST">
				{{csrf_field()}}
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">NAMA</label>
			    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
			  </div> 
			<div class="form-group">
				<label>KELAS</label><br>
				<select name="kelas" class="form-select" aria-label="Default select example">
					<option value="X">10</option>
					<option value="XI">11</option>
					<option value="XII">12</option>
				</select>
			</div>	
			<div class="form-group">
				<label>JURUSAN</label><br>
					<select name="jurusan" class="form-select" size="3" aria-label="Default select example">
						<option value="AK 1">AKUNTANSI (1)</option>
						<option value="AK 2">AKUNTANSI (2)</option>
						<option value="AK 3">AKUNTANSI (3)</option>
						<option value="AK 4">AKUNTANSI (4)</option>
						<option value="AP 1">ADMINISTRASI PERKANTORAN (1)</option>
						<option value="AP 2">ADMINISTRASI PERKANTORAN (2)</option>
						<option value="AP 3">ADMINISTRASI PERKANTORAN (3)</option>
						<option value="AP 4">ADMINISTRASI PERKANTORAN (4)</option>
						<option value="PM 1">BISNIS DARING dan PEMASARAN (1)</option>
						<option value="PM 2">BISNIS DARING dan PEMASARAN (2)</option>
						<option value="PM 3">BISNIS DARING dan PEMASARAN (3)</option>
						<option value="PS">PERBANKAN SYARIAH</option>
						<option value="MM 1">MULTI MEDIA (1)</option>
						<option value="MM 3">MULTI MEDIA (2)</option>
						<option value="TKJ 1">TEKNIK KOMPUTER dan JARINGAN (1)</option>
						<option value="TKJ 2">TEKNIK KOMPUTER dan JARINGAN (2)</option>
						<option value="RPL 1">REKAYASA PERANGKAT LUNAK (1)</option>
						<option value="RPL 2">REKAYASA PERANGKAT LUNAK (2)</option>
					</select>
			</div>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">ALAMAT</label>
				<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			  
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>
@stop
