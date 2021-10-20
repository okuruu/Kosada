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
                    <table id="dataTable" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <td>Nama</td>
                            <td>Alamat</td>
                            <td>Kota</td>
                            <td>Telepon</td>
                            <td>Registrasi</td>
                            <td>Keterangan</td>
                            <td>Marketing</td>
                            <td>Action</td>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                                <tr>
                                    <td>{{ $data->NAMA }}</td>
                                    <td>{{ $data->ALAMAT }}</td>
                                    <td>{{ $data->KOTA }}</td>
                                    <td><a href="https://wa.me/{{ $data->TELEPON }}" target="_blank">{{ $data->TELEPON }}</a></td>
                                    <td>{{ $data->CREATED_AT }}</td>
                                    <td>{{ $data->KETERANGAN }}</td>
                                    <td>{{ $data->DATA_MARKETING }}</td>
                                    <td>
                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal{{$data->ID}}">Edit</button>
                                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$data->ID}}">Hapus</button>
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
        </main>

        <!-- Modal Update -->
        @foreach($modal as $data)
        <div class="modal fade" id="updateModal{{$data->ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Member: {{ $data->NAMA }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              
              <form action="{{ route('updateMember') }}" method="POST">
                        @csrf
                        
                        <input type="text" name="UTAMA" value="{{ $data->ID }}" readonly="readonly" hidden="hidden">

                        <div class="row">

                            <div class="col">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="ID_1" placeholder="Masukkan Nama" value="{{ $data->NAMA }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="ID_2" placeholder="Masukkan Alamat" value="{{ $data->ALAMAT }}">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Kota</label>
                                    <input type="text" class="form-control" name="ID_3" placeholder="Masukkan Kota" value="{{ $data->KOTA }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <input type="text" class="form-control" name="ID_4" placeholder="Masukkan Provinsi" value="{{ $data->PROVINSI }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input type="number" class="form-control" name="ID_5" placeholder="Masukkan Telepon" value="{{ $data->TELEPON }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>No KTP</label>
                                    <input type="number" class="form-control" name="ID_6" placeholder="Masukkan KTP" value="{{ $data->KTP }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>No PIN ATM</label>
                                    <input type="number" class="form-control" name="ID_7" placeholder="Masukkan PIN" value="{{ $data->PIN_ATM }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" name="ID_8">
                                        <option <?php if($data->GENDER == "Pria"){ echo " selected"; } else { } ?> value="Pria">Pria</option>
                                        <option <?php if($data->GENDER == "Wanita"){ echo " selected"; } else { } ?> value="Wanita">Wanita</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Data Marketing</label>
                                    <select class="form-control" name="ID_9">
                                        <option <?php if($data->DATA_MARKETING == "TGL 25"){ echo " selected"; } else { } ?> value="TGL 25">TGL 25</option>
                                        <option <?php if($data->DATA_MARKETING == "28 IM"){ echo " selected"; } else { } ?> value="28 IM">28 IM</option>
                                        <option <?php if($data->DATA_MARKETING == "28 AM"){ echo " selected"; } else { } ?> value="28 AM">28 AM</option>
                                        <option <?php if($data->DATA_MARKETING == "BCA 1"){ echo " selected"; } else { } ?> value="BCA 1">BCA 1</option>
                                        <option <?php if($data->DATA_MARKETING == "BCA 2"){ echo " selected"; } else { } ?> value="BCA 2">BCA 2</option>
                                        <option <?php if($data->DATA_MARKETING == "MAN 1"){ echo " selected"; } else { } ?> value="MAN 1">MAN 1</option>
                                        <option <?php if($data->DATA_MARKETING == "MAN 2"){ echo " selected"; } else { } ?> value="MAN 2">MAN 2</option>
                                        <option <?php if($data->DATA_MARKETING == "SAB/BRI"){ echo " selected"; } else { } ?> value="SAB/BRI">SAB/BRI</option>
                                        <option <?php if($data->DATA_MARKETING == "CIMB"){ echo " selected"; } else { } ?> value="CIMB">CIMB</option>
                                        <option <?php if($data->DATA_MARKETING == "MJK"){ echo " selected"; } else { } ?> value="MJK">MJK</option>
                                        <option <?php if($data->DATA_MARKETING == "YAKULT"){ echo " selected"; } else { } ?> value="YAKULT">YAKULT</option>
                                        <option <?php if($data->DATA_MARKETING == "OPPO"){ echo " selected"; } else { } ?> value="OPPO">OPPO</option>
                                        <option <?php if($data->DATA_MARKETING == "U.LOKA"){ echo " selected"; } else { } ?> value="U.LOKA">U.LOKA</option>
                                        <option <?php if($data->DATA_MARKETING == "BNI"){ echo " selected"; } else { } ?> value="BNI">BNI</option>
                                        <option <?php if($data->DATA_MARKETING == "JATIM"){ echo " selected"; } else { } ?> value="JATIM">JATIM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input class="form-control" type="text" name="ID_10" placeholder="Masukkan Pekerjaan" value="{{ $data->PEKERJAAN }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Rekomendasi Dari</label>
                                    <input class="form-control" type="text" name="ID_11" value="{{ $data->REKOMENDASI_DARI }}">
                                </div>                
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control" name="ID_12" rows=3>{{ $data->KETERANGAN }}</textarea>
                                </div>
                            </div>
                        </div>
                        

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        <!-- Delete Modal -->
      @foreach($modal as $data)        
      <div class="modal fade" id="deleteModal{{ $data->ID }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Penghapusan Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('hapusMember') }}" method="POST">
              @csrf
              <input name="UTAMA" type="text" value="{{ $data->ID }}" readonly="readonly" hidden="hidden" />
              Apakah anda ingin menghapus data member ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-danger">Ya, Hapus</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      @endforeach

      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      @if (Session::get('updated'))
        <script>

            Swal.fire({
            title: 'Sukses!',
            text: 'Data berhasil diupdate!',
            icon: 'success',
            confirmButtonText: 'Cool'
        }).then(function() {
            console.log("Sukses");            
        });

        </script>
        @endif

        @if (Session::get('deleted'))
        <script>

            Swal.fire({
            title: 'Sukses!',
            text: 'Data berhasil dihapus!',
            icon: 'success',
            confirmButtonText: 'Cool'
        }).then(function() {
            console.log("Sukses");            
        });

        </script>
        @endif