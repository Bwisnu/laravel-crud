@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<form action="/siswa/{{$siswa->id}}/update" method="POST">
				{{csrf_field()}}
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">NAMA</label>
			    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{$siswa->nama}}">
			  </div> 
			  <div class="form-group">
				<label>KELAS</label><br>
					<select name="kelas" class="form-select" aria-label="Default select example">
						<option value="X" @if($siswa->kelas == 'X') selected @endif>10</option>
						<option value="XI" @if($siswa->kelas == 'XI') selected @endif>11</option>
						<option value="XII" @if($siswa->kelas == 'XII') selected @endif>12</option>
					</select>
			  </div>	
			<div class="form-group">
				<label>JURUSAN</label><br>
					<select name="jurusan" class="form-select" size="3" aria-label="Default select example">
						<option value="AK 1" @if($siswa->jurusan == 'AK 1') selected @endif>AKUNTANSI (1)</option>
						<option value="AK 2" @if($siswa->jurusan == 'AK 2') selected @endif>AKUNTANSI (2)</option>
						<option value="AK 3" @if($siswa->jurusan == 'AK 3') selected @endif>AKUNTANSI (3)</option>
						<option value="AK 4" @if($siswa->jurusan == 'AK 4') selected @endif>AKUNTANSI (4)</option>

						<option value="AP 1" @if($siswa->jurusan == 'AP 1') selected @endif>ADMINISTRASI PERKANTORAN (1)</option>
						<option value="AP 2" @if($siswa->jurusan == 'AP 2') selected @endif>ADMINISTRASI PERKANTORAN (2)</option>
						<option value="AP 3" @if($siswa->jurusan == 'AP 3') selected @endif>ADMINISTRASI PERKANTORAN (3)</option>
						<option value="AP 4" @if($siswa->jurusan == 'AP 4') selected @endif>ADMINISTRASI PERKANTORAN (4)</option>

						<option value="PM 1" @if($siswa->jurusan == 'PM 1') selected @endif>BISNIS DARING dan PEMASARAN (1)</option>
						<option value="PM 2" @if($siswa->jurusan == 'PM 2') selected @endif>BISNIS DARING dan PEMASARAN (2)</option>
						<option value="PM 3" @if($siswa->jurusan == 'PM 3') selected @endif>BISNIS DARING dan PEMASARAN (3)</option>

						<option value="PS" @if($siswa->jurusan == 'PS') selected @endif>PERBANKAN SYARIAH</option>

						<option value="MM 1" @if($siswa->jurusan == 'MM 1') selected @endif>MULTI MEDIA (1)</option>
						<option value="MM 2" @if($siswa->jurusan == 'MM 2') selected @endif>MULTI MEDIA (2)</option>

						<option value="TKJ 1" @if($siswa->jurusan == 'TKJ 1') selected @endif>TEKNIK KOMPUTER dan JARINGAN (1)</option>
						<option value="TKJ 2" @if($siswa->jurusan == 'TKJ 2') selected @endif>TEKNIK KOMPUTER dan JARINGAN (2)</option>

						<option value="RPL 1" @if($siswa->jurusan == 'RPL 1') selected @endif>REKAYASA PERANGKAT LUNAK (1)</option>
						<option value="RPL 2" @if($siswa->jurusan == 'RPL 2') selected @endif>REKAYASA PERANGKAT LUNAK (2)</option>
					</select>
			</div>		
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">ALAMAT</label>
				<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
			</div>	
				<button type="submit" class="btn btn-warning btn-sm">Update</button>
			</form>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>					
@stop

@section('content1')

		<h1>EDIT DATA SISWA</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
			<form action="/siswa/{{$siswa->id}}/update" method="POST">
				{{csrf_field()}}
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">NAMA</label>
			    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{$siswa->nama}}">
			  </div> 
			  <div class="form-group">
				<label>KELAS</label>
					<select name="kelas" class="form-select" aria-label="Default select example">
						<option value="X" @if($siswa->kelas == 'X') selected @endif>10</option>
						<option value="XI" @if($siswa->kelas == 'XI') selected @endif>11</option>
						<option value="XII" @if($siswa->kelas == 'XII') selected @endif>12</option>
					</select>
			  </div>	
			<div class="form-group">
				<label>JURUSAN</label>
					<select name="jurusan" class="form-select" size="3" aria-label="Default select example">
						<option value="AK 1" @if($siswa->jurusan == 'AK 1') selected @endif>AKUNTANSI (1)</option>
						<option value="AK 2" @if($siswa->jurusan == 'AK 2') selected @endif>AKUNTANSI (2)</option>
						<option value="AK 3" @if($siswa->jurusan == 'AK 3') selected @endif>AKUNTANSI (3)</option>
						<option value="AK 4" @if($siswa->jurusan == 'AK 4') selected @endif>AKUNTANSI (4)</option>

						<option value="AP 1" @if($siswa->jurusan == 'AP 1') selected @endif>ADMINISTRASI PERKANTORAN (1)</option>
						<option value="AP 2" @if($siswa->jurusan == 'AP 2') selected @endif>ADMINISTRASI PERKANTORAN (2)</option>
						<option value="AP 3" @if($siswa->jurusan == 'AP 3') selected @endif>ADMINISTRASI PERKANTORAN (3)</option>
						<option value="AP 4" @if($siswa->jurusan == 'AP 4') selected @endif>ADMINISTRASI PERKANTORAN (4)</option>

						<option value="PM 1" @if($siswa->jurusan == 'PM 1') selected @endif>BISNIS DARING dan PEMASARAN (1)</option>
						<option value="PM 2" @if($siswa->jurusan == 'PM 2') selected @endif>BISNIS DARING dan PEMASARAN (2)</option>
						<option value="PM 3" @if($siswa->jurusan == 'PM 3') selected @endif>BISNIS DARING dan PEMASARAN (3)</option>

						<option value="PS" @if($siswa->jurusan == 'PS') selected @endif>PERBANKAN SYARIAH</option>

						<option value="MM 1" @if($siswa->jurusan == 'MM 1') selected @endif>MULTI MEDIA (1)</option>
						<option value="MM 2" @if($siswa->jurusan == 'MM 2') selected @endif>MULTI MEDIA (2)</option>

						<option value="TKJ 1" @if($siswa->jurusan == 'TKJ 1') selected @endif>TEKNIK KOMPUTER dan JARINGAN (1)</option>
						<option value="TKJ 2" @if($siswa->jurusan == 'TKJ 2') selected @endif>TEKNIK KOMPUTER dan JARINGAN (2)</option>

						<option value="RPL 1" @if($siswa->jurusan == 'RPL 1') selected @endif>REKAYASA PERANGKAT LUNAK (1)</option>
						<option value="RPL 2" @if($siswa->jurusan == 'RPL 2') selected @endif>REKAYASA PERANGKAT LUNAK (2)</option>
					</select>
			</div>		
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">ALAMAT</label>
				<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
			</div>	
				<button type="submit" class="btn btn-warning btn-sm">Update</button>
			</form>
			</div>
		</div>
@endsection	