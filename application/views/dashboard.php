<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/bootstrap/4.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url() ?>assets/DataTables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url() ?>assets/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- JS -->
    <script src="<?=base_url() ?>assets/jquery/3.5.1/dist/jquery.min.js"></script>
    <script src="<?=base_url() ?>assets/bootstrap/4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url() ?>assets/DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url() ?>assets/DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <title>Hello, world!</title>
    <style>
        *{
            font-size: 14px;
        }
        body {
            padding-bottom: 30px;
            position: relative;
            min-height: 100%;
        }

        a {
            transition: background 0.2s, color 0.2s;
        }

        a:hover,
        a:focus {
            text-decoration: none;
        }

        #wrapper {
            padding-left: 0;
            transition: all 0.5s ease;
            position: relative;
        }

        #sidebar-wrapper {
            z-index: 1000;
            position: fixed;
            left: 250px;
            width: 0;
            height: 100%;
            margin-left: -250px;
            overflow-y: auto;
            overflow-x: hidden;
            background: #222;
            transition: all 0.5s ease;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }

        .sidebar-brand {
            position: absolute;
            top: 0;
            width: 250px;
            text-align: center;
            padding: 20px 0;
        }

        .sidebar-brand h2 {
            margin: 0;
            font-weight: 600;
            font-size: 24px;
            color: #fff;
        }

        .sidebar-nav {
            position: absolute;
            top: 75px;
            width: 250px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .sidebar-nav>li {
            text-indent: 10px;
            line-height: 42px;
        }

        .sidebar-nav>li a {
            display: block;
            text-decoration: none;
            color: #757575;
            font-weight: 600;
            font-size: 14px;
        }

        .sidebar-nav>li>a:hover,
        .sidebar-nav>li.active>a {
            text-decoration: none;
            color: #fff;
            background: #F8BE12;
        }

        .sidebar-nav>li>a i.fa {
            font-size: 16px;
            width: 35px;
        }

        #navbar-wrapper {
            width: 100%;
            position: absolute;
            z-index: 2;
        }

        #wrapper.toggled #navbar-wrapper {
            position: absolute;
            margin-right: -250px;
        }

        #navbar-wrapper .navbar {
            border-width: 0 0 0 0;
            background-color: #eee;
            font-size: 24px;
            margin-bottom: 0;
            border-radius: 0;
        }

        #navbar-wrapper .navbar a {
            color: #757575;
        }

        #navbar-wrapper .navbar a:hover {
            color: #F8BE12;
        }

        #content-wrapper {
            width: 100%;
            position: absolute;
            padding: 15px;
            top: 100px;
        }

        #wrapper.toggled #content-wrapper {
            position: absolute;
            margin-right: -250px;
        }

        @media (min-width: 992px) {
            #wrapper {
                padding-left: 250px;
            }

            #wrapper.toggled {
                padding-left: 60px;
            }

            #sidebar-wrapper {
                width: 250px;
            }

            #wrapper.toggled #sidebar-wrapper {
                width: 60px;
            }

            #wrapper.toggled #navbar-wrapper {
                position: absolute;
                margin-right: -190px;
            }

            #wrapper.toggled #content-wrapper {
                position: absolute;
                margin-right: -190px;
            }

            #navbar-wrapper {
                position: relative;
            }

            #wrapper.toggled {
                padding-left: 60px;
            }

            #content-wrapper {
                position: relative;
                top: 0;
            }

            #wrapper.toggled #navbar-wrapper,
            #wrapper.toggled #content-wrapper {
                position: relative;
                margin-right: 60px;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #wrapper {
                padding-left: 60px;
            }

            #sidebar-wrapper {
                width: 60px;
            }

            #wrapper.toggled #navbar-wrapper {
                position: absolute;
                margin-right: -250px;
            }

            #wrapper.toggled #content-wrapper {
                position: absolute;
                margin-right: -250px;
            }

            #navbar-wrapper {
                position: relative;
            }

            #wrapper.toggled {
                padding-left: 250px;
            }

            #content-wrapper {
                position: relative;
                top: 0;
            }

            #wrapper.toggled #navbar-wrapper,
            #wrapper.toggled #content-wrapper {
                position: relative;
                margin-right: 250px;
            }
        }

        @media (max-width: 767px) {
            #wrapper {
                padding-left: 0;
            }

            #sidebar-wrapper {
                width: 0;
            }

            #wrapper.toggled #sidebar-wrapper {
                width: 250px;
            }

            #wrapper.toggled #navbar-wrapper {
                position: absolute;
                margin-right: -250px;
            }

            #wrapper.toggled #content-wrapper {
                position: absolute;
                margin-right: -250px;
            }

            #navbar-wrapper {
                position: relative;
            }

            #wrapper.toggled {
                padding-left: 250px;
            }

            #content-wrapper {
                position: relative;
                top: 0;
            }

            #wrapper.toggled #navbar-wrapper,
            #wrapper.toggled #content-wrapper {
                position: relative;
                margin-right: 250px;
            }
        }

        .table tbody tr.selected td{
            background: #eee;
        }
    </style>
</head>

<body>
    <div id="wrapper">

        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <h2>Logo</h2>
            </div>
            <ul class="sidebar-nav">
                <li class="active">
                    <a href="<?=site_url('/vessel') ?>"><i class="fa fa-wrench"></i>Master Vessel List</a>
                </li>
                <li>
                    <a href="<?=site_url('/vessel/report') ?>"><i class="fa fa-file-text"></i>Report</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </aside>

        <div id="navbar-wrapper">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </nav>
        </div>

        <section id="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <?php $this->load->view($content_view); ?>
                </div>
            </div>
        </section>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript">
        const $button = document.querySelector('#sidebar-toggle');
        const $wrapper = document.querySelector('#wrapper');

        $(document).ready(function () {
            $button.addEventListener('click', (e) => {
                e.preventDefault();
                $wrapper.classList.toggle('toggled');
            });
        });
    </script>
     <!-- MODULES JS -->
     <?php if (!empty($js_files)) : foreach ($js_files as $key => $js) : ?>
        <script type="text/javascript" src="<?php echo $js ?>"></script>
     <?php endforeach; endif; ?>
</body>

</html>