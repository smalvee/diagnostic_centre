<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Sidebars · Bootstrap v5.0</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

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
    <link href="css/sidebars.css" rel="stylesheet">
</head>

<body>



    <main>


        <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                <svg class="bi me-2" width="30" height="24">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-5 fw-semibold">APP Name</span>
            </a>
            <ul class="list-unstyled ps-0">
                
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Account Section
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">View Transaction</a></li>
                            <li><a href="#" class="link-dark rounded">Payment Receive List</a></li>
                            <li><a href="#" class="link-dark rounded">Expense Summery</a></li>
                            <li><a href="#" class="link-dark rounded">Discount Summery</a></li>
                            <li><a href="#" class="link-dark rounded">Doctor Wise Test Category Income</a></li>
                            <li><a href="#" class="link-dark rounded">Daily Test Category Wise Report</a></li>
                            <li><a href="#" class="link-dark rounded">Daily Test report (Doctor Wise)</a></li>
                            <li><a href="#" class="link-dark rounded">Patient List / Search Patient</a></li>
                            <li><a href="#" class="link-dark rounded">Patient Summery</a></li>
                            <li><a href="#" class="link-dark rounded">Search Patient</a></li>
                            <li><a href="#" class="link-dark rounded">Doctor Referral Payment</a></li>
                            <li><a href="#" class="link-dark rounded">Add Income / Expense</a></li>
                            <li><a href="#" class="link-dark rounded">Expense Entry</a></li>
                            <li><a href="#" class="link-dark rounded">Financial Statement</a></li>
                            <li><a href="#" class="link-dark rounded">Collection History</a></li>
                            <li><a href="#" class="link-dark rounded">Daily Referral Paid Summery</a></li>
                            <li><a href="#" class="link-dark rounded">Daily Referral Due Summery</a></li>


                        </ul>
                    </div>
                </li>                  
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                        Account
                    </button>
                    <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">Profile</a></li>
                            <li>
                                <a class="link-dark rounded">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button style="background: transparent; border: transparent;">Sign out</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="b-divider"></div>

        <!-- Admin page content Start -->
        <div>
            <h1>This is Accountant Page</h1>
        </div>










    </main>


    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/sidebars.js"></script>
</body>

</html>