<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bakso Mang Upi</a>
            <div class="navbar-nav">
                <a class="nav-link" href="home" target="blank">Home</a>
                <a class="nav-link" href="menu">Menu</a>
            </div>
            <div class="dropdown ms-auto">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Options
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">About Us</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text">Bakso Malang Upi!</h1>

    <div class="menu-container">
        <div class="menu-cards">
            <!-- Card 1 -->
            <div class="menu-card">
                <div class="menu-image">
                    <img src="img/menu.jpg" alt="Bakso Anomali">
                </div>
                <div class="menu-content">
                    <div class="menu-title">Bakso Anomali</div>
                    <div class="menu-description">
                        Bakso anomali adalah bakso yang memiliki karakteristik unik dan berbeda dari bakso pada umumnya, seperti bentuk, ukuran, isian, rasa, atau warna yang tidak lazim.
                    </div>
                    <div class="menu-price">10.000</div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="menu-card">
                <div class="menu-image">
                    <img src="img/menu.jpg" alt="Bakso Abnormal">
                </div>
                <div class="menu-content">
                    <div class="menu-title">Bakso Abnormal</div>
                    <div class="menu-description">
                        Bakso Abnormal adalah bakso dengan variasi unik dan kreatif, seperti ukuran jumbo, isian tidak biasa (keju, sambal, atau telur), serta penyajian yang berbeda dari bakso pada umumnya.
                    </div>
                    <div class="menu-price">20.000</div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="menu-card">
                <div class="menu-image">
                    <img src="img/menu.jpg" alt="Bakso Baksoan">
                </div>
                <div class="menu-content">
                    <div class="menu-title">Bakso Baksoan</div>
                    <div class="menu-description">
                        Bakso-baksoan adalah istilah untuk makanan yang menyerupai bakso, tetapi bukan bakso asli. Biasanya dibuat dari bahan alternatif seperti tepung, sayuran, atau olahan lain yang tidak menggunakan daging sebagai bahan utama.
                    </div>
                    <div class="menu-price">30.000</div>
                </div>
            </div>
        </div>
        <button class="order-button">Pesan Sekarang</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>