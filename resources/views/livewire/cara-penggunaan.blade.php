<head>
    <title>Virbility - Cara Penggunaan</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
      body {
        background-color: #f5f7fa;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
      }

      .hero-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2rem;
        flex-direction: row-reverse;
        background: linear-gradient(135deg, #e0f7f9 0%, #c9e5f5 50%, #a0d7ef 100%);
      }

      .hero-text {
        max-width: 50%;
        text-align: left;
      }

      .hero-text h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 1rem;
      }

      .hero-text p {
        font-size: 1.2rem;
        margin-bottom: 1.5rem;
      }

      .hero-text .btn-primary {
        background-color: #6a0dad;
        border: none;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        transition: background-color 0.3s ease;
      }

      .hero-text .btn-primary:hover {
        background-color: #4e0a8a;
      }

      .hero-image {
        max-width: 50%;
        text-align: left;
      }

      .hero-image img {
        max-width: 100%;
        border-radius: 1rem;
        animation: zoomInOut 3s ease-in-out infinite;
      }

      @keyframes zoomInOut {
        0% {
          transform: scale(1);
        }
        50% {
          transform: scale(1.1);
        }
        100% {
          transform: scale(1);
        }
      }

      .content-section {
        padding: 3rem 2rem;
        text-align: left;
      }

      .content-section h2 {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        color: #333;
      }

      .content-section p {
        font-size: 1.1rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 1rem;
      }

    </style>
  </head>
  <body>
    <div class="hero-section">
      <div class="hero-image">
        <img alt="VR Learning" height="500" src="{{ asset('assets/img/vr.png') }}" width="500"/>
      </div>
      <div class="hero-text" id="cara-penggunaan">
        <h1>Cara Penggunaan Virbility</h1>
        <p>1. Buka website Virbility dan masuk ke akun Anda.</p>
        <p>2. Akses halaman <a href="{{ route('download') }}">Download</a> untuk mengunduh game pelatihan Virbility dari Roblox.</p>
        <p>3. Di halaman Download, klik tombol untuk mengunduh game pelatihan dari platform Roblox.</p>
        <p>4. Instal dan jalankan aplikasi Roblox, kemudian masuk ke dalam pelatihan menjadi Loan Officer.</p>
        <p>5. Mulai pelatihan dengan mengikuti simulasi dan tugas yang diberikan dalam game.</p>
        <p>6. Selesaikan pelatihan dengan performa terbaik untuk mendapatkan skor tinggi berdasarkan evaluasi.</p>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @livewireScripts()
  </body>
