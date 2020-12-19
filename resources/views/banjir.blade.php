@extends('layout.main')

@section('title', 'Titik Banjir')

@section('head_title', 'Titik Banjir')

@section('content')
       <!-- Page content -->
       <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Tabel Titik Banjir</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
            <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Nama Jalan</th>
                                <th scope="col" class="sort" data-sort="budget">Geometry</th>
                                <th scope="col" class="sort" data-sort="status">Kondisi Kerukan</th>
                                <th scope="col">Foto Titik Banjir</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <!-- <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                        </a> -->
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">Jl. Ronggo Warsito No.11</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                101.44619960000006,
          0.5317130000000247
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">pending</span>
                                    </span>
                                </td>
                                <td>
                                    <div class="avatar-group">
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                        </a>
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                        </a>
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                        </a>
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                        </a>
                                    </div>
                                </td>
                                
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Update</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>                      
   
                        </tbody>
                    </table>
            </div>
          </div>
        </div>
      </div>
@endsection