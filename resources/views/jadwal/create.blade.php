<h1>Tambah Jadwal</h1>


<form action="/jadwal" method="POST">

@csrf


Dosen:

<select name="dosen_id">

@foreach($dosen as $d)

<option value="{{ $d->id }}">

{{ $d->nama_dosen }}

</option>

@endforeach

</select>


<br>


Mata Kuliah:

<select name="matakuliah_id">


@foreach($matakuliah as $mk)


<option value="{{ $mk->id }}">

{{ $mk->nama_mk }}

</option>


@endforeach


</select>


<br>


Hari:

<input type="text" name="hari">


<br>


Jam:

<input type="time" name="jam">


<br>


Kelas:

<input type="text" name="kelas">


<br>


<button>
Simpan
</button>


</form>