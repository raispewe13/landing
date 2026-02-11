<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        /* RESET */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Segoe UI", sans-serif;
}

/* FULL PAGE */
body {
  background: url("bg-toko-baju.jpg") center/cover no-repeat;
  min-height: 100vh;
}

.full {
  width: 100%;
  min-height: 100vh;
  background: rgba(0, 0, 0, 0.45);
}

/* BAGIAN ATAS */
.atas {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 18px 60px;
  color: #fff;
}

.atas h3 {
  font-size: 22px;
  font-weight: 600;
}

/* TOMBOL NAV */
.tombol button {
  margin-right: 10px;
  padding: 8px 18px;
  background: transparent;
  border: none;
  color: #fff;
  font-size: 14px;
  cursor: pointer;
}

.tombol button:hover {
  text-decoration: underline;
}

/* TOMBOL MASUK / DAFTAR */
.masuk button {
  margin-left: 8px;
  padding: 8px 20px;
  border-radius: 20px;
  border: none;
  font-size: 14px;
  cursor: pointer;
}

.masuk button:first-child {
  background: transparent;
  color: #fff;
  border: 1px solid #fff;
}

.masuk button:last-child {
  background: #ff6f00;
  color: #fff;
}

/* BAGIAN TENGAH (HERO) */
.tengah {
  margin-top: 80px;
  text-align: center;
  color: #fff;
}

.tengah h2 {
  font-size: 36px;
  margin-bottom: 20px;
}

/* INPUT SEARCH */
.tengah input {
  width: 520px;           /* sedikit lebih kecil dari referensi */
  padding: 14px 20px;
  border-radius: 30px;
  border: none;
  font-size: 15px;
  outline: none;
}

/* KATEGORI BUTTON */
.tengah div {
  margin-top: 30px;
}

.tengah div button {
  margin: 8px;
  padding: 14px 18px;
  border-radius: 14px;
  border: none;
  background: #ffffff;
  font-size: 13px;
  cursor: pointer;
  transition: 0.3s ease;
}

.tengah div button:hover {
  transform: scale(1.08);
  background: #ff6f00;
  color: #fff;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
  background: #f5f5f5;
}

/* BAGIAN TENGAH */
.tengah {
  text-align: center;
  margin-top: 80px;
}

.tengah h2 {
  font-size: 32px;
  margin-bottom: 20px;
}

.tengah input {
  width: 520px;
  padding: 14px 20px;
  border-radius: 30px;
  border: 1px solid #ccc;
  font-size: 14px;
  outline: none;
}

/* KATEGORI */
.kategori {
  margin-top: 35px;
  display: flex;
  justify-content: center;
  gap: 20px;
}

/* BUTTON GAMBAR */
.btn-kategori {
  width: 110px;
  height: 130px;
  background: white;
  border: none;
  border-radius: 16px;
  cursor: pointer;

  display: flex;
  flex-direction: column;     /* gambar atas, teks bawah */
  align-items: center;
  justify-content: center;

  transition: 0.3s ease;
}

.btn-kategori img {
  width: 50px;
  height: 50px;
  object-fit: contain;
  margin-bottom: 8px;
}

.btn-kategori span {
  font-size: 13px;
  font-weight: 500;
  color: #333;
}

/* HOVER EFFECT */
.btn-kategori:hover {
  transform: scale(1.08);
  background: #ff6f00;
}

.btn-kategori:hover span {
  color: white;
}


    </style>
</head>
<body>
    <div class="full">
        <div class="atas">
            <h3>My Fit</h3>
            <div class="tombol">
                <button type="button">rewards</button>
                <button type="button">cek pesanan</button>
                <button type="button"></button>
            </div>
            <div class="masuk">
                <button type="button">sign in</button>
                <button type="button">sign up</button>
            </div>
        </div>
        <div class="tengah">
            <h2></h2>
            <input type="text">
            <div class="kategori">
                <button class="btn-kategori">
                    <img src="img/kaos.png" alt="Kaos">
                    <span>Kaos</span>
                </button>
                <button class="btn-kategori">
                    <img src="img/jaket.png" alt="Jaket">
                    <span>Jaket</span>
                </button>
                <button class="btn-kategori">
                    <img src="img/celana.png" alt="Celana">
                    <span>Celana</span>
                </button>
                <button class="btn-kategori">
                    <img src="img/sepatu.png" alt="Sepatu">
                    <span>Sepatu</span>
                </button>
        </div>
        <div class="bawah">

        </div>
    </div>
</body>
</html>