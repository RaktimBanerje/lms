<!DOCTYPE html>
<html>

<head>
  <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #1FB151;
      color: white;
    }
  </style>
</head>

<body>


  <table id="customers">
    <tr>
      <th colspan="3">FintechIn</th>
    </tr>
    <tr>
      <td>Email</td>
      <td>{{$email}}</td>
    </tr>
    <tr>
      <td>Password</td>
      <td>{{$raw_password}}</td>
    </tr>
    </tr>
  </table>

</body>

</html>