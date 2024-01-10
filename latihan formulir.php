<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <title>dokumen</title>
</head>
<body>
    <h2>formulir pendaftaran 2023/2024</h2>
    <form>
        <label for="name">nama:</label><br>
        <label type= "text" id="name" name="name" placeholder="masukan nama lengkap"><br><br>
        <label for="tempat lahir">tempat lahir:</label><br>
        <label type="text" id="tempat lahir" name="tempat lahir" placeholder="masukan kota/kab tempat lahir"></label><br><br>
        <label for="alamat"> alamat</label><br>
        <input type="text" id="alamat" nama="name"placeholder="masukan alamat lengkap"><br><br>
        <label for="name">No. Hp siswa:</label><br>
        <input type="text"id="No siswa" name="No. Hp siswa" placeholder="masukan nomor Hp siswa"><br><br>
        <label for="name">pilihan jurusan:</label><br>
        <select>
            <option value="pilih jurusan">pilih jurusan</option>
            <option value="TJKT">TJKT</option>
            <option value="PPLG">PPLG</option>
            <option value="TB">TB</option>
            <option value="TKRO">TKRO</option>
            <option value="TBSM">TBSM</option>
        </select><br><br>
        <label for="name">jalur pendaftaran:</label><br>
        <select>
            <option value="pilih jalur pendaftaran">pilih jalur pendaftaran</option>
            <option value="reguler">reguler</option>
            <option value="prestasi akademik">prestasi akademik</option>
            <option value="prestasi non akademik">prestasi non akademik</option>
            <option value="prestasi agama">prestasi agama</option>
        </select><br><br>
        <label for="name">nama sekolah asal</label><br>
        <input type="text"id="nama sekolah asal" name="nama sekolah asal" placeholder="masukan nama sekolah SMP/MTS"><br><br>
        <input for="name">alamat sekolah asal</label><br>
        <input type="text"id="alamat sekolah asal" name="alamat sekolah asal" placeholder="masukan alamat SMP/MTS"><br><br>
        <label for="name">dimanakah anda mendapatkan info tentang SMK Syafi'i akrom:</label><br>
        <select>
            <option value="pilih sumber info">pilih sumber info</option>
            <option value="sosialisasi SMKSA ke SMP"></option>
            <option value="teman">teman</option>
            <option value="kakak kelas">kakak kelas</option>
            <option value="alumni SMK SA">alumni SMKS SA</option>
            <option value="saudara">saudara</option>
            <option value="facebook">facebook</option>
            <option value="instagram">instagram</option>
        </select><br><br>
        <input type="submit"value="simpan data">
    </form>
</body>
</html>