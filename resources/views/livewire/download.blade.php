<div style="overflow-x: hidden;">
 <head>
  <title>VR Product Page</title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #e0f7f9;
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
      background: linear-gradient(135deg, #e0f7f9 0%, #c9e5f5 50%, #a0d7ef 100%); /* Background gradien */
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
      background-color: #6a0dad; /* Warna ungu */
      border: none;
      padding: 0.75rem 1.5rem;
      font-size: 1rem;
      transition: background-color 0.3s ease;
    }

    .hero-text .btn-primary:hover {
      background-color: #4e0a8a; /* Warna ungu lebih gelap saat hover */
    }

    .hero-image {
      max-width: 50%;
      text-align: left;
    }

    /* Animasi gambar */
    .hero-image img {
      max-width: 100%;
      border-radius: 1rem;
      animation: zoomInOut 3s ease-in-out infinite;
    }

    /* Definisi animasi untuk memperbesar dan memperkecil gambar */
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

    .side-image img {
      max-width: 100px;
      border-radius: 1rem;
    }

    .vertical-text {
      position: absolute;
      top: 50%;
      right: 2rem;
      transform: translateY(-50%);
      writing-mode: vertical-rl;
      text-orientation: mixed;
      font-size: 1.5rem;
      font-weight: bold;
    }
  </style>
 </head>
 <body>
  <div class="hero-section">
   <div class="hero-image">
    <img alt="Person wearing VR headset" height="500" src="assets/img/vr.png" width="500"/>
   </div>
   <div class="hero-text">
    <h1>Experience the Future of Learning</h1>
    <p>Step into a new dimension where learning meets virtual reality. Our lightweight VR kit immerses you in real-world scenarios designed to sharpen your skills and prepare you for success.</p>
    <!-- Tombol menjadi link -->
    <a href="https://www.roblox.com/share?code=0015d0e61975f942bdffc5f3bce49865&type=ExperienceDetails&stamp=1728706815172" class="btn btn-primary">Start Your Journey</a>
   </div>
  </div>
  @livewireScripts()
 </body>
 </div>

