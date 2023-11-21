<!DOCTYPE html>

<head>
    <title>Isi Biodata</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: forestgreen;
        }

        .form-input {
            display: block;
            background: gainsboro;
            border: none;
            padding: 10px;
            border-radius: 10px;
            margin-left: 10px;

        }

        #btn-hitung {
            border: 1px solid teal;
            background: limegreen;
            color: black;
            width: 100px;
            height: 35px;
            margin-top: 3px;
            border-radius: 13px;
            cursor: pointer;
        }


        .Rumus {
            width: 250px;
            margin: 5px auto;
            background: lawngreen;
            border-radius: 20px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <center>
        <h1>Form Input Data Pendaftar Ojol</h1>
    </center>


    <form action="./addpendaftar.php" method="post">
        <div class="Rumus">

            <label for="namapendaftar">Nama Pendaftar</label><br>
            <input type="text" name="nama_pendaftar" class="form-input" required><br>

            <label for="e-mail">E-Mail</label><br>
            <input type="email" name="e-mail" maxlength="100" class="form-input" required><br>

            <label for="tanggallahit">Tanggal Lahir</label><br>
            <input type="date" name="tgllahir" class="form-input" required><br>

            <label for="jenis_kelamin">Pilih Jenis Kelamin:</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-input">
                <option value="1">Laki-laki</option>
                <option value="2">Prempuan</option>
            </select>

            <br>
            <label for="nosim">No SIM</label><br>
            <input type="text" name="no_sim" class="form-input" required><br>

            <label for="merekkendaraan">Merek Kendaraan</label><br>
            <input type="text" name="merek_kendaraan" class="form-input" required><br>

            <label for="nomorplar">Nomor Plat</label><br>
            <input type="text" name="nomor_plat" class="form-input" required><br>

            <center>
                <button type="submit" id="btn-hitung">
                    Kirim
                </button>
            </center>

        </div>
    </form>


</body>

</html>