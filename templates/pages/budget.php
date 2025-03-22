<?php
// templates/pages/budget.php
?>
<section class="collapsible">
    <h2 class="collapsible-header">Budget Information</h2>
    <div class="collapsible-content">
        <form id="budget-form" method="post">
            <fieldset>
                <legend>Budget Type</legend>
                <label for="budget_type">Select Budget Type:</label>
                <select id="budget_type" name="budget_type" required>
                    <option value="flat">Flat Budget</option>
                    <option value="itemized">Itemized Budget</option>
                </select>
            </fieldset>

            <!-- Flat Budget Section -->
            <div id="flat-budget-section" style="display: none;">
                <fieldset>
                    <legend>Flat Budget</legend>
                    <label for="flat_budget">Monthly Budget Amount ($):</label>
                    <input type="number" step="0.01" id="flat_budget" name="flat_budget">
                </fieldset>
            </div>

            <!-- Itemized Budget Section -->
            <div id="itemized-budget-section" style="display: none;">
                <fieldset>
                    <legend>Itemized Budget</legend>
                    <div id="budget-items">
                        <!-- Budget items will be added here dynamically -->
                        <div class="budget-item">
                            <label>Budget Item Label:</label>
                            <input type="text" name="budget_item_label[]" required>
                            <label>Amount ($):</label>
                            <input type="number" step="0.01" name="budget_item_amount[]" required>
                            <label>End Year (optional):</label>
                            <input type="text" name="budget_item_end_year[]" placeholder="YYYY" pattern="[12][0-9]{3}">
                            <button type="button" onclick="removeBudgetItem(this)">Remove</button>
                        </div>
                    </div>
                    <button type="button" onclick="addBudgetItem()">Add Budget Item</button>
                    <div id="budget-summary">
                        <!-- Summary example: "2 Items – Total: $5994.00" -->
                    </div>
                </fieldset>
            </div>

            <!-- Submit Button -->
            <button type="submit">Save Budget Information</button>
        </form>
    </div>
</section>

<script>
// Toggle between Flat Budget and Itemized Budget sections
document.addEventListener('DOMContentLoaded', function() {
    const budgetTypeSelect = document.getElementById('budget_type');
    const flatSection = document.getElementById('flat-budget-section');
    const itemizedSection = document.getElementById('itemized-budget-section');

    function toggleBudgetSections() {
        if (budgetTypeSelect.value === 'flat') {
            flatSection.style.display = 'block';
            itemizedSection.style.display = 'none';
        } else if (budgetTypeSelect.value === 'itemized') {
            flatSection.style.display = 'none';
            itemizedSection.style.display = 'block';
        } else {
            flatSection.style.display = 'none';
            itemizedSection.style.display = 'none';
        }
    }

    budgetTypeSelect.addEventListener('change', toggleBudgetSections);
    toggleBudgetSections(); // Initialize on page load.
});

// Function to add a new budget item
function addBudgetItem() {
    const container = document.getElementById('budget-items');
    const newItem = document.createElement('div');
    newItem.classList.add('budget-item');
    newItem.innerHTML = `
        <label>Budget Item Label:</label>
        <input type="text" name="budget_item_label[]" required>
        <label>Amount ($):</label>
        <input type="number" step="0.01" name="budget_item_amount[]" required>
        <label>End Year (optional):</label>
        <input type="text" name="budget_item_end_year[]" placeholder="YYYY" pattern="[12][0-9]{3}">
        <button type="button" onclick="removeBudgetItem(this)">Remove</button>
    `;
    container.appendChild(newItem);
    updateBudgetSummary();
}

// Function to remove a budget item
function removeBudgetItem(button) {
    const item = button.parentNode;
    item.parentNode.removeChild(item);
    updateBudgetSummary();
}

// Function to update the budget summary (number of items and total amount)
function updateBudgetSummary() {
    const labels = document.getElementsByName('budget_item_label[]');
    const amounts = document.getElementsByName('budget_item_amount[]');
    let total = 0;
    for (let i = 0; i < amounts.length; i++) {
        total += parseFloat(amounts[i].value || 0);
    }
    const summaryDiv = document.getElementById('budget-summary');
    summaryDiv.innerText = `${labels.length} Items – Total: $${total.toFixed(2)}`;
}

// Optionally, attach change events to update the summary when an amount changes
document.addEventListener('input', function(e) {
    if (e.target.name === 'budget_item_amount[]') {
        updateBudgetSummary();
    }
});
</script>
