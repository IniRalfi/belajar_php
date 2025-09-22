<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pustaka Tugas PBO — Dark</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">

  <style>
    :root {
      --eyeL-x: 43.8%;
      /* geser kiri-kanan mata kiri */
      --eyeL-y: 62.5%;
      /* geser atas-bawah mata kiri */
      --eyeR-x: 61%;
      /* geser kiri-kanan mata kanan */
      --eyeR-y: 57%;
      /* geser atas-bawah mata kanan */

      /* UKURAN bola mata & pupil (px) */
      --eye-size: 85px;
      /* diameter bola mata putih */
      --pupil-size: 40px;
      /* diameter pupil hitam */
      --pupil-range: 20px;
      /* seberapa jauh pupil boleh bergerak dari pusat */
    }

    /* === THEME GELAP FUTURISTIK === */
    body {
      min-height: 100vh;
      margin: 0;
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji";
      color: #e5e7eb;
      background:
        radial-gradient(1200px 800px at 10% 10%, #0b1220 0%, rgba(11, 18, 32, 0) 60%),
        radial-gradient(900px 700px at 90% 20%, #1b1a3a 0%, rgba(27, 26, 58, 0) 55%),
        radial-gradient(1200px 900px at 50% 120%, #0d0f1a 0%, #05070d 60%);
      overflow-x: hidden;
    }

    /* Partikel bintang halus */
    canvas#stars {
      position: fixed;
      inset: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      pointer-events: none;
    }

    /* Container kaca buram */
    .glass {
      position: relative;
      z-index: 1;
      max-width: 980px;
      margin: 64px auto 24vh;
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 24px;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.45);
      padding: 32px 20px;
    }

    h1 {
      font-weight: 800;
      letter-spacing: .3px;
      background: linear-gradient(90deg, #93c5fd, #a78bfa, #f472b6);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      margin-bottom: 12px;
    }

    p.lead {
      color: #a5b4fc;
      opacity: .9;
      margin-bottom: 28px;
    }

    /* Tombol modern */
    .btn-modern {
      --bg1: #3b82f6;
      --bg2: #8b5cf6;
      --bg3: #ec4899;
      background: linear-gradient(100deg, var(--bg1), var(--bg2), var(--bg3));
      border: none;
      color: white;
      font-weight: 600;
      border-radius: 14px;
      padding: 12px 14px;
      box-shadow: 0 10px 24px rgba(139, 92, 246, .35);
      transition: transform .18s ease, box-shadow .18s ease, filter .18s ease;
    }

    .btn-modern:hover {
      transform: translateY(-2px);
      filter: brightness(1.05);
      box-shadow: 0 16px 36px rgba(139, 92, 246, .45);
    }

    /* Area maskot + mata */
    .maskot-wrap {
      position: relative;
      width: min(460px, 78vw);
      margin: 40px auto 0;
      z-index: 1;
      filter: drop-shadow(0 12px 40px rgba(0, 0, 0, .6));
    }

    .maskot-img {
      width: 100%;
      height: auto;
      display: block;
      user-select: none;
      -webkit-user-drag: none;
    }

    /* bola mata (putih) – opsional untuk estetika (shadow halus) */
    .eye-ball {
      position: absolute;
      width: var(--eye-size);
      height: var(--eye-size);
      border-radius: 50%;
      background: #fff;
      opacity: .95;
      box-shadow: inset 0 -2px 4px rgba(0, 0, 0, .15), 0 1px 6px rgba(0, 0, 0, .35);
      transform: translate(-50%, -50%);
      pointer-events: none;
    }

    .eye-ball.left {
      left: var(--eyeL-x);
      top: var(--eyeL-y);
    }

    .eye-ball.right {
      left: var(--eyeR-x);
      top: var(--eyeR-y);
    }

    /* pupil hitam */
    .pupil {
      position: absolute;
      width: var(--pupil-size);
      height: var(--pupil-size);
      border-radius: 50%;
      background: #111;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      transition: transform .05s linear;
      /* smooth mengikuti mouse */
      box-shadow: 0 1px 2px rgba(255, 255, 255, .2), 0 2px 6px rgba(0, 0, 0, .4);
    }

    /* Glow tipis di bawah maskot */
    .ground-glow {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      bottom: -38px;
      width: 55%;
      height: 44px;
      z-index: 0;
      background: radial-gradient(closest-side, rgba(147, 197, 253, .25), rgba(147, 197, 253, 0) 70%);
      filter: blur(6px);
    }

    /* Responsive kecil */
    @media (max-width:576px) {
      :root {
        --eye-size: 22px;
        --pupil-size: 10px;
        --pupil-range: 5px;
      }

      .glass {
        margin: 32px 12px 22vh;
        padding: 24px 16px;
      }
    }
  </style>
</head>

<body>
  <!-- Partikel bintang -->
  <canvas id="stars"></canvas>

  <!-- Konten -->
  <main class="glass container">
    <h1 class="display-6 text-center">Pustaka Tugas PBO</h1>
    <p class="lead text-center">Semua tugas, satu portal. Tema gelap, modern, dan interaktif.</p>

    <div class="row g-3 justify-content-center">
      <div class="col-6 col-sm-4 col-md-3 d-grid">
        <a class="btn btn-modern" href="pelajaran/testing.php" target="_blank">Halaman 1</a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 d-grid">
        <a class="btn btn-modern" href="halaman2.html">Halaman 2</a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 d-grid">
        <a class="btn btn-modern" href="halaman3.html">Halaman 3</a>
      </div>
      <div class="col-6 col-sm-4 col-md-3 d-grid">
        <a class="btn btn-modern" href="http://belajar-php.test/phpmyadmin" target="_blank">PHPMyAdmin</a>
      </div>
    </div>

    <!-- Maskot + Mata interaktif (overlay) -->
    <section class="maskot-wrap">
      <!-- Ganti src di bawah ke path maskot kamu -->
      <img class="maskot-img" src="assets/Maskot.svg" alt="Maskot" />

      <!-- bola mata (opsional – bantu estetika & referensi posisi) -->
      <div class="eye-ball left">
        <div class="pupil" id="pupilL"></div>
      </div>
      <div class="eye-ball right">
        <div class="pupil" id="pupilR"></div>
      </div>

      <div class="ground-glow"></div>
    </section>
  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <script>
    /* ====== Bintang halus ====== */
    const starCanvas = document.getElementById('stars');
    const sctx = starCanvas.getContext('2d');

    function resizeStars() {
      starCanvas.width = innerWidth;
      starCanvas.height = innerHeight;
    }
    resizeStars();
    addEventListener('resize', resizeStars);

    const stars = Array.from({
      length: 140
    }).map(() => ({
      x: Math.random() * innerWidth,
      y: Math.random() * innerHeight,
      r: Math.random() * 1.6 + 0.2,
      s: Math.random() * 0.3 + 0.05,
      a: Math.random() * 1
    }));

    function drawStars() {
      sctx.clearRect(0, 0, starCanvas.width, starCanvas.height);
      for (const st of stars) {
        st.y += st.s;
        if (st.y > innerHeight) {
          st.y = -4;
          st.x = Math.random() * innerWidth;
        }
        st.a += 0.02;
        sctx.beginPath();
        sctx.arc(st.x, st.y, st.r, 0, Math.PI * 2);
        sctx.fillStyle = `rgba(200, 210, 255, ${0.4+0.4*Math.sin(st.a)})`;
        sctx.fill();
      }
      requestAnimationFrame(drawStars);
    }
    drawStars();

    /* ====== Mata interaktif ====== */
    const wrap = document.querySelector('.maskot-wrap');
    const pupilL = document.getElementById('pupilL');
    const pupilR = document.getElementById('pupilR');

    function movePupil(pupilEl, centerX, centerY, mouseX, mouseY) {
      const dx = mouseX - centerX;
      const dy = mouseY - centerY;
      const angle = Math.atan2(dy, dx);
      const maxMove = parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--pupil-range')) || 6;
      const moveX = Math.cos(angle) * maxMove;
      const moveY = Math.sin(angle) * maxMove;
      pupilEl.style.transform = `translate(calc(-50% + ${moveX}px), calc(-50% + ${moveY}px))`;
    }

    function onPointerMove(e) {
      const rect = wrap.getBoundingClientRect();
      const mouseX = e.clientX - rect.left;
      const mouseY = e.clientY - rect.top;

      const css = getComputedStyle(document.documentElement);
      const Lx = parseFloat(css.getPropertyValue('--eyeL-x'));
      const Ly = parseFloat(css.getPropertyValue('--eyeL-y'));
      const Rx = parseFloat(css.getPropertyValue('--eyeR-x'));
      const Ry = parseFloat(css.getPropertyValue('--eyeR-y'));

      function getCenter(pxPercent, pyPercent) {
        const x = rect.width * (pxPercent / 100);
        const y = rect.height * (pyPercent / 100);
        return {
          x,
          y
        };
      }

      const left = getCenter(Lx, Ly);
      const right = getCenter(Rx, Ry);

      movePupil(pupilL, left.x, left.y, mouseX, mouseY);
      movePupil(pupilR, right.x, right.y, mouseX, mouseY);
    }

    // ✅ ganti dari wrap → window
    window.addEventListener('mousemove', onPointerMove);
    window.addEventListener('touchmove', (e) => {
      if (e.touches && e.touches[0]) {
        onPointerMove({
          clientX: e.touches[0].clientX,
          clientY: e.touches[0].clientY
        });
      }
    }, {
      passive: true
    });

    window.addEventListener('mouseleave', () => {
      pupilL.style.transform = 'translate(-50%, -50%)';
      pupilR.style.transform = 'translate(-50%, -50%)';
    });
  </script>
</body>

</html>