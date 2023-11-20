<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
</head>
<body>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div>
            <label for="nis">NIS:</label><br>
            <input type="text" name="nis" id="nis"><br>
            @error('nis')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="nama_siswa">Nama:</label><br>
            <input type="text" name="nama_siswa" id="nama_siswa"><br>
            @error('nama_siswa')
                <span>{{ $message }}</span>
            @enderror
        </div>
            <label for="password">Kata Sandi:</label><br>
            <input type="password" name="password" id="password"><br>
            @error('password')
                <span>{{ $message }}</span><br>
            @enderror
        </div>
        </div>
            <label for="password_confirmation">Konfirmasi Kata Sandi:</label><br>
            <input type="password" name="password_confirmation" id="password_confirmation"><br>
            @error('password_confirmation')
                <span>{{ $message }}</span>
            @enderror
        </div>
        </div>
            <input type="Submit" name="submit" value="Registrasi">
        </div>
        <div>
            <a href="/login">Masuk Disini</a>
        </div>
    </form>
</body>
</html>
