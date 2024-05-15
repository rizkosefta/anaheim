<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <div class="user-info">
            <div class="avatar"></div>
            <p><div class="Auth">{{ Auth::user()->name }}</div></p>
        </div>
        <div class="menu">
            <a href="#"><i class="fas fa-home"></i> Home</a>
            <a href="#"><i class="fas fa-book"></i> Pencatatan</a>
            <a href="#"><i class="fas fa-chart-line"></i> Laporan</a>
            <a href="#"><i class="fas fa-user-plus"></i> Tambah Akun</a>
        </div>
        <div class="keluar">
            <a href="logout"><i class="fas fa-sign-out-alt"></i> Keluar</a>
        </div>
    </div>
    <div class="main-content">
        <div class="header">
            <button>Tambah Project</button>
        </div>
        <div class="content">
            <div class="card total">
                <p>Total HPP Keseluruhan</p>
                <p>Rp1,000,000,000,-</p>
                <p>Total Project</p>
                <p>10</p>
            </div>
            <div class="card ongoing">
                <p>Project Berjalan</p>
                <p>HPP Total</p>
                <p>Rp600,000,000,-</p>
                <p>Jumlah Project</p>
                <p>6</p>
            </div>
            <div class="card completed">
                <p>Project Selesai</p>
                <p>HPP Total</p>
                <p>Rp300,000,000,-</p>
                <p>Jumlah Project</p>
                <p>3</p>
            </div>
            <div class="card pending">
                <p>Pending</p>
                <p>HPP Total</p>
                <p>Rp100,000,000,-</p>
                <p>Jumlah Project</p>
                <p>1</p>
            </div>
            <div class="project-list">
                <p>Project Keseluruhan</p>
                <div class="list">
                    <!-- List projects here -->
                </div>
            </div>
            <div class="project-graph">
                <p>Grafik Project</p>
                <!-- Insert graph here -->
            </div>
        </div>
    </div>
</body>
</html>