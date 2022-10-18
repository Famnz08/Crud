@extends('layout.layout')
@section('content')
<div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="tambahpengguna">Tambah</a>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Id User</th>
                    <th>Nama </th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Akses</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($pengguna as $pengguna)
					<tr>
            <td>{{$loop->iteration}}</td>
						<td>{{$pengguna->id_user}}</td>
						<td>{{$pengguna->nama}}</td>
						<td>{{$pengguna->username}}</td>
						<td>{{$pengguna->password}}</td>
            <td>{{$pengguna->akses}}</td>
						<td><a class="btn btn-primary" href="/editpengguna/{{$pengguna->id}}">Edit</a></td>
            <td><a class="btn btn-danger" href="/destroypengguna/{{$pengguna->id}}">Delete</td>
					</tr>
          @endforeach
                  </tfoot>
                </table>
              </div>
@endsection