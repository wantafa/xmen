
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

<hr class="hr100"/>

<!-- Daftar SuperHero Start -->


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Di bawah ini adalah Daftar orang-orang yang super hebat itu.<br/>
                    Kamu bisa mencari nama mereka melalui fasilitas pencarian di sebelah kanan.<br/>
                    Kita beruntung memiliki data-data mereka. Jangan sampai jatuh ke tangan musuh, ini akan mengubah dunia..
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Daftar Superhero</h3>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                    <form action="{{ route('cari.superhero') }}" method="GET">
                    <input type="text" name="cari_superhero" class="form-control" placeholder="Pencarian" aria-describedby="basic-addon1">
                    <div class="input-group-append">
                        <input class="btn btn-outline-secondary btn-sm" type="submit" value="Cari"></input>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($superhero as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>
                                <a href="{{ route('detail.superhero', $item->id) }}" class="btn btn-primary">View Detail</a>
                                <form action="{{ route('delete.superhero', $item->id) }}" method="post" onsubmit="return confirm('Anda yakin mau hapus {{ $item->nama }} ? :(');" style="display: inline-block;" class="hapus">
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
<!-- Daftar SuperHero End -->

<hr class="hr100"/>

<!-- Simulasi Start -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <p>
                    Nah, ini adalah simulasi jika <stromg>Wolverine & Storm</stromg> menikah.
                    Maka anak-anak mereka kemungkinan akan mewarisi Skill dari Ayah dan Ibunya.
                    Kamu bisa mengganti-ganti Suami / Istri untuk melihat Skill yang akan dimiliki oleh anak-anaknya.
                    </p>

                    <p>
                    <i>Tentunya Laki-laki hanya bisa menikah dengan Perempuan ya, awas jangan sampai jenis kelaminnya sama! Jeruk makan jeruk dong :D</i>
                    </p>
                </div>
                <hr/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Simulasi Jika Superhero Menikah</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <form method="POST" action="{{route('simulasi')}}">
                @csrf
                @method('POST')
                <table class="table table-bordered">
                    <tr>
                        <td>Suami</td>
                        <td>
                            <select name="suami" class="form-control">
                                @foreach ($superhero_laki as $item)
                                    
                                <option value="{{ $item->nama }}" selected>{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Istri</td>
                        <td>
                            <select name="istri" class="form-control">
                                @foreach ($superhero_perempuan as $item)
                                    
                                <option value="{{ $item->nama }}" selected>{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">Simulasi</button>
            </form>

                
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

<hr class="hr100"/>

<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
        <button class="btn btn-primary">Export To Excel</button>
        <button class="btn btn-primary">Export To PDF</button>

        <hr/>

        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <p>
                        Kamu juga bisa meng-export data hasil simulasi ini ke EXCEL / PDF. Ingat, data ini rahasia. Jangan sampai jatuh ke tangan musuh ya! Berbahaya!
                    </p>
                </div>
                <hr/>
            </div>
        </div>
    </div>
    <div class="col-md-2">

    </div>
</div>
<!-- Simulasi End-->



<hr class="hr100"/>


<!-- Daftar Skills Start -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Di bawah ini adalah Daftar Skill yang ada.<br/>
                    Kamu bisa mencari nama mereka melalui fasilitas pencarian di sebelah kanan.<br/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Daftar Skill</h3>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                    <form action="{{ route('cari.skill') }}" method="GET">
                        <input type="text" name="cari_skill" class="form-control" placeholder="Pencarian" aria-describedby="basic-addon1">
                        <div class="input-group-append">
                            <input class="btn btn-outline-secondary btn-sm" type="submit" value="Cari"></input>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($skill as $item)
                            
                        <tr>
                            <td>{{ $no1++ }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <a href="{{ route('detail.skill', $item->id) }}" class="btn btn-primary">View Detail</a>
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
<!-- Daftar Skills End -->


<hr class="hr100"/>



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