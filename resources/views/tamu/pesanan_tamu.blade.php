@extends('layouts.app_tamu')
@section('content')

@include("layouts.navbars_tamu.navbar")

 <!-- bradcam_area_start -->
 <div class="bradcam_area breadcam_bg_2">
    <h3>Cek Pesanan Anda</h3>
</div><!-- bradcam_area_end -->

<div class="container">
    <div class="row justify-content-center">
<table class="table my-5">
    <thead class="thead-dark">
      <tr>
        <th scope="col">NO</th>
        <th scope="col">NO KAMAR</th>
        <th scope="col">JENIS KAMAR</th>
        <th scope="col">CHECK-IN</th>
        <th scope="col">CHECK-OUT</th>
        <th scope="col">BUKTI PEMBAYARAN</th>
        <th scope="col">STATUS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
     
    </tbody>
  </table>
  
 
    </div>
</div>

@include('layouts.footers_tamu.footer')
@endsection