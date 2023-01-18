@extends('layouts.user_type.auth')

@section('content')

<div class="container-fluid py-4">
    
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Projects table</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Kode Reservasi</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Check-in</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Check-out</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No Kamar</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Tamu</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Total Bayar</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Admin/Karyawan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td class="ps-4"> 
                    <p class="text-xs font-weight-bold mb-0">1</p>
                  </td>
                  <td> 
                    <p class="text-xs font-weight-bold mb-0">12/2/2022</p>
                  </td>
                  <td> 
                    <p class="text-xs font-weight-bold mb-0">14/2/2022</p>
                  </td>
                  <td> 
                    <p class="text-xs font-weight-bold mb-0">B1</p>
                  </td>
                  <td> 
                    <p class="text-xs font-weight-bold mb-0">Rudi</p>
                  </td>
                  <td> 
                    <p class="text-xs font-weight-bold mb-0">rp. 600.000</p>
                  </td>
                  <td> 
                    <p class="text-xs font-weight-bold mb-0">budi</p>
                  </td>
                  <td>
                    <span class="btn bg-gradient-success m-1 p-2">
                    <a href="#" class="m-1 p-0" data-bs-toggle="tooltip" data-bs-original-title="export ke excel">
                      <i class="fas fa-lg fa-file-excel text-white m-0 p-0"></i>
                    </a>
                    </span>
                    <span class="btn bg-gradient-info m-1 p-2">
                    <a href="#" class="m-1 p-0" data-bs-toggle="tooltip" data-bs-original-title="Cetak pdf">
                      <i class="fas fa-lg fa-file-pdf text-white m-0 p-0"></i>
                    </a>
                    </span>
                    <span class="btn bg-gradient-danger m-1 p-2">
                    <a href="#" class="m-1 p-0 " data-bs-toggle="tooltip" data-bs-original-title="hapus laporan">
                      <i class=" cursor-pointer fas fa-lg fa-trash text-white m-0 p-0"></i>
                    </a>
                    </span> 
                   
                    
                    
                  </td>
                </tr>
                
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
