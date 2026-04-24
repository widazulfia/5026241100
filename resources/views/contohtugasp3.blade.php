<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas Pertemuan 3 - Bootstrap 4, Input Group</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Input Group -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #ffe6f2;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .kotak-judul {
            background-color: white;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,5);
        }

        .judul-halaman {
            color: #ff66a3;
            font-weight: bold;
        }

        .judul-contoh {
            background-color: #ffd6eb;
            padding: 8px;
        }

        .kotak-form {
            background-color: white;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,5);
        }

        .tombol-pink {
            background-color: #ff66a3;
            color: white;
            border: none;
            padding: 6px 15px;
        }

        .tombol-kirim {
            background-color: #ff66a3;
            color: white;
            border: none;
            padding: 8px 20px;
        }

        .input-group-text {
            background-color: #ffd6eb;
        }
    </style>

</head>

<body>

    <div class="container mt-4">

        <!-- Judul dan Identitas Saya -->
        <div class="kotak-judul">

            <h1 class="judul-halaman">Formulir Pendaftaran RISE! Competition 2026</h1>
            <p>Saya akan mempraktekkan pembuatan beberapa jenis input group.</p>

            <p>Nama: Nayla Eka Widazulfia</p>
            <p>NRP: 5026241100</p>
            <p>Kelas: Pemrograman Web (C)</p>

        </div>


        <div class="kotak-form">

            <!-- 1. Input Group Sizing -->
            <h3 class="judul-contoh">Contoh 1: Input Group Sizing</h3>

            <form>
                <div class="input-group mb-3 input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nama</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Masukkan nama">
                </div>
            </form>

            <form>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Program Studi</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Masukkan program studi">
                </div>
            </form>

            <form>
                <div class="input-group mb-3 input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Asal Universitas</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Masukkan nama universitas">
                </div>
            </form>


            <!-- 2. Multiple Input -->
            <h3 class="judul-contoh">Contoh 2: Multiple Input</h3>

            <form>
                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text">Nama Lengkap</span>
                    </div>

                    <input type="text" class="form-control" placeholder="Nama depan">
                    <input type="text" class="form-control" placeholder="Nama belakang">

                </div>
            </form>


            <!-- 3. Multiple Helper -->
            <h3 class="judul-contoh">Contoh 3: Multiple Helper</h3>

            <form>

                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text">Nomor</span>
                        <span class="input-group-text">Kuitansi</span>
                        <span class="input-group-text">Pembayaran</span>
                    </div>

                    <input type="text" class="form-control" placeholder="Masukkan nomor kuitansi">

                </div>

            </form>


            <!-- 4. Input Group with Checkbox -->
            <h3 class="judul-contoh">Contoh 4: Input Group with Checkbox</h3>

            <div class="input-group mb-3">

                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox">
                    </div>
                </div>

                <input type="text" class="form-control" placeholder="Setuju dengan syarat dan ketentuan lomba">

            </div>


            <!-- 5. Input Group with Radio -->
            <h3 class="judul-contoh">Contoh 5: Input Group with Radio</h3>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio">
                    </div>
                </div>
                <input type="text" class="form-control" placeholder="Tim">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio">
                    </div>
                </div>
                <input type="text" class="form-control" placeholder="Perorangan">
            </div>

            <!-- 6. Input Group Buttons -->
            <h3 class="judul-contoh">Contoh 6: Input Group Buttons</h3>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari nama anggota tim">
                <div class="input-group-append">
                    <button class="btn tombol-pink" type="button">Cari</button>
                    <button class="btn tombol-pink" type="button">Batal</button>
                </div>
            </div>

            <!-- 7. Input Group with Dropdown -->
            <h3 class="judul-contoh">Contoh 7: Input Group with Dropdown</h3>

            <div class="input-group mb-3">

                <div class="input-group-prepend">
                    <button type="button" class="btn tombol-pink dropdown-toggle" data-toggle="dropdown">
                        Pilihan Akomodasi
                    </button>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Full Accomodation</a>
                        <a class="dropdown-item" href="#">Half Accomodation</a>
                        <a class="dropdown-item" href="#">Non Accomodation</a>
                    </div>
                </div>

                <input type="text" class="form-control" placeholder="Masukkan keterangan akomodasi">

            </div>

            <!-- 8. Input Group Label-->
            <h3 class="judul-contoh">Contoh 8: Input Group Label</h3>

            <label for="emailinput">Tuliskan email (keperluan pengiriman konfirmasi)</label>

            <div class="input-group mb-3">

                <input type="text" class="form-control" placeholder="Email" id="emailinput" name="email">

                <div class="input-group-append">
                    <span class="input-group-text">@gmail.com</span>
                </div>

            </div>


            <br>

            <button class="tombol-kirim">
                Kirim
            </button>

        </div>

    </div>

</body>

</html>
