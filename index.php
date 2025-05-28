<?php
session_start();

require_once './app/models/Kategori.php';
require_once './app/models/Produk.php';

$kategoriModel = new Kategori();
$categories = $kategoriModel->getAll();
$topCategories = array_slice($categories, 0, 3);

$produkModel = new Produk();
$searchQuery = isset($_GET['search']) ? trim($_GET['search']) : '';

if (!empty($searchQuery)) {
  $products = $produkModel->search($searchQuery);
} else {
  $products = $produkModel->getAll();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zalopedia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="w-full h-full">
        <div
            class="w-full h-max flex flex-col gap-4 p-5 lg:px-24 lg:pt-6 lg:pb-4 sticky top-0 bg-white border-b border-gray-200 z-50">
            <div class="w-full flex flex-wrap items-center justify-between gap-4">
                <div class="flex-1 min-w-[150px]">
                    <h1 class="text-xl sm:text-2xl select-none">Z A L O P E D I A</h1>
                </div>

                <div class="flex-[2] w-full sm:w-auto">
                    <form action="" method="get"
                        class="w-full flex items-center gap-1 rounded-full border border-gray-400 px-3 py-2">
                        <input type="text" name="search" id="searchInput" class="w-full ring-0 outline-none text-sm"
                            placeholder="Cari produks"
                            value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>"
                            oninput="toggleSearchButton()">
                        <button type="button" id="clearBtn"
                            class="w-[30px] h-[30px] hidden items-center justify-center rounded-full bg-gray-800 text-white cursor-pointer shrink-0"
                            onclick="clearSearch()">
                            <i class="bi bi-x"></i>
                        </button>
                        <button type="submit" id="searchBtn"
                            class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-gray-800 text-white cursor-pointer shrink-0">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>

                <div class="flex-1 flex items-center justify-end gap-3 min-w-[150px] text-sm">
                    <div class="hidden sm:block font-semibold">
                        <a href="app/views/auth/login.php">Masuk</a> /
                        <a href="app/views/auth/register.php">Daftar</a>
                    </div>
                    <div><i class="bi bi-heart text-xl"></i></div>
                    <div><i class="bi bi-cart text-xl"></i></div>
                </div>
            </div>

            <!-- Top categories (hidden in small screen) -->
            <div class="w-full hidden lg:flex items-center gap-6 uppercase">
                <?php foreach ($topCategories as $category): ?>
                <div class="font-semibold text-sm"><?= htmlspecialchars($category['name']) ?></div>
                <?php endforeach; ?>
            </div>
        </div>


        <div class="w-full h-full bg-gray-100 p-5 lg:px-24 lg:pt-6 lg:pb-12 flex flex-col gap-8">
            <div class="w-full h-max flex flex-col rounded-md bg-white">
                <div class="w-full p-4">
                    <span class="uppercase">Kategori</span>
                </div>
                <div
                    class="w-full grid grid-cols-2 lg:grid-cols-10 gap-px bg-gray-200 border border-gray-200 text-center">
                    <?php foreach ($categories as $category): ?>
                    <div
                        class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
                        <div class="w-[65px] h-[65px] flex items-center justify-center rounded-full bg-gray-100">
                            <?php if (isset($category['image'])) : ?>
                            <div class="w-[40px] h-[40px]">
                                <img src="<?= './' . $category['image'] ?>" class="w-full h-full object-cover"
                                    alt="<?= $category['name'] ?>">
                            </div>
                            <?php else: ?>
                            <i class="bi bi-laptop text-2xl"></i>
                            <?php endif; ?>
                        </div>
                        <div><?= $category['name'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>

            <div class="w-full h-max flex flex-col gap-4">
                <div class="w-full h-max flex flex-col rounded-md bg-white p-4 border-b border-orange-600 text-center">
                    <h1 class="uppercase text-orange-600">Rekomendasi</h1>
                </div>

                <div class="w-full h-max grid grid-cols-1 lg:grid-cols-6 gap-4">
                    <?php foreach ($products as $product): ?>
                    <div
                        class="w-full h-[300px] flex flex-col gap-2 bg-white shadow transition-transform duration-200 hover:shadow-none hover:scale-105 hover:outline hover:outline-1 hover:outline-orange-600 cursor-pointer">
                        <div class="w-full h-[150px] bg-gray-100 shrink-0 flex items-center justify-center">
                            <?php if (!empty($product['image'])): ?>
                            <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['title']) ?>"
                                class="w-full h-full object-cover" />
                            <?php else: ?>
                            <i class="bi bi-image text-3xl"></i>
                            <?php endif; ?>
                        </div>
                        <div class="w-full flex flex-col gap-2 px-4 py-1">
                            <span class="line-clamp-2 break-all"><?= htmlspecialchars($product['title']) ?></span>
                            <div class="w-full h-[100px] flex flex-col gap-2">
                                <div
                                    class="w-full px-2 py-0.5 border border-orange-400 rounded-xs text-xs text-orange-600">
                                    Termurah di Zalopedia
                                </div>
                                <div class="w-full h-[20px]">
                                    <div class="font-semibold text-orange-600">
                                        <span
                                            class="text-sm">Rp</span><?= number_format($product['totalPrice'], 0, ',', '.') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <a href="<?= !empty($_SESSION['user']['id_user']) ? '' : 'app/views/auth/login.php';  ?>"
                    class="w-max px-3 py-2 my-4 mx-auto rounded-md shadow bg-white hover:bg-gray-100 active:transition-transform active:duration-200 active:scale-95 cursor-pointer">
                    <?= !empty($_SESSION['user']['id_user']) ? 'Lihat semua produk' : 'Masuk untuk melihat semua produk';  ?>
                </a>
            </div>
        </div>

        <div class="w-full h-max flex flex-col">
            <div
                class="w-full h-max flex flex-col lg:flex-row items-start gap-4 p-5 lg:px-24 lg:py-12 border-y border-gray-200">
                <div class="w-full flex items-start flex-col lg:flex-row lg:justify-between gap-4">
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-xl font-bold">Zalopedia</span>
                        <span class="text-sm text-gray-500">Tentang Zalopedia</span>
                        <span class="text-sm text-gray-500">Hak Kekayaan Intelektual</span>
                        <span class="text-sm text-gray-500">Karir</span>
                        <span class="text-sm text-gray-500">Blog</span>
                        <span class="text-sm text-gray-500">Zalopedia Affiliate Program</span>
                        <span class="text-sm text-gray-500">Zalopedia B2B Digital</span>
                        <span class="text-sm text-gray-500">Zalopedia Marketing Solutions</span>
                        <span class="text-sm text-gray-500">Kalkulator Indeks Masa Tumbuh</span>
                        <span class="text-sm text-gray-500">Zalopedia Farma</span>
                        <span class="text-sm text-gray-500">Promo Hari Ini</span>
                        <span class="text-sm text-gray-500">Beli Lokal</span>
                        <span class="text-sm text-gray-500">Promo Guncang</span>
                    </div>

                    <div class="w-full flex flex-col gap-4">
                        <div class="w-full flex flex-col gap-2">
                            <span class="text-xl font-bold">Beli</span>
                            <span class="text-sm text-gray-500">Tagihan & Top Up</span>
                            <span class="text-sm text-gray-500">Zalopedia COD</span>
                            <span class="text-sm text-gray-500">Bebas Ongkir</span>
                        </div>

                        <div class="w-full flex flex-col gap-2">
                            <span class="text-xl font-bold">Jual</span>
                            <span class="text-sm text-gray-500">Pusat Edukasi Seller</span>
                            <span class="text-sm text-gray-500">Daftar Mall</span>
                        </div>

                        <div class="w-full flex flex-col gap-2">
                            <span class="text-xl font-bold">Bantuan dan Panduan</span>
                            <span class="text-sm text-gray-500">Zalopedia Care</span>
                            <span class="text-sm text-gray-500">Syarat dan Ketentuan</span>
                            <span class="text-sm text-gray-500">Kebijakan Privasi</span>
                        </div>
                    </div>

                    <div class="w-full flex flex-col gap-4">
                        <div class="w-full flex flex-col gap-2">
                            <span class="text-xl font-bold">Keamanan & Privasi</span>
                            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
                        </div>

                        <div class="w-full flex flex-col gap-2">
                            <span class="text-xl font-bold">Ikuti Kami</span>
                            <div class="w-full flex items-center gap-3 text-gray-600">
                                <i class="bi bi-facebook text-2xl"></i>
                                <i class="bi bi-instagram text-2xl"></i>
                                <i class="bi bi-pinterest text-2xl"></i>
                                <i class="bi bi-twitter text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-[40%] lg:shrink-0 flex flex-col gap-4">
                    <div class="w-full flex text-sm flex-col gap-2">
                        <span class="!text-xl font-semibold">Nikmati keuntungan special di Zalopedia:</span>
                        <div class="w-full flex items-center gap-2">
                            <i class="bi bi-coin text-xl text-green-600"></i>
                            <span>Diskon 50% untuk pembelian pertama</span>
                        </div>
                        <div class="w-full flex items-center gap-2">
                            <i class="bi bi-coin text-xl text-green-600"></i>
                            <span>Diskon 50% untuk pembelian pertama</span>
                        </div>
                        <div class="w-full flex items-center gap-2">
                            <i class="bi bi-coin text-xl text-green-600"></i>
                            <span>Diskon 50% untuk pembelian pertama</span>
                        </div>
                    </div>

                    <div class="w-full flex flex-col gap-2">
                        <span class="text-sm text-gray-500">Buka aplikasi dengan scan QR atau klik tombol:</span>

                        <div class="w-full flex items-center gap-2">
                            <i class="bi bi-qr-code text-[144px] leading-none"></i>

                            <div class="w-full flex flex-col gap-2">
                                <img src="https://images.seeklogo.com/logo-png/37/2/app-store-google-play-logo-png_seeklogo-370449.png"
                                    width="150" alt="">
                            </div>
                        </div>

                        <a href="#" class="text-sm text-green-600">Pelajari selengkapnya &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="w-full h-max p-5 lg:px-24 lg:py-6">
                &copy 2025 Zalopedia All rights reserved
            </div>
        </div>
</body>

</html>

<script>
function toggleSearchButton() {
    const input = document.getElementById('searchInput')
    const searchBtn = document.getElementById('searchBtn')
    const clearBtn = document.getElementById('clearBtn')

    if (input.value.trim()) {
        searchBtn.classList.add('hidden')
        clearBtn.classList.remove('hidden')
        clearBtn.classList.add('flex')
    } else {
        clearBtn.classList.add('hidden')
        clearBtn.classList.remove('flex')
        searchBtn.classList.remove('hidden')
    }
}

function clearSearch() {
    const input = document.getElementById('searchInput')
    input.value = ''
    input.focus()
    toggleSearchButton()
}

window.addEventListener('DOMContentLoaded', () => {
    toggleSearchButton()
})
</script>