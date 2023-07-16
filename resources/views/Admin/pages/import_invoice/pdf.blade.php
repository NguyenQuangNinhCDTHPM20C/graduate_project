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
                <td>{{$importInvoice->code}}</td>
                <td>{{($importInvoice->account)->name}}</td>
                <td>{{($importInvoice->account)->address}}</td>
                <td>{{($importInvoice->account)->phone_number}}</td>
                <td>{{($importInvoice->account)->email}}</td>
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
        @foreach ($importInvoiceDetail as $importInvoiceDetail)
            <tr class="details" style="border-bottom:1px solid #E9ECEF ;">
                <td>{{ optional($importInvoiceDetail->product)->code }}</td>
                <td style="padding: 10px;vertical-align: top; display: flex;align-items: center;">
                    {{ optional($importInvoiceDetail->product)->name }}
                </td>
                <td style="padding: 10px;vertical-align: top; ">
                    {{ $importInvoiceDetail->quantity }}
                </td>
                <td style="padding: 10px;vertical-align: top; ">
                    {{ number_format($importInvoiceDetail->price, 0, ',', '.') }}đ
                </td>
                <td>{{ \Carbon\Carbon::parse($importInvoiceDetail->created_at)->format('d/m/Y') }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="2">
                <p>Giá Giảm: {{ number_format($discount_total, 0, ',', '.') }}đ</p>
                <p>Tổng tiền: {{ number_format($importInvoice->total, 0, ',', '.') }}đ</p>
        </tr>
    </table>

</body>

</html>
