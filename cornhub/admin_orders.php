<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Corndog Haven</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Racing+Sans+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        html, body {
            display: flex;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
            background-color: #F5F5E9;
        }
        .content {
            background-color: #F4F3E6;
            flex-grow: 1;
            padding: 20px;
        }
        .container-fluid {
            display: flex;
            width: 100%;
        }

            /*Navigation*/
            .nav-link {
                color: #fff;
                transition: background-color 0.3s ease, color 0.3s ease;
            }
            .nav-link:hover {
                color: #FD4D02;
                text-decoration: none;
            }
            .nav-link.active {
                color: #FD4D02 !important;
                background-color: #F4F3E6 !important;
            }

            /*Sidebar*/
            .sidebar {
                width: 250px;
                background-color: #FD4D02;
                color: #F4F3E6;
                flex-shrink: 0;
            }
            .sidebar a {
                color: #F4F3E6;
                text-decoration: none;
            }
            .sidebar a:hover {
                background-color: #F4F3E6;
                transition: 0.5s;
            }

            /* For Logging Out */
            .logout-container {
                margin-top: auto;
                margin-bottom: 20px;
            }

            .logout-icon-container a {
                display: flex;
                justify-content: center;
            }
            
            .logout-btn {
                display: block;
                padding: 0;
                margin: 0 auto;
                transition: transform 0.2s ease;
            }

            .logout-btn:hover {
                transform: scale(1.1);
            }
            .logout-btn:hover {
                background-color: transparent !important;
                color: inherit !important;
                border: none !important;
                box-shadow: none !important;
            }
        
            /*Cards*/
            .card-body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
                height: 100%;
            }

            .card {
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .done-card {
                background-color: #75da83;
                color: #ffffff;
                border: none;
            }
            .pend-card {
                background-color: #dada75;
                color: #ffffff;
                border: none;
            }
            .ready-card {
                background-color: #daa875;
                color: #ffffff;
                border: none;
            }

            /*Buttons*/
            button.btn img {
                vertical-align: middle;
            }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column p-3">
        <img src="images/cornhub logo.png" alt="Bootstrap" width="140" height="85" style="align-self: center;">
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <h4 class="text-center"><b>Admin Panel</h4>
            <li class="nav-item"><a href="admin.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="admin_products.php" class="nav-link">Products</a></li>
            <li class="nav-item"><a href="admin_orders.php" class="nav-link active">Orders</a></li>
            <li class="nav-item"><a href="admin_reports.php" class="nav-link">Reports</a></li>
        </ul>          
        <hr>
        <div class="logout-container d-flex justify-content-center mt-auto mb-3">
            <li class="nav-item d-flex align-items-center">
                <a href="include/logout.php" onclick='return confirm("Are you sure you want to log out?");' class="logout-btn rounded-pill">Logout</a>
            </li>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <br><br><br>
        <h1>Status of Orders</h1>
        <p></p>
    
        <!--Status of Products-->
        <div class="card-container d-flex flex-row justify-content-center gap-3 p-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Orders</h5>
                    <h1 class="card-text">5</h1>
                </div>
            </div>
        
            <div class="card pend-card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Pending</h5>
                    <h1 class="card-text">2</h1>
                </div>
            </div>
        
            <div class="card ready-card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Ready to Deliver/Pick Up</h5>
                    <h1 class="card-text">1</h1>
                </div>
            </div>
        
            <div class="card done-card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Completed/Paid</h5>
                    <h1 class="card-text">2</h1>
                </div>
            </div>
        </div>        
            
        <!-- Products Section -->
        <div>
            <table class="table full-width-table table-bordered table-hover custom-table">
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Customer Orders-->
                    <tr>
                        <td>Tope</td>
                        <td>001</td>
                        <td>Corndog</td>
                        <td>5</td>
                        <td>₱100.00</td>
                        <td>
                            <!--Status Dropdown grrr-->
                            <select class="form-select status-dropdown" onchange="updateStatus(this)">
                                <option value="Confirm">Confirm</option>
                                <option value="Pending">Pending</option>
                                <option value="Ready">Ready</option>
                                <option value="Paid" selected>Paid</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Kenet</td>
                        <td>003</td>
                        <td>Fries</td>
                        <td>2</td>
                        <td>₱40.00</td>
                        <td>
                            <!--Status Dropdown grrr-->
                            <select class="form-select status-dropdown" onchange="updateStatus(this)">
                                <option value="Confirm">Confirm</option>
                                <option value="Pending">Pending</option>
                                <option value="Ready">Ready</option>
                                <option value="Paid" selected>Paid</option>
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>Melody</td>
                        <td>002</td>
                        <td>Nachos</td>
                        <td>1</td>
                        <td>₱25.00</td>
                        <td>
                            <!--Status Dropdown grrr-->
                            <select class="form-select status-dropdown" onchange="updateStatus(this)">
                                <option value="Confirm">Confirm</option>
                                <option value="Pending" selected>Pending</option>
                                <option value="Ready">Ready</option>
                                <option value="Paid">Paid</option>
                            </select>
                        </td>
                    </tr>                    
                    <tr>
                        <td>Jowan</td>
                        <td>003, 002</td>
                        <td>Fries, Nachos</td>
                        <td>1, 1</td>
                        <td>₱45.00</td>
                        <td>
                            <!--Status Dropdown grrr-->
                            <select class="form-select status-dropdown" onchange="updateStatus(this)">
                                <option value="Confirm">Confirm</option>
                                <option value="Pending" selected>Pending</option>
                                <option value="Ready">Ready</option>
                                <option value="Paid">Paid</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Rem</td>
                        <td>003, 001</td>
                        <td>Fries, Corndog</td>
                        <td>1, 4</td>
                        <td>₱100.00</td>
                        <td>
                            <!--Status Dropdown grrr-->
                            <select class="form-select status-dropdown" onchange="updateStatus(this)">
                                <option value="Confirm">Confirm</option>
                                <option value="Pending">Pending</option>
                                <option value="Ready" selected>Ready</option>
                                <option value="Paid">Paid</option>
                            </select>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
        </div>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        <!--For Logging Out-->
            <a href="logout.php" class="btn btn-danger w-100" onclick="return confirm('Are you sure you want to log out?')">Logout</a>
    </script>
</body>
</html>
