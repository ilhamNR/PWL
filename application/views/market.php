<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Crypbox Market View</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("/assets/css/product.css") ?>" rel="stylesheet">
</head>

<body>

    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#" aria-label="Product">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24">
                    <title>Product</title>
                    <circle cx="12" cy="12" r="10" />
                    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
                </svg>
            </a>
            <a class="py-2 d-none d-md-inline-block" href="#">Market</a>
            <a class="py-2 d-none d-md-inline-block" href="#">News</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Trade</a>
            <a class="py-2 d-none d-md-inline-block" href="#">About</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Register</a>
        </nav>
    </header>

    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="card w-auto p-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Market</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pair</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $row = 1;
                            foreach ($dataMu as $dat) {

                                echo "<tr>";
                                echo "<th scope='row'>" . $row . "</th>";
                                echo "<td>" . $dat['pair'] . "</td>";
                                echo "<td>" . $dat['price'] . "</td>";
                                echo "<td>" . $dat['status'] . "</td>";
                                echo "<td>
                                <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editData'>Edit</button>
                                            <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#deleteData'>Delete</button>
                                    </td>";
                                echo "
                                    <div class='modal fade' id='deleteData' tabindex='-1' role='dialog' aria-labelledby='deleteDataLabel' aria-hidden='true'>
                                        <div class='modal-dialog' role='document'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='deleteDataLabel'>Delete Data</h5>
                                                    <button type='button' class='close' data-bs-dismiss='modal' aria-label='Close'>
                                                        <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                <h3>Are you sure want delete this data?</h3>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                                    <button type='button' class='btn btn-danger'>Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                    echo"
                                    <!-- Modal -->
                                    <div class='modal fade' id='editData' tabindex='-1' role='dialog' aria-labelledby='editDataLabel' aria-hidden='true'>
                                        <div class='modal-dialog' role='document'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='editDataLabel'>Edit New Data</h5>
                                                    <button type='button' class='close' data-bs-dismiss='modal' aria-label='Close'>
                                                        <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    <form style='text-align:left ;'>
                                                        <div class='form-group'>
                                                            <label for='pair'>Pair</label>
                                                            <input type='text' class='form-control' id='pair' placeholder='Crypto Pairs' readonly>
                                                        </div>
                                                        <div class='form-group'>
                                                            <label for='price'>Price</label>
                                                            <input type='number' class='form-control' id='price' placeholder='Price'>
                                                        </div>
                                                        <div class='form-group'>
                                                            <label for='status'>Status</label>
                                                            <input type='text' class='form-control' id='status' placeholder='Price Status'>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                                    <button type='button' class='btn btn-primary'>Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                echo "</tr>";
                                $row++;
                            }
                            ?>
                        </tbody>
                    </table>

                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addData">Add New Data</button>
                    <!-- Modal -->
                    <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addDataLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addDataLabel">Add New Data</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form style="text-align:left ;">
                                        <div class="form-group">
                                            <label for="pair">Pair</label>
                                            <input type="text" class="form-control" id="pair" placeholder="Crypto Pairs">
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="number" class="form-control" id="price" placeholder="Price">
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input type="text" class="form-control" id="status" placeholder="Price Status">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24">
                        <title>Product</title>
                        <circle cx="12" cy="12" r="10" />
                        <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
                    </svg>
                    <small class="d-block mb-3 text-muted">&copy; 2017???2021</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Cool stuff</a></li>
                        <li><a class="link-secondary" href="#">Random feature</a></li>
                        <li><a class="link-secondary" href="#">Team feature</a></li>
                        <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                        <li><a class="link-secondary" href="#">Another one</a></li>
                        <li><a class="link-secondary" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Resource name</a></li>
                        <li><a class="link-secondary" href="#">Resource</a></li>
                        <li><a class="link-secondary" href="#">Another resource</a></li>
                        <li><a class="link-secondary" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Business</a></li>
                        <li><a class="link-secondary" href="#">Education</a></li>
                        <li><a class="link-secondary" href="#">Government</a></li>
                        <li><a class="link-secondary" href="#">Gaming</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Team</a></li>
                        <li><a class="link-secondary" href="#">Locations</a></li>
                        <li><a class="link-secondary" href="#">Privacy</a></li>
                        <li><a class="link-secondary" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>