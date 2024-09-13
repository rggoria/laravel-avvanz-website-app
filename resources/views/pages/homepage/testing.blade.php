<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Bootstrap Website</title>
    <!-- Bootstrap CSS from CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS (Optional) -->
    <style>
        body {
            padding-top: 56px; /* Adjust for fixed navbar */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <a class="navbar-brand" href="#">MySite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark bg-ji">
        <div class="container">
            <a class="navbar-brand d-none d-lg-block" href="mailto:consult@avvanz.com">
                <i class="fas fa-envelope text-marigold"></i>
                consult@avvanz.com
            </a>
            <div class="navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link login-1 text-uppercase fw-bolder" href="https://www.avvanz.com/screenglobal/">ScreenGlobal LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-2 text-uppercase fw-bolder" href="https://www.avvanz.com/cddglobal/">CDDGLOBAL LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-3 text-uppercase fw-bolder" href="https://learnglobal.apptitude.xyz/">LEARNGLOBAL LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1 class="mt-5">Welcome to My Simple Bootstrap Website</h1>
                <p>This is a simple example using Bootstrap and a CDN to ensure fast loading times.</p>
                <p>Feel free to customize it to your needs.</p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper (including jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Option 2: Bootstrap Bundle without jQuery (if not using jQuery) -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
