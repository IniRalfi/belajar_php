<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pustaka Tugas PBO</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
      crossorigin="anonymous"
    />
    <style>
      body {
        min-height: 100vh;
        background: linear-gradient(135deg, #f8fafc 0%, #e0c3fc 100%);
        overflow: hidden;
        position: relative;
      }
      .moving-bg {
        position: absolute;
        border-radius: 50%;
        opacity: 0.4;
        z-index: 0;
        animation-timing-function: linear;
      }
      .bg1 {
        width: 200px;
        height: 200px;
        background: #ffd6e0;
        top: 10%;
        left: 5%;
        animation: move1 12s infinite alternate;
      }
      .bg2 {
        width: 150px;
        height: 150px;
        background: #b5ead7;
        top: 60%;
        left: 70%;
        animation: move2 16s infinite alternate;
      }
      .bg3 {
        width: 120px;
        height: 120px;
        background: #c7ceea;
        top: 40%;
        left: 40%;
        animation: move3 18s infinite alternate;
      }
      @keyframes move1 {
        0% {
          top: 10%;
          left: 5%;
        }
        100% {
          top: 20%;
          left: 20%;
        }
      }
      @keyframes move2 {
        0% {
          top: 60%;
          left: 70%;
        }
        100% {
          top: 50%;
          left: 80%;
        }
      }
      @keyframes move3 {
        0% {
          top: 40%;
          left: 40%;
        }
        100% {
          top: 60%;
          left: 30%;
        }
      }
      .container {
        position: relative;
        z-index: 1;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 20px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
        padding: 2rem 1rem;
        margin-top: 3rem;
      }
      h1 {
        font-family: "Segoe UI", sans-serif;
        font-weight: 700;
        color: #6c3483;
        margin-bottom: 2rem;
      }
      .btn-success {
        transition: transform 0.2s, box-shadow 0.2s;
        font-size: 1.2rem;
        font-weight: 500;
        background: linear-gradient(90deg, #b5ead7 0%, #c7ceea 100%);
        color: #333;
        border: none;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
      }
      .btn-success:hover {
        transition: 300ms;
        transform: scale(1.05) !important;
        box-shadow: 0 8px 24px rgba(31, 38, 135, 0.12);
        background: linear-gradient(90deg, #ffd6e0 0%, #b5ead7 100%);
        color: #6c3483;
      }
      a {
        text-decoration: none;
        display: block;
      }
      label {
        font-weight: 500;
        color: #6c3483;
      }
    </style>
  </head>
  <body>
    <div class="moving-bg bg1"></div>
    <div class="moving-bg bg2"></div>
    <div class="moving-bg bg3"></div>
    <div class="container text-center mt-3">
      <h1>Pemograman Web Dasar</h1>
      <label for="halaman1-btn" class="form-label"
        >Praktikum Pertemuan 1 (15 Agustus 2025):
      </label> 
      <a href="pelajaran/01-operator-aritmatika.php" target="_blank">
        <button
          id="halaman1-btn"
          type="button"
          class="btn btn-success col-3 mt-3"
        >
          Halaman 1
        </button>
      </a>
      <a href="halaman2.html">
        <button type="button" class="btn btn-success col-3 mt-3">
          Halaman 2
        </button>
      </a>
      <a href="halaman3.html">
        <button type="button" class="btn btn-success col-3 mt-3">
          Halaman 3
        </button>
      </a>

      <a href="http://localhost/phpmyadmin" target="_blank">
        <button type="button" class="btn btn-success col-3 mt-3">
          PHPMyAdmin
        </button>
      </a>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
      crossorigin="anonymous"
    ></script>
  </body>
</html>