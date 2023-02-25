<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengkat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Ubah Tanggapan
                </div>
                <div class="card-body">
                    <a href="/tanggapan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/tanggapan/update/{{ $tanggapan->id_tanggapan }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Pengadu</label>
                            <input type="text" name="id_pengaduan" class="form-control" placeholder="pengadu .." value="{{ $tanggapan->id_pengaduan }}">
 
                            @if($errors->has('id_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_pengaduan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggal tanggapan</label>
                            <input type="datetime-local" name="tgl_tanggapan" class="form-control" placeholder="Tanggal tanggapan .." value="{{ $tanggapan->tgl_tanggapan }}">
 
                            @if($errors->has('tgl_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_tanggapan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggapan</label>
                            <textarea name="tanggapan" class="form-control" placeholder="isi tanggapan ..">{{ $tanggapan->tanggapan }}</textarea>
 
                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <label>Petugas</label>
                            <input type="text" name="id_petugas" class="form-control" placeholder="petugas .." value="{{ $tanggapan->id_petugas }}">
 
                            @if($errors->has('id_petugas'))
                                <div class="text-danger">
                                    {{ $errors->first('id_petugas')}}
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