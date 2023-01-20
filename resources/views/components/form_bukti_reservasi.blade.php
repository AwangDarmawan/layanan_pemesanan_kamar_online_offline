<div id="buktiReservasi" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>RESERVASI DISINI</h3>
            <form action="{{ route('tamu.pesanan.bukti_pembayaran') }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="hidden" name="id_reservasi" id="id_reservasi">
                <div class="row">
                    <div class="col-xl-6">
                        <label for="exampleFormControlInput1">Bukti Pembayaran</label>
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
