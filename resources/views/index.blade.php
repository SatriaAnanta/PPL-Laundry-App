<!DOCTYPE html>
<html>
<head>
    <title>Data Laundry</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        @include('includes.header')
    </header>
    <div class="container">
        <div class="card-body">
            <h3>Data Laundry</h3>
            <a href="/data_laundry/tambah"> + Tambah Data Baru</a>

            <br/>
            <br/>
            @if (session('status'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">Tutup</i>
                                    </button>
                                    <span>{{ session('status') }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Kode</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Berat(kg)</th>
                    <th>Progres</th>
                    <th>Opsi</th>
                </tr>
                @foreach($data_laundry as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->kode }}</td>
                    <td>{{ $p->tanggal }}</td>
                    <td>{{ $p->waktu }}</td>
                    <td>{{ $p->berat }}</td>
                    <td>{{ $p->progres }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="/data_laundry/edit/{{ $p->id }}">Edit</a>
                        <form action="{{ route('laundry.delete', [$p->id]) }}" method="post" style="display: inline;">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" rel="tooltip" data-original-title="Hapus">
                                <i class="material-icons">Hapus</i>
                            </button>
                        </form> 
                    </td>
                    
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <footer class="footer">
        @include('includes.footer')
    </footer>
</body>
</html>