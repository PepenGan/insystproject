<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Button</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

  
  <!-- ✅ Tambahkan script ini untuk mendukung <lottie-player> -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@2.0.2/dist/lottie-player.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">



</head>

<body class="bg-[#fdf6ee]">
  <header class="flex items-center justify-between px-[60px] py-[20px] bg-[#fdf6ee]">
    <!-- Kiri: Tombol navigasi -->
    <div class="flex gap-4">
      <!-- Companies -->
      <div class="group bg-[#e8e0d8] w-[80px] h-[30px] rounded-2xl flex items-center justify-center 
        shadow-sm hover:shadow-md transition-all duration-300 ease-in-out 
        hover:bg-gradient-to-r hover:from-[#a49d94] hover:to-[#4b4945] active:from-[#2f2f2f] active:to-[#1c1c1c]
        hover:scale-105 cursor-pointer">
        <h1 class="text-gray-800 text-[10px] font-semibold tracking-wide 
          transition-colors duration-300 group-hover:text-white group-active:text-white">
          Companies
        </h1>
      </div>

      <!-- Candidates -->
      <div class="group bg-[#e8e0d8] w-[80px] h-[30px] rounded-2xl flex items-center justify-center 
        shadow-sm hover:shadow-md transition-all duration-300 ease-in-out 
        hover:bg-gradient-to-r hover:from-[#a49d94] hover:to-[#4b4945] active:from-[#2f2f2f] active:to-[#1c1c1c]
        hover:scale-105 cursor-pointer">
        <h1 class="text-gray-800 text-[10px] font-semibold tracking-wide 
          transition-colors duration-300 group-hover:text-white group-active:text-white">
          Candidates
        </h1>
      </div>
    </div>

    <!-- Tengah: Logo -->
    <div>
      <img src="photo/logo.png" alt="Logo" class="w-[60px]">
    </div>

    <!-- Kanan: Waktu + Contact -->
    <div class="flex items-center gap-4">
      <div id="timeDisplay" class="text-gray-700 font-medium text-[10px]">
        Malang | 03:05 PM
      </div>

      <div class="group bg-black w-[90px] h-[30px] rounded-2xl flex items-center justify-center 
        shadow-sm hover:shadow-md transition-all duration-300 ease-in-out 
        hover:bg-gradient-to-r hover:from-[#1a1a1a] hover:to-[#333] active:from-[#0d0d0d] active:to-[#000]
        hover:scale-105 cursor-pointer">
        <h1 class="text-white text-[10px] font-semibold tracking-wide 
          transition-colors duration-300 group-hover:text-gray-200 group-active:text-gray-100">
          Contact Us
        </h1>
      </div>
    </div>
    

  <!-- Script waktu -->
  <script>
    function updateTime() {
      const options = {
        timeZone: 'Asia/Jakarta',
        hour: '2-digit',
        minute: '2-digit',
        hour12: true
      };
      const formatter = new Intl.DateTimeFormat([], options);
      const time = formatter.format(new Date());
      document.getElementById('timeDisplay').textContent = `Malang | ${time}`;
    }

    updateTime();
    setInterval(updateTime, 1000);
  </script>
  </header>

  <!-- ✅ Lottie di bawah header -->
  <div class="flex justify-center mt-[40px] ml-[-300px]">
<script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.5/dist/dotlottie-wc.js" type="module"></script>

<dotlottie-wc src="https://lottie.host/d5c1483b-ec5d-4323-9f1f-0a27fa264eb1/ce0A5yBC7M.lottie" style="width: 400px;height: 400px" autoplay loop></dotlottie-wc>
  </div>
  <div>
    <p class="font-[Bungee] text-[50px]">
        <span class="block relative top-[-430px] ml-[460px] text-[70px] font-[Bungee]">
             Work
        </span>

        <span class="block relative top-[-460px] ml-[590px] text-[70px] font-[Bungee]">That</span>
        <span class="block relative top-[-490px] ml-[590px] text-[70px] font-[Bungee]">matters</span>
    </p>
  </div>


<section>
    
  <div class="mt-[-465px] ml-[595px]">
    <p class="text-gray-500 font-[inter] text-[12px] relative top-[-20px] font light">Search + Career Consultan</p>
    <p class="text-black text-[16px] font-[inter] font-medium w-[250px] relative top-[-20px]">Connecting groundbreaking companies with extraordinary talent</p>
  </div>

  <div>
    <div class="mt-400px ml-[590px]">
        <div class="group bg-[#e8e0d8] w-[80px] h-[30px] rounded-2xl flex items-center justify-center 
        shadow-sm hover:shadow-md transition-all duration-300 ease-in-out 
        hover:bg-linear-to-r hover:from-[#a49d94] hover:to-[#4b4945] active:from-[#2f2f2f] active:to-[#1c1c1c]
        hover:scale-105 cursor-pointer">
        <h1 class="text-gray-800 text-[10px] font-semibold tracking-wide 
          transition-colors duration-300 group-hover:text-white group-active:text-white">
          Companies
        </h1>
      </div>
    </div>

    <div class="mt-[-30px] ml-[680px]">
        <div class="group bg-[#e8e0d8] w-[80px] h-[30px] rounded-2xl flex items-center justify-center 
        shadow-sm hover:shadow-md transition-all duration-300 ease-in-out 
        hover:bg-linear-to-r hover:from-[#a49d94] hover:to-[#4b4945] active:from-[#2f2f2f] active:to-[#1c1c1c]
        hover:scale-105 cursor-pointer">
        <h1 class="text-gray-800 text-[10px] font-semibold tracking-wide 
          transition-colors duration-300 group-hover:text-white group-active:text-white">
          Companies
        </h1>
      </div>
    </div>
  </div>

</section>

<section class=" mt-[50px]">
    
<div class="relative min-h-screen flex flex-col items-center justify-center bg-[#fdf6ee]">
  <div class="font-[Bungee] text-[60px] text-center">
    <span class="block fade-up delay-1">People</span>
    <span class="block fade-up delay-2 mt-[20px]">Make</span>
    <span class="block fade-up delay-3 mt-[20px]">Business</span>
  </div>
</div>

<style>
  /* 🌟 Efek dasar */
  .fade-up {
    opacity: 0;
    transform: translateY(60px) scale(0.96);
    filter: blur(10px);
    will-change: opacity, transform, filter;
    transition:
      opacity 0.8s cubic-bezier(0.22, 1, 0.36, 1),
      transform 0.8s cubic-bezier(0.22, 1, 0.36, 1),
      filter 0.8s cubic-bezier(0.22, 1, 0.36, 1);
  }

  /* Saat muncul */
  .fade-up.show {
    opacity: 1;
    transform: translateY(0) scale(1);
    filter: blur(0);
  }

  /* Saat keluar */
  .fade-up.hide {
    opacity: 0;
    transform: translateY(40px) scale(0.98);
    filter: blur(6px);
    transition:
      opacity 0.6s ease-out,
      transform 0.6s ease-out,
      filter 0.6s ease-out;
  }

  /* Delay animasi */
  .delay-1 { transition-delay: 0.1s; }
  .delay-2 { transition-delay: 0.25s; }
  .delay-3 { transition-delay: 0.45s; }
</style>

<script>
  const fadeElements = document.querySelectorAll('.fade-up');

  let ticking = false; // untuk menghindari lag saat scroll cepat

  const observer = new IntersectionObserver((entries) => {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        entries.forEach(entry => {
          const el = entry.target;

          if (entry.isIntersecting) {
            // 🌟 tambahkan show, hilangkan hide
            el.classList.add('show');
            el.classList.remove('hide');
          } else {
            // 🌙 smooth keluar layar
            el.classList.add('hide');
            el.classList.remove('show');
          }
        });
        ticking = false;
      });
      ticking = true;
    }
  }, {
    threshold: 0.15, // bikin animasi mulai sedikit lebih cepat
    rootMargin: "0px 0px -60px 0px" // mempercepat trigger sebelum benar-benar di tengah layar
  });

  fadeElements.forEach(el => observer.observe(el));
</script>

</section>

<section class="mt-[100px] ml-[70px] ">
    <div>
        <p class="font-[bungee]  ml-[150px] text-[30px]">
            <span class="block">We've</span>
            <span class="block">been there.</span>
            <span class="block"> we know</span>
            <span class="block">what it takes.</span>  
        </p>
        <p class="font-[inter] text-[15px] w-[290px] ml-[500px] mt-[-150px]">Unlike traditional search firms, we’ve been part of building innovative companies – like
            <span class="bg-yellow-500 px-1 rounded-xl">Kickstarter</span>
            <span class="bg-purple-300 px-1 rounded-xl">Casper</span>and 
            <span class="bg-[#FF6F61] px-1 rounded-xl">Etsy</span> – from the ground up, giving us a deep understanding of what it takes to build effective, thriving teams.</p>
    </div>

</section>
<section class="mt-[100px]">
  <div class="relative mt-[-25px] min-h-[200vh] overflow-hidden flex flex-col justify-center items-center bg-[#fdf6ee]">

    <!-- Bagian hitam dengan konten -->
    <div class="card-section2 absolute bottom-[-400px] w-[100%] h-[850px] bg-black rounded-t-[80px] shadow-2xl opacity-0 z-[100]
                flex flex-col justify-center items-center text-white text-center p-8">
      <h2 class="text-[40px] font-bold mt-[-80px] font-[bungee]">
        <span class="block">FLEXIBLE</span>
        <span class="block">INTEGRATED TALENT</span>
        <span class="block">PARTNER</span>
      </h2>

      <div class="flex flex-wrap justify-center gap-8 mt-[100px]">
        <!-- CARD 1 -->
        <div class="bg-[#F5EBDD] w-[210px] h-[260px] rounded-[40px] shadow-xl p-4">
          <p class="font-[bungee] text-[10px] text-black">01</p>
          <p class="font-[bungee] text-[22px] text-center leading-tight">
            <span class="block text-black">Executive</span>
            <span class="block text-black">Search</span>
          </p>
          <div class="flex items-center justify-center mt-[30px]">
            <img
              src="https://cdn.prod.website-files.com/67079a31e71560a787d9fcc4/6707c6aff10ed02bb97c61f9_brilliant_64.webp"
              alt=""
              class="w-[50px]"
            />
          </div>
          <div class="w-[180px] mx-auto mt-2 text-center">
            <p class="text-[11px] text-gray-800 leading-relaxed font-inter">
              Helping clients identify experienced operators who can level them up.
            </p>
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="bg-[#F5EBDD] w-[210px] h-[260px] rounded-[40px] shadow-xl p-4">
          <p class="font-[bungee] text-[10px] text-black">02</p>
          <p class="font-[bungee] text-[22px] text-center leading-tight">
            <span class="block text-black">Next-Gen</span>
            <span class="block text-black">Search</span>
          </p>
          <div class="flex items-center justify-center mt-[30px]">
            <img
              src="https://cdn.prod.website-files.com/67079a31e71560a787d9fcc4/6707c6af78a3dd5acec5512e_flower_64.webp"
              alt=""
              class="w-[50px]"
            />
          </div>
          <div class="w-[180px] mx-auto mt-2 text-center">
            <p class="text-[11px] text-gray-800 leading-relaxed font-inter">
              Helping clients identify experienced operators who can level them up.
            </p>
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="bg-[#F5EBDD] w-[210px] h-[260px] rounded-[40px] shadow-xl p-4">
          <p class="font-[bungee] text-[10px] text-black">03</p>
          <p class="font-[bungee] text-[22px] text-center leading-tight">
            <span class="block text-black">Talent</span>
            <span class="block text-black">Mapping</span>
          </p>
          <div class="flex items-center justify-center mt-[30px]">
            <img
              src="https://cdn.prod.website-files.com/67079a31e71560a787d9fcc4/6707c6aff10ed02bb97c61f9_brilliant_64.webp"
              alt=""
              class="w-[50px]"
            />
          </div>
          <div class="w-[180px] mx-auto mt-2 text-center">
            <p class="text-[11px] text-gray-800 leading-relaxed font-inter">
              Helping clients identify experienced operators who can level them up.
            </p>
          </div>
        </div>

        <!-- CARD 4 -->
        <div class="bg-[#F5EBDD] w-[210px] h-[260px] rounded-[40px] shadow-xl p-4">
          <p class="font-[bungee] text-[10px] text-black">04</p>
          <p class="font-[bungee] text-[22px] text-center leading-tight">
            <span class="block text-black">Global</span>
            <span class="block text-black">Advisory</span>
          </p>
          <div class="flex items-center justify-center mt-[30px]">
            <img
              src="https://cdn.prod.website-files.com/67079a31e71560a787d9fcc4/6707c6aff10ed02bb97c61f9_brilliant_64.webp"
              alt=""
              class="w-[50px]"
            />
          </div>
          <div class="w-[180px] mx-auto mt-2 text-center">
            <p class="text-[11px] text-gray-800 leading-relaxed font-inter">
              Helping clients identify experienced operators who can level them up.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Dua kartu konten -->
    <div class="content-section2 flex flex-col md:flex-row justify-center items-center gap-10">
      <!-- Card kiri -->
      <div class="bg-[#FDF6EE] w-[270px] h-[380px] rounded-xl border border-gray-300 shadow-lg flex flex-col items-center">
        <img src="https://cdn.prod.website-files.com/67079a31e71560a787d9fcc4/673cc0d695d81fca4e6b0b9e_illustration-forcompanies.svg"
             alt="" class="w-[120px] mt-[30px]">
        <p class="font-[inter] text-[11px] w-[190px] leading-relaxed text-justify mt-[20px]">
          “They just get it. They 100% understand what we’re trying to build and the team we’re trying to build.”
        </p>
        <div class="mt-[18px] text-center">
          <p class="text-black font-[inter] text-[11px] font-semibold">Sarah</p>
          <p class="text-gray-500 font-[inter] text-[10px]">HR manager, Google</p>
        </div>
        <button
          class="bg-[#a999ff] hover:bg-[#b7a7ff] text-white text-[10px] font-semibold px-4 py-1.5 rounded-full mt-[20px]
                 transition-all duration-300 shadow-sm hover:shadow-md hover:scale-105 active:scale-95">
          Complete your team
        </button>
      </div>

      <!-- Card kanan -->
      <div class="bg-[#FDF6EE] w-[270px] h-[380px] rounded-xl border border-gray-300 shadow-lg flex flex-col items-center">
        <img src="https://cdn.prod.website-files.com/67079a31e71560a787d9fcc4/673cc0d68a1a1b4719476306_illustration-forcandidates.svg"
             alt="" class="w-[120px] mt-[30px]">
        <p class="font-[inter] text-[11px] w-[170px] leading-relaxed text-justify mt-[20px]">
          “I would work with Purpose again in a heartbeat. I’ve been wowed by their ability to lead me to mission-focused opportunities.”
        </p>
        <div class="mt-[18px] text-center">
          <p class="text-black font-[inter] text-[11px] font-semibold">Ruby Hoose</p>
          <p class="text-gray-500 font-[inter] text-[10px]">Global Talent Leader</p>
        </div>
        <button
          class="bg-[#ffb84c] hover:bg-[#ff9f00] text-white text-[10px] font-semibold px-4 py-1.5 rounded-full mt-[20px]
                 transition-all duration-300 shadow-sm hover:shadow-md hover:scale-105 active:scale-95">
          Find your rhythm
        </button>
      </div>
    </div>
  </div>

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

  <script>
    gsap.registerPlugin(ScrollTrigger);

    const card2 = document.querySelector(".card-section2");

    gsap.timeline({
      scrollTrigger: {
        trigger: ".content-section2",
        start: "top 0%",
        end: "bottom top",
        scrub: 5,
      }
    })
    .to(card2, {
      opacity: 1,
      y: -450,
      duration: 1.5,
      ease: "power3.out"
    });
  </script>
</section>


<!-- Tambahkan gradasi transisi di sini -->
<div class="w-full h-[80px] bg-gradient-to-b from-#F5EBDD to-[#fdf6ee]"></div>

<!-- Bagian teks bawah -->
<div class="bg-[#fdf6ee] text-center py-20 mt-[-100px]">
  <p class="font-[bungee] text-[40px]">
    <span class="block">WE LOVE</span>
    <span class="block">PARTNERING</span>
    <span class="block">WITH Business</span>
    <span class="block">WHO ARE</span>
  </p>
</div><!-- === SECTION CARD + PANEL PUTIH ANIMATIF === -->
<section class="relative min-h-[200vh] bg-[#fdf6ee] flex flex-col justify-center items-center overflow-hidden z-[10]">

  <!-- === CARD CONTAINER === -->
  <div id="cardContainer"
       class="relative z-[10] w-[340px] h-[240px] flex justify-center items-center cursor-pointer select-none mt-[-100px] perspective-[1200px]">
       
    <!-- Card 1 -->
    <div class="card absolute inset-0 bg-white border-4 border-[#ffb6b6] rounded-2xl shadow-2xl 
                flex flex-col items-center justify-center text-center z-[4]
                transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
      <h3 class="font-[bungee] text-2xl mb-2 text-black">GROWING ETHICALLY</h3>
      <p class="text-sm text-gray-600">Nothing shady going on here</p>
    </div>

    <!-- Card 2 -->
    <div class="card absolute inset-0 bg-white border-4 border-[#ffd166] rounded-2xl shadow-2xl 
                flex flex-col items-center justify-center text-center z-[3] opacity-0 scale-90 rotate-y-[20deg]">
      <h3 class="font-[bungee] text-2xl mb-2 text-black">INTENTIONAL & TRANSPARENT</h3>
      <p class="text-sm text-gray-600">Open and clear in their practices</p>
    </div>

    <!-- Card 3 -->
    <div class="card absolute inset-0 bg-white border-4 border-[#8ecae6] rounded-2xl shadow-2xl 
                flex flex-col items-center justify-center text-center z-[2] opacity-0 scale-90 rotate-y-[-20deg]">
      <h3 class="font-[bungee] text-2xl mb-2 text-black">PASSIONATE & CREATIVE</h3>
      <p class="text-sm text-gray-600">Always pushing ideas forward</p>
    </div>

    <!-- Card 4 -->
    <div class="card absolute inset-0 bg-white border-4 border-[#bdb2ff] rounded-2xl shadow-2xl 
                flex flex-col items-center justify-center text-center z-[1] opacity-0 scale-90 rotate-y-[15deg]">
      <h3 class="font-[bungee] text-2xl mb-2 text-black">HONEST COLLABORATORS</h3>
      <p class="text-sm text-gray-600">Trust and clarity in every step</p>
    </div>
  </div>

  <!-- === PANEL PUTIH FULL WIDTH === -->
  <div class="scroll-panel w-full max-w-none h-[150vh] bg-white/95 border border-white/20 
              rounded-2xl opacity-0 translate-y-[50%] px-10 flex flex-col justify-center 
              items-center text-center backdrop-blur-lg transition-all duration-500 z-[100] mt-[-250px] shadow-2xl">
    <div class="w-[720px]">
      <h2 class="text-[2.8rem] sm:text-[3.4rem] font-[bungee] text-gray-900  tracking-tight drop-shadow-sm mt-[-150px]">
        Stories
      </h2>
      <p class="text-gray-700 text-[15px] leading-relaxed  opacity-90 w-[300px]  text-center mx-auto">
      Updates, insights and stories of those who have found their purpose.</p>
  
    </div>
    <div class="bg-white w-[250px] h-[300px] rounded-xl  shadow-xl">
      <img src="https://cdn.prod.website-files.com/6708de26704eb564a73f6170/673c9e2cf4b9adca359d6c66_story-thumbnail-1.jpg" alt="" class="rounded-2xl w-[230px] ml-[10px] mt-[10px]">
    </div>
    <div class="bg-yellow-400 w-[60px]  h-[20px] rounded-2xl text-white font-inter mt-[-170px] text-[11px]" >
      updates
    </div>
      <p class="font-[inter] text-[12px] w-[180px] mt-[15px]">Finding Your Rythm: Purpose Talent's New Beat</p>
      <p class= "font-[inter] text-[10px] w-[180px] mt-[25px] text-gray-400">11.9.2024 | 3 mnt </p>
   <button class="bg-gradient-to-r from-black to-gray-800 text-white px-4 py-1.5 rounded-full 
               text-sm font-semibold tracking-wide hover:scale-[1.05] hover:brightness-110 
               transition-all duration-300 shadow-md">
  Read
</button>
    </div>
   
</section>
<section class="relative h-[300vh]  flex flex-col justify-center items-center overflow-hidden z-[10] mt-[-1300px]">

<div class="scroll-panel-black w-full min-h-[100vh] bg-black text-white flex justify-center items-center px-10 py-24">
  <div class="max-w-[1200px] w-full flex flex-col md:flex-row items-center gap-16">

    <!-- === BAGIAN KIRI (TEKS) === -->
    <div class="flex-1 text-left space-y-6">
      <!-- Title besar -->
      <div>
        <h1 class="text-[2.8rem] sm:text-[3.2rem] font-[bungee] leading-tight mb-6">
          <span class="block">WORKING</span>
          <span class="block">WITH</span>
          <span class="block text-[#00b4ff]">PURPOSE</span>
        </h1>
      </div>

      <!-- Subjudul kecil -->
      <p class="text-[12px] font-inter uppercase tracking-widest text-gray-400">
        Purpose Talent. <br> Since 2020
      </p>

      <!-- Judul sedang -->
      <h2 class="font-[bungee] text-[1.8rem] leading-tight mt-2">
        <span class="block">FOUNDED BY</span>
        <span class="block">ANDREW BLANCATO —</span>
        <span class="block">PEOPLE AND</span>
        <span class="block">TALENT EXPERT</span>
      </h2>

      <!-- Garis panah dekoratif -->
      <img src="photo/arrow.png" alt="arrow" class="w-[90px] mt-4 ml-2 opacity-90">

      <!-- Deskripsi -->
      <p class="text-[15px] leading-relaxed text-gray-300 max-w-[420px]">
        After spending over a decade building companies like Kickstarter, Etsy, and Casper, 
        Andrew saw an opportunity to help the next generation of companies succeed 
        by taking a more thoughtful approach to hiring the right people.
      </p>
    </div>

    <!-- === BAGIAN KANAN (GAMBAR) === -->
    <div class="flex-1 flex justify-center md:justify-end">
      <img src="photo/orang.jpg" alt="Andrew" class="rounded-2xl w-[340px] h-[420px] object-cover shadow-2xl">
    </div>

  </div>
</div>

</section>

<section class="w-full min-h-[100vh] bg-[#fdf6ee] flex flex-col justify-center items-center py-20 overflow-hidden mt-[-300px]">
  <!-- Judul -->
  <p class="uppercase text-[14px] tracking-widest text-gray-700 font-inter mb-4">
    Companies
  </p>

  <div class="text-center leading-[1.1] font-[bungee] text-black">
    <p class="text-[60px]">WE'RE</p>
    <p class="text-[80px]">TRUSTED BY</p>
  </div>

  <!-- ===== SLIDER LOGO ===== -->
  <div class="relative mt-12 w-full overflow-hidden">
    <div class="flex gap-10 animate-slide">
      <!-- Gambar logo -->
      <img src="https://upload.wikimedia.org/wikipedia/commons/5/57/Casper_logo.png" class="h-[80px] grayscale hover:grayscale-0 transition-all" />
      <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Kickstarter_logo.svg" class="h-[80px] grayscale hover:grayscale-0 transition-all" />
      <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Etsy_logo.svg" class="h-[80px] grayscale hover:grayscale-0 transition-all" />
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/68/Payoneer_logo.svg" class="h-[80px] grayscale hover:grayscale-0 transition-all" />
      <img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/Outschool_logo.png" class="h-[80px] grayscale hover:grayscale-0 transition-all" />
      <!-- duplikat biar looping -->
      <img src="https://upload.wikimedia.org/wikipedia/commons/5/57/Casper_logo.png" class="h-[80px] grayscale hover:grayscale-0 transition-all" />
      <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Kickstarter_logo.svg" class="h-[80px] grayscale hover:grayscale-0 transition-all" />
      <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Etsy_logo.svg" class="h-[80px] grayscale hover:grayscale-0 transition-all" />
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/68/Payoneer_logo.svg" class="h-[80px] grayscale hover:grayscale-0 transition-all" />
      <img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/Outschool_logo.png" class="h-[80px] grayscale hover:grayscale-0 transition-all" />
    </div>
  </div>
</section>

<style>
  @keyframes slide {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }
  .animate-slide {
    display: flex;
    width: calc(200%);
    animation: slide 30s linear infinite;
  }
</style>


<!-- === GSAP ANIMATION === -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script>
  gsap.registerPlugin(ScrollTrigger);

  // === PANEL HITAM MULAI NAIK SAAT SCROLL 80% ===
  gsap.fromTo(".scroll-panel-black",
    { opacity: 0, y: "70%", filter: "blur(10px)" },
    {
      opacity: 1,
      y: "0%",
      filter: "blur(0px)",
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".scroll-panel-black",
        start: "top 80%", // mulai naik ketika posisi panel 80% dari viewport
        end: "top 50%",
        scrub: 0.8,
      }
    }
  );
</script>


<!-- === GSAP ANIMATION === -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script>
  gsap.registerPlugin(ScrollTrigger);

  // === PARALLAX BACKGROUND ===
  gsap.to("section", {
    backgroundPositionY: "40%",
    ease: "none",
    scrollTrigger: {
      trigger: "section",
      start: "top bottom",
      end: "bottom top",
      scrub: true,
    }
  });

  // === PANEL PUTIH TANPA DELAY ===
  gsap.fromTo(".scroll-panel",
    { opacity: 0, y: "80%", filter: "blur(10px)", scale: 0.98 },
    {
      opacity: 1,
      y: "0%",
      filter: "blur(0px)",
      scale: 1,
      duration: 0.8, // langsung
      ease: "power1.out",
      scrollTrigger: {
        trigger: ".scroll-panel",
        start: "top 95%", // langsung aktif saat sedikit kelihatan
        end: "top 60%",
        scrub: 0.6, // responsif tanpa delay
      }
    }
  );

  // === CARD SLIDE (ROTATE + FADE + DEPTH) ===
  const cards = document.querySelectorAll("#cardContainer .card");
  let current = 0;

  setInterval(() => {
    const prev = cards[current];
    current = (current + 1) % cards.length;
    const next = cards[current];

    gsap.to(prev, {
      opacity: 0,
      scale: 0.9,
      rotateY: gsap.utils.random(-25, 25),
      duration: 0.6,
      ease: "power1.inOut"
    });

    gsap.to(next, {
      opacity: 1,
      scale: 1,
      rotateY: 0,
      duration: 0.8,
      ease: "power2.out"
    });
  }, 2500);
</script>

</body>
</html>
