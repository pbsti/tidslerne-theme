// Mobile menu toggle
document.getElementById('mobileMenuBtn').onclick = function() {
  document.getElementById('mobileNavMenu').classList.remove('hidden');
};
document.getElementById('closeMobileMenu').onclick = function() {
  document.getElementById('mobileNavMenu').classList.add('hidden');
  // Also close the More dropdown if open
  document.getElementById('mobileMoreDropdown').classList.add('hidden');
};

// Mobile More dropdown toggle
document.getElementById('mobileMoreBtn').onclick = function(e) {
  e.preventDefault();
  document.getElementById('mobileMoreDropdown').classList.toggle('hidden');
};

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
  const moreBtn = document.getElementById('mobileMoreBtn');
  const dropdown = document.getElementById('mobileMoreDropdown');
  
  if (!moreBtn.contains(event.target) && !dropdown.contains(event.target)) {
    dropdown.classList.add('hidden');
  }
});





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

