@extends('layout.main')

@section('title', 'Jaringan Drainase')

@section('head_title', 'Jaringan Drainase')

@section('content')
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Tabel Jaringan Drainase</h3>
          <Button class="btn btn-primary mt-3" data-toggle="modal" data-target="#modal-default">Tambah data</Button>
          </button>

        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Nama Jalan</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Tipe</th>
                <th scope="col">Geometry</th>
                <th scope="col">Kedalaman</th>
                <th scope="col">Bahan</th>
                <th scope="col">Kondisi</th>
                <th scope="col">Akhir Pembuangan</th>
                <th scope="col">Arah Alir</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">
              @foreach($data as $item)
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <span class="name mb-0 text-sm">{{$item['nama_jalan']}}</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  <span class="badge badge-dot mr-4">
                    <i class="bg-warning"></i>
                    <span class="status">{{$item['lebar']}} x {{$item['panjang']}}</span>
                  </span>
                </td>
                <td>
                {{$item['tipe_drainase']}}
                </td>
                <td>
                {{$item['geometry']}}
                </td>
                <td>
                {{$item['kedalaman']}}
                </td>
                <td>
                {{$item['bahan']}}
                </td>
                <td>
                {{$item['kondisi']}}
                </td>
                <td>
                {{$item['akhir_pembuangan']}}
                </td>
                <td>
                {{$item['arah_alir']}}
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Hapus</a>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- form modal input data dibawah -->
  <div class="row">
    <div class="col-md-4">
      <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">

            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Tambah Data Drainase</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">

              <form action="/drainase/addDrainase" method="post" enctype="multipart/form-data" role="form">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                        </div>
                        <input class="form-control" placeholder="Nama Jalan" name="nama_jalan" type="text">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-ungroup"></i></span>
                        </div>
                        <input class="form-control" placeholder="Lebar" name="lebar" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-ui-04"></i></span>
                        </div>
                        <input class="form-control" placeholder="Panjang" name="panjang" type="text">
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-ungroup"></i></span>
                        </div>
                        <input class="form-control" placeholder="Kedalaman" name="kedalaman" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-ui-04"></i></span>
                        </div>
                        <input class="form-control" placeholder="Bahan" name="bahan" type="text">
                      </div>
                    </div>

                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-image"></i></span>
                        </div>
                        <input class="form-control" placeholder="Foto Titik Banjir" name="foto" type="file" multiple>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-ungroup"></i></span>
                        </div>
                        <input class="form-control" placeholder="Akhir Pembuangan" name="akhir_pembuangan" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-ui-04"></i></span>
                        </div>
                        <input class="form-control" placeholder="Arah Alir" name="arah_alir" type="text">
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-ungroup"></i></span>
                        </div>
                        <input class="form-control" placeholder="Geometery" name="geometry" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-ui-04"></i></span>
                        </div>
                        <input class="form-control" placeholder="Tipe Drainase" name="tipe_drainase" type="text">
                      </div>
                    </div>

                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Kondisi</label>
                      <div class="input-group input-group-merge input-group-alternative">

                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-single-copy-04"></i></span>
                        </div>

                        <textarea class="form-control" id="exampleFormControlTextarea1" name="kondisi" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary my-4">Kirim</button>
                    </div>
                  </div>


              </form>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection