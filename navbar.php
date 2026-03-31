<!-- 
<header class="fixed top-0 w-full bg-white shadow-md z-50">
  <div class="max-w-[1150px] mx-auto flex items-center justify-between px-4 py-3">

    
    <div class="flex items-center justify-between w-full md:w-auto">

   
      <a href="#" class="w-[50px] order-3 md:order-1">
        <img src="assets/img/sode-icon.png" class="w-full">
      </a>

      <div class="hidden md:block w-[1px] h-[45px] bg-gray-300 order-2 mx-3"></div>

  
      <a href="#" class="w-[140px] order-1 md:order-3">
        <img src="assets/img/Amity-online-logo.png" class="w-full">
      </a>

    </div>


    <button onclick="handleGiftClick()" class="hidden md:block md:flex items-center gap-2 bg-[#25D366] text-white px-4 py-2 rounded-[10px] shadow-lg group relative overflow-hidden active:scale-95 transition-transform">
    <div class="w-[30px] h-[30px] bg-white rounded-full flex items-center justify-center animate-icon-pulse flex-shrink-0">
        <img src="assets/img/gift.gif" class="w-[30px] h-[30px] rounded-full" alt="Gift Icon">
    </div>
    <span class="text-[20px] md:text-[14px] font-bold tracking-wide transition-all">
        Scholarship Coupon Code
    </span>
    <div class="absolute inset-0 w-full h-full animate-shimmer"></div>
    </button>

  </div>
</header>


<style>

  @keyframes iconPulse {
    0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4); }
    70% { transform: scale(1.05); box-shadow: 0 0 0 8px rgba(255, 255, 255, 0); }
    100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 255, 255, 0); }
  }

  
  @keyframes shimmer {
    from { transform: translateX(-150%) skewX(-15deg); }
    to { transform: translateX(150%) skewX(-15deg); }
  }

  
  .animate-icon-pulse {
    animation: iconPulse 2s infinite ease-in-out;
  }

  .animate-shimmer {
    background: linear-gradient(
      to right,
      transparent 0%,
      rgba(255, 255, 255, 0.2) 30%, 
      rgba(255, 255, 255, 0.6) 50%,
      rgba(255, 255, 255, 0.2) 70%,
      transparent 100%
    );
    animation: shimmer 1.8s infinite linear; 
  }

  
  .group:hover .animate-shimmer {
    animation-duration: 1.2s; 
  }
</style> -->




<!-- HEADER -->
<header class="fixed top-0 left-0 w-full bg-white shadow-sm z-[9999] shadow-2xl">
  <div class="max-w-7xl mx-auto px-6 py-1 flex items-center justify-between">
    
    <!-- Logo -->
    <img src="assets/img/sode-icon.png" class="h-20" />

    <!-- Desktop Menu -->
    <nav class="hidden md:flex items-center gap-4 text-gray-700 font-medium">
      <a href="#home">Home</a>
      <span class="text-gray-500">|</span>
      <a href="#approvals">Approvals</a>
      <span class="text-gray-500">|</span>
      <a href="#specialization">Specializations</a>
      <span class="text-gray-500">|</span>
      <a href="#about">About</a>
      <span class="text-gray-500">|</span>
      <a href="#why">Why Choose?</a>
      <span class="text-gray-500">|</span>
      <a href="#faq">FAQ</a>
    </nav>

    <!-- Mobile Toggle -->
<button id="menuBtn" class="md:hidden relative w-10 h-10 bg-[#0970b8] p-2 rounded-[4px]">

  <!-- Line 1 -->
  <span id="line1"
    class="absolute left-1/2 top-1/2 w-6 h-0.5 bg-white 
    -translate-x-1/2 -translate-y-2 
    transition-all duration-300 origin-center"></span>

  <!-- Line 2 -->
  <span id="line2"
    class="absolute left-1/2 top-1/2 w-6 h-0.5 bg-white 
    -translate-x-1/2 
    transition-all duration-300"></span>

  <!-- Line 3 -->
  <span id="line3"
    class="absolute left-1/2 top-1/2 w-6 h-0.5 bg-white 
    -translate-x-1/2 translate-y-2 
    transition-all duration-300 origin-center"></span>

</button>
  </div>

  <!-- MOBILE DROPDOWN -->
  <div id="mobileMenu"
    class="md:hidden overflow-hidden max-h-0 transition-all duration-500 ease-in-out bg-white border-t">

    <nav class="flex flex-col p-4 space-y-4 text-gray-700 font-medium">
      <a href="#home" class="menu-link">Home</a>
      <a href="#approvals" class="menu-link">Approvals</a>
      <a href="#specialization" class="menu-link">Specializations</a>
      <a href="#about" class="menu-link">About</a>
      <a href="#why" class="menu-link">Why Choose?</a>
      <a href="#faq" class="menu-link">FAQ</a>
    </nav>

  </div>
</header>

<!-- Spacer -->
<div class="h-18"></div>

<!-- SCRIPT -->
<script>
  const menuBtn = document.getElementById('menuBtn');
  const mobileMenu = document.getElementById('mobileMenu');

  const l1 = document.getElementById('line1');
  const l2 = document.getElementById('line2');
  const l3 = document.getElementById('line3');

  const links = document.querySelectorAll('.menu-link');

  let isOpen = false;

  menuBtn.addEventListener('click', () => {
    isOpen = !isOpen;

    // Dropdown
    mobileMenu.style.maxHeight = isOpen
      ? mobileMenu.scrollHeight + "px"
      : "0px";

    // PERFECT CROSS ANIMATION
    if (isOpen) {
      l1.classList.replace('-translate-y-2', 'translate-y-0');
      l1.classList.add('rotate-45');

      l2.classList.add('opacity-0');

      l3.classList.replace('translate-y-2', 'translate-y-0');
      l3.classList.add('-rotate-45');
    } else {
      l1.classList.replace('translate-y-0', '-translate-y-2');
      l1.classList.remove('rotate-45');

      l2.classList.remove('opacity-0');

      l3.classList.replace('translate-y-0', 'translate-y-2');
      l3.classList.remove('-rotate-45');
    }
  });

  // Auto close on link click
  links.forEach(link => {
    link.addEventListener('click', () => {
      isOpen = false;
      mobileMenu.style.maxHeight = "0px";

      l1.classList.replace('translate-y-0', '-translate-y-2');
      l1.classList.remove('rotate-45');

      l2.classList.remove('opacity-0');

      l3.classList.replace('translate-y-0', 'translate-y-2');
      l3.classList.remove('-rotate-45');
    });
  });
</script>