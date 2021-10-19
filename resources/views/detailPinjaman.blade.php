
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

                    <form id="hapusDataKredit" action="{{ route('hapusDetailNasabah') }}" method="post">
                      @csrf
                      <input type="text" name="ID_REAL" value="{{ $id->NO_KREDIT }}" readonly hidden/>
                    </form>

                    <form id="lunasiDataKredit" action="{{ route('lunasiKredit') }}" method="post">
                      @csrf
                      <input type="text" name="ID_REAL" value="{{ $id->NO_KREDIT }}" readonly hidden/>
                    </form>


                    <div class="form-group">
                      <button type="button" class="btn btn-danger" onClick="hapusData()">Hapus Data Kredit</button>
                      <button type="button" class="btn btn-success" onClick="updateData()">Update Data</button>
                      <button type="button" class="btn btn-info" onClick="lunasiPinjaman()">Lunasi Pinjaman</button>
                      <button type="button" class="btn btn-primary" onClick="printHalaman()">Cetak Halaman Pinjaman</button>
                    </div>

                    <div id="printArea">

                      <div class="row mt-5 mb-5">
                        @foreach($identitas as $identitas)
                        <div class="col">
                          <label>Nama</label>
                          <input type="text" name="nama" value="{{ $identitas->NAMA }}" class="form-control" readonly="readonly" />                          
                        </div>
                        <div class="col">
                          <label>Alamat</label>
                          <input type="text" name="nama" value="{{ $identitas->ALAMAT }}" class="form-control" readonly="readonly" />
                        </div>
                        @endforeach
                      </div>

                      <form id="detailforms" action="{{ route('updateDetailNasabah') }}" method="post">
                          @csrf
                          <input type="text" name="ID_UTAMA[]" value="{{ $id->NO_KREDIT }}" readonly hidden/>
                          <table class="table table-striped table-bordered text-center">
                              <thead>
                                  <tr>
                                      <td>#</td>
                                      <td>Nominal</td>
                                      <td>Jatuh Tempo</td>
                                      <td>Kasbon</td>
                                      <td>Status Lunas</td>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php $i = 1; ?>
                                  @foreach($data as $data)
                                  <tr>
                                      <td> <?php if($data->LUNAS == "Sudah"){ echo "<button type='button' class='form-control btn-success'>Lunas ✔</button> ";  }else { echo "<button type='button' class='form-control btn-secondary'>Cicilan ke: " . $i . '</button>' ;  } ?></td>
                                      <td> @currency($data->NOMINAL) </td>
                                      <td>{{ \Carbon\Carbon::parse($data->JATUH_TEMPO)->format('d M Y')}}</td>
                                      <td><input type="text" name="KASBON[]" class="form-control" placeholder="Isi kasbon disini" onfocus="this.value=''" value="{{ $data->KASBON }}" /> </td>
                                      <td>
                                          <input type="text" name="ID_KUNCI[]" value="{{ $data->ID }}" readonly hidden/>
                                          <select name="STATUS_PELUNASAN[]" class="form-control">
                                              <option value="Sudah" 
                                              @if($data->LUNAS == "Lunas")
                                              selected="selected"
                                              @endif >Sudah Lunas</option>
                                              <option value="Belum" 
                                              @if($data->LUNAS == "Belum")
                                              selected="selected"
                                              @endif >Belum Lunas</option>
                                          </select>
                                      </td>
                                  </tr>
                                  <?php $i++; ?>
                                  @endforeach
                              </tbody>
                          </table>
                      </form>                    

                    <div class="form-group noPrint">
                      <button type="button" class="btn btn-info noPrint">Pinjaman Belum Lunas : @currency($totalBelumLunas) </button>
                      <button type="button" class="btn btn-warning noPrint">Kasbon Belum Lunas : @currency($kasbonBelumLunas) </button>
                    </div>

                      <div class="printThis" style="display:none;">
                      
                        <div class="row text-center">
                          <div class="col"> 
                            <div class="float-start">Kreditur</div>
                          </div>
                          <div class="col">
                            <div class="float-end">Koperasi</div>
                          </div>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="row text-center">
                          <div class="col"> 
                            <div class="float-start">{{ $nama->NAMA }}</div>
                          </div>
                          <div class="col">
                            <div class="float-end">Koperasi Kosada</div>
                          </div>
                        </div>

                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

        <!-- Note : Beberapa pekerjaan diklasifikan menjadi 1 kelompok -->

<script>
    function updateData(){
        document.getElementById("detailforms").submit();// Form submission
    }

    function printHalaman(){


            var printContents = document.getElementById("printArea").innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;

    }
</script>

<!-- Start Notification Success Added to Product -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  
  function hapusData(){

  Swal.fire({
    title: 'Apakah anda ingin menghapus kredit ini?',
    text: "Silahkan cek kembali data anda!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, saya ingin menghapusnya!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Sukses!',
        'Data telah terhapus.',
        'success'
      );
      var form = document.getElementById("hapusDataKredit");
      form.submit();
    }
  })

}

</script>

<!-- End Notification Success Added to Product -->

<script>
  
  function lunasiPinjaman(){

  Swal.fire({
    title: 'Rubah status lunas?',
    text: "Anda akan mengubah data kredit ini ke dalam status lunas!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, pinjamannya telah lunas!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Sukses!',
        'Pinjaman telah dilunasi.',
        'success'
      );
      var form = document.getElementById("lunasiDataKredit");
      form.submit();
    }
  })

}

</script>