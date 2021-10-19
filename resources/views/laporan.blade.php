
        <!-- ### $App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class="container-fluid">
              <h4 class="c-grey-900 mT-10 mB-30">Unduh Laporan</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20"></h4>

                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal Unduhan</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>TGL 25</td>
                                <td><a href="{{ route('25'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>28 IM</td>
                                <td><a href="{{ route('28im'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>28 AM</td>
                                <td><a href="{{ route('28am'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>BCA 1</td>
                                <td><a href="{{ route('bca1'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>BCA 2</td>
                                <td><a href="{{ route('bca2'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>MAN 1</td>
                                <td><a href="{{ route('man1'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>MAN 2</td>
                                <td><a href="{{ route('man2'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>SAB/BRI</td>
                                <td><a href="{{ route('sab'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>CIMB</td>
                                <td><a href="{{ route('cimb'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>MJK</td>
                                <td><a href="{{ route('mjk'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>YAKULT</td>
                                <td><a href="{{ route('yakult'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>OPPO</td>
                                <td><a href="{{ route('oppo'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>U.LOKA</td>
                                <td><a href="{{ route('uloka'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>BNI</td>
                                <td><a href="{{ route('bni'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>JATIM</td>
                                <td><a href="{{ route('jatim'); }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>Tanggal {{ date("1 M Y") }} - {{ date("30 M Y") }} </td>
                                <td>Semua Pinjaman Aktif</td>
                                <td><a href="{{ route('download') }}"><button class="btn btn-primary">Download</button></a></td>
                            </tr>
                        </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>