@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/transaksi/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi</th>
                    <th>Id Barang</th>
                    <th>Id User</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksi as $row)
					<tr>
						<td>{{$row->id_transaksi}}</td>
						<td>{{$row->tgl_trx}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->total_bayar}}</td>
						<td>{{$row->bayar}}</td>
						<td><a class="btn btn-primary" href="/edittransaksi/{{$row->id}}">Edit</a>
                        <a class="btn btn-danger" href="/destroy/{{$row->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection