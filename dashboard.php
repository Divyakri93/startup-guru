<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup support website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    
 
</head>
<body class ="bg-black text-white">



  
  <!-- //*********************************************************** 1st section ******************************************************** -->

  <header class="flex justify-between items-center p-4 bg-gray-900 text-white fixed top-0 w-full ">
    <!-- Left Side: Logo + Brand Name -->
    <div class="flex items-center gap-3">
      <!-- White Circle Around Icon -->
      <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center">
        <i class="fa-solid fa-bolt text-2xl text-white"></i>
      </div>
      
      <h1 class="text-2xl font-bold">
        <span class="text-white">Startup.</span>
        <span class="text-purple-500">Guru</span>
      </h1>
    </div>
    
  
    <!-- Right Side: Icons and Avatar -->
    <div class="flex items-center gap-6 pr-8">
      
    <a href="about.php" class="font-semibold text-white hover:text-purple-400  hover:cursor-pointer transition duration-200">
  About Us
</a>

      <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center text-sm font-semibold">
        DK
      </div>
    </div>
  </header>
  

  <!-- //******************************************Search *************************// -->

  <main class="h-96 text-center mb-8 bg-gradient-to-r from-purple-500 via-black to-purple-700  w-full p-10">

    <h2 class="text-3xl font-bold text-center p-8 mt-10">Find the best experts to help you with</h2>

    <!---------rotating text---------------->
    <p id="rotating-text" class="text-blue-800 text-5xl font-bold transition-opacity duration-500 ease-in-out"></p>

  

  </main>

<!-- Dashboard Overview Section -->
<a class="block px-4 py-2">
  <h2 class="text-2xl font-bold text-white">Dashboard Overview</h2>
  <p class="text-gray-500">Track, plan, grow faster and manage everything in one place...</p>
</a>

<section class="grid grid-cols-4 gap-6 p-8 bg-black text-white max-w-full mx-auto">
  <!-- Column 1 -->
  <div class="grid grid-cols-1 gap-4">
    <!-- Mentor Dashboard -->
    <a href="mentor.php">
      <div class="bg-white/10 backdrop-blur-md p-4 rounded-xl flex gap-4 items-center shadow-md hover:shadow-lg transition">
        <div class="bg-white/20 p-3 rounded-full">
          <i class="fa-solid fa-phone-volume text-2xl text-blue-400"></i>
        </div>
        <div>
          <h3 class="font-bold">Mentor Dashboard</h3>
          <p class="text-sm text-gray-300">Define and offer your personalised services.</p>
        </div>
      </div>
    </a>

    <!-- Create Service -->
    <a href="feedback.php">
      <div class="cursor-pointer bg-white/10 backdrop-blur-md p-4 rounded-xl flex gap-4 items-center shadow-md hover:shadow-lg transition">
        <div class="bg-white/20 p-3 rounded-full">
          <i class="fa-solid fa-hand-holding-dollar text-2xl text-green-400"></i>
        </div>
        <div>
          <h3 class="font-bold">Feedback</h3>
          <p class="text-sm text-gray-300">Tell me how i can improve. </p>
        </div>
      </div>
    </a>

    <!-- Upcoming Calls -->
    <a href="upcoming_call.php">
      <div class="bg-white/10 backdrop-blur-md p-4 rounded-xl flex gap-4 items-center shadow-md hover:shadow-lg transition">
        <div class="bg-white/20 p-3 rounded-full">
          <i class="fa-solid fa-square-phone text-2xl text-teal-400"></i>
        </div>
        <div>
          <h3 class="font-bold">Upcoming calls</h3>
          <p class="text-sm text-gray-300">Upcoming scheduled calls from your booked mentors.</p>
        </div>
      </div>
    </a>
  </div>

  <!-- Column 2 -->
  <div class="grid grid-cols-1 gap-4">
    <!-- Profile Visits -->
    <a href="enterpernur.php">
      <div class="bg-white/10 backdrop-blur-md p-4 rounded-xl flex gap-4 items-center shadow-md hover:shadow-lg transition">
        <div class="bg-white/20 p-3 rounded-full">
          <i class="fa-solid fa-eye text-2xl text-indigo-400"></i>
        </div>
        <div>
          <h3 class="font-bold">Enterpreneur</h3>
          <p class="text-sm text-gray-300">Booked Sessions with clients.</p>
        </div>
      </div>
    </a>

    <!-- Set Schedule -->
    <div class="bg-white/10 backdrop-blur-md p-4 rounded-xl flex gap-4 items-center shadow-md">
      <div class="bg-white/20 p-3 rounded-full">
        <i class="fa-solid fa-calendar-week text-2xl text-yellow-400"></i>
      </div>
      <div>
        <h3 class="font-bold">Set schedule</h3>
        <p class="text-sm text-gray-300">Update your availability to maximise your earnings.</p>
      </div>
    </div>

    <!-- Share Profile -->
    <div onclick="shareProfile()" class="cursor-pointer bg-white/10 backdrop-blur-md p-4 rounded-xl flex gap-4 items-center shadow-md hover:shadow-lg transition">
      <div class="bg-teal-500 text-white font-bold px-4 py-2 rounded-full">DK</div>
      <div>
        <h3 class="font-bold">Share profile</h3>
        <p class="text-sm text-green-400">Click to share</p>
      </div>
    </div>

    <!-- Share Modal -->
    <div id="shareModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
      <div class="bg-white p-6 rounded-xl w-80 text-center space-y-4 relative">
        <button onclick="closeModal()" class="absolute top-2 right-3 text-black text-xl font-bold">&times;</button>
        <h2 class="text-lg font-bold">Share Divya's Profile</h2>
        <input type="text" id="profileLink" class="w-full border p-2 rounded text-sm" readonly>
        <button onclick="copyLink()" class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700">Copy Link</button>
        <div class="flex justify-center gap-4 text-xl mt-2">
          <a id="whatsappShare" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp text-green-500"></i></a>
          <a id="facebookShare" target="_blank" title="Facebook"><i class="fab fa-facebook text-blue-600"></i></a>
          <a id="twitterShare" target="_blank" title="Twitter"><i class="fab fa-twitter text-sky-400"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Column 3 & 4: Image Slider -->
  <div class="col-span-2 relative rounded-xl overflow-hidden shadow-xl w-full h-[350px] bg-white/10 backdrop-blur-md">
    <div id="carousel" class="relative w-full h-full">
      <div class="absolute inset-0 transition-opacity duration-700 opacity-100" id="slide1">
        <img src="schedule_img.png" class="w-full h-full object-contain" alt="Schedule">
      </div>
      <div class="absolute inset-0 transition-opacity duration-700 opacity-0" id="slide2">
        <img src="support.png" class="w-full h-full object-contain" alt="Support">
      </div>
      <div class="absolute inset-0 transition-opacity duration-700 opacity-0" id="slide3">
        <img src="setprice.png" class="w-full h-full object-contain" alt="Set Price">
      </div>
    </div>
  </div>
</section>
  

  
  

<!-- //****************************************** 3rd section**************************************************************** -->
<div class="bg-gray-800 mt-20 p-10">
  <h1 class="text-3xl font-bold text-center py-8 text-white">Find experts by category</h1>
  <div class="flex justify-center items-center py-8 px-10 gap-6">

    <div class="bg-gradient-to-br from-pink-600 to-purple-600 h-48 w-40 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 p-4 flex flex-col items-center justify-center">
      <h3 class="text-white text-center font-bold mb-2">Startup Ideas</h3>
      <img src="startup_img.jpg" alt="startup" class="h-16 rounded-full mb-2">
      <p class="text-xs text-white text-center">Validate ideas with Founders/Investors | GTM | MVP | PMF</p>
    </div>

    <div class="bg-gradient-to-br from-blue-600 to-indigo-600 h-48 w-40 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 p-4 flex flex-col items-center justify-center">
      <h3 class="text-white text-center font-bold mb-2">Entrepreneurs & Fund raising</h3>
      <img src="startup_img.jpg" alt="startup" class="h-16 rounded-full mb-2">
      <p class="text-xs text-white text-center">Founders connect | VC/Angel Investors | Founding team</p>
    </div>

    <div class="bg-gradient-to-br from-teal-600 to-green-600 h-48 w-40 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 p-4 flex flex-col items-center justify-center">
      <h3 class="text-white text-center font-bold mb-2">Interview Preparation</h3>
      <img src="startup_img.jpg" alt="startup" class="h-16 rounded-full mb-2">
      <p class="text-xs text-white text-center">Mock Interviews | CV Review | Body Language</p>
    </div>

    <div class="bg-gradient-to-br from-yellow-600 to-orange-600 h-48 w-40 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 p-4 flex flex-col items-center justify-center">
      <h3 class="text-white text-center font-bold mb-2">Working Professionals</h3>
      <img src="startup_img.jpg" alt="startup" class="h-16 rounded-full mb-2">
      <p class="text-xs text-white text-center">Marketing | Senior management | Tech experts | E-commerce</p>
    </div>

    <div class="bg-gradient-to-br from-red-600 to-pink-500 h-48 w-40 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 p-4 flex flex-col items-center justify-center">
      <h3 class="text-white text-center font-bold mb-2">Relationship & Loneliness</h3>
      <img src="startup_img.jpg" alt="startup" class="h-16 rounded-full mb-2">
      <p class="text-xs text-white text-center">Dating advice | Emotional support | Moving on | Breakup</p>
    </div>

    <div class="bg-gradient-to-br from-indigo-600 to-purple-500 h-48 w-40 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 p-4 flex flex-col items-center justify-center">
      <h3 class="text-white text-center font-bold mb-2">Astrology & More</h3>
      <img src="startup_img.jpg" alt="startup" class="h-16 rounded-full mb-2">
      <p class="text-xs text-white text-center">Vedic Astrology | Vastu | Tarot card | Numerology | Kundli</p>
    </div>

  </div>
</div>

<!-- //******************************************************* 4th Section ****************************************************************** -->

<h1 class="font-bold text-3xl px-8 mt-6">Top Experts for You </h1>
<p class="text-gray-300 px-8 py-1">Connect with trusted and verified professionals across various fields of expertise</p>

<div class="flex gap-4 mb-6 justify-end px-20">
  <button class=" border border-white/30 px-4 bg-white/20  rounded-md text-white py-1 gap-2 flex items-center">
    <i class="fa-solid fa-filter"></i>Filter</button>

  <button class=" border border-white/30 px-4 bg-white/20 rounded-md text-white py-1 gap-2 flex items-center">
    Instantly available</button>

  <button class=" border border-white/30 px-4 bg-white/20 rounded-md text-white py-1 gap-2 flex items-center">
  Verified Profile</button>

  <button class=" border border-white/30 px-4 bg-white/20 rounded-md text-white py-1 gap-2 flex items-center">
    <i class="fa-solid fa-arrow-down-wide-short"></i>Sort by</button>
</div>

<div class="grid grid-cols-3 bg-black mx-auto py-8 px-20">
<!--
  //*****************************Column -1 ****************************************************// -->

  <div class="grid grid-cols-1 gap-4 px-4">

    <a href="divya_profile.php">
    <div class="  border border-white/30 px-4  bg-gradient-to-br from-blue-400/20 to-orange-400/20  text-center flex flex-col items-center justify-center p-4 rounded-lg">
      <img src="divya_photo.jpeg" alt="photo1" class="w-14 h-14 rounded-full mb-2">
      <h2 class="font-bold">Divya Kumari</h2>
      <p class="text-gray-300">Full Stack web Developer | founder...</p>
      <p class="text-xs text-gray-400">I help startups solve challenges, think creatively and share..</p>
      <div class="flex  items-center space-x-2 pt-4 pb-2">
        <i class="fa-solid fa-phone rounded-full border-2 border-red-400 bg-black p-2"></i><p class="">₹30k</p>
        <i class="fa-solid fa-video  rounded-full border-2 border-green-800 bg-black p-2"></i><p class="">₹50k</p>
        <i class="fa-solid fa-comment rounded-full border-2 border-blue-600 bg-black p-2"></i><p class="">₹40k</p> 
      </div>
    </div>
  </a>

    <div class=" border border-white/30 px-4  bg-gradient-to-br from-blue-400/20 to-orange-400/20  flex flex-col items-center justify-center text-center p-4 rounded-lg">
      <img src="photo2.jpg" alt="photo1" class="w-14 h-14 rounded-full mb-2">
      <h2 class="font-bold">Aryan Gupta</h2>
      <p class="text-gray-300">Co-founder | Ex-Google SDE</p>
      <p class="text-xs text-gray-400">I help startups solve challenges, think creatively and share..</p>
      <div class="flex  items-center space-x-2 pt-4 pb-2">
        <i class="fa-solid fa-phone rounded-full border-2 border-red-400 bg-black p-2"></i><p class="">₹550</p>
        <i class="fa-solid fa-video  rounded-full border-2 border-green-800 bg-black p-2"></i><p class="">₹700</p>
        <i class="fa-solid fa-comment rounded-full border-2 border-blue-600 bg-black p-2"></i><p class="">₹200</p>
        
      </div>
      </div>

      <div class="  border border-white/30 px-4  bg-gradient-to-br from-blue-400/20 to-orange-400/20 flex flex-col items-center justify-center text-center p-4 rounded-lg">
        <img src="photo3.jpg" alt="photo1" class="w-14 h-14 rounded-full mb-2">
        <h2 class="font-bold">Jaya Kumari</h2>
        <p class="text-gray-300">Co-founder | Ex-Google SDE</p>
        <p class="text-xs text-gray-400">I help startups solve challenges, think creatively and share..</p>
        <div class="flex  items-center space-x-2 pt-4 pb-2">
          <i class="fa-solid fa-phone rounded-full border-2 border-red-400 bg-black p-2"></i><p class="">₹550</p>
          <i class="fa-solid fa-video  rounded-full border-2 border-green-800 bg-black p-2"></i><p class="">₹700</p>
          <i class="fa-solid fa-comment rounded-full border-2 border-blue-600 bg-black p-2"></i><p class="">₹200</p>
          
        </div>
  </div>
  </div>

  <!--
  //*****************************Column -2 ****************************************************// -->

  <div class="grid grid-cols-1 gap-4 px-4">

    <div class="  border border-white/30 px-4  bg-gradient-to-br from-blue-400/20 to-orange-400/20 text-center flex flex-col items-center justify-center p-4 rounded-lg">
      <img src="photo1.jpg" alt="photo1" class="w-14 h-14 rounded-full mb-2">
      <h2 class="font-bold">Swati Kumari</h2>
      <p class="text-gray-300">Co-founder|Ex-Google SDE</p>
      <p class="text-xs text-gray-400">I help startups solve challenges, think creatively and share..</p>
      <div class="flex  items-center space-x-2 pt-4 pb-2">
        <i class="fa-solid fa-phone rounded-full border-2 border-red-400 bg-black p-2"></i><p class="">₹550</p>
        <i class="fa-solid fa-video  rounded-full border-2 border-green-800 bg-black p-2"></i><p class="">₹700</p>
        <i class="fa-solid fa-comment rounded-full border-2 border-blue-600 bg-black p-2"></i><p class="">₹200</p>
        
      </div>
    </div>

    <div class=" border border-white/30 px-4  bg-gradient-to-br from-blue-400/20 to-orange-400/20 flex flex-col items-center justify-center text-center p-4 rounded-lg">
      <img src="photo2.jpg" alt="photo1" class="w-14 h-14 rounded-full mb-2">
      <h2 class="font-bold">Aryan Gupta</h2>
      <p class="text-gray-300">Co-founder | Ex-Google SDE</p>
      <p class="text-xs text-gray-400">I help startups solve challenges, think creatively and share..</p>
      <div class="flex  items-center space-x-2 pt-4 pb-2">
        <i class="fa-solid fa-phone rounded-full border-2 border-red-400 bg-black p-2"></i><p class="">₹550</p>
        <i class="fa-solid fa-video  rounded-full border-2 border-green-800 bg-black p-2"></i><p class="">₹700</p>
        <i class="fa-solid fa-comment rounded-full border-2 border-blue-600 bg-black p-2"></i><p class="">₹200</p>
        
      </div>
      </div>

      <div class="  border border-white/30 px-4  bg-gradient-to-br from-blue-400/20 to-orange-400/20 flex flex-col items-center justify-center text-center p-4 rounded-lg">
        <img src="photo3.jpg" alt="photo1" class="w-14 h-14 rounded-full mb-2">
        <h2 class="font-bold">Jaya Kumari</h2>
        <p class="text-gray-300">Co-founder | Ex-Google SDE</p>
        <p class="text-xs text-gray-400">I help startups solve challenges, think creatively and share..</p>
        <div class="flex  items-center space-x-2 pt-4 pb-2 ">
          <i class="fa-solid fa-phone rounded-full border-2 border-red-400 bg-black p-2"></i><p class="">₹550</p>
          <i class="fa-solid fa-video  rounded-full border-2 border-green-800 bg-black p-2"></i><p class="">₹700</p>
          <i class="fa-solid fa-comment rounded-full border-2 border-blue-600 bg-black p-2"></i><p class="">₹200</p>
          
        </div>
  </div>
  </div>

   <!--
  //*****************************Column -3 ****************************************************// -->

  <div class="grid grid-cols-1 gap-4 px-4">

    <div class=" border border-white/30 px-4  bg-gradient-to-br from-blue-400/20 to-orange-400/20 text-center flex flex-col items-center justify-center p-4 rounded-lg">
      <img src="photo1.jpg" alt="photo1" class="w-14 h-14 rounded-full mb-2">
      <h2 class="font-bold">Swati Kumari</h2>
      <p class="text-gray-300">Co-founder|Ex-Google SDE</p>
      <p class="text-xs text-gray-400">I help startups solve challenges, think creatively and share..</p>
      <div class="flex  items-center space-x-2 pt-4 pb-2">
        <i class="fa-solid fa-phone rounded-full border-2 border-red-400 bg-black p-2"></i><p class="">₹550</p>
        <i class="fa-solid fa-video  rounded-full border-2 border-green-800 bg-black p-2"></i><p class="">₹700</p>
        <i class="fa-solid fa-comment rounded-full border-2 border-blue-600 bg-black p-2"></i><p class="">₹200</p>
        
      </div>
    </div>

    <div class="  border border-white/30 px-4  bg-gradient-to-br from-blue-400/20 to-orange-400/20 flex flex-col items-center justify-center text-center p-4 rounded-lg">
      <img src="photo2.jpg" alt="photo1" class="w-14 h-14 rounded-full mb-2">
      <h2 class="font-bold">Aryan Gupta</h2>
      <p class="text-gray-300">Co-founder | Ex-Google SDE</p>
      <p class="text-xs text-gray-400">I help startups solve challenges, think creatively and share..</p>
      <div class="flex  items-center space-x-2 pt-4 pb-2">
        <i class="fa-solid fa-phone rounded-full border-2 border-red-400 bg-black p-2"></i><p class="">₹550</p>
        <i class="fa-solid fa-video  rounded-full border-2 border-green-800 bg-black p-2"></i><p class="">₹700</p>
        <i class="fa-solid fa-comment rounded-full border-2 border-blue-600 bg-black p-2"></i><p class="">₹200</p>
        
      </div>
      </div>

      <div class="  border border-white/30 px-4  bg-gradient-to-br from-blue-400/20 to-orange-400/20 flex flex-col items-center justify-center text-center p-4 rounded-lg">
        <img src="photo3.jpg" alt="photo1" class="w-14 h-14 rounded-full mb-2">
        <h2 class="font-bold">Jaya Kumari</h2>
        <p class="text-gray-300">Co-founder | Ex-Google SDE</p>
        <p class="text-xs text-gray-400">I help startups solve challenges, think creatively and share..</p>

        
        <div class="flex  items-center space-x-2 ">
          <i class="fa-solid fa-phone rounded-full border-2 border-red-400 bg-black p-2"></i><p class="">₹550</p>
          <i class="fa-solid fa-video  rounded-full border-2 border-green-800 bg-black p-2"></i><p class="">₹700</p>
          <i class="fa-solid fa-comment rounded-full border-2 border-blue-600 bg-black p-2"></i><p class="">₹200</p>
          
        </div>
  </div>
  </div>
</div>


<!-- //***************************************************** Footer Section ************************************************ -->

<footer class="bg-gray-900 flex justify-between items-center p-6">
    <p>Privacy Policy/ Terms and Condition / Refund Policy</p>
    <p>All Rights reserved.2025 Startup.Guru<i class="fa-solid fa-registered "></i></p>
    <div class="flex jistify-between items-center gap-4">
      <i class="fa-brands fa-square-instagram"></i>
      <i class="fa-brands fa-linkedin"></i>
      <i class="fa-brands fa-square-twitter"></i>
      <i class="fa-brands fa-facebook"></i>
    </div>

</footer>




<!-------------------------------------------------------------------  JavaScript  ----------------------------------------------------------->
<script>
  //-*********************************** text sliding in search part (section-1) ******************************
  document.addEventListener("DOMContentLoaded", () => {
    const messages = [
      "Career Growth",
      "Startup Ideas",
      "Interview Preparation",
      "Mental Wellbeing",
      "Network Building"
    ];

    const colors = [
      "text-yellow-300",
      "text-orange-300",
      "text-green-500",
      "text-pink-600",
      "text-blue-300"
    ];

    const rotatingText = document.getElementById("rotating-text");
    let index = 0;

    function showNextMessage() {
      rotatingText.classList.remove(...colors);  // Remove all color classes
      rotatingText.style.opacity = 0;
      setTimeout(() => {
        rotatingText.textContent = messages[index];
        rotatingText.classList.add(colors[index]); // Add the current color
        rotatingText.style.opacity = 1;
        index = (index + 1) % messages.length;
      }, 500);
    }

    showNextMessage();
    setInterval(showNextMessage, 3000);
  });

//**************************** image sliding in (section 2) *********************************************//

  let current = 1;
  setInterval(() => {
    document.querySelectorAll('#carousel > div').forEach((slide, index) => {
      slide.style.opacity = (index + 1 === current) ? "1" : "0";
    });
    current = current === 3 ? 1 : current + 1;
  }, 3000);


  //-----------------------------------------Share button function ------------------------------------------------------
  function shareProfile() {
    const url = `${window.location.origin}/divya_profile.html`;
    document.getElementById("profileLink").value = url;
    document.getElementById("whatsappShare").href = `https://wa.me/?text=Check%20out%20Divya's%20profile:%20${encodeURIComponent(url)}`;
    document.getElementById("facebookShare").href = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
    document.getElementById("twitterShare").href = `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=Check%20out%20this%20awesome%20profile`;
    document.getElementById("shareModal").classList.remove("hidden");
  }

  function closeModal() {
    document.getElementById("shareModal").classList.add("hidden");
  }

  function copyLink() {
    const input = document.getElementById("profileLink");
    input.select();
    document.execCommand("copy");
    alert("Link copied to clipboard!");
  }
  
</script>

</body>
</html>




