@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Reservasi Yang Belum Terkonfirmasi</h6>
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
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama TAmu</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">No Hp</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Total Bayar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($reservasis as $reservasi)
                      
                    <tr>
                      <td class="ps-4"> 
                        <p class="text-xs font-weight-bold mb-0">{{ $reservasi->no_reservasi }}</p>
                      </td>
                      <td> 
                        <p class="text-xs font-weight-bold mb-0">{{ $reservasi->tgl_masuk }}</p>
                      </td>
                      <td> 
                        <p class="text-xs font-weight-bold mb-0">{{ $reservasi->tgl_keluar }}</p>
                      </td>
                      <td> 
                        <p class="text-xs font-weight-bold mb-0">{{ $reservasi->kamar->id }}</p>
                      </td>
                      <td> 
                        <p class="text-xs font-weight-bold mb-0">{{ $reservasi->tamu->name }}</p>
                      </td>
                      <td> 
                        <p class="text-xs font-weight-bold mb-0">{{ $reservasi->tamu->user->email }}</p>
                      </td>
                      <td> 
                        <p class="text-xs font-weight-bold mb-0">{{ $reservasi->tamu->no_hp }}</p>
                      </td>
                      <td> 
                        <p class="text-xs font-weight-bold mb-0">masih dicari</p>
                      </td>
                      <td>
                        <button type="button" class="btn bg-gradient-success m-1 p-2">
                          <a href="#" class="m-1 p-0 " data-bs-toggle="tooltip" data-bs-original-title="konfirmasi reservasi">
                            <i class="fas fa-lg fa-check text-center text-white m-0 p-0" aria-hidden="true"></i>
                          </a>
                        </button> 
                      </td>
                    </tr>
                    @endforeach
                   
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  @endsection
