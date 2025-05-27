  // Mobile menu toggle
  document.getElementById('mobileMenuBtn').onclick = function() {
    document.getElementById('mobileNavMenu').classList.remove('hidden');
  };
  document.getElementById('closeMobileMenu').onclick = function() {
    document.getElementById('mobileNavMenu').classList.add('hidden');
  };

  // Hide "Frontpage" link on index.html only
  if (window.location.pathname.endsWith('index.html') || window.location.pathname === '/' ) {
    var frontpageLink = document.getElementById('frontpage-link');
    if(frontpageLink) frontpageLink.style.display = 'none';
    var frontpageLinkMobile = document.getElementById('frontpage-link-mobile');
    if(frontpageLinkMobile) frontpageLinkMobile.style.display = 'none';
  }





// Tabs



const tabs = document.querySelectorAll(".tab-container button");
const panels = document.getElementsByClassName("panel");

tabs.forEach((tab) => tab.addEventListener("click", handleTabClick));

function handleTabClick(e) {
  const targetKey = e.target.getAttribute("key");
  
  tabs.forEach((tab) => {
    tab.classList.remove("bg-[#580259]");
    tab.classList.add("bg-[#2B682C]");
  });
  
  document.querySelectorAll(`.tab-container button[key="${targetKey}"]`).forEach(tab => {
    tab.classList.remove("bg-[#2B682C]");
    tab.classList.add("bg-[#580259]");
  });
  
  for (const panel of panels) {
    const key = panel.getAttribute("key");
    if (key === targetKey) {
      panel.classList.remove("hidden");
    } else {
      panel.classList.add("hidden");
    }
  }
}

