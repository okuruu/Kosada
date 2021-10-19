        <!-- ### $App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class="container-fluid">
              <h4 class="c-grey-900 mT-10 mB-30">Koperasi Kosada</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Tambah Data Member</h4>

                    <form action="{{ route('tambahPostMember') }}" method="POST">
                        @csrf
                        
                        <div class="row">

                            <div class="col">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="ID_1" placeholder="Masukkan Nama">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="ID_2" placeholder="Masukkan Alamat">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Kota</label>
                                    <input type="text" class="form-control" name="ID_3" placeholder="Masukkan Kota">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <input type="text" class="form-control" name="ID_4" placeholder="Masukkan Provinsi">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input type="number" class="form-control" name="ID_5" placeholder="Masukkan Telepon">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>No KTP</label>
                                    <input type="number" class="form-control" name="ID_6" placeholder="Masukkan KTP">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>No PIN ATM</label>
                                    <input type="number" class="form-control" name="ID_7" placeholder="Masukkan PIN">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" name="ID_8">
                                        <option>---</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Data Marketing</label>
                                    <select class="form-control" name="ID_9">
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
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input class="form-control" type="text" name="ID_10" placeholder="Masukkan Pekerjaan">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Rekomendasi Dari</label>
                                    <input class="form-control" type="text" name="ID_11">
                                </div>                
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control" name="ID_12" rows=3></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <button class="form-control btn-success" type="submit">Tambahkan Member</button>
                    </form>

                </div>
                </div>
              </div>
            </div>
          </div>
        </main>

        <!-- Start Notification Success Added to Product -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @if (Session::get('status'))
        <script>

            Swal.fire({
            title: 'Cool!',
            text: 'Berhasil menambahkan member baru!',
            icon: 'success',
            confirmButtonText: 'Cool'
        }).then(function() {
            window.location = "{{ route('tambahDataKredit') }}";            
        });

        </script>
        @endif

        <!-- End Notification Success Added to Product -->