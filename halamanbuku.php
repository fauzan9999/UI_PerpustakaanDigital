<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="halamanbuku.css">

</head>

<body>
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Perpustal</h4>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" onclick="window.location.href=''">
                                Back
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" id="proTeamScroll" tabindex="2"
                            style="height: 400px; overflow: hidden; outline: none;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID BUKU</th>
                                        <th>JUDUL BUKU</th>
                                        <th>PENULIS</th>
                                        <th>PENERBIT</th>
                                        <th>STOK</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>5</td>
                                        <td>Laskar Pelangi</td>
                                        <td>Andrea Hirata</td>
                                        <td>Gramedia</td>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS v5.2.1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <!-- Font Awesome untuk ikon -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>