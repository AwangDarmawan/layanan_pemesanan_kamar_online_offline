<div id="buktiReservasi" class="white-popup-block mfp-hide text-center">
    <div class="popup_box ">
        <div class="popup_inner " >
            
            <form action="{{ route('tamu.pesanan.bukti_pembayaran') }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <h3>Uplode Bukti Pembayaran</h3>
                <input type="hidden" name="id_reservasi" id="id_reservasi">
                <div class="row">
                    <div class="col-xl-6">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1"
                            name="bukti_pembayaran">
                    </div>
                </div>
                <div class="col-xl-12 mt-5 mx-0 px-0">
                    <button type="submit" class="boxed-btn3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
