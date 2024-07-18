<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/pencatatan.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Pencatatan</title>
</head>

<body>
    {{-- sidebar --}}
    <div class="sidebar">
        <div class="user-info">
            <div class="avatar"></div>
            <p>
                @if (Auth::check())
                    <div class="Auth">{{ Auth::user()->name }}</div>
                @else
                    <div class="Auth">Guest</div>
                @endif
            </p>
        </div>
        <div class="menu">
            @if (auth()->check() && auth()->user()->role == 'super_admin')
                <div class="menu">
                    <a href="/dashboard"><i class="bx bx-home"></i> Home</a>
                    <a href="/pencatatan"><i class="bx bx-book"></i> Pencatatan</a>
                    <a href="/laporan"><i class="bx bx-line-chart"></i> Laporan</a>
                    <a href="/tambahAkun"><i class="bx bx-user-plus"></i> Tambah Akun</a>
                </div>
            @elseif(auth()->check() && auth()->user()->role == 'admin')
                <div class="menu">
                    <a href="/dashboard"><i class="bx bx-home"></i> Home</a>
                    <a href="/pencatatan"><i class="bx bx-book"></i> Pencatatan</a>
                    <a href="/laporan"><i class="bx bx-line-chart"></i> Laporan</a>
                </div>
            @elseif(auth()->check() && auth()->user()->role == 'executive')
                <div class="menu">
                    <a href="/dashboard"><i class="bx bx-home"></i> Home</a>
                    <a href="/laporan"><i class="bx bx-line-chart"></i> Laporan</a>
                </div>
            @else
                <div class="menu">
                    <a href="/dashboard"><i class="bx bx-home"></i> Home</a>
                    <a href="/pencatatan"><i class="bx bx-book"></i> Pencatatan</a>
                    <a href="/laporan"><i class="bx bx-line-chart"></i> Laporan</a>
                </div>
            @endif
        </div>
        <div class="keluar">
            <a href="logout"><i class="bx bx-log-out"></i> Keluar</a>
        </div>
    </div>
    {{-- akhir sidebar --}}

    {{-- awal content --}}

    <div class="main-content">

        <div class="header">
            <a class="btn" id="openAddAccountPopup">
                <i class='bx bx-plus'></i>
                <span>Tambah Project</span>
            </a>
        </div>

        @if (session('status'))
            <div class="result">
                <div class="alert alert-primary">{{ session('status') }}</div>
            </div>
        @endif

        <div class="popup" id="addAccountPopup">
            <div class="popup-content">
                <form class="form-add-account" method="post" action="{{ route('pencatatan.store') }}">
                    @csrf
                    <div class="form-group-container">
                        <div class="form-group">
                            <label for="nama_project">Nama Project</label>
                            <input type="text" id="nama_project" name="nama_project" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" required>
                        </div>
                    </div>
                    <label>Tenaga ahli :</label>
                    <div class="form-group-container">
                        <div class="form-group">
                            <label for="frontend">Frontend</label>
                            <div class="input-group">
                                <input type="number" id="frontend" name="frontend" min="0" required>
                                <span>x</span>
                                <input type="number" id="jumlahFrontend" name="jumlahFrontend" class="short-input"
                                    min="0" required>
                                <span>Orang</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="uiux">UI & UX</label>
                            <div class="input-group">
                                <input type="number" id="uiux" name="uiux" min="0" required>
                                <span>x</span>
                                <input type="number" id="jumlahUiux" name="jumlahUiux" class="short-input"
                                    min="0" required>
                                <span>Orang</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-container">
                        <div class="form-group">
                            <label for="backend">Backend</label>
                            <div class="input-group">
                                <input type="number" id="backend" name="backend" min="0" required>
                                <span>x</span>
                                <input type="number" id="jumlahBackend" name="jumlahBackend" class="short-input"
                                    min="0" required>
                                <span>Orang</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="consultant_it">Consultant IT</label>
                            <div class="input-group">
                                <input type="number" id="consultant_it" name="consultant_it" min="0"
                                    required>
                                <span>x</span>
                                <input type="number" id="jumlahConsultantIt" name="jumlahConsultantIt"
                                    class="short-input" min="0" required>
                                <span>Orang</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="transportasi">Transportasi</label>
                        <div class="input-group">
                            <input type="number" id="transportasi" name="transportasi" min="0" required>
                            <span>x</span>
                            <input type="number" id="jumlahTransportasi" name="jumlahTransportasi"
                                class="short-input" min="0" required>
                            <span>Balikan</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="penginapan">Penginapan</label>
                        <div class="input-group">
                            <input type="number" id="penginapan" name="penginapan" min="0" required>
                            <span>x</span>
                            <input type="number" id="jumlahPenginapan" name="jumlahPenginapan" class="short-input"
                                min="0" required>
                            <span>Malam</span>
                        </div>
                    </div>
                    <div class="form-group-container">
                        <div class="form-group">
                            <label for="konsumsi">Konsumsi</label>
                            <div class="input-group">
                                <input type="number" id="konsumsi" name="konsumsi" min="0" required>
                                <span>x</span>
                                <input type="number" id="jumlahKonsumsi" name="jumlahKonsumsi" class="short-input"
                                    min="0" required>
                                <span>Makan</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="total">Total</label>
                            <div class="input-group">
                                <input type="number" id="total" name="total" min="0" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-container">
                        <div class="form-group">
                            <label for="pajak">Pajak</label>
                            <div class="input-group">
                                <input type="number" id="pajak" name="pajak" min="0" required>
                                <span>%</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit">Simpan</button>
                        </div>
                        <div class="form-group">
                            <button type="reset" id="closeAddAccountPopup">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="table-container">
            <table id="project-table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama Project</th>
                        <th>Tanggal</th>
                        <th>Frontend</th>
                        <th>UI & UX</th>
                        <th>Backend</th>
                        <th>Consultant IT</th>
                        <th>Transportasi</th>
                        <th>Penginapan</th>
                        <th>Konsumsi</th>
                        <th>Pajak</th>
                        <th>Total</th>
                    </tr>
                </thead>
                @foreach ($data_pencatatan as $item)
                <tr id="isi">
                    <th>{{$item['id']}}</th>
                    <th>{{$item['nama_project']}}</th>
                    <th>{{$item['tanggal']}}</th>
                    <th>{{$item['frontend']}}</th>
                    <th>{{$item['uiux']}}</th>
                    <th>{{$item['backend']*$item['jumlahBackend']}}</th>
                    <th>{{$item['consultant_it']}}</th>
                    <th>{{$item['transportasi']}}</th>
                    <th>{{$item['penginapan']}}</th>
                    <th>{{$item['konsumsi']}}</th>
                    <th>{{$item['pajak']}} %</th>
                    <th>{{$item['total']}}</th>
                </tr>
                @endforeach
                <tbody id="project-table-body">
                    <!-- Data will be displayed here -->
                </tbody>
            </table>
        </div>
    </div>
    {{-- akhir content --}}

    <script src="{{ asset('js/pencatatan.js') }}"></script>
</body>

</html>
