<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="page-header">
          <h2>Tiket</h2>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Destinasi</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        @foreach($transaction->destinations as $destination)
                            <ul>
                                <li>{{ $destination->title }}</li>
                            </ul>
                        @endforeach
                    </td>
                    <td>
                        @foreach($transaction->destinations as $destination)
                            <ul>
                                <li>{{ $destination->pivot->tickets }}</li>
                            </ul>
                        @endforeach
                    </td>
                    <td>
                        @foreach($transaction->destinations as $destination)
                            <ul>
                                <li>{{ $destination->pivot->tickets * $destination->ticket_price }}</li>
                            </ul>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td>{{ $transaction->total }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
