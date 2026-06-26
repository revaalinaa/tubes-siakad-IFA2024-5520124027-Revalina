<h1>Data Jadwal</h1>


<a href="/jadwal/create">
Tambah Jadwal
</a>


<br><br>


<table border="1" cellpadding="5">

<tr>

<th>Dosen</th>
<th>Mata Kuliah</th>
<th>Hari</th>
<th>Jam</th>
<th>Kelas</th>
<th>Aksi</th>

</tr>


@foreach($jadwal as $j)


<tr>

<td>
{{ $j->dosen->nama_dosen }}
</td>


<td>
{{ $j->matakuliah->nama_mk }}
</td>


<td>
{{ $j->hari }}
</td>


<td>
{{ $j->jam }}
</td>


<td>
{{ $j->kelas }}
</td>


<td>


<form action="/jadwal/{{ $j->id }}" method="POST">

@csrf

@method('DELETE')


<button type="submit">
Hapus
</button>


</form>


</td>


</tr>


@endforeach


</table>