<h1>Tambah Mata Kuliah</h1>


<form action="/matakuliah" method="POST">

@csrf


<input name="kode_mk" placeholder="Kode MK">

<br>

<input name="nama_mk" placeholder="Nama MK">

<br>

<input name="sks" placeholder="SKS">

<br>

<input name="semester" placeholder="Semester">

<br>


<button>Simpan</button>


</form>