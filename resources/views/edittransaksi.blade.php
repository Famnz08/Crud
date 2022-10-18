<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
<form action="/edit/{{$transaksi->id}}" method="POST">
    @csrf
  <div class="mb-3">
    <label class="form-label">Id transaksi</label>
    <input type="int" class="form-control" name="id_transaksi" value="{{$transaksi->id_transaksi}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Tanggal transaksi</label>
    <input type="date" class="form-control" name="tgl_trx" value="{{$transaksi->tgl_trx}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Id user</label>
    <input type="int" class="form-control" name="id_user" value="{{$transaksi->id_user}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Total Bayar</label>
    <input type="int" class="form-control" name="total_bayar" value="{{$transaksi->total_bayar}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Bayar</label>
    <input type="int" class="form-control" name="bayar" value="{{$transaksi->bayar}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>  
</body>
</html>