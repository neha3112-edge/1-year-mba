<?php

session_start();

$brochure = $_GET['brochure'] ?? '';
$compare = $_GET['compare'] ?? '';

?>

<!doctype html>
<html>
    <head>
        <?php include "header.php"; ?>
</head>
<body class="font-poppins">

<?php include "navbar.php"; ?>

<div class="min-h-[calc(100vh-80px)] flex items-center justify-center py-20 px-4 bg-gray-50 mx-auto">
   <div class="w-full max-w-sm md:max-w-4xl bg-white rounded-[30px] overflow-hidden shadow-2xl transition-all duration-300">
      <div class="p-6 md:p-12 text-center">
         <div class="flex flex-col items-center mb-8">
            <div class="w-32 h-32 md:w-40 md:h-40 mb-4">
               <div>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" width="512" height="512" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;" preserveAspectRatio="xMidYMid meet">
                     <defs>
                        <clipPath id="__lottie_element_2">
                           <rect width="512" height="512" x="0" y="0"></rect>
                        </clipPath>
                     </defs>
                     <g clip-path="url(#__lottie_element_2)">
                        <g style="display: none;" transform="matrix(2.073554277420044,0,0,2.073554277420044,256,257.8599853515625)" opacity="0.0002800357478338356">
                           <g opacity="1" transform="matrix(1,0,0,1,0,-3)">
                              <path fill="rgb(199,241,223)" fill-opacity="1" d=" M0,-118 C65.12419891357422,-118 118,-65.12419891357422 118,0 C118,65.12419891357422 65.12419891357422,118 0,118 C-65.12419891357422,118 -118,65.12419891357422 -118,0 C-118,-65.12419891357422 -65.12419891357422,-118 0,-118z"></path>
                              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="2" d=" M0,-118 C65.12419891357422,-118 118,-65.12419891357422 118,0 C118,65.12419891357422 65.12419891357422,118 0,118 C-65.12419891357422,118 -118,65.12419891357422 -118,0 C-118,-65.12419891357422 -65.12419891357422,-118 0,-118z"></path>
                           </g>
                        </g>
                        <g style="display: block;" transform="matrix(1.499995470046997,0,0,1.499995470046997,256,257.8599853515625)" opacity="1">
                           <g opacity="1" transform="matrix(1,0,0,1,0,-3)">
                              <path fill="rgb(43,217,148)" fill-opacity="1" d=" M0,-118 C65.12419891357422,-118 118,-65.12419891357422 118,0 C118,65.12419891357422 65.12419891357422,118 0,118 C-65.12419891357422,118 -118,65.12419891357422 -118,0 C-118,-65.12419891357422 -65.12419891357422,-118 0,-118z"></path>
                           </g>
                        </g>
                        <g style="display: block;" transform="matrix(1,0,0,1,256,256)" opacity="1">
                           <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="30" d=" M-82.5,4.5 C-82.5,4.5 -31,55 -31,55 C-31,55 73,-52.5 73,-52.5"></path>
                           </g>
                        </g>
                     </g>
                  </svg>
               </div>
            </div>
            <p class="text-xs tracking-widest text-[#8B7500] mb-2 font-bold">INQUIRY SUCCESSFUL</p>
            <h1 class="text-2xl md:text-4xl font-bold text-[#1C3569] mb-3">Thank You for Enquiring</h1>
            <p class="text-gray-600 text-sm md:text-base max-w-lg mx-auto leading-relaxed">Our counselor will contact you shortly to discuss your academic aspirations and guide you through the next steps.</p>
         </div>
         <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div class="bg-[#F1F5F9] rounded-2xl p-5 text-left border border-transparent hover:border-[#FFC107] transition-all">
               <div class="flex gap-4 items-start">
                  <div class="bg-white p-2 rounded-lg shadow-sm">
                     <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail text-[#8B7500]" aria-hidden="true">
                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                     </svg>
                  </div>
                  <div>
                     <h3 class="font-bold text-[#1C3569] text-sm md:text-base">Check Your Inbox</h3>
                     <p class="text-gray-600 text-xs md:text-sm mt-1">We’ve sent a digital brochure and program details to your registered email address.</p>
                  </div>
               </div>
            </div>
            <div class="bg-[#F1F5F9] rounded-2xl p-5 text-left border border-transparent hover:border-[#FFC107] transition-all">
               <div class="flex gap-4 items-start">
                  <div class="bg-white p-2 rounded-lg shadow-sm">
                     <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-headphones text-[#8B7500]" aria-hidden="true">
                        <path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path>
                     </svg>
                  </div>
                  <div>
                     <h3 class="font-bold text-[#1C3569] text-sm md:text-base">Expert Guidance</h3>
                     <p class="text-gray-600 text-xs md:text-sm mt-1">Expect a call within the next 24 business hours from our dedicated admissions desk.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="max-w-md mx-auto">
            <div class="flex flex-col sm:flex-row gap-3">
               <a class="flex-1 bg-[#FFC107] hover:bg-[#e6af06] text-black py-3.5 rounded-xl font-bold flex items-center justify-center gap-2 transition-colors" href="/1-year-mba">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house" aria-hidden="true">
                     <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                     <path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  </svg>
                  Back to Home
               </a>
            </div>
            <div class="mt-10">
               <p class="text-gray-400 text-[10px] md:text-xs mb-4 tracking-[0.2em] font-bold uppercase">Join Our Academic Community</p>
               <div class="flex justify-center gap-6"><a target="_blank" class="bg-[#F1F5F9] hover:bg-[#1C3569] p-3 rounded-full transition-all" href="https://www.instagram.com/distanceeducationschool/"><img alt="Instagram" loading="lazy" width="22" height="22" decoding="async" data-nimg="1" style="color: transparent;" src="assets/img/instagram-logo-69c8b47a8e07d.webp"></a><a target="_blank" class="bg-[#F1F5F9] hover:bg-[#1C3569] p-3 rounded-full transition-all" href="https://www.youtube.com/channel/UCw9KLsERm_EzL2js_s7GbLQ"><img alt="Facebook" loading="lazy" width="22" height="22" decoding="async" data-nimg="1" style="color: transparent;" src="assets/img/youtube-logo-69c8b47a31313.webp"></a><a target="_blank" class="bg-[#F1F5F9] hover:bg-[#1C3569] p-3 rounded-full transition-all" href="https://www.linkedin.com/company/13269886/admin/dashboard/"><img alt="LinkedIn" loading="lazy" width="22" height="22" decoding="async" data-nimg="1" style="color: transparent;" src="assets/img/linkdin-logo-69c8b47a3131e.webp"></a></div>
            </div>
         </div>
      </div>
   </div>
</div>


<script>

<?php if($brochure){ ?>

setTimeout(function(){
window.open("assets/brochures/<?php echo $brochure ?>","_blank");
},1000);

<?php } ?>

<?php if($compare){ ?>

window.open(
"https://distanceeducationschool.com/compare-university/",
"_blank"
);

<?php } ?>

</script>

<?php include "footer-content.php"; ?>
<?php include "footer.php"; ?>

</body>
</hmtl>