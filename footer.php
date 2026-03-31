<div id="infoModal" class="fixed inset-0 bg-black/70 hidden z-[10000] flex items-center justify-center">
  <div class="bg-white max-w-3xl w-full mx-4 p-6 rounded-lg relative max-h-[90vh] overflow-y-auto">
    
    <span onclick="closeModal()" class="absolute top-3 right-4 text-2xl cursor-pointer font-bold text-gray-500 hover:text-black">&times;</span>

    <h2 id="modalTitle" class="text-[26px] font-bold mb-2 text-center text-[#003366]">Title</h2>
    <hr class="mb-2 border-gray-300">
    
    <div id="modalBody" class="text-[14px] leading-relaxed text-gray-700">
      </div>
  </div>
</div>

<script>
  const modalData = {
  disclaimer: {
    title: "Disclaimer",
    content: `
     <p class="text-[13px] mb-4">
      This information is provided by DistanceEducationSchool.com, under the legal entity of SODE Counselling Services LLP, registered with the Ministry of Corporate Affairs, with the main objective of providing information, guidance, and counselling services about UGC-DEB-approved universities. We do not act as a university or an admission authority.
    </p>

    <h3 class="font-semibold mb-2">Essential Points</h3>

    <ul class="list-disc pl-5 text-[13px] space-y-1">
      <li>All university names, logos, and trademarks used are for informational purposes only.</li>
      <li>Our role is to provide updates, information, and guidance on universities regarding their distance or online education programs.</li>
      <li>We do not charge students any fees for counselling or guidance on university applications.</li>
      <li>We do not issue degrees, mark sheets, or certificates in the name of any university.</li>
      <li>Our aim is to offer free and unbiased counselling to help students choose the right path.</li>
      <li>We respect the integrity and reputation of all listed universities and do not engage in any activity that damages their credibility.</li>
      <li>Users are encouraged to verify information from official university portals before making decisions.</li>
      <li>Our services are transparent, legal, and purely for student support.</li>
    </ul>`
  },
  terms: {
    title: "Terms & Conditions",
    content: `
      <p class="text-[13px] mb-2">
      This page outlines the terms and conditions that apply when you access or use services provided on this platform, operated by SODE Counselling Services LLP under DistanceEducationSchool.com.
    </p>
    <p class="text-[13px] mb-4">
      We help students and working professionals explore distance and online education options offered by UGC-DEB-approved universities. These terms outline how we support the process, particularly when payments and third-party tools are involved.
    </p>

    <h3 class="font-semibold mb-1">1. Our Role</h3>
    <p class="text-[13px] mb-2">
      We provide information and counselling services only. We are not a university and do not collect any university fees directly. All academic or admission-related payments must be made to the respective university.
    </p>

    <h3 class="font-semibold mb-1 mt-3">2. Unauthorised Use or Fraud</h3>
    <p class="text-[13px] mb-2">
      If you suspect any unauthorised transaction linked to a service on our platform, report it immediately. We will coordinate with the respective payment partner for further action.
    </p>

    <h3 class="font-semibold mb-1 mt-3">3. Updates to These Terms</h3>
    <p class="text-[13px] mb-2">
      These terms may be updated as services evolve. Continued use of this platform implies your agreement to the latest version of these terms.
    </p>

    <h3 class="font-semibold mb-1 mt-3">4. Contact Us</h3>
    <p class="text-[13px] mb-2">
      For support, email us at: support@distanceeducationschool.com
    </p>
`
  },
  privacy: {
    title: "Privacy Policy",
    content: `
      <p class="text-[13px] mb-4">
      All information on this platform is provided by DistanceEducationSchool.com, under the legal name of SODE Counselling Services LLP. We are an educational counselling platform that helps students find trusted distance and online courses from UGC-DEB-approved universities. Our goal is to provide accurate information and personalised support to help you choose the right program.
    </p>

    <h3 class="font-semibold mb-1">1. No Personal Data Collected by Default</h3>

    <p class="text-[13px] mb-4">You can freely browse our website without sharing any personal information. We do not collect your name, phone number, or email address unless you choose to fill out a form or contact us directly.</p>

    <h3 class="font-semibold mb-1">2. How We Use It</h3>

    <p class="text-[13px] mb-1">Your information is used to:</p>
    <ul class="list-disc pl-5 text-[13px] space-y-1">
      <li>Guide you in choosing the right university or course</li>
      <li>Provide counselling support</li>
      <li>Share admission-related updates</li>
    </ul>
    <p class="text-[13px] mt-1 mb-2">We may send you important updates (like admission deadlines or university alerts) via WhatsApp and email. You can opt out anytime.</p>


    <h3 class="font-semibold mb-1">3. Scope</h3>

    <p class="text-[13px] mb-4">This privacy policy applies to visitors who access this specific platform operated under DistanceEducationSchool.com by SODE Counselling Services LLP. It covers how we collect, use, and protect data when you explore course information, compare universities, or fill out enquiry forms on this platform. This policy applies only to the information collected through this platform and does not cover any data collected on the main website or other external sites.</p>

    <h3 class="font-semibold mb-1">4. Data Sharing</h3>

    <p class="text-[13px] mb-4">We share your details only with trusted university partners, and only for the purpose of counselling or admission. We do not sell or share data with third-party advertisers.</p>

    <h3 class="font-semibold mb-1">5. External Links</h3>

    <p class="text-[13px] mb-4">Our website may include links to official university portals. We are not responsible for the content or privacy policies of those external sites. We recommend visiting the official university website for new updates.</p>

    <h3 class="font-semibold mb-1">6. Cookies and Analytics</h3>

    <p class="text-[13px] mb-4">Our website uses cookies to improve the user experience. These help us understand how visitors use our site (e.g., most viewed pages, time spent, etc.). These cookies do not identify you personally.</p>
`
  }
};

function openModal(type) {
  const data = modalData[type];
  document.getElementById("modalTitle").innerText = data.title;
  document.getElementById("modalBody").innerHTML = data.content;
  document.getElementById("infoModal").classList.remove("hidden");
  document.body.style.overflow = 'hidden'; // Stop background scrolling
}

function closeModal() {
  document.getElementById("infoModal").classList.add("hidden");
  document.body.style.overflow = 'auto'; // Restore scrolling
}

// Close if background is clicked
document.getElementById("infoModal").addEventListener("click", function(e) {
  if (e.target === this) closeModal();
});
</script>



<!-- POPUP -->

<div id="formModal" 
class="fixed inset-0 bg-black/60 hidden z-[9999] 
flex items-center justify-center backdrop-blur-sm
opacity-0 transition-opacity duration-300">

  <!-- Modal Box -->
  <div id="modalBox"
    class="bg-[#fff] w-[95%] md:w-[400px] 
    rounded-xl shadow-lg relative p-5
    transform scale-90 translate-y-10 opacity-0
    transition-all duration-300 ease-out">

    <button onclick="closeForm()" 
      class="absolute top-2 right-3 text-2xl font-bold hover:text-black text-[#000]">
      &times;
    </button>

    <div id="loader" class="absolute inset-0 flex items-center justify-center bg-white rounded-xl">
  <div class="animate-spin rounded-full h-10 w-10 border-4 border-gray-300 border-t-black"></div>
</div>

    <iframe id="formFrame" class="w-full rounded-xl border-0 opacity-0"></iframe>

  </div>
</div>


<script>
function openForm(url) {
  const modal = document.getElementById("formModal");
  const box = document.getElementById("modalBox");
  const frame = document.getElementById("formFrame");
  const loader = document.getElementById("loader");

  modal.classList.remove("hidden");
  modal.classList.add("flex");

  // animation delay
  setTimeout(() => {
    modal.classList.remove("opacity-0");
    modal.classList.add("opacity-100");

    box.classList.remove("scale-90", "translate-y-10", "opacity-0");
    box.classList.add("scale-100", "translate-y-0", "opacity-100");
  }, 50);

  // show loader
  loader.style.display = "flex";
  frame.style.opacity = "0";
  frame.style.height = "300px";

  // load iframe
  setTimeout(() => {
    frame.src = url;
  }, 300);

  frame.onload = function () {
    // hide loader
    loader.style.display = "none";

    try {
      const doc = frame.contentWindow.document;
      frame.style.height = doc.body.scrollHeight + "px";
    } catch (e) {
      frame.style.height = "600px";
    }

    frame.style.opacity = "1";
  };
}

function closeForm() {
  const modal = document.getElementById("formModal");
  const box = document.getElementById("modalBox");
  const frame = document.getElementById("formFrame");
  const loader = document.getElementById("loader");

  modal.classList.remove("opacity-100");
  modal.classList.add("opacity-0");

  box.classList.remove("scale-100", "translate-y-0", "opacity-100");
  box.classList.add("scale-90", "translate-y-10", "opacity-0");

  setTimeout(() => {
    modal.classList.add("hidden");
    modal.classList.remove("flex");

    frame.src = "";
    frame.style.opacity = "0";
    frame.style.height = "0px";

    loader.style.display = "flex"; // reset
  }, 300);
}
</script>




<!-- Phone Field Validation Code Start -->
<script>
const input = document.querySelector("#phone");

const iti = window.intlTelInput(input, {
  initialCountry: "in", // default India
  separateDialCode: true,
  preferredCountries: ["in", "ae", "us", "gb"],
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
});

// ✅ Auto detect country if user types +971 etc
input.addEventListener("input", function () {
  let value = input.value;

  if (value.startsWith("+")) {
    iti.setNumber(value); // auto detect country
  }
});

// ✅ Only numbers allow (no letters)
input.addEventListener("keypress", function (e) {
  if (!/[0-9+]/.test(e.key)) {
    e.preventDefault();
  }
});
</script>

<script>
input.addEventListener("input", function () {
  let numbers = input.value.replace(/\D/g, "");

  // limit to 10 digits
  if (numbers.length > 10) {
    numbers = numbers.slice(0, 10);
  }

  input.value = numbers;
});
</script>
<!-- Phone Field Validation Code End -->


<!-- Font Family Script Start -->
<script>
tailwind.config = {
  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
        impact: ['Impact', 'sans-serif'],
      }
    }
  }
}
</script>
<!-- Font Family Script End -->


<!-- FAQ Script code Start -->
<script>
  document.querySelectorAll('.faq-button').forEach(button => {
    button.addEventListener('click', () => {
      const faqItem = button.parentElement;
      const content = button.nextElementSibling;
      const iconV = button.querySelector('.faq-icon-v');
      const questionText = button.querySelector('.faq-question');
      
      // 1. Check if it's already open
      const isOpen = faqItem.classList.contains('active');

      // 2. Close all other open items (Exclusive behavior)
      document.querySelectorAll('.faq-item').forEach(item => {
        item.classList.remove('active');
        item.querySelector('.faq-content').style.maxHeight = null;
        item.querySelector('.faq-icon-v').style.transform = 'rotate(0deg)';
        item.querySelector('.faq-icon-v').style.opacity = '1';
        item.querySelector('.faq-question').classList.remove('text-[#003366]', 'font-bold');
        item.querySelector('.faq-question').classList.add('text-gray-700', 'font-semibold');
      });

      // 3. If the clicked one wasn't open, open it
      if (!isOpen) {
        faqItem.classList.add('active');
        // Use scrollHeight to get the exact natural height of the content
        content.style.maxHeight = content.scrollHeight + "px";
        iconV.style.transform = 'rotate(90deg)';
        iconV.style.opacity = '0';
        questionText.classList.remove('text-gray-700', 'font-semibold');
        questionText.classList.add('text-[#003366]', 'font-bold');
      }
    });
  });
</script>
<!-- FAQ Script code End -->


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 15,
    loop: true,
    
    // Autoplay with Pause on Hover
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true, // Jab mouse slide par jayega, slider ruk jayega
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },

    // Side Arrows (Navigation)
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 25,
      },
    },
  });
</script>



<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<script>
  // Ek variable check karne ke liye ki form khul chuka hai ya nahi
  let isAutoPopupDone = false;

  // Aapka original function (Click aur Scroll dono ke liye use hoga)
  function handleGiftClick() {
    // 1. Form open karne ka logic
    if (typeof openForm === 'function') {
      openForm('coupon-form.php');
    }

    // 2. Confetti Blast (500ms delay ke saath jaisa aapne set kiya tha)
    setTimeout(function() {
      var canvas = document.createElement('canvas');
      canvas.style.position = 'fixed';
      canvas.style.top = '0';
      canvas.style.left = '0';
      canvas.style.width = '100%';
      canvas.style.height = '100%';
      canvas.style.zIndex = '9999999'; 
      canvas.style.pointerEvents = 'none'; 
      document.body.appendChild(canvas);

      var myConfetti = confetti.create(canvas, {
        resize: true,
        useWorker: true
      });

      myConfetti({
        particleCount: 200,
        spread: 90,
        origin: { y: 0.6 },
        colors: ['#003366', '#ffc107', '#25D366', '#ffffff'],
      });

      setTimeout(function() {
        canvas.remove();
      }, 5000);
      
    }, 2000); 
  }

  // --- Naya Scroll Logic Addon ---
  window.addEventListener('scroll', function() {
    // Scroll percentage calculation
    let scrollTop = window.scrollY;
    let docHeight = document.documentElement.scrollHeight;
    let winHeight = window.innerHeight;
    let scrollPercent = (scrollTop / (docHeight - winHeight)) * 100;

    // Agar user ne 50% scroll kiya aur abhi tak auto-popup nahi hua
    if (scrollPercent >= 50 && !isAutoPopupDone) {
      isAutoPopupDone = true;
      handleGiftClick();
    }
  });
</script>



