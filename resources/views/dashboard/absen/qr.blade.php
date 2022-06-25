@extends('dashboard.main')
@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <h1>QR CODE </h1>
    <div class="visible-print text-center" id="qrcode">
        {!! QrCode::size(250)->generate($qr) !!}
        <p>Scan me to return to the original page.</p>
    </div>

    <button class="btn btn-primary" onclick="print()">print</button>

    <script>
        function print() {
            var divContents = document.getElementById("qrcode").innerHTML;
            var a = window.open('', '', 'height="100%", width="100%"');
            a.document.write(divContents);
            a.document.close();
            a.print();
        }
    </script>
@endsection
