
        <!-- ### $App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class="container-fluid">
              <h4 class="c-grey-900 mT-10 mB-30">Tambah Data Kredit</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    @foreach($identitas as $data)
                    <h4 class="c-grey-900 mB-20"> {{ $data->NAMA }} </h4>
                    <div class="form-group">
                    </div>

                    <form id="rubahDataAlamatPelanggan" action="{{ route('getDataTambahkredit') }}" method="post">
                      @csrf
                      <input type="text" id="perubahanData" name="ID" value="" readonly="readonly" hidden/>
                    </form>

                    <?php $nama = $data->NAMA; ?>
                   
                    <form id="gregetkzl" action="{{ route('postDataKredit') }}" method="POST">
                      @csrf
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                            <label id='totalPengajuan'>Jumlah Pengajuan</label>
                            <input id="jumlahPengajuan" name="ID_6" class="form-control" type="text" placeholder="(Diisi sendiri)">
                        </div>
                      </div>

                      <div class="col">
                        <div class="form-group">
                            <label>No Kredit</label>
                            <input name="ID_2" class="form-control" type="text" value="{{ 'KRD'.'_'.date('d_M_Y').'_'.$randomize_ID }}" readonly>
                        </div>
                      </div>

                  </div>
                  
                  <div class="row">
                      <div class="col">
                        <div class="form-group">
                            <label>Nama Nasabah</label>
                            <select class="form-control" name="ID_3" id="namaNasabah" onChange="onChangeData()">
                                <option>Pilih Nasabah</option>
                                @foreach($nama_member as $nama_member)
                                <option value="{{ $nama_member->ID }}" 
                                
                                  @if($nama_member->NAMA == $nama)
                                  selected="selected"
                                  @endif
                                
                                >{{ $nama_member->NAMA }}</option>
                                @endforeach
                            </select>
                        </div>                          
                      </div>
                      <div class="col">
                        <div class="form-group">
                            <label>Alamatnya</label>
                            <input name="ID_4" class="form-control" type="text" id="alamatNasabah" placeholder="Dicari Trus Mengisi Otomatis" value="{{ $data->ALAMAT }}" readonly="readonly">
                        </div>
                      </div>
                  </div>
                  
                  <div class="row">
                      <div class="col">
                        <div class="form-group">
                            <label>Marketing / Kolektor</label>
                            <input name="ID_5" class="form-control" type="text" placeholder="Dicari Trus Mengisi Otomatis" value="{{ $data->DATA_MARKETING }}" readonly="readonly">
                        </div>                          
                      </div>
                      <div class="col">
                        <div class="form-group">
                            <label>Tanggal Pengajuan</label>
                            <input class="form-control" type="text" placeholder="(Mengisi Otomatis)" value="{{ date('Y-m-d h:i:s') }}" readonly>
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col">

                          <div class="form-group">
                              <label>Jenis Kredit</label>
                              <select class="form-control" id="dropDownBulan" name="ID_1" onChange="isiDataJangkaWaktu();">
                                  <option value="">Pilih Jangka Waktu</option>
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
                            <label>Jangka Waktu</label>
                            <input id="jangkaWaktu" name="ID_7" class="form-control" type="text" oninput="hitungAngsuranPokok()" placeholder="(Mengisi Otomatis)" readonly="readonly">
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col">
                        <div class="form-group">
                            <label>Jumlah Angsuran</label>
                            <input id="jumlahAngsuranPokok" name="ID_8" class="form-control" type="text" placeholder="(Mengisi Otomatis)" readonly="readonyl">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                            <label>Jatuh Tempo</label>
                            <input name="ID_9" class="form-control" type="date" placeholder="(Tanggal Berapa)">
                        </div>
                      </div>
                  </div>

                    <div class="form-group">
                      <label>Biaya Admin</label>
                      <input id="admins" name="ID_11" class="form-control" placeholder="Biaya Admin" onfocusout="biayaAdmin()" />
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="ID_10" class="form-control" rows=2 placeholder="Misal : tambah jaminan BPKB"></textarea>
                    </div>

                    <div class="alert alert-success" role="alert">Total yang dibayarkan : <span id="totalAkhir"></span> </div>
                  
                    <div class="form-group">
                        <button type="button" class="form-control btn-success" onClick="submitForm()">Tambahkan Data Kredit</button>
                    </div>

                    </form>
                    @endforeach

                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

        <!-- Note : Beberapa pekerjaan diklasifikan menjadi 1 kelompok -->

        <script>
          function isiDataJangkaWaktu(){
            var dropDown = document.getElementById("dropDownBulan");
            var inputanData = document.getElementById("jangkaWaktu");
            inputanData.value = dropDown.value;

            var jumlahPengajuans = document.getElementById("jumlahPengajuan").value;
            var jangkaWaktus = document.getElementById("jangkaWaktu").value;

            var jumlahPengajuans = parseFloat(jumlahPengajuans);
            var jangkaWaktus = parseFloat(jangkaWaktus);

            var jasa = jangkaWaktus * 5/100;

            var nilaiTotal =  (jumlahPengajuans + (jumlahPengajuans * jasa)) / jangkaWaktus;

            if(isNaN(nilaiTotal)){
              document.getELementById('jumlahAngsuranPokok').value = "Tidak ada nilai";
            } else {
              document.getElementById('jumlahPengajuan').value = jumlahPengajuans;
              document.getElementById('jangkaWaktu').value = jangkaWaktus;
              document.getElementById('jumlahAngsuranPokok').value = "Rp. " + nilaiTotal;
            }

          }
        </script>
        
        <script>
            var namaNasabah = document.getElementById('namaNasabah');
            var alamatNasabah = document.getElementById('alamatNasabah');

            function onChangeData() {
                var getIdNasabah = document.getElementById('namaNasabah').value;
                document.getElementById('perubahanData').value = getIdNasabah;
                var form = document.getElementById('rubahDataAlamatPelanggan')
                form.submit();
            }

            // function hitungAngsuranPokok(){

            //   var jumlahPengajuans = document.getElementById("jumlahPengajuan").value;
            //   var jangkaWaktus = document.getElementById("jangkaWaktu").value;

            //   var jumlahPengajuans = parseFloat(jumlahPengajuans);
            //   var jangkaWaktus = parseFloat(jangkaWaktus);

            //   var jasa = jangkaWaktus * 5/100;
            //   console.log(jasa);

            //   var nilaiTotal =  (jumlahPengajuans + (jumlahPengajuans * jasa)) / jangkaWaktus;


            //   if(isNaN(nilaiTotal)){
            //     document.getELementById('jumlahAngsuranPokok').value = "Tidak ada nilai";
            //   } else {
            //     document.getElementById('jumlahPengajuan').value = jumlahPengajuans;
            //     document.getElementById('jangkaWaktu').value = jangkaWaktus;
            //     document.getElementById('jumlahAngsuranPokok').value = nilaiTotal;
            //   }

            // }
        </script>

          <!-- Start Notification Success Added to Product -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
          
          function submitForm(){

          Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Silahkan cek kembali data anda!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, data sudah benar!'
          }).then((result) => {
            if (result.isConfirmed) {
              var form = document.getElementById("gregetkzl");
              form.submit();
            }
          })

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

<script>
  function biayaAdmin(){
    var totalPinjaman = document.getElementById("jumlahPengajuan").value;
    var biayaa = document.getElementById("admins").value;
    var inputanBox = document.getElementById("totalAkhir");

    var bilangan = totalPinjaman - biayaa;

    var	number_string = bilangan.toString(),
      sisa 	= number_string.length % 3,
      rupiah 	= number_string.substr(0, sisa),
      ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
        
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    inputanBox.innerHTML = rupiah; 
  }
</script>