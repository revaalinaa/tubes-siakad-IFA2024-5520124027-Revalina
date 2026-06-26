<h1>KRS Saya</h1>


<a href="/krs-export">
Export PDF
</a>


<h2>Ambil Mata Kuliah</h2>


<form action="/krs" method="POST">

@csrf


<select name="jadwal_id">

@foreach($jadwal as $j)

<option value="{{ $j->id }}">

{{ $j->matakuliah->nama_mk }}
-
{{ $j->hari }}
-
{{ $j->jam }}

</option>

@endforeach


</select>


<button>
Ambil
</button>


</form>



<hr>


<h2>Daftar KRS Saya</h2>


<table border="1">

<tr>

<th>No</th>
<th>Mata Kuliah</th>
<th>Hari</th>
<th>Jam</th>
<th>Aksi</th>

</tr>


@foreach($krs as $k)

<tr>

<td>
{{ $loop->iteration }}
</td>


<td>
{{ $k->jadwal->matakuliah->nama_mk }}
</td>


<td>
{{ $k->jadwal->hari }}
</td>


<td>
{{ $k->jadwal->jam }}
</td>


<td>

<form action="/krs/{{ $k->id }}" method="POST">

@csrf
@method('DELETE')

<button>
Hapus
</button>

</form>

</td>


</tr>

@endforeach


</table>