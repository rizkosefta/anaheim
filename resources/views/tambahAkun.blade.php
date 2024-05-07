<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/tambahAkun.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <title>Tambah Akun</title>
</head>
<body>
    <div class="sidebar">
        <div class="user-info">
            <div class="avatar"></div>
            <p>USER</p>
        </div>
        <div class="menu">
            <a href="#"><i class="fas fa-home"></i> Home</a>
            <a href="#"><i class="fas fa-book"></i> Pencatatan</a>
            <a href="#"><i class="fas fa-chart-line"></i> Laporan</a>
            <a href="#"><i class="fas fa-user-plus"></i> Tambah Akun</a>
        </div>
        <div class="keluar">
            <a href="#"><i class="fas fa-sign-out-alt"></i> Keluar</a>
        </div>
    </div>
    <div class="main-content">
        <form class="form-add-account">
            <label for="accountType">Jenis akun</label>
            <select id="accountType">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>

            <label for="name">Nama</label>
            <input type="text" id="name" name="name">

            <label for="username">Username</label>
            <input type="text" id="username" name="username">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>