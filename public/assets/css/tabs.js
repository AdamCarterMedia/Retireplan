// public/assets/js/tabs.js

document.addEventListener('DOMContentLoaded', function() {
    const tabLinks = document.querySelectorAll('.tab-links li a');
    const tabs = document.querySelectorAll('.tab-content .tab');

    // Function to clear the active class from all tabs and links
    function clearActive() {
        tabLinks.forEach(link => link.parentElement.classList.remove('active'));
        tabs.forEach(tab => tab.classList.remove('active'));
    }

    // Add click event listeners to each tab link
    tabLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            clearActive();
            // Activate the clicked tab link
            this.parentElement.classList.add('active');
            // Activate the corresponding tab content
            const activeTab = document.querySelector(this.getAttribute('href'));
            if (activeTab) {
                activeTab.classList.add('active');
            }
        });
    });
});
