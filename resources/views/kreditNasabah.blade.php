
        <!-- ### $App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class="container-fluid">
              <h4 class="c-grey-900 mT-10 mB-30">Koperasi Kosada</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20"></h4>


                    <div class="form-group">
                      <div class="row">
                        <div class="col">
                          <a href="{{ route('laporan') }}"><button type="button" class="btn btn-primary">Unduh Report Bulanan</button></a>
                        </div>
                        <div class="col">
                          <form id="changeMarketingId" action="{{ route('changeMarketing') }}" method="POST">
                            @csrf
                            <select class="form-control" name="changeMarketing" onChange="changeDataMarketings()">
                              <option value="">Pilih Data Marketing</option>
                              <option value="TGL 25">TGL 25</option>
                              <option value="28 IM">28 IM</option>
                              <option value="28 AM">28 AM</option>
                              <option value="BCA 1">BCA 1</option>
                              <option value="BCA 2">BCA 2</option>
                              <option value="MAN 1">MAN 1</option>
                              <option value="MAN 2">MAN 2</option>
                              <option value="SAB/BRI">SAB/BRI</option>
                              <option value="CIMB">CIMB</option>
                              <option value="MJK">MJK</option>
                              <option value="YAKULT">YAKULT</option>
                              <option value="OPPO">OPPO</option>
                              <option value="U.LOKA">U.LOKA</option>
                              <option value="BNI">BNI</option>
                              <option value="JATIM">JATIM</option>
                            </select>
                          </form>
                        </div>
                      </div>
                    </div>

                <div class="table-responsive">
                    <table id="dataTable" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <td>Tanggal Pinjaman</td>
                                <td>Nama</td>
                                <td>Data Marketing</td>
                                <td>Jumlah Pengajuan</td>
                                <td>Keterangan</td>
                                <td>Detail</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($data->CREATED_AT)->diffForhumans() }}</td>
                                <td>{{ $data->NAMA }}</td>
                                <td>{{ $data->MARKETING }}</td>
                                <td>@currency($data->JUMLAH_PENGAJUAN)</td>
                                <td>{{ $data->KETERANGAN }}</td>
                                <td>
                                    <form action="{{ route('detailKredit'); }}" method="POST">
                                        @csrf
                                        <input type="text" name="ID" value="{{ $data->NO_KREDIT }}" readonly hidden/>
                                        <button type="submit" class="btn btn-primary">Detail</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i++; ?>
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

        <!-- Note : Beberapa pekerjaan diklasifikan menjadi 1 kelompok -->

        
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
              Swal.fire(
                'Sukses!',
                'Data sudah tersimpan.',
                'success'
              )
            }
          })

        }

        </script>

    <!-- End Notification Success Added to Product -->

        @if (Session::get('berhasil'))
        <script>

            Swal.fire({
            title: 'Sukses!',
            text: 'Data kredit berhasil disimpan!',
            icon: 'success',
            confirmButtonText: 'Cool'
        }).then(function() {
            console.log("Sukses");            
        });

        </script>
        @endif

        <!-- End Notification Success Added to Product -->

        <!-- End Notification Success Added to Product -->

        @if (Session::get('status'))
        <script>

            Swal.fire({
            title: 'Sukses!',
            text: 'Data kredit berhasil dihapus!',
            icon: 'success',
            confirmButtonText: 'Cool'
        }).then(function() {
            console.log("Sukses");            
        });

        </script>
        @endif

        <!-- End Notification Success Added to Product -->

        <!-- End Notification Success Added to Product -->

        @if (Session::get('nice'))
        <script>

            Swal.fire({
            title: 'Sukses!',
            text: 'Data terupdate!',
            icon: 'success',
            confirmButtonText: 'Cool'
        }).then(function() {
            console.log("Sukses");            
        });

        </script>
        @endif

        <!-- End Notification Success Added to Product -->

        <!-- End Notification Success Added to Product -->

        @if (Session::get('terlunasi'))
        <script>

            Swal.fire({
            title: 'Lunas!',
            text: 'Pengajuan pinjaman telah terlunasi!',
            icon: 'success',
            confirmButtonText: 'Cool'
        }).then(function() {
            console.log("Sukses");            
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

    function changeDataMarketings(){
      var getDataChangedMarketing = document.getElementById("changeMarketingId");
      getDataChangedMarketing.submit();
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