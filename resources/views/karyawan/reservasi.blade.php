@extends('layouts.user_type.auth')

@section('content')

<div>
    {{-- <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete features are not functional!</strong> This is a
            <strong>PRO</strong> feature! Click <strong>
            <a href="https://www.creative-tim.com/live/soft-ui-dashboard-pro-laravel" target="_blank" class="text-white">here</a></strong>
            to see the PRO product!
        </span>
    </div> --}}

    <div class="row">
        
            
            <div class="card card-header pb-2 pt-3 mb-2 ms-4">
                <div class="d-flex flex-row justify-content-between">
                    <div class="" style="padding-left:20px;">
                        <h5>RESERVASI BARU</h5>
                    </div>
                </div>
            </div>
        
        <div class="card ms-4 col-md-5" style="border-top-left-radius:0px;border-top-right-radius:0px;">
            
            <div class="card-body pt-2">
                <form>
                    <h6 class="">Data Tamu</h6>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Nama</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="isi dengan nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="isi dengan nama">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Jenis Kelamin</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Laki-laki</option>
                                <option>perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">NO. Hp</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="0895XXXXXXXX">
                        </div>
                    </div>
                    <h6>Data Kamar Yang Akan Disewa</h6>
                    <div class="form-group col-md-4 pe-0">
                        <label for="exampleFormControlInput1">Pilih Kamar</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>A</option>
                            <option>B</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Check-in</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="masukan tanggal masuk/menempati kamar">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Check-out</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="masukan tanggal keluar kamar">
                        </div>
                    </div>
                    <button type="submit" class="btn bg-gradient-primary col-md-5 mt-2" >Batal</button>
                    <span>
                    <button type="submit" class="btn bg-gradient-primary col-md-5 mt-2 ms-1" >Reservasi</button>
                    </span>
                </form>
                  
            </div>
            
          </div>
    </div>
</div>

@endsection