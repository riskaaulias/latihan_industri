<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #fff8dc, #fffacd, #fef9e7);
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
            color: #444;
        }

        table {
            margin: 30px auto;
            border-collapse: collapse;
            width: 80%;
            background: #fffef5;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #f1e5ab;
        }

        th {
            background: #fff064ff;
            color: #333;
            font-weight: bold;
        }

        tr:nth {
            background: #fffde7;
        }

        tr:hover {
            background: #fef5c9;
        }
    </style>
    <center>
    <h2>Data Product</h2>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        @foreach($product as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->stock}}</td>
        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>