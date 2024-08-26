document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
  
    burger.addEventListener('click', () => {
      nav.classList.toggle('nav-active');
  
      // Burger animation
      burger.classList.toggle('toggle');
    });
  
    // Show/hide service details
    const learnMoreButtons = document.querySelectorAll('.learn-more');
    learnMoreButtons.forEach(button => {
      button.addEventListener('click', () => {
        const serviceInfo = document.getElementById(button.getAttribute('data-service'));
        serviceInfo.style.display = serviceInfo.style.display === 'block' ? 'none' : 'block';
      });
    });
  
    // Accordion functionality
    const accordionButtons = document.querySelectorAll('.accordion-button');
    accordionButtons.forEach(button => {
      button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        content.style.display = content.style.display === 'block' ? 'none' : 'block';
      });
    });
  
    // Initialize the map if the element exists
    const mapElement = document.getElementById('map');
    if (mapElement) {
      const map = L.map('map').setView([37.7749, -122.4194], 13); // Example coordinates, change to your location
  
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
      }).addTo(map);
  
      L.marker([37.7749, -122.4194]).addTo(map) // Example coordinates, change to your location
        .bindPopup('Our Organization Location')
        .openPopup();
    }
  
    // Show custom amount input when "Other" is selected
    const amountSelect = document.getElementById('amount');
    const customAmount = document.getElementById('custom-amount');
    amountSelect.addEventListener('change', () => {
      if (amountSelect.value === 'other') {
        customAmount.style.display = 'block';
      } else {
        customAmount.style.display = 'none';
      }
    });
  });
  