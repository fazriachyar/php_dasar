<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    ul {
  display: block;
  list-style-type: none;
  margin-top: 1em;
  margin-bottom: 1 em;
  margin-left: 0;
  margin-right: 0;
  padding-left: 40px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
<body>
    <div class="header">
        <h1>DATA MAHASISWA</h1>
    </div>
    <div class="main">
        <form action="proses.php" method="POST">
            <ul>
                <li>
                    <label for="nama">NAMA:</label>
                    <input type="text" id="nama" name="nama"><br><br>
                </li>
                <li>
                    <label for="nim">NIM:</label>
                    <input type="text" id="nim" name="nim"><br><br>
                </li>
                <li>
                    <label for="nim">SEMESTER:</label>
                    <input type="text" id="semester" name="semester"><br><br>
                </li>
                <li>
                    <label for="nim">JURUSAN:</label>
                    <input type="text" id="jurusan" name="jurusan"><br><br>
                </li>
                <li>
                    <label for="nim">ALAMAT:</label>
                    <input type="text" id="alamat" name="alamat"><br><br>
                </li>
                <li>
                    <button type="submit">submit</button>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>