<!DOCTYPE html>
<html>
<head>
    <title>Hóa đơn bán hàng</title>
</head>
<body>
    <style>
        body{
            font-family: DejaVu Sans;
        }
        </style>
    <h1><center>Hóa đơn bán hàng</center></h1>
    <table class ="table table-striep table-bodered">
        <tr>
            <th>Mã hóa đơn</th>
            <th>Ngày tạo</th>
            <th>Tổng tiền</th>
        </tr>
        <tr>
            <td>{{ $invoice->id }}</td>
            <td>{{ $invoice->created_at }}</td>
            <td>{{ $invoice->total }}</td>
        </tr>
    </table>
</body>
</html>