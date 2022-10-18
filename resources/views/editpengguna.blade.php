@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit data</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/update/{{$pengguna->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id User</label>
	<input class="form-control" type="text" value="{{$pengguna->id_user}}" name="id_user" placeholder="ID User">
	</div>
	<div class="form-group">
		<label>Nama </label>
	<input class="form-control" type="text" value="{{$pengguna->nama}}" name="nama" placeholder="Nama">
	</div>
	<div class="form-group">
		<label>Username</label>
	<input class="form-control" type="text" value="{{$pengguna->username}}" name="username" placeholder="Username">
	</div>
	<div class="form-group">
		<label>Password</label>
	<input class="form-control" type="text" value="{{$pengguna->password}}" name="password" placeholder="Password">
	</div>
	<div class="form-group">
		<label>Akses</label>
	<input class="form-control" type="text" value="{{$pengguna->akses}}" name="akses" placeholder="Akses">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
