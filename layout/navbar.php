<?php
// Dapatkan nama file saat ini dari URL
$current_page = basename($_SERVER['PHP_SELF']);
?>

<style>
    /* Style untuk form yang awalnya tersembunyi */
    #inputForm {
        display: none;
        margin-top: 20px;
    }

    /* Style untuk tombol anchor */
    #showSearch {
        cursor: pointer;
    }
</style>


<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">
                        <h2 style="color: chocolate;">KonserTix</h2>
                    </a> <!-- Logo -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="bar-icon"></span>
                        <span class="bar-icon"></span>
                        <span class="bar-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav ml-auto">
                            <li class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                                <a data-scroll-nav="0" href="index.php">Beranda</a>
                            </li>
                            <li class="nav-item <?php echo ($current_page == 'tiketAll.php') ? 'active' : ''; ?>">
                                <a data-scroll-nav="0" href="tiketAll.php">Tiket</a>
                            </li>
                            <?php if (isset($_SESSION['status'])) : ?>
                                <?php if ($_SESSION['role'] == 'admin') : ?>
                                    <li class="nav-item <?php echo ($current_page == 'laporanPembelian.php') ? 'active' : ''; ?>">
                                        <a data-scroll-nav="0" href="laporanPembelian.php">Laporan Pembelian</a>
                                    </li>
                                <?php elseif ($_SESSION['role'] == 'user') : ?>
                                    <li class="nav-item <?php echo ($current_page == 'riwayatPembelian.php') ? 'active' : ''; ?>">
                                        <a data-scroll-nav="0" href="riwayatPembelian.php">Riwayat Pemesanan</a>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                            <li class="nav-item <?php echo ($current_page == '#search') ? 'active' : ''; ?>">
                                <a data-scroll-nav="0" id="showSearch">Search</a>
                            </li>
                            <?php if (isset($_SESSION['status'])) : ?>
                                <li class="nav-item <?php echo ($current_page == 'account.php') ? 'active' : ''; ?>">
                                    <a data-scroll-nav="0" href="account.php">Hi, <?= $_SESSION['username']; ?></a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item <?php echo ($current_page == 'login.php') ? 'active' : ''; ?>">
                                    <a data-scroll-nav="0" href="login.php">Login</a>
                                </li>
                            <?php endif; ?>
                        </ul> <!-- navbar nav -->
                    </div>
                </nav> <!-- navbar -->
            </div>
            <div id="inputForm" class="mx-auto col-12">
                <form action="tiketAll.php" method="get">
                    <div class="form-group">
                        <input class="form-control" type="text" name="search" placeholder="Cari Tiket...">
                    </div>
                </form>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</header>


<script>
    // Fungsi untuk menampilkan atau menyembunyikan form input
    function toggleInputForm() {
        var inputForm = document.getElementById('inputForm');
        inputForm.style.display = (inputForm.style.display === 'none' || inputForm.style.display === '') ? 'block' : 'none';
    }

    // Menambahkan event listener pada tombol anchor
    document.getElementById('showSearch').addEventListener('click', toggleInputForm);
</script>