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
      <div class="w-full flex items-center gap-4">
        <div class="w-[20%]">
          <h1 class="text-2xl select-none">Z A L O P E D I A</h1>
        </div>

        <div class="w-[60%]">
          <div class="w-full flex items-center gap-1 rounded-full border border-gray-400 px-3 py-2">
            <input type="text" class="w-full ring-0 outline-none"
              placeholder="Cari produk, tren, dan merek.">
            <div
              class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-gray-800 text-white">
              <i class="bi bi-search"></i>
            </div>
          </div>
        </div>

        <div class="w-[20%] flex items-center justify-end gap-4">
          <div class="font-semibold"><a href="app/views/auth/login.php">Masuk</a> / <a
              href="app/views/auth/register.php">Daftar</a></div>
          <div><i class="bi bi-heart"></i></div>
          <div><i class="bi bi-cart"></i></div>
        </div>
      </div>

      <div class="w-full flex items-center gap-8 uppercase">
        <div class="font-semibold">Produk</div>
        <div class="font-semibold">Tren</div>
        <div class="font-semibold">Merek</div>
      </div>
    </div>

    <div class="w-full h-full bg-gray-100 p-5 lg:px-24 lg:pt-6 lg:pb-12 flex flex-col gap-8">
      <div class="w-full h-max flex flex-col rounded-md bg-white">
        <div class="w-full p-4">
          <span class="uppercase">Kategori</span>
        </div>
        <div
          class="w-full grid grid-cols-2 lg:grid-cols-10 gap-px bg-gray-200 border border-gray-200 text-center">
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Elektronik</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Komputer & Aksesoris</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Handphone & Aksesoris</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Pakaian Pria</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Sepatu Pria</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Tas Pria</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Aksesoris Fashion</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Jam Tangan</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Kesehatan</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Hobi & Koleksi</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Makanan & Minuman</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Perawatan & Kecantikan</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Pakaian Wanita</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Perlengkapan Rumah</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Fashion Muslim</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Fashion Bayi & Anak</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Sepatu Wanita</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Tas Wanita</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Otomotif</div>
          </div>
          <div
            class="flex flex-col gap-3 items-center justify-center bg-white p-4 transition-transform duration-200 hover:scale-105 hover:outline hover:outline-1 hover:outline-gray-200 cursor-pointer">
            <div
              class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-gray-100 text-white">
            </div>
            <div>Ibu & Bayi</div>
          </div>
        </div>

      </div>

      <div class="w-full h-max flex flex-col gap-4">
        <div class="w-full h-max flex flex-col rounded-md bg-white p-4 border-b border-orange-600 text-center">
          <h1 class="uppercase text-orange-600">Rekomendasi</h1>
        </div>

        <div class="w-full h-max grid grid-cols-1 lg:grid-cols-6 gap-4">
          <div
            class="w-full h-[300px] flex flex-col gap-2 bg-white shadow transition-transform duration-200 hover:shadow-none hover:scale-105 hover:outline hover:outline-1 hover:outline-orange-600 cursor-pointer">
            <div class="w-full h-[150px] bg-gray-100 shrink-0"></div>
            <div class="w-full flex flex-col gap-2 px-4 py-1">
              <span class="line-clamp-2 break-all">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Numquam, optio corrupti! Quaerat ad dolorem deserunt quo qui. Molestiae, fuga!
                Nulla nisi magni explicabo quae quam.</span>
              <div class="w-full h-[100px] flex flex-col gap-2">
                <div
                  class="w-full px-2 py-0.5 border border-orange-400 rounded-xs text-xs text-orange-600">
                  Termurah di
                  Zalopedia
                </div>
                <div class="w-full h-[20px]">
                  <div class="font-semibold text-orange-600"><span class="text-sm">Rp</span>198.00
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="w-full h-[300px] flex flex-col gap-2 bg-white shadow transition-transform duration-200 hover:shadow-none hover:scale-105 hover:outline hover:outline-1 hover:outline-orange-600 cursor-pointer">
            <div class="w-full h-[150px] bg-gray-100 shrink-0"></div>
            <div class="w-full flex flex-col gap-2 px-4 py-1">
              <span class="line-clamp-2 break-all">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Numquam, optio corrupti! Quaerat ad dolorem deserunt quo qui. Molestiae, fuga!
                Nulla nisi magni explicabo quae quam.</span>
              <div class="w-full h-[100px] flex flex-col gap-2">
                <div
                  class="w-full px-2 py-0.5 border border-orange-400 rounded-xs text-xs text-orange-600">
                  Termurah di
                  Zalopedia
                </div>
                <div class="w-full h-[20px]">
                  <div class="font-semibold text-orange-600"><span class="text-sm">Rp</span>198.00
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="w-full h-[300px] flex flex-col gap-2 bg-white shadow transition-transform duration-200 hover:shadow-none hover:scale-105 hover:outline hover:outline-1 hover:outline-orange-600 cursor-pointer">
            <div class="w-full h-[150px] bg-gray-100 shrink-0"></div>
            <div class="w-full flex flex-col gap-2 px-4 py-1">
              <span class="line-clamp-2 break-all">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Numquam, optio corrupti! Quaerat ad dolorem deserunt quo qui. Molestiae, fuga!
                Nulla nisi magni explicabo quae quam.</span>
              <div class="w-full h-[100px] flex flex-col gap-2">
                <div
                  class="w-full px-2 py-0.5 border border-orange-400 rounded-xs text-xs text-orange-600">
                  Termurah di
                  Zalopedia
                </div>
                <div class="w-full h-[20px]">
                  <div class="font-semibold text-orange-600"><span class="text-sm">Rp</span>198.00
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="w-full h-[300px] flex flex-col gap-2 bg-white shadow transition-transform duration-200 hover:shadow-none hover:scale-105 hover:outline hover:outline-1 hover:outline-orange-600 cursor-pointer">
            <div class="w-full h-[150px] bg-gray-100 shrink-0"></div>
            <div class="w-full flex flex-col gap-2 px-4 py-1">
              <span class="line-clamp-2 break-all">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Numquam, optio corrupti! Quaerat ad dolorem deserunt quo qui. Molestiae, fuga!
                Nulla nisi magni explicabo quae quam.</span>
              <div class="w-full h-[100px] flex flex-col gap-2">
                <div
                  class="w-full px-2 py-0.5 border border-orange-400 rounded-xs text-xs text-orange-600">
                  Termurah di
                  Zalopedia
                </div>
                <div class="w-full h-[20px]">
                  <div class="font-semibold text-orange-600"><span class="text-sm">Rp</span>198.00
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="w-full h-[300px] flex flex-col gap-2 bg-white shadow transition-transform duration-200 hover:shadow-none hover:scale-105 hover:outline hover:outline-1 hover:outline-orange-600 cursor-pointer">
            <div class="w-full h-[150px] bg-gray-100 shrink-0"></div>
            <div class="w-full flex flex-col gap-2 px-4 py-1">
              <span class="line-clamp-2 break-all">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Numquam, optio corrupti! Quaerat ad dolorem deserunt quo qui. Molestiae, fuga!
                Nulla nisi magni explicabo quae quam.</span>
              <div class="w-full h-[100px] flex flex-col gap-2">
                <div
                  class="w-full px-2 py-0.5 border border-orange-400 rounded-xs text-xs text-orange-600">
                  Termurah di
                  Zalopedia
                </div>
                <div class="w-full h-[20px]">
                  <div class="font-semibold text-orange-600"><span class="text-sm">Rp</span>198.00
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="w-full h-[300px] flex flex-col gap-2 bg-white shadow transition-transform duration-200 hover:shadow-none hover:scale-105 hover:outline hover:outline-1 hover:outline-orange-600 cursor-pointer">
            <div class="w-full h-[150px] bg-gray-100 shrink-0"></div>
            <div class="w-full flex flex-col gap-2 px-4 py-1">
              <span class="line-clamp-2 break-all">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Numquam, optio corrupti! Quaerat ad dolorem deserunt quo qui. Molestiae, fuga!
                Nulla nisi magni explicabo quae quam.</span>
              <div class="w-full h-[100px] flex flex-col gap-2">
                <div
                  class="w-full px-2 py-0.5 border border-orange-400 rounded-xs text-xs text-orange-600">
                  Termurah di
                  Zalopedia
                </div>
                <div class="w-full h-[20px]">
                  <div class="font-semibold text-orange-600"><span class="text-sm">Rp</span>198.00
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="w-full h-[300px] flex flex-col gap-2 bg-white shadow transition-transform duration-200 hover:shadow-none hover:scale-105 hover:outline hover:outline-1 hover:outline-orange-600 cursor-pointer">
            <div class="w-full h-[150px] bg-gray-100 shrink-0"></div>
            <div class="w-full flex flex-col gap-2 px-4 py-1">
              <span class="line-clamp-2 break-all">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Numquam, optio corrupti! Quaerat ad dolorem deserunt quo qui. Molestiae, fuga!
                Nulla nisi magni explicabo quae quam.</span>
              <div class="w-full h-[100px] flex flex-col gap-2">
                <div
                  class="w-full px-2 py-0.5 border border-orange-400 rounded-xs text-xs text-orange-600">
                  Termurah di
                  Zalopedia
                </div>
                <div class="w-full h-[20px]">
                  <div class="font-semibold text-orange-600"><span class="text-sm">Rp</span>198.00
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="w-full h-[300px] flex flex-col gap-2 bg-white shadow transition-transform duration-200 hover:shadow-none hover:scale-105 hover:outline hover:outline-1 hover:outline-orange-600 cursor-pointer">
            <div class="w-full h-[150px] bg-gray-100 shrink-0"></div>
            <div class="w-full flex flex-col gap-2 px-4 py-1">
              <span class="line-clamp-2 break-all">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Numquam, optio corrupti! Quaerat ad dolorem deserunt quo qui. Molestiae, fuga!
                Nulla nisi magni explicabo quae quam.</span>
              <div class="w-full h-[100px] flex flex-col gap-2">
                <div
                  class="w-full px-2 py-0.5 border border-orange-400 rounded-xs text-xs text-orange-600">
                  Termurah di
                  Zalopedia
                </div>
                <div class="w-full h-[20px]">
                  <div class="font-semibold text-orange-600"><span class="text-sm">Rp</span>198.00
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="w-full h-[300px] flex flex-col gap-2 bg-white shadow transition-transform duration-200 hover:shadow-none hover:scale-105 hover:outline hover:outline-1 hover:outline-orange-600 cursor-pointer">
            <div class="w-full h-[150px] bg-gray-100 shrink-0"></div>
            <div class="w-full flex flex-col gap-2 px-4 py-1">
              <span class="line-clamp-2 break-all">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Numquam, optio corrupti! Quaerat ad dolorem deserunt quo qui. Molestiae, fuga!
                Nulla nisi magni explicabo quae quam.</span>
              <div class="w-full h-[100px] flex flex-col gap-2">
                <div
                  class="w-full px-2 py-0.5 border border-orange-400 rounded-xs text-xs text-orange-600">
                  Termurah di
                  Zalopedia
                </div>
                <div class="w-full h-[20px]">
                  <div class="font-semibold text-orange-600"><span class="text-sm">Rp</span>198.00
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <button
          class="w-max px-3 py-2 my-4 mx-auto rounded-md shadow bg-white hover:bg-gray-100 active:transition-transform active:duration-200 active:scale-95 cursor-pointer">
          Login untuk melihat lebih banyak
        </button>
      </div>
    </div>

    <div class="w-full h-max flex flex-col">
      <div class="w-full h-max flex items-start gap-4 p-5 lg:px-24 lg:py-12 border-y border-gray-200">
        <div class="w-full flex items-center justify-between gap-4">
          <div class="w-full flex flex-col gap-2">
            <span class="text-xl font-bold">Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
          </div>

          <div class="w-full flex flex-col gap-2">
            <span class="text-xl font-bold">Beli</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
          </div>

          <div class="w-full flex flex-col gap-2">
            <span class="text-xl font-bold">Keamanan & Privasi</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
            <span class="text-sm text-gray-500">Tentang Zalopedia</span>
          </div>
        </div>
        <div class="w-[40%] shrink-0 flex flex-col gap-4">
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