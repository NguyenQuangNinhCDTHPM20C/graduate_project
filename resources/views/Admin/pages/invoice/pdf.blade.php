<!DOCTYPE html>
<html>

<head>
    <title>Hóa đơn bán hàng</title>
</head>

<body>
    <style>
        body {
            font-family: DejaVu Sans;

        }

        .table-styling {
            border: 1px solid #000;
        }

        .table-styling tbody tr td {
            border: 1px solid #000;
        }
    </style>
    <h1>
        <center>Hóa đơn bán hàng</center>
    </h1>
    <h4>Người đặt hàng</h4>
    <table class="table-styling">
        <thead>
            <tr>
                <th>Mã hóa đơn</th>
                <th>Người mua</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
            </tr>
        </thead>
            <tr class="details" style="border-bottom:1px solid #E9ECEF ;">
                <td>{{$invoice->code}}</td>
                <td>{{$invoice->name}}</td>
                <td>{{$invoice->address}}</td>
                <td>{{$invoice->phone}}</td>
                <td>{{$invoice->email}}</td>
            </tr>

    </table>
    <h4>Đơn đặt hàng</h4>
    <table class="table-styling">
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>Ngày tạo</th>
            </tr>
        </thead>
        @foreach ($invoice_details as $invoice_detail)
            <tr class="details" style="border-bottom:1px solid #E9ECEF ;">
                <td>{{ optional($invoice_detail->product)->code }}</td>
                <td style="padding: 10px;vertical-align: top; display: flex;align-items: center;">
                    {{ optional($invoice_detail->product)->name }}
                </td>
                <td style="padding: 10px;vertical-align: top; ">
                    {{ $invoice_detail->quantity }}
                </td>
                <td style="padding: 10px;vertical-align: top; ">
                    {{ number_format($invoice_detail->price, 0, ',', '.') }}đ
                </td>
                <td>{{ \Carbon\Carbon::parse($invoice_detail->created_at)->format('d/m/Y') }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="2">
                <p>Giá Giảm: {{ number_format($discount_total, 0, ',', '.') }}đ</p>
                <p>Tổng tiền: {{ number_format($invoice->total, 0, ',', '.') }}đ</p>
        </tr>
    </table>

</body>

</html>
