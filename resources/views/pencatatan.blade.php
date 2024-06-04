<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/pencatatan.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Form Project</title>
</head>
<body>
    <div class="sidebar">
        <div class="user-info">
            <div class="avatar"></div>
            <p><div class="Auth">{{ Auth::user()->name }}</div></p>
        </div>
        <div class="menu">
            <a href="/dashboard"><i class="bx bx-home"></i> Home</a>
            <a href="/pencatatan"><i class="bx bx-book"></i> Pencatatan</a>
            <a href="#"><i class="bx bx-line-chart"></i> Laporan</a>
            <a href="/tambahAkun"><i class="bx bx-user-plus"></i> Tambah Akun</a>
        </div>
        <div class="keluar">
            <a href="#"><i class="fas fa-sign-out-alt"></i> Keluar</a>
        </div>
    </div>
    <div class="main-content">
        <form class="form-project">
            <div class="form-group">
                <label for="projectName">Nama Project</label>
                <input type="text" id="projectName" name="projectName">
            </div>
            <div class="form-group">
                <label for="date">Tanggal</label>
                <input type="date" id="date" name="date">
            </div>
            <div class="form-group">
                <label>Tenaga Ahli :</label>
                <div class="expertise">
                    <input type="text" placeholder="Frontend">
                    <input type="number" placeholder="Orang">
                </div>
                <div class="expertise">
                    <input type="text" placeholder="Backend">
                    <input type="number" placeholder="Orang">
                </div>
                <!-- Add more expertise fields as needed -->
            </div>
            <div class="form-group">
                <label for="transport">Transportasi</label>
                <input type="text" id="transport" name="transport">
            </div>
            <div class="form-group">
                <label for="lodging">Penginapan</label>
                <input type="text" id="lodging" name="lodging">
            </div>
            <div class="form-group">
                <label for="consumption">Konsumsi</label>
                <input type="text" id="consumption" name="consumption">
            </div>
            <div class="form-group">
                <label for="tax">Pajak</label>
                <input type="text" id="tax" name="tax" placeholder="%">
            </div>
            <button type="submit">SIMPAN</button>
        </form>
    </div>
</body>
</html>