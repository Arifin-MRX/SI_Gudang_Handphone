<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        } */
    </style>
</head>

<body>
    <section class="hero m-0 d-flex align-content-center bg-primary-subtle  "
        style=" min-height: 100vh;  background-size: cover;background-position: center;">
        {{-- style="background-image: url(../assets//bg.jpg);min-height: 100vh;  background-repeat: no-repeat; background-size: cover;background-position: center; "> --}}
        <form action="{{ route('actionregister') }}" method="post" class="bg-light p-4 mt-5 mb-5 rounded m-auto "
            style="--bs-bg-opacity: .5; margin-bottom:500px;" autocomplete="off">
            @csrf
            <img src="{{ asset('assets/gudang1.png') }}" alt="gambar" style="height: 170px">
            <h1 class="mb-4 text-center">Registration</h1>
            <div class="mb-3">
                <Label for="exampleInputname" class="form-label">
                    Nama
                </Label>
                <input type="text" id="exampleInputname" name="nama_pengguna"
                    class="form-control border-primary-subtle ">
            </div>
            <div class="mb-3">
                <Label for="exampleInputname" class="form-label">
                    Username
                </Label>
                <input type="text" id="exampleInputname" name="username" class="form-control border-primary-subtle ">
            </div>
            <div class="mb-3">
                <Label for="exampleInputnohp" class="form-label">
                    No.Hp
                </Label>
                <input type="text" name="tlp" id="exampleInputnohp" class="form-control border-primary-subtle">
            </div>
            <div class="mb-3">
                <Label for="exampleInputAlamat" class="form-label">
                    Alamat
                </Label>
                <textarea type="text" name="alamat" id="exampleInputAlamat" class="form-control border-primary-subtle"> </textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control border-primary-subtle"
                    placeholder="arifin@kangean.co.id" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text ">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control border-primary-subtle"
                    id="exampleInputPassword1">
            </div>
            <input type="hidden" id="exampleInputname" name="pegawai_id" class="form-control border-primary-subtle "
                value="1">
            {{--  --}}
            {{-- <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control border-primary-subtle" id="exampleInputPassword1">
            </div> --}}
            {{-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label " for="exampleCheck1">Check me out</label>
            </div> --}}
            <div class="button m-auto ">
                <button type="submit" class="btn btn-primary mb-5 mt-2">Registration</button>
            </div>
            <p class="mt-4">not a member? <a href="#">Sign up now</a></p>
        </form>
    </section>
</body>

</html>
