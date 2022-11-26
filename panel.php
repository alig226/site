<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #003666;
  color: white;
}
</style>
</head>
<body>

<h1>Gelen Mesajlar</h1>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Email</th>
    <th>Tel</th>
    <th>Konu</th>
    <th>Mesaj</th>
    <tr>
        <td>Ali</td>
        <td>aligol008@gmail.com</td>
        <td>0501333287</td>
        <td>Lorem</td>
        <td>Lorem ipsum dolor sit amet.</td>
    </tr>
    
</table>

</body>
</html>


