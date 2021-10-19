        <!-- ### $App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class="container-fluid">
              <h4 class="c-grey-900 mT-10 mB-30">Koperasi Kosada</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Data Member</h4>
                    <div class="form-group">
                        <a class="btn btn-primary" href="{{ route('tambahDataKredit') }}">Tambah Kredit</a>
                        <a class="btn btn-primary" href="{{ route('tambahMember') }}">Tambah Anggota</a>
                        <a class="btn btn-primary" href="{{ route('kreditNasabah') }}" >Realisasi Kredit</a>
                    </div>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <td>Nama</td>
                            <td>Alamat</td>
                            <td>Kota</td>
                            <td>Provinsi</td>
                            <td>Telepon</td>
                            <td>Jenis</td>
                            <td>Registrasi</td>
                            <td>Keterangan</td>
                            <td>Marketing</td>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                                <tr>
                                    <td>{{ $data->NAMA }}</td>
                                    <td>{{ $data->ALAMAT }}</td>
                                    <td>{{ $data->KOTA }}</td>
                                    <td>{{ $data->PROVINSI }}</td>
                                    <td><a href="https://wa.me/{{ $data->TELEPON }}" target="_blank">{{ $data->TELEPON }}</a></td>
                                    <td><span class="text-dark">Anggota</span></td>
                                    <td>{{ $data->CREATED_AT }}</td>
                                    <td>{{ $data->KETERANGAN }}</td>
                                    <td>{{ $data->DATA_MARKETING }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>