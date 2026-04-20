<?php
session_start();


// Set timezone (important for correct date)
date_default_timezone_set('Asia/Kolkata');

// Get last day of current month
$lastDate = date('jS F Y', strtotime('last day of this month'));



/* Handle UTM from AJAX (VERY IMPORTANT) */
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $data = json_decode(file_get_contents("php://input"), true);

    if(!empty($data)){
        foreach($data as $key => $value){
            if(strpos($key, 'utm_') === 0){
                $_SESSION[$key] = $value;
            }
        }
    }

    exit; // 🔥 important (HTML render stop)
}


/* Capture UTM from normal URL */

if(isset($_GET['utm_source'])){
$_SESSION['utm_source'] = $_GET['utm_source'];
}

if(isset($_GET['utm_medium'])){
$_SESSION['utm_medium'] = $_GET['utm_medium'];
}

if(isset($_GET['utm_campaign'])){
$_SESSION['utm_campaign'] = $_GET['utm_campaign'];
}

if(isset($_GET['utm_term'])){
$_SESSION['utm_term'] = $_GET['utm_term'];
}

if(isset($_GET['utm_content'])){
$_SESSION['utm_content'] = $_GET['utm_content'];
}

/* Save page url */

$_SESSION['page_url'] =
"http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>


<!doctype html>
<html class="scroll-smooth">
    <head>
        <?php include "header.php"; ?>
</head>
<body class="font-poppins">


<style>
  .swiper-pagination-bullet-active {
    background-color: #00AEEF !important;
  }

  /* Swiper ke default bade arrows ko chota karne ke liye */
  .swiper-button-next::after, 
  .swiper-button-prev::after {
    font-size: 12px !important; /* Arrow ka size control karta hai */
    font-weight: bold;
    color: #fff;
  }
</style>



<?php include "navbar.php"; ?>

<section id="home" class="scroll-mt-20 md:mt-[75px] bg-center bg-[url('assets/img/bg-banner-mobile.webp')] md:bg-[url('assets/img/bg-banner-desktop.webp')] bg-cover bg-no-repeat py-8 md:py-28">

  <div class="max-w-[1150px] mx-auto px-4 flex flex-col md:flex-row gap-2 md:gap-10 items-left md:items-center justify-between">

    <!-- LEFT CONTENT -->
    <div class="md:col-span-1">

      <p class="uppercase tracking-wide text-gray-200 mb-3">
        Fast Track Your Career With
      </p>

      <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-[#FFC107] to-[#FFF3A3] bg-clip-text text-transparent">
   Online MBA*
</h1>

      <div>
        <div class="flex items-center">
          <div class="flex flex-col items-start">
            <div class="relative">
              <span class="absolute left-1 text-[11px] tracking-wide text-white">FROM</span>
              <span class="text-9xl font-semibold leading-none bg-gradient-to-r from-[#FFC107] to-[#FFF3A3] bg-clip-text text-transparent">1</span>
              <div class="absolute bottom-2 left-1.5 flex flex-col justify-between h-8">
                <div class="w-2 h-1/2 border-l border-t border-[#FFC107]"></div>
                <div class="w-2 h-1/2 border-l border-b border-[#FFC107]"></div>
              </div>
              <div class="absolute bottom-2 right-0 flex flex-col justify-between h-8">
                <div class="w-2 h-1/2 border-r border-t border-[#FFC107]"></div>
                <div class="w-2 h-1/2 border-r border-b border-[#FFC107]"></div>
              </div>
            </div>
          </div>
          <div class="flex flex-col leading-tight">
            <span class="text-[#FFC107] text-xl md:text-2xl font-semibold uppercase">INDIA'S 
              <span class="text-white">MOST</span>
            </span><span class="text-white text-l  md:text-2xl uppercase font-medium">TRUSTED UGC APPROVED</span>
            <span class="text-white text-l md:text-2xl uppercase font-medium">UNIVERSITIES</span>
          </div>
        </div>
      </div>

      <button onclick="openForm('brochure-form.php?pdf=brochure.pdf')" class="bg-yellow-400 text-black font-semibold px-4 py-3 rounded-full hover:bg-yellow-300 transition flex items-center gap-2 mt-5"> Download Brochure <i class="fas fa-download ml-1"></i></button>

      <!-- Deadline -->
      <p class="my-4 text-gray-200 italic">
        Admission Deadline:<br>
        <span class="text-yellow-400 font-semibold">"<?php echo $lastDate; ?>"</span>
      </p>

    </div>

    <!-- <button onclick="handleGiftClick()" class="md:hidden flex items-center gap-2 bg-[#25D366] text-white px-4 py-2 mx-auto mb-2 rounded-[10px] shadow-lg group relative overflow-hidden active:scale-95 transition-transform">
    <div class="w-[30px] h-[30px] bg-white rounded-full flex items-center justify-center animate-icon-pulse flex-shrink-0">
        <img src="assets/img/gift.gif" class="w-[30px] h-[30px] rounded-full" alt="Gift Icon">
    </div>
    <span class="text-[14px] md:text-[14px] font-bold tracking-wide transition-all">
        Scholarship Coupon Code
    </span>
    <div class="absolute inset-0 w-full h-full animate-shimmer"></div>
    </button> -->

    <!-- FORM -->
    <div class="bg-[#fff] shadow-lg rounded-lg p-6 w-[100%] md:w-[35%]">
      <?php include "main-form.php"; ?>
    </div>

  </div>

</section>



<section id="approvals" class="scroll-mt-20 bg-[#0970b8] py-12">
   <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-10">
         <p class="text-white/90 text-sm font-semibold tracking-widest uppercase mb-1">INDIA'S TOP LEADING UNIVERSITY</p>
         <h2 class="text-2xl md:text-3xl font-bold text-white tracking-wide uppercase">APPROVALS &amp; RECOGNITIONS</h2>
      </div>
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
         <div class="bg-white rounded-xl p-5 flex flex-col items-center text-center shadow-lg hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 h-full">
            <div class="h-17.5 mb-2 flex items-center justify-center"><img alt="AACSB" loading="lazy" width="1250" height="60" decoding="async" data-nimg="1" class="object-contain max-h-full" style="color:transparent" src="assets/img/aacsb-69c2858098c79.webp"></div>
            <p class="text-[12px] md:text-[15px] font-bold text-black uppercase tracking-wide leading-tight flex items-center justify-center">AACSB</p>
            <p class="text-[11px] text-gray-800 leading-relaxed mt-1 min-h-12.5">Association to Advance Collegiate Schools of Business.</p>
         </div>
         <div class="bg-white rounded-xl p-5 flex flex-col items-center text-center shadow-lg hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 h-full">
            <div class="h-17.5 mb-2 flex items-center justify-center"><img alt="UGC Entitled" loading="lazy" width="1250" height="60" decoding="async" data-nimg="1" class="object-contain max-h-full" style="color:transparent" src="assets/img/ugc-69c2857f70d9f.webp"></div>
            <p class="text-[12px] md:text-[15px] font-bold text-black uppercase tracking-wide leading-tight flex items-center justify-center">UGC Entitled</p>
            <p class="text-[11px] text-gray-800 leading-relaxed mt-1 min-h-12.5">Recognised by the University Grants Commission of India (UGC).</p>
         </div>
         <div class="bg-white rounded-xl p-5 flex flex-col items-center text-center shadow-lg hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 h-full">
            <div class="h-17.5 mb-2 flex items-center justify-center"><img alt="NIRF Ranked" loading="lazy" width="1250" height="60" decoding="async" data-nimg="1" class="object-contain max-h-full" style="color:transparent" src="assets/img/nirf-69c2857f23104.webp"></div>
            <p class="text-[12px] md:text-[15px] font-bold text-black uppercase tracking-wide leading-tight flex items-center justify-center">NIRF Ranked</p>
            <p class="text-[11px] text-gray-800 leading-relaxed mt-1 min-h-12.5">Ranked by National Institutional Ranking Framework.</p>
         </div>
         <div class="bg-white rounded-xl p-5 flex flex-col items-center text-center shadow-lg hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 h-full">
            <div class="h-17.5 mb-2 flex items-center justify-center"><img alt="QS Ranking" loading="lazy" width="1250" height="60" decoding="async" data-nimg="1" class="object-contain max-h-full" style="color:transparent" src="assets/img/qs-69c2857ff0fb7.webp"></div>
            <p class="text-[12px] md:text-[15px] font-bold text-black uppercase tracking-wide leading-tight flex items-center justify-center">QS Ranking</p>
            <p class="text-[11px] text-gray-800 leading-relaxed mt-1 min-h-12.5">Globally ranked by QS World University Rankings.</p>
         </div>
         <div class="bg-white rounded-xl p-5 flex flex-col items-center text-center shadow-lg hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 h-full">
            <div class="h-17.5 mb-2 flex items-center justify-center"><img alt="THE Ranking" loading="lazy" width="1250" height="60" decoding="async" data-nimg="1" class="object-contain max-h-full" style="color:transparent" src="assets/img/the-69c2857fee8ce.webp"></div>
            <p class="text-[12px] md:text-[15px] font-bold text-black uppercase tracking-wide leading-tight flex items-center justify-center">THE Ranking</p>
            <p class="text-[11px] text-gray-800 leading-relaxed mt-1 min-h-12.5">Ranked by the Times Higher Education Asia University Rankings.</p>
         </div>
         <div class="bg-white rounded-xl p-5 flex flex-col items-center text-center shadow-lg hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 h-full">
            <div class="h-17.5 mb-2 flex items-center justify-center"><img alt="IoE Recognised" loading="lazy" width="1250" height="60" decoding="async" data-nimg="1" class="object-contain max-h-full" style="color:transparent" src="assets/img/institute.webp"></div>
            <p class="text-[12px] md:text-[15px] font-bold text-black uppercase tracking-wide leading-tight flex items-center justify-center">IoE Recognised</p>
            <p class="text-[11px] text-gray-800 leading-relaxed mt-1 min-h-12.5">Institute of Eminence recognised by the Ministry of Education for excellence.</p>
         </div>
      </div>
   </div>
</section>




<section id="about" class="bg-[#f4f6f9] scroll-mt-20 py-10 border-none flex justify-center">
   <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="bg-white rounded-3xl px-2 py-6 md:p-12 shadow-2xl mx-auto flex flex-col items-center text-center">
         <h2 class="text-xl md:text-4xl font-bold mt-3 text-gray-900 mb-1">ABOUT – MASTER OF BUSINESS ADMINISTRATION</h2>
         <p class="text-gray-600 mb-4 md:text-xl font-medium leading-relaxed text-sm">Online MBA</p>
         <p class="text-gray-800 mb-4 leading-relaxed px-4 text-center text-sm md:text-base"><span class="block mb-2">This program online MBA has been designed for learners and professionals who want to accelerate their careers despite their prior commitments. This highly flexible online MBA course allows them to gain knowledge in advanced business studies, enhances leadership skills and offers global exposure.</span><span class="block mb-2">This course differs from the traditional program pattern. The online MBA degree in Online MBA course extends an opportunity for individuals to balance both their studies and work while achieving their career ambitions.</span><span class="block mb-2">The Online MBA program online benefits students with a curriculum that makes them industry-ready and offers practical learning. It prepares students for real-world challenges. It transforms careers and growth, supporting the leadership roles. Overall, this online MBA offers convenient learning, which is credible and leads to career advancement.</span></p>
         <div class="w-full grid grid-cols-2 md:grid-cols-3 p-2 justify-around items-center gap-6 mb-8">
            <div class="flex flex-col items-center space-y-2">
               <div class="bg-blue-50 p-3 rounded-full text-[#0a70b8]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock">
                     <circle cx="12" cy="12" r="10"></circle>
                     <polyline points="12 6 12 12 16 14"></polyline>
                  </svg>
               </div>
               <p class="font-bold text-dark-blue">Duration</p>
               <p class="text-sm text-gray-500">12 months (Fastrack)</p>
            </div>
            <div class="flex flex-col items-center space-y-2">
               <div class="bg-blue-50 p-3 rounded-full text-[#0a70b8]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap">
                     <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                     <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                  </svg>
               </div>
               <p class="font-bold text-dark-blue">Eligibility</p>
               <p class="text-sm text-gray-500">50% in graduation from any recognized university</p>
            </div>
            <div class="flex flex-col items-center space-y-2">
               <div class="bg-blue-50 p-3 rounded-full text-[#0a70b8]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor-play">
                     <path d="m10 8 6 4-6 4Z"></path>
                     <rect width="20" height="14" x="2" y="3" rx="2"></rect>
                     <path d="M12 17v4"></path>
                     <path d="M8 21h8"></path>
                  </svg>
               </div>
               <p class="font-bold text-dark-blue">Specialization</p>
               <p class="text-sm text-gray-500">20+ Top in demand specializations Available</p>
            </div>
         </div>
         <button onclick="openForm('default-form.php')" class="bg-yellow-400 text-black font-semibold px-8 py-3 rounded-full hover:bg-yellow-300 transition flex items-center gap-2"> Get 100% Free 1:1 Counselling</button>
      </div>
   </div>
</section>




<section id="specialization" class="scroll-mt-20 bg-[#f4f6f9] py-10 px-[40px]">
    <div class="max-w-7xl mx-auto relative">
        <h2 class="text-2xl md:text-3xl font-bold text-black text-center mb-6 uppercase">
            Top In-Demand Specializations of Online MBA
        </h2>

        <div class="swiper mySwiper pb-12">
            <div class="swiper-wrapper pt-2">

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/ai_for_business.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">AI for Business</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This program offers a better understanding of how artificial intelligence drives business decisions, automation, and innovation. This specialization in a online MBA enhances the leverage of  AI tools so that one can be efficient and grow strategically.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/digital_finance.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Digital Finance</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                The course makes one explore digital payments, blockchain, and fintech innovations.It helps them in shaping modern finance. This specialization equips learners with skills to navigate the evolving world of financial technologies and the digital landscape.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/strategy.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Strategy & Leadership</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This program develops critical thinking abilities, which help learners enhance their leadership and decision-making skills for senior roles. This specialization within an online MBA degree in Online MBA prepares you to be a strategy driven leaders and achieve long-term business success.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/finance_management.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Finance Management</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                Learners gain expertise in financial planning and different aspects such as investment analysis and risk management. This specialization in a online MBA prepares them for roles in sectors of banking or corporate finance and financial consulting with real-world business insights.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/marketing_management.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Marketing Management</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This program assists in strengthening the tactics of master branding and digital marketing. It helps learners to learn the consumer behaviour strategies. This Online MBA programs online, this specialization helps individuals drive growth, create impactful campaigns in competitive industries.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/human_resource_management.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Human Resource Management</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This online MBA degree in Online MBA specialization develops skills in the aspects of talent acquisition, employee engagement, and organisational behaviour. This program prepares learners to manage the dynamics of a workplace and relate HR strategies to business goals.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/operations_management.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Operations Management</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This operation specialization in  Online MBA programs online program focuses on optimising business operations, which strengthens the productivity and profitability. Students learn to improve their efficiency by streamlining processes and managing supply chains effectively.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/information_technology.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Information Technology</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This specialization in Online MBA is a blend of business and technology. It promotes IT strategy and transformation in the digital world, which equips individuals to lead tech-driven initiatives in modern organisations. Overall enhances their career profile for successful future.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/healthcare_and_hospital_management.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Healthcare and Hospital Management</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                Students gain knowledge in the healthcare department, learn to manage healthcare systems and administrations, and policy management. This MBA degree in Online MBA is ideal for professionals seeking opportunities in hospitals, healthcare firms, and administration roles.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/data_analytics.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Data Analytics</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This 12 months MBA online specialization teaches students to interpret complex data. It enables them to drive business decisions using analytical tools. Overall, the program strengthens the working professionals and learners to turn data into insights that are exemplary across industries.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/business_analytics.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Business Analytics</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This Online MBA program, specialization in business analytics, focuses on data-driven decision-making. It teaches learners tactics of predictive modelling and business intelligence. Overall, this program bridges the gap between data analysis and strategic business outcomes.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/international_business.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">International Business</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This specialization in MBA explores global markets, teaches cross-cultural management, and offers strategies needed for international marketing. Overall, this domain in Online MBA programs prepares learners for careers in the global business world of multinational corporations.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/project_management.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Project Management</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This domain in executive MBA online develop expertise in accessible planning, executing, and delivering projects on time. Overall, this specialization enhances the abilities of working professionals to manage timelines and resources, which is reflected in the performance of teams.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/hospitality_management.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Hospitality Management</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This domain equips professionals with the knowledge of hotel operations, customer service, and management in tourism departments. This hospitality management specialization in Online MBA programs online prepares them for leadership roles in the hospitality and service industry.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/international_finance.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">International Finance</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This domain equips students to gain insights into global financial markets, forex management, and international investments. This online MBA course promotes high-level finance roles among professionals across borders.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/retail_management.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Retail Management</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This specialization in Online MBA schools offers a better understanding of retail operations. Students gain knowledge of merchandising and consumer trends. Overall, this specialization equips students to manage retail businesses and enhance customer experience in competitive markets.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/logistics_and_supply_chain_management.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Logistics and Supply Chain Management</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                The Logistics and Supply Chain Management MBA program provides in-depth knowledge in logistics, procurement, and distribution networks. Overall, this domain in an MBA Online course equips learners to manage global supply chains. It ensures smooth business operations in sectors.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/fintech_management.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Fintech Management</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This program explores digital finance and blockchain. Students get in-depth knowledge of financial technologies, which is required for the present-day transforming industry. Overall, Online executive MBA specialization enhances the opportunity  for innovative roles in fintech startups.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/banking_and_finance_management.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">Banking and Finance Management</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                This specialization of MBA online learning builds expertise in banking systems, credit management, and financial services. It prepares students for promising careers in banking and financial institutions and organisations.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto transition-all hover:-translate-y-2 hover:shadow-2xl rounded-xl">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg h-full flex flex-col">
                        <div class="relative h-30">
                            <img src="assets/img/general_management.webp" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col justify-between h-full">
                            <h3 class="text-[16px] font-bold text-black pb-2">General Management</h3>
                            <p class="text-gray-600 text-[12px] leading-relaxed">
                                Learners build a strong foundation in leadership, strategy, and decision-making with this specialization. It domain is ideal for professionals pursuing a online MBA as it equips them with versatile skills to manage teams, operations, and business growth effectively.
                            </p>
                            <span class="text-gray-800 text-[12px] flex items-center pt-2"><i class="mr-1 far fa-clock"></i> 12 Months</span>
                            <button class="bg-[#1c3569] text-white font-bold py-2 px-4 mt-4 rounded text-sm w-full rounded-full" onclick="openForm('default-form.php')">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

    

            </div>

            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-button-prev !left-[-20px] !w-8 !h-8 !bg-[#1c3569] !rounded-full !shadow-lg !text-white"></div>
            <div class="swiper-button-next !right-[-20px] !w-8 !h-8 !bg-[#1c3569] !rounded-full !shadow-lg !text-white"></div>
    </div>
</section>



<section id="why" class="scroll-mt-20 relative w-full py-16 md:py-24 overflow-hidden text-white">
   <img alt="Key Highlights Person" decoding="async" data-nimg="fill" class="hidden md:block object-cover object-center" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/key-highlights-bg-image-69c28585775f9.webp"><img alt="Hero mobile background" decoding="async" data-nimg="fill" class="block md:hidden object-cover object-center" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/oooo-69c7b5034fa79 (1).webp">
   <div class="absolute inset-0 bg-black/50"></div>
   <div class="relative z-10 w-full">
      <div class="flex flex-col lg:flex-row items-center">
         <div class="hidden lg:block lg:w-5/12"></div>
         <div class="w-full lg:w-7/12 flex flex-col items-center px-6 mr-0 md:mr-20 mt-30 md:mt-0">
            <div class="mb-12 text-center">
               <h2 class="text-3xl md:text-4xl font-extrabold uppercase text-[#00AEEF]">Key Highlights</h2>
               <p class="text-xl md:text-3xl lg:text-4xl font-bold mt-1 text-white">Online MBA</p>
            </div>
            <div class="w-full max-w-3xl">
               <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                  <div class="
                     flex flex-col items-center justify-center text-center
                     px-4 md:px-6 py-5 md:py-6 min-h-50
                     border border-white/30
                     ">
                     <div class="w-14 h-14 flex items-center justify-center rounded-full mb-3"><img alt="Fast-Track Your Career Growth" loading="lazy" width="32" height="32" decoding="async" data-nimg="1" class="object-contain" style="color:transparent" src="assets/img/Fast-Track Your Career Growth.webp"></div>
                     <div class="space-y-2">
                        <h3 class="text-sm md:text-base font-bold text-white leading-snug">Fast-Track Your Career Growth</h3>
                        <p class="text-xs md:text-sm text-white/70 max-w-xs mx-auto leading-relaxed">Accelerate career growth quickly through a flexible online MBA </p>
                     </div>
                  </div>
                  <div class="
                     flex flex-col items-center justify-center text-center
                     px-4 md:px-6 py-5 md:py-6 min-h-50
                     ">
                     <div class="w-14 h-14 flex items-center justify-center rounded-full mb-3"><img alt="Specialise with In-Demand Career Options" loading="lazy" width="32" height="32" decoding="async" data-nimg="1" class="object-contain" style="color:transparent" src="assets/img/Specialise Smartly with In-Demand Career Options.webp"></div>
                     <div class="space-y-2">
                        <h3 class="text-sm md:text-base font-bold text-white leading-snug">Specialise with In-Demand Career Options</h3>
                        <p class="text-xs md:text-sm text-white/70 max-w-xs mx-auto leading-relaxed">Choose industry-relevant domains aligned with top Online MBA programs online</p>
                     </div>
                  </div>
                  <div class="
                     flex flex-col items-center justify-center text-center
                     px-4 md:px-6 py-5 md:py-6 min-h-50
                     border border-white/30
                     ">
                     <div class="w-14 h-14 flex items-center justify-center rounded-full mb-3"><img alt="Learn from  Real Industry Experts." loading="lazy" width="32" height="32" decoding="async" data-nimg="1" class="object-contain" style="color:transparent" src="assets/img/Learn from Experts Who Bring Real Industry Insights.webp"></div>
                     <div class="space-y-2">
                        <h3 class="text-sm md:text-base font-bold text-white leading-snug">Learn from  Real Industry Experts.</h3>
                        <p class="text-xs md:text-sm text-white/70 max-w-xs mx-auto leading-relaxed"> Gain practical insights from mentors in a online MBA</p>
                     </div>
                  </div>
                  <div class="
                     flex flex-col items-center justify-center text-center
                     px-4 md:px-6 py-5 md:py-6 min-h-50
                     ">
                     <div class="w-14 h-14 flex items-center justify-center rounded-full mb-3"><img alt="Upskill with Certifications While Studying" loading="lazy" width="32" height="32" decoding="async" data-nimg="1" class="object-contain" style="color:transparent" src="assets/img/highlight-01-69c2866fc695f.webp"></div>
                     <div class="space-y-2">
                        <h3 class="text-sm md:text-base font-bold text-white leading-snug">Upskill with Certifications While Studying</h3>
                        <p class="text-xs md:text-sm text-white/70 max-w-xs mx-auto leading-relaxed">Earn while learning and gain valuable additional certifications simultaneously.</p>
                     </div>
                  </div>
                  <div class="
                     flex flex-col items-center justify-center text-center
                     px-4 md:px-6 py-5 md:py-6 min-h-50
                     border border-white/30
                     ">
                     <div class="w-14 h-14 flex items-center justify-center rounded-full mb-3"><img alt="Flexible Learning for Working Professionals" loading="lazy" width="32" height="32" decoding="async" data-nimg="1" class="object-contain" style="color:transparent" src="assets/img/Flexible Learning Designed for Working Professionals (1).webp"></div>
                     <div class="space-y-2">
                        <h3 class="text-sm md:text-base font-bold text-white leading-snug">Flexible Learning for Working Professionals</h3>
                        <p class="text-xs md:text-sm text-white/70 max-w-xs mx-auto leading-relaxed">Study anytime, anywhere with a convenient online MBA</p>
                     </div>
                  </div>
                  <div class="
                     flex flex-col items-center justify-center text-center
                     px-4 md:px-6 py-5 md:py-6 min-h-50
                     ">
                     <div class="w-14 h-14 flex items-center justify-center rounded-full mb-3"><img alt="Turn knowledge into real-world projects" loading="lazy" width="32" height="32" decoding="async" data-nimg="1" class="object-contain" style="color:transparent" src="assets/img/highligh-02-69c2866f323d1.webp"></div>
                     <div class="space-y-2">
                        <h3 class="text-sm md:text-base font-bold text-white leading-snug">Turn knowledge into real-world projects</h3>
                        <p class="text-xs md:text-sm text-white/70 max-w-xs mx-auto leading-relaxed"> Gain practical exposure through hands-on learning in Online MBA programs</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mt-12 w-full flex justify-center"><button onclick="openForm('default-form.php')" class="bg-[#FFD700] hover:bg-[#FFC700] text-black rounded-full px-6 py-3 text-sm md:px-10 md:py-2 md:text-lg font-bold shadow-lg hover:scale-105 transition-all duration-300 cursor-pointer">Get 100% FREE 1:1 Counseling</button></div>
         </div>
      </div>
   </div>
</section>






<section class="py-16 md:py-24 bg-[#0970B8] text-white">
   <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
         <h2 class="text-3xl md:text-4xl font-bold uppercase tracking-wide">WHO IS THIS PROGRAM FOR?</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto mb-10">
         <div class="bg-white rounded-2xl shadow-xl overflow-hidden text-center flex flex-col items-center pb-6">
            <div class="relative h-44 sm:h-52 w-full mb-6"><img alt="FRESH GRADUATES" loading="lazy" decoding="async" data-nimg="fill" class="object-cover" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/fresh-graduate-69c2858302fb4.webp"></div>
            <p class="text-lg md:text-[16px] text-white bg-[#1C3569] px-6 py-2 rounded-full transform -translate-y-12 shadow-lg -mb-6 whitespace-nowrap uppercase tracking-wider">FRESH GRADUATES</p>
            <p class="text-black text-sm px-6 font-medium leading-relaxed">Graduates are getting an opportunity to start careers quickly with a online MBA, gaining essential business skills and exposure.</p>
         </div>
         <div class="bg-white rounded-2xl shadow-xl overflow-hidden text-center flex flex-col items-center pb-6">
            <div class="relative h-44 sm:h-52 w-full mb-6"><img alt="WORKING PROFESSIONALS" loading="lazy" decoding="async" data-nimg="fill" class="object-cover" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/working-professional-69c285821c9b2.webp"></div>
            <p class="text-lg md:text-[16px] text-white bg-[#1C3569] px-6 py-2 rounded-full transform -translate-y-12 shadow-lg -mb-6 whitespace-nowrap uppercase tracking-wider">WORKING PROFESSIONALS</p>
            <p class="text-black text-sm px-6 font-medium leading-relaxed">Professionals can now advance their careers without breaks through a flexible online MBA, which extends growth in their careers.</p>
         </div>
         <div class="bg-white rounded-2xl shadow-xl overflow-hidden text-center flex flex-col items-center pb-6">
            <div class="relative h-44 sm:h-52 w-full mb-6"><img alt="CAREER SWITCHERS" loading="lazy" decoding="async" data-nimg="fill" class="object-cover" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/career-switchers-69c28581e81e6.webp"></div>
            <p class="text-lg md:text-[16px] text-white bg-[#1C3569] px-6 py-2 rounded-full transform -translate-y-12 shadow-lg -mb-6 whitespace-nowrap uppercase tracking-wider">CAREER SWITCHERS</p>
            <p class="text-black text-sm px-6 font-medium leading-relaxed">Individuals planning a transition can switch into new roles confidently with an online MBA degree and industry-ready skills.</p>
         </div>
      </div>
      <div class="text-center mt-6">
        <button onclick="handleGiftClick()" class="flex items-center gap-2 bg-[#ffc107] text-black px-4 py-2 mx-auto mb-2 rounded-[10px] shadow-lg group relative overflow-hidden active:scale-95 transition-transform">
    <div class="w-[30px] h-[30px] bg-white rounded-full flex items-center justify-center animate-icon-pulse flex-shrink-0">
        <img src="assets/img/gift.gif" class="w-[30px] h-[30px] rounded-full" alt="Gift Icon">
    </div>
    <span class="text-[14px] md:text-[14px] font-bold tracking-wide transition-all">
        Scholarship Coupon Code
    </span>
    <div class="absolute inset-0 w-full h-full animate-shimmer"></div>
    </button>
      </div>
   </div>
</section>




<section class="bg-[#F3F7FB] py-6 w-full relative z-10 shadow-sm">
   <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 md:grid-cols-4 max-w-6xl mx-auto">
         <div class="flex items-start gap-3 py-4 px-2">
            <div class="w-10 h-10 md:w-12 md:h-12 relative shrink-0"><img alt="Student Enrolled" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/student-enrolled-69c77be215a67.webp"></div>
            <div class="flex flex-col leading-tight"><span class="text-xl md:text-3xl font-bold text-[#112255]">50K+</span><span class="text-[11px] md:text-sm font-medium text-gray-500">Student Enrolled</span></div>
         </div>
         <div class="flex items-start gap-3 py-4 px-2">
            <div class="w-10 h-10 md:w-12 md:h-12 relative shrink-0"><img alt="Specialization" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/speciisation-69c77be218663.webp"></div>
            <div class="flex flex-col leading-tight"><span class="text-xl md:text-3xl font-bold text-[#112255]">20+</span><span class="text-[11px] md:text-sm font-medium text-gray-500">Specialization</span></div>
         </div>
         <div class="flex items-start gap-3 py-4 px-2">
            <div class="w-10 h-10 md:w-12 md:h-12 relative shrink-0"><img alt="Top Universities" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/university-69c77be26e228.webp"></div>
            <div class="flex flex-col leading-tight"><span class="text-xl md:text-3xl font-bold text-[#112255]">15+</span><span class="text-[11px] md:text-sm font-medium text-gray-500">Top Universities</span></div>
         </div>
         <div class="flex items-start gap-3 py-4 px-2">
            <div class="w-10 h-10 md:w-12 md:h-12 relative shrink-0"><img alt="Placements Assistance" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/placement-assistance-69c77be272285.webp"></div>
            <div class="flex flex-col leading-tight"><span class="text-xl md:text-3xl font-bold text-[#112255]">100%</span><span class="text-[11px] md:text-sm font-medium text-gray-500">Placements Assistance</span></div>
         </div>
      </div>
   </div>
</section>



<section class="py-12 md:py-14 bg-[#f4f6f9]">
   <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-6 md:mb-8">
         <h2 class="text-2xl md:text-5xl font-bold text-gray-900 leading-snug">How to Enroll in an Online MBA?            </h2>
         <p class="text-black text-base md:text-2xl">Admission Process</p>
      </div>
      <div class="relative">
         <div class="hidden lg:block absolute left-0 right-0 border-t-2 border-dashed border-[#00AEEF] z-0" style="top:140px"></div>
         <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-5 gap-4 md:gap-6 items-stretch relative z-10">
            <div class="relative flex flex-col items-center h-full">
               <div class="w-10 h-9 md:w-12 md:h-10 bg-[#00AEEF] text-white font-bold flex items-center justify-center text-xs md:text-base shadow-md z-10 relative top-4" style="clip-path:polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%)">01</div>
               <div class="w-full h-full bg-white shadow-md md:shadow-lg rounded-2xl pt-10 md:pt-12 pb-5 md:pb-6 px-3 md:px-5 flex flex-col text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                  <div class="flex flex-col items-center grow">
                     <div class="mb-3 w-8 h-8 md:w-10 md:h-10 relative"><img alt="SUBMIT QUERY FORM" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/step-01-69c77e77ed4fd.webp"></div>
                     <h4 class="text-[11px] md:text-[14px] font-bold text-gray-800 uppercase leading-tight min-h-8 flex items-center justify-center px-1">SUBMIT QUERY FORM</h4>
                  </div>
                  <div class="mt-3 w-full">
                     <div class="border border-dashed border-gray-400 rounded-md px-2 md:px-3 py-2 min-h-12 flex items-center justify-center">
                        <p class="text-[10px] md:text-[11px] text-gray-600 leading-relaxed text-center">Begin the journey by submitting your details. Then individuals can explore the right Online MBA programs suited to their career goals.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="relative flex flex-col items-center h-full">
               <div class="w-10 h-9 md:w-12 md:h-10 bg-[#00AEEF] text-white font-bold flex items-center justify-center text-xs md:text-base shadow-md z-10 relative top-4" style="clip-path:polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%)">02</div>
               <div class="w-full h-full bg-white shadow-md md:shadow-lg rounded-2xl pt-10 md:pt-12 pb-5 md:pb-6 px-3 md:px-5 flex flex-col text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                  <div class="flex flex-col items-center grow">
                     <div class="mb-3 w-8 h-8 md:w-10 md:h-10 relative"><img alt="GET FREE COUNSELING" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/step-02-69c77e785e629.webp"></div>
                     <h4 class="text-[11px] md:text-[14px] font-bold text-gray-800 uppercase leading-tight min-h-8 flex items-center justify-center px-1">GET FREE COUNSELING</h4>
                  </div>
                  <div class="mt-3 w-full">
                     <div class="border border-dashed border-gray-400 rounded-md px-2 md:px-3 py-2 min-h-12 flex items-center justify-center">
                        <p class="text-[10px] md:text-[11px] text-gray-600 leading-relaxed text-center"> Connect with experts to understand the Online MBA programs and choose the right specialization of MBA degree based on your profile.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="relative flex flex-col items-center h-full">
               <div class="w-10 h-9 md:w-12 md:h-10 bg-[#00AEEF] text-white font-bold flex items-center justify-center text-xs md:text-base shadow-md z-10 relative top-4" style="clip-path:polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%)">03</div>
               <div class="w-full h-full bg-white shadow-md md:shadow-lg rounded-2xl pt-10 md:pt-12 pb-5 md:pb-6 px-3 md:px-5 flex flex-col text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                  <div class="flex flex-col items-center grow">
                     <div class="mb-3 w-8 h-8 md:w-10 md:h-10 relative"><img alt="CHOOSE UNIVERSITY" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/step-03-69c77e77ecd47.webp"></div>
                     <h4 class="text-[11px] md:text-[14px] font-bold text-gray-800 uppercase leading-tight min-h-8 flex items-center justify-center px-1">CHOOSE UNIVERSITY</h4>
                  </div>
                  <div class="mt-3 w-full">
                     <div class="border border-dashed border-gray-400 rounded-md px-2 md:px-3 py-2 min-h-12 flex items-center justify-center">
                        <p class="text-[10px] md:text-[11px] text-gray-600 leading-relaxed text-center"> Select from the top Online MBA schools offering flexible and industry-relevant Online MBA course options tailored to your specialization and interest.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="relative flex flex-col items-center h-full">
               <div class="w-10 h-9 md:w-12 md:h-10 bg-[#00AEEF] text-white font-bold flex items-center justify-center text-xs md:text-base shadow-md z-10 relative top-4" style="clip-path:polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%)">04</div>
               <div class="w-full h-full bg-white shadow-md md:shadow-lg rounded-2xl pt-10 md:pt-12 pb-5 md:pb-6 px-3 md:px-5 flex flex-col text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                  <div class="flex flex-col items-center grow">
                     <div class="mb-3 w-8 h-8 md:w-10 md:h-10 relative"><img alt="FEES PAYMENT" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/step-04-69c77e7798970.webp"></div>
                     <h4 class="text-[11px] md:text-[14px] font-bold text-gray-800 uppercase leading-tight min-h-8 flex items-center justify-center px-1">FEES PAYMENT</h4>
                  </div>
                  <div class="mt-3 w-full">
                     <div class="border border-dashed border-gray-400 rounded-md px-2 md:px-3 py-2 min-h-12 flex items-center justify-center">
                        <p class="text-[10px] md:text-[11px] text-gray-600 leading-relaxed text-center"> Secure your seat in a Online program MBA by completing the fee process. Get access to a flexible and career-focused learning experience.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="relative flex flex-col items-center h-full">
               <div class="w-10 h-9 md:w-12 md:h-10 bg-[#00AEEF] text-white font-bold flex items-center justify-center text-xs md:text-base shadow-md z-10 relative top-4" style="clip-path:polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%)">05</div>
               <div class="w-full h-full bg-white shadow-md md:shadow-lg rounded-2xl pt-10 md:pt-12 pb-5 md:pb-6 px-3 md:px-5 flex flex-col text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                  <div class="flex flex-col items-center grow">
                     <div class="mb-3 w-8 h-8 md:w-10 md:h-10 relative"><img alt="CONFIRMATION" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="assets/img/step-05-69c77e7797f53.webp"></div>
                     <h4 class="text-[11px] md:text-[14px] font-bold text-gray-800 uppercase leading-tight min-h-8 flex items-center justify-center px-1">CONFIRMATION</h4>
                  </div>
                  <div class="mt-3 w-full">
                     <div class="border border-dashed border-gray-400 rounded-md px-2 md:px-3 py-2 min-h-12 flex items-center justify-center">
                        <p class="text-[10px] md:text-[11px] text-gray-600 leading-relaxed text-center"> Receive your admission confirmation and begin your Online executive MBA or chosen specialization with full academic support.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="text-center mt-10 md:mt-12">
         <button onclick="openForm('default-form.php')" class="bg-[#00AEEF] hover:bg-[#0096C7] text-white font-bold px-6 md:px-10 py-3 rounded-lg inline-flex items-center gap-2 md:gap-3 uppercase tracking-wider transition-all hover:scale-105 shadow-lg cursor-pointer text-sm md:text-base">
            Proceed For Step 1 Now
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="md:w-5 md:h-5">
               <path d="M5 12h14"></path>
               <path d="m12 5 7 7-7 7"></path>
            </svg>
         </button>
      </div>
   </div>
</section>





<section class="py-16 md:py-28 bg-[#112255] text-white overflow-hidden">
   <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12 md:mb-16 px-4">
         <h2 class="text-2xl md:text-4xl font-bold uppercase tracking-tight leading-snug">Why Choose Online MBA Program?</h2>
      </div>
      <div class="grid grid-cols-2 gap-4 md:gap-x-8 md:gap-y-6 max-w-6xl mx-auto px-4">
         <div class="bg-white rounded-2xl p-4 md:p-10  flex flex-col items-center text-center md:text-left  md:flex-row md:items-center  hover:scale-[1.02] transition-all duration-300 shadow-xl">
            <div class="shrink-0 mb-3 md:mb-0 md:mr-6"><img alt="Accelerated Career Growth" loading="lazy" width="50" height="45" decoding="async" data-nimg="1" class="object-contain" style="color:transparent" src="assets/img/why-choose-01-69c28580993bb.webp"></div>
            <div>
               <h4 class="font-extrabold text-[#112255] mb-1 text-sm md:text-xl leading-tight">Accelerated Career Growth</h4>
               <p class="text-gray-600 text-xs md:text-base font-medium mt-2">Fast-track success with a flexible Online MBA format.</p>
            </div>
         </div>
         <div class="bg-white rounded-2xl p-4 md:p-10  flex flex-col items-center text-center md:text-left  md:flex-row md:items-center  hover:scale-[1.02] transition-all duration-300 shadow-xl">
            <div class="shrink-0 mb-3 md:mb-0 md:mr-6"><img alt="Industry-Aligned Specializations" loading="lazy" width="50" height="45" decoding="async" data-nimg="1" class="object-contain" style="color:transparent" src="assets/img/why-choose-01-69c28580993bb.webp"></div>
            <div>
               <h4 class="font-extrabold text-[#112255] mb-1 text-sm md:text-xl leading-tight">Industry-Aligned Specializations</h4>
               <p class="text-gray-600 text-xs md:text-base font-medium mt-2">Choose relevant domains within the top Online MBA programs.</p>
            </div>
         </div>
         <div class="bg-white rounded-2xl p-4 md:p-10  flex flex-col items-center text-center md:text-left  md:flex-row md:items-center  hover:scale-[1.02] transition-all duration-300 shadow-xl">
            <div class="shrink-0 mb-3 md:mb-0 md:mr-6"><img alt="Flexible Learning Experience" loading="lazy" width="50" height="45" decoding="async" data-nimg="1" class="object-contain" style="color:transparent" src="assets/img/why-choose-02-69c285814da05.webp"></div>
            <div>
               <h4 class="font-extrabold text-[#112255] mb-1 text-sm md:text-xl leading-tight">Flexible Learning Experience</h4>
               <p class="text-gray-600 text-xs md:text-base font-medium mt-2">Balance work easily through a practical Online MBA.</p>
            </div>
         </div>
         <div class="bg-white rounded-2xl p-4 md:p-10  flex flex-col items-center text-center md:text-left  md:flex-row md:items-center  hover:scale-[1.02] transition-all duration-300 shadow-xl">
            <div class="shrink-0 mb-3 md:mb-0 md:mr-6"><img alt="Leadership &amp; Strategy Skills" loading="lazy" width="50" height="45" decoding="async" data-nimg="1" class="object-contain" style="color:transparent" src="assets/img/why-choose-02-69c285814da05.webp"></div>
            <div>
               <h4 class="font-extrabold text-[#112255] mb-1 text-sm md:text-xl leading-tight">Leadership &amp; Strategy Skills</h4>
               <p class="text-gray-600 text-xs md:text-base font-medium mt-2">Build decision-making expertise in a Online MBA course.</p>
            </div>
         </div>
         <div class="bg-white rounded-2xl p-4 md:p-10  flex flex-col items-center text-center md:text-left  md:flex-row md:items-center  hover:scale-[1.02] transition-all duration-300 shadow-xl">
            <div class="shrink-0 mb-3 md:mb-0 md:mr-6"><img alt="Hands-On Industry Projects" loading="lazy" width="50" height="45" decoding="async" data-nimg="1" class="object-contain" style="color:transparent" src="assets/img/why-choose-03-69c285814b9f8.webp"></div>
            <div>
               <h4 class="font-extrabold text-[#112255] mb-1 text-sm md:text-xl leading-tight">Hands-On Industry Projects</h4>
               <p class="text-gray-600 text-xs md:text-base font-medium mt-2">Solve real challenges in a Online program MBA.</p>
            </div>
         </div>
         <div class="bg-white rounded-2xl p-4 md:p-10  flex flex-col items-center text-center md:text-left  md:flex-row md:items-center  hover:scale-[1.02] transition-all duration-300 shadow-xl">
            <div class="shrink-0 mb-3 md:mb-0 md:mr-6"><img alt="Global Exposure &amp; Networking" loading="lazy" width="50" height="45" decoding="async" data-nimg="1" class="object-contain" style="color:transparent" src="assets/img/why-choose-03-69c285814b9f8.webp"></div>
            <div>
               <h4 class="font-extrabold text-[#112255] mb-1 text-sm md:text-xl leading-tight">Global Exposure &amp; Networking</h4>
               <p class="text-gray-600 text-xs md:text-base font-medium mt-2">Connect worldwide through advanced Online executive MBA.</p>
            </div>
         </div>
      </div>
   </div>
</section>




<section id="faq" class="scroll-mt-20 py-16 px-4 md:px-20 bg-white">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-2xl md:text-3xl font-bold text-[#003366] mb-4">
      Frequently Asked Questions
    </h2>

    <div class="divide-y divide-gray-200">
      
      <div class="faq-item py-6">
        <button class="faq-button flex justify-between items-center w-full text-left outline-none group">
          <span class="faq-question text-base md:text-md font-semibold text-gray-700 transition-all duration-300">
            Q1. Is online MBA have the same relevance as a traditional MBA? 
          </span>
          <div class="relative w-5 h-5 flex items-center justify-center flex-shrink-0">
             <div class="absolute w-3 h-[2px] bg-[#003366] rounded-full"></div>
             <div class="faq-icon-v absolute w-[2px] h-3 bg-[#003366] rounded-full transition-transform duration-300"></div>
          </div>
        </button>
        
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <p class="pt-4 text-gray-600 text-sm md:text-base leading-relaxed">
            Yes, It is a fast-track MBA online learning program that is beneficial for working professionals and graduates.
          </p>
        </div>
      </div>

      <div class="faq-item py-6">
        <button class="faq-button flex justify-between items-center w-full text-left outline-none group">
          <span class="faq-question text-base md:text-md font-semibold text-gray-700 transition-all duration-300">
           Q2. What are the top 5 in demand Online MBA program specializations?
          </span>
          <div class="relative w-5 h-5 flex items-center justify-center flex-shrink-0">
             <div class="absolute w-3 h-[2px] bg-[#003366] rounded-full"></div>
             <div class="faq-icon-v absolute w-[2px] h-3 bg-[#003366] rounded-full transition-transform duration-300"></div>
          </div>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <p class="pt-4 text-gray-600 text-sm md:text-base leading-relaxed">
            There are many in-demand specializations of online MBA course, yet the top 5 are: AI in Business, Finance, Marketing, Digital Finance and Strategy and Leadership.
          </p>
        </div>
      </div>

      <div class="faq-item py-6">
        <button class="faq-button flex justify-between items-center w-full text-left outline-none group">
          <span class="faq-question text-base md:text-md font-semibold text-gray-700 transition-all duration-300">
            Q3. Is a online MBA valid and recognised?
          </span>
          <div class="relative w-5 h-5 flex items-center justify-center flex-shrink-0">
             <div class="absolute w-3 h-[2px] bg-[#003366] rounded-full"></div>
             <div class="faq-icon-v absolute w-[2px] h-3 bg-[#003366] rounded-full transition-transform duration-300"></div>
          </div>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <p class="pt-4 text-gray-600 text-sm md:text-base leading-relaxed">
            Yes, MBA online learning course is valid as it is UGC approved and world wide recognised, having QS World Rankings and AACSB accreditation. 
          </p>
        </div>
      </div>


      <div class="faq-item py-6">
        <button class="faq-button flex justify-between items-center w-full text-left outline-none group">
          <span class="faq-question text-base md:text-md font-semibold text-gray-700 transition-all duration-300">
            Q4. What is the eligibility criteria needed for Masters in Business Administration online degree programs?
          </span>
          <div class="relative w-5 h-5 flex items-center justify-center flex-shrink-0">
             <div class="absolute w-3 h-[2px] bg-[#003366] rounded-full"></div>
             <div class="faq-icon-v absolute w-[2px] h-3 bg-[#003366] rounded-full transition-transform duration-300"></div>
          </div>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <p class="pt-4 text-gray-600 text-sm md:text-base leading-relaxed">
           The applicants should have a graduation degree from a recognised university, with a preferred score of 50% marks.
          </p>
        </div>
      </div>


      <div class="faq-item py-6">
        <button class="faq-button flex justify-between items-center w-full text-left outline-none group">
          <span class="faq-question text-base md:text-md font-semibold text-gray-700 transition-all duration-300">
            Q5. Is MBA online learning approved and advantageous? 
          </span>
          <div class="relative w-5 h-5 flex items-center justify-center flex-shrink-0">
             <div class="absolute w-3 h-[2px] bg-[#003366] rounded-full"></div>
             <div class="faq-icon-v absolute w-[2px] h-3 bg-[#003366] rounded-full transition-transform duration-300"></div>
          </div>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <p class="pt-4 text-gray-600 text-sm md:text-base leading-relaxed">
            Yes, a MBA online learning is UGC approved and quite focused on experiential learning. Students are taught through projects and several case studies. 
          </p>
        </div>
      </div>

    </div>
  </div>
</section>


<?php include "footer-content.php"; ?>
<?php include "footer.php"; ?>


<script>
(function() {

    let urlParams = new URLSearchParams(window.location.search);
    let hash = window.location.hash;

    let utms = {};

    // normal URL se
    urlParams.forEach((value, key) => {
        if(key.startsWith('utm_')){
            utms[key] = value;
        }
    });

    // hash se
    if(hash.includes('utm_')){
        let hashQuery = hash.split('?')[1];
        if(hashQuery){
            let hashParams = new URLSearchParams(hashQuery);
            hashParams.forEach((value, key) => {
                utms[key] = value;
            });
        }
    }

    // send to same page via fetch (session set karne ke liye)
    if(Object.keys(utms).length > 0){
        fetch(window.location.pathname, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(utms)
        });
    }

})();
</script>

</body>
</html>