<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="<?= base_url('index.php/registrasi/register') ?>" method="post">
    <input type="text" name="name">
    <input type="text" name="username">
    <select name="level" id="level">
      <option value="ADMIN">ADMIN</option>
      <option value="USER">USER</option>
      <option value="BENGKEL">BENGKEL</option>
    </select>
    <input type="text" name="password">
    <input type="text" name="alamat">
    <button type="submit" name="daftar">SIMPAN</button>
  </form>
</body>
</html>
