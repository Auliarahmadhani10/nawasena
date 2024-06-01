<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/profile.css" />
  </head>
  <body>
    <div class="box"><div class="rectangle">
      <h1>{{ $user->nama }}</h1>
      <h1>{{ $user->nis }}</h1>
      <h1>{{ $user->no_telp }}</h1>
      <h1>{{ $user->role }}</h1>
      <h1>{{ $user->alamat }}</h1>
    </div>
  </body>
</html>
