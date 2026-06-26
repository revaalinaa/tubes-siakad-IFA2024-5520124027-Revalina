<h1>Tambah Mahasiswa</h1>


<form action="/mahasiswa" method="POST">

@csrf


NIM

<input type="text" name="nim">


<br>


Nama

<input type="text" name="nama_mahasiswa">


<br>


Jurusan

<input type="text" name="jurusan">


<br>


Angkatan

<input type="text" name="angkatan">


<br>


<button>
Simpan
</button>


</form>