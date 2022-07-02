@extends('dashboard.main')
@section('content')
    <h2>SCAN DILAKUKAN OLEH PIHAK GURU</h2>
    <div id="reader" width="600px" style="width: 100% !important "></div>
@endsection
@push('qrjs')
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
            console.log(`Code matched = ${decodedText}`, decodedResult);

            let id = decodedText;
            let csrf_token = $('meta[name="csrf-token"]').attr('content');


            Swal.fire({
                title: 'scanning......',
                text: 'berhasil',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'absen'
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url: "{{ url('/edit/absen') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "id": id
                        },
                        success: function(response) {
                            if (response.status == "berhasil") {
                                Swal.fire({
                                    icon: 'success',
                                    type: 'success',
                                    title: 'Berhasil absen',
                                    text: response.pesan,
                                })
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal absen',
                                    text: response.pesan,
                                })
                            }
                        }
                    });
                }
            });
        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 500,
                    height: 500
                }
            },
            /* verbose= */
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
@endpush
