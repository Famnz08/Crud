@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Pengguna</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/storepengguna">
	@csrf
	<div class="form-group">
		<label>Id User</label>
		<input class="form-control" type="text" name="id_user" placeholder="ID Username">
	</div>

	<div class="form-group">
		<label>Nama </label>
	<input class="form-control" type="text" name="nama" placeholder="Nama">
	</div>
	<div class="form-group">
		<label>Username </label>
	<input class="form-control" type="text" name="username" placeholder="username">
	</div>
	<div class="form-group">
		<label>Password</label>
	<input class="form-control" type="text" name="password" placeholder="Password">
	</div>
	<div class="form-group">
		<label>Akses</label>
	<input class="form-control" type="text" name="akses" placeholder="Akses">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection