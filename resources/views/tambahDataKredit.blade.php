
        <!-- ### $App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class="container-fluid">
              <h4 class="c-grey-900 mT-10 mB-30">Koperasi Kosada</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Tambah Data Kredit</h4>
                    <div class="form-group">
                    </div>

                    <form id="rubahDataAlamatPelanggan" action="{{ route('getDataTambahkredit') }}" method="post">
                      @csrf
                      <input type="text" id="perubahanData" name="ID" value="" readonly="readonly" hidden/>
                    </form>

                    <form action="{{ route('postDataKredit') }}" method="POST">
                      @csrf
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                            <label>Jenis Kredit</label>
                            <select class="form-control" name="ID_1" required="required">
                                <option value="1">1 BULAN</option>
                                <option value="2">2 BULAN</option>
                                <option value="3">3 BULAN</option>
                                <option value="4">4 BULAN</option>
                                <option value="5">5 BULAN</option>
                                <option value="6">6 BULAN</option>
                                <option value="7">7 BULAN</option>
                                <option value="8">8 BULAN</option>
                                <option value="9">9 BULAN</option>
                                <option value="10">10 BULAN</option>
                                <option value="11">11 BULAN</option>
                                <option value="12">12 BULAN</option>
                                <option value="13">13 BULAN</option>
                                <option value="14">14 BULAN</option>
                                <option value="15">15 BULAN</option>
                                <option value="16">16 BULAN</option>
                                <option value="17">17 BULAN</option>
                                <option value="18">18 BULAN</option>
                                <option value="19">19 BULAN</option>
                                <option value="20">20 BULAN</option>
                            </select>
                        </div>        
                      </div>
                      <div class="col">
                        <div class="form-group">
                            <label>No Kredit</label>
                            <input name="ID_2" class="form-control" type="text" value="{{ 'KRD'.'_'.date('d_M_Y').'_'.$randomize_ID }}" readonly required="required">
                        </div>
                      </div>
                  </div>
                  
                  <div class="row">
                      <div class="col">
                        <div class="form-group">
                            <label>Nama Nasabah</label>
                            <select class="form-control" name="ID_3" id="namaNasabah" onChange="onChangeData()" required="required">
                                <option>Pilih Nasabah</option>
                                @foreach($nama_member as $data)
                                <option value="{{ $data->ID }}">{{ $data->NAMA }}</option>
                                @endforeach
                            </select>
                        </div>                          
                      </div>
                      <div class="col">
                        <div class="form-group">
                            <label>Alamatnya</label>
                            <input name="ID_4" class="form-control" type="text" id="alamatNasabah" placeholder="Dicari Trus Mengisi Otomatis" required="required">
                        </div>
                      </div>
                  </div>
                  
                  <div class="row">
                      <div class="col">
                        <div class="form-group">
                            <label>Marketing / Kolektor</label>
                            <input name="ID_5" class="form-control" type="text" placeholder="Dicari Trus Mengisi Otomatis" required="required">
                        </div>                          
                      </div>
                      <div class="col">
                        <div class="form-group">
                            <label>Tanggal Pengajuan</label>
                            <input class="form-control" type="text" placeholder="(Mengisi Otomatis)" value="{{ date('Y-m-d h:i:s') }}" readonly required="required">
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col">
                        <div class="form-group">
                            <label id='totalPengajuan'>Jumlah Pengajuan</label>
                            <input id="jumlahPengajuan" name="ID_6" class="form-control" type="text" placeholder="(Diisi sendiri)" required="required">
                        </div>                          
                      </div>
                      <div class="col">
                        <div class="form-group">
                            <label>Jangka Waktu</label>
                            <input id="jangkaWaktu" name="ID_7" class="form-control" type="text" oninput="hitungAngsuranPokok()" placeholder="(Mengisi Otomatis)" required="required">
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col">
                        <div class="form-group">
                            <label>Jumlah Angsuran</label>
                            <input id="jumlahAngsuranPokok" name="ID_8" class="form-control" type="text" placeholder="(Mengisi Otomatis)" readonly="readonly" required="required">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                            <label>Jatuh Tempo</label>
                            <input name="ID_9" class="form-control" type="date" placeholder="(Tanggal Berapa)" required="required">
                        </div>
                      </div>
                  </div>
                  

                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="ID_10" class="form-control" rows=2 placeholder="Misal : tambah jaminan BPKB"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-control btn-success">Tambah Data Kredit</button>
                    </div>

                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

        <!-- Note : Beberapa pekerjaan diklasifikan menjadi 1 kelompok -->

        <!-- Start Notification Success Added to Product -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @if (Session::get('status'))
        <script>

            Swal.fire({
            title: 'Cool!',
            text: 'Berhasil menambahkan kredit baru!',
            icon: 'success',
            confirmButtonText: 'Cool'
        }).then(function() {
            window.location = "{{ route('kreditNasabah') }}";            
        });

        </script>
        @endif

        <!-- End Notification Success Added to Product -->


<script>
    var namaNasabah = document.getElementById('namaNasabah');
    var alamatNasabah = document.getElementById('alamatNasabah');

    function onChangeData() {
        var getIdNasabah = document.getElementById('namaNasabah').value;
        document.getElementById('perubahanData').value = getIdNasabah;
        var form = document.getElementById('rubahDataAlamatPelanggan')
        form.submit();
    }

    function hitungAngsuranPokok(){

      var jumlahPengajuans = document.getElementById("jumlahPengajuan").value;
      var jangkaWaktus = document.getElementById("jangkaWaktu").value;

      var jumlahPengajuans = parseFloat(jumlahPengajuans);
      var jangkaWaktus = parseFloat(jangkaWaktus);

      var nilaiTotal = jumlahPengajuans / jangkaWaktus;


      if(isNaN(nilaiTotal)){
        document.getELementById('jumlahAngsuranPokok').value = "Tidak ada nilai";
      } else {
        document.getElementById('jumlahPengajuan').value = jumlahPengajuans;
        document.getElementById('jangkaWaktu').value = jangkaWaktus;
        document.getElementById('jumlahAngsuranPokok').value = nilaiTotal;
      }

    }
</script>

<script>
   /* Dengan Rupiah */
   var dengan_rupiah = document.getElementById('jumlahPengajuan');
   var totalPengajuan = document.getElementById('totalPengajuan');

    dengan_rupiah.addEventListener('keyup', function(e)
    {
        totalPengajuan.innerHTML = "Total Jumlah Pengajuan : " + formatRupiah(this.value, 'Rp. ');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>