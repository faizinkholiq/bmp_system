<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/bootstrap/4.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url() ?>assets/DataTables/DataTables-1.10.21/css/dataTables.bootstrap.min.css">

    <title>Hello, world!</title>
    <style>
        .my-navbar {
            width: 100%;
            position: fixed;
            z-index: 1001;
        }

        #sidebar-container {
            min-width: 245px;
            background-color: white;
            padding: 0;
            border: 2px solid #ddd;
            position: fixed;
            z-index: 1000;
            height: 100vh;
        }

        .sidebar-separator-title {
            background-color: #ddd;
            height: 25px;
            font-size: 16px;
        }

        .list-group-item.no-border {
            border: none !important;
        }

        .logo-separator {
            background-color: #ddd;
            height: 60px;
        }

        .list-group-item:first-child {
            border-radius: 0 !important;
            border: none !important;
        }
    </style>
</head>

<body>
    <div class="my-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <div class="container-fluid" style="position: relative;">
        <div class="row" style="min-height: 96.5vh;">
            <!-- Start Sidebar -->
            <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
                <ul class="list-group">
                    <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center">
                        <small>Unit Kerja</small>
                    </li>
                    <li class="list-group-item no-border">
                        <div id="using_json_2"></div>
                    </li>
                </ul>
            </div>
            <!-- End Sidebar -->

            <!-- MAIN -->
            <div id="main-container" class="col">
                <div class="row">
                    <div class="col" style="margin: 5px;">
                        <h2 class='mb-3'>Basic example</h2>
                        <table id="dtBasicExample" class="table" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">Name
                                    </th>
                                    <th class="th-sm">Position
                                    </th>
                                    <th class="th-sm">Office
                                    </th>
                                    <th class="th-sm">Age
                                    </th>
                                    <th class="th-sm">Start date
                                    </th>
                                    <th class="th-sm">Salary
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name
                                    </th>
                                    <th>Position
                                    </th>
                                    <th>Office
                                    </th>
                                    <th>Age
                                    </th>
                                    <th>Start date
                                    </th>
                                    <th>Salary
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- MAIN -->
        </div>
        <div class="row">
            <!-- FOOTER -->
            <footer class="sticky-footer">
                <div class="footer-content">
                    <small>&copy; Copyright <a href="#!">NNF Production</a></small>
                </div>
            </footer>
            <!-- END FOOTER -->
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url() ?>assets/jquery/3.5.1/dist/jquery.slim.min.js"></script>
    <script src="<?=base_url() ?>assets/bootstrap/4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url() ?>assets/DataTables/DataTables-1.10.21/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
</body>

</html>