<h2>Tambah Dosen</h2>


<form action="/dosen" method="POST">

@csrf


NIDN

<input type="text" name="nidn">


<br>


Nama Dosen

<input type="text" name="nama_dosen">


<br>


Email

<input type="email" name="email">


<br>


No HP

<input type="text" name="no_hp">


<br>


<button>
Simpan
</button>


</form>