<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Kelompok Voyager Crud Rapat Ortu / Kegiatan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>EDIT DATA</strong><a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div>
                <div class="card-body">
                    <a href="/pegawai" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/pegawai/update/{{ $pegawai->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Materi Pertemuan</label>
                            <input type="text" name="materi_pertemuan" id ="materi_pertemuan" class="form-control" placeholder="materi pertemuan .." value=" {{ $pegawai->materi_pertemuan }}">

                            @if($errors->has('materi_pertemuan'))
                                <div class="text-danger">
                                    {{ $errors->first('materi_pertemuan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>tanggal pertemuan</label>
                            <input type="date" name="tgl_pertemuan" id="tgl_pertemuan">

                             @if($errors->has('tgl_pertemuan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_pertemuan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jumlah Hadir</label>
                            <input type="text" name="jumlah_hadir" id="jumlah_hadir" class="form-control" placeholder="Jumlah Hadir .." value="{{ $pegawai->jumlah_hadir }} "> 

                             @if($errors->has('jumlah_hadir'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_hadir')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Bukti</label>
                            <textarea name="bukti" id="bukti" class="form-control" placeholder="bukti .."> {{ $pegawai->bukti }} </textarea>

                             @if($errors->has('bukti'))
                                <div class="text-danger">
                                    {{ $errors->first('bukti')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
