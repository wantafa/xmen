
<!doctype html>
<html lang="en">
<head><meta charset="us-ascii">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <title>X-MEN</title>
    <style>
        body {
            margin: 20px;
            padding: 20px;
        }
        .hr100 {
            margin-bottom: 100px;
        }
    </style>
</head>
<body>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h1>X-MEN</h1>
        <p>
            Ini adalah X-MEN, ini adalah tentang para pahlawan pembela bumi.
        </p>
    </div>
    <div class="col-md-2"></div>

</div>

<hr/>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Meng-klik "View Detail" di atas akan membawamu ke halaman detail di bawah ini.
                    Ini jika kamu mengklik data milik Wolverine.
                </div>
                <hr/>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8">
                <h3>Detail Superhero: Wolverine</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('update.superhero', $superhero->id) }}">
                @csrf
                @method('PATCH')
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td>{{ $superhero->id }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" name="nama" class="form-control" value="{{ $superhero->nama }}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="{{ $superhero->jenis_kelamin }}" selected>{{ $superhero->jenis_kelamin }}</option>
                                <option value="Laki-Laki">Laki-laki</option>
                                <option value="Perempuan" >Perempuan</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <button class="btn btn-primary mb-3">Edit</button>
            </form>

                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Skill</th>
                    <th>
                        <button class="btn btn-primary btn-small">Tambah Skill</button>
                    </th>
                    </thead>
                    <tbody>
                        @foreach ($skill as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <form action="{{ route('delete.skill', $item->id) }}" method="post" onsubmit="return confirm('Anda yakin mau hapus {{ $item->nama }} ? :(');" style="display: inline-block;" class="hapus">
                                    @csrf
                                    @method('DELETE')
                              <button type="submit" class="btn btn-danger"></i>Hapus</button>
                                  </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!-- Detail SuperHero End-->




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>