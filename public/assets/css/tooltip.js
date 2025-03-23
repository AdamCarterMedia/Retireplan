// public/assets/js/tooltip.js

document.addEventListener('DOMContentLoaded', function() {
    // Select all elements with a data-tooltip attribute
    const tooltipElements = document.querySelectorAll('[data-tooltip]');
    
    tooltipElements.forEach(el => {
        el.addEventListener('mouseenter', function() {
            const tooltipText = el.getAttribute('data-tooltip');
            // Create a tooltip div element
            let tooltipDiv = document.createElement('div');
            tooltipDiv.className = 'tooltip';
            tooltipDiv.innerText = tooltipText;
            document.body.appendChild(tooltipDiv);
            
            // Position the tooltip above the element
            const rect = el.getBoundingClientRect();
            tooltipDiv.style.left = rect.left + 'px';
            tooltipDiv.style.top = (rect.top - tooltipDiv.offsetHeight - 5) + 'px';
            
            // Store a reference so we can remove it later
            el._tooltipDiv = tooltipDiv;
        });
        
        el.addEventListener('mouseleave', function() {
            if (el._tooltipDiv) {
                document.body.removeChild(el._tooltipDiv);
                delete el._tooltipDiv;
            }
        });
    });
});
