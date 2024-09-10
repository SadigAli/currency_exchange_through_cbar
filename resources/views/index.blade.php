<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Currency Exchange</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="card-header">
                <h5 class="text-center">Currency Exchange</h5>
            </div>
            <div class="card-body">
                <div class="row align-items-center justify-content-end">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="date" id="date" value="{{ now()->format('Y-m-d') }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="text" id="search" placeholder="Search" class="form-control">
                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Valyuta</th>
                            <th>Kod</th>
                            <th>Kurs</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}" ></script>
</body>

</html>
