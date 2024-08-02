<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <title>Laporan</title>
</head>

<body>
    {{-- sidear --}}
    <div class="sidebar">
        <div class="user-info">
            <div class="avatar"></div>
            <p>
            <div class="Auth">{{ Auth::user()->name }}</div>
            </p>
        </div>
        <div class="menu">
            @if (auth()->user()->role == 'super_admin')
                <div class="menu">
                    <a href="/dashboard"><i class="bx bx-home"></i> Home</a>
                    <a href="/pencatatan"><i class="bx bx-book"></i> Pencatatan</a>
                    <a href="/laporan"><i class="bx bx-line-chart"></i> Laporan</a>
                    <a href="/tambahAkun"><i class="bx bx-user-plus"></i> Tambah Akun</a>
                </div>
            @elseif(auth()->user()->role == 'admin')
                <div class="menu">
                    <a href="/dashboard"><i class="bx bx-home"></i> Home</a>
                    <a href="/pencatatan"><i class="bx bx-book"></i> Pencatatan</a>
                    <a href="/laporan"><i class="bx bx-line-chart"></i> Laporan</a>
                </div>
            @elseif(auth()->user()->role == 'executive')
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

    {{-- content --}}
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
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($data_pencatatan as $item)
            <tr id="isi">
                <th>{{$item['id']}}</th>
                <th>{{$item['nama_project']}}</th>
                <th>{{$item['tanggal']}}</th>
                <th>{{$item['frontend']*$item['jumlahFrontend']}}</th>
                <th>{{$item['uiux']*$item['jumlahUiux']}}</th>
                <th>{{$item['backend']*$item['jumlahBackend']}}</th>
                <th>{{$item['consultant_it']*$item['jumlahConsultantIt']}}</th>
                <th>{{$item['transportasi']*$item['jumlahTransportasi']}}</th>
                <th>{{$item['penginapan']*$item['jumlahPenginapan']}}</th>
                <th>{{$item['konsumsi']*$item['jumlahKonsumsi']}}</th>
                <th>{{$item['pajak']}} %</th>
                <th>{{$item['total']}}</th>
                {{-- <th><a href="" class="btn_edit"><i class='bx bx-edit'></i></a>
                    <a href="" class="btn_delet"><i class='bx bx-trash'></i></a>
                </th> --}}
            </tr>
            @endforeach
        </table>
    </div>
    <script src="{{ asset('js/pencatatan.js') }}"></script>
</body>

</html>
