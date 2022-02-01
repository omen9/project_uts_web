<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MyPerpus</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('order-item')}}/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Alteon Books</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Product section-->
        @csrf
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{url('image/'.$barang->img)}}" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder">{{$barang->nama}}</h1>
                        <p class="lead">{{$barang->deskripsi}}</p>
                        <div class="d-flex">
                            <button class="btn btn-outline-dark flex-shrink-0" type="button" data-bs-toggle="modal" data-bs-target="#order">
                                <i class="bi-cart-fill me-1"></i>
                                Pinjam
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; 2022 19552011120_Noorman</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <form action="/barang/checkout" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="modal" id="order">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{ $barang->nama}}</h4>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" aria-describedby="emailHelp">
            <input type="hidden" class="form-control" name="nBarang" aria-describedby="emailHelp" value="{{ $barang->nama}}" >
            <input type="hidden" class="form-control" name="nHarga" aria-describedby="emailHelp" value="{{ $barang->harga}}">

          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">alamat</label>
            <input type="text" class="form-control" name="alamat" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah</label>
            <input type="text" class="form-control" name="jumlah" aria-describedby="emailHelp">
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-bs-target="#article">Close</button>
            <button type="submit" class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#sukses">Tambahkan</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  
  <div class="modal" id="sukses">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Proses Berhasil</h4>
        </div>
        <div class="modal-body">
<h5>Terima Kasih telah membeli</h5>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-outline">Tambahkan</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</form>
    </body>
</html>
