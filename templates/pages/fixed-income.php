<?php
// templates/pages/fixed-income.php
?>
<section class="collapsible">
    <h2 class="collapsible-header">Fixed Income</h2>
    <div class="collapsible-content">
        <form id="fixed-income-form" method="post">
            <fieldset>
                <legend>Fixed Income Streams</legend>
                <div id="fixed-income-items">
                    <!-- A single fixed income item is shown by default -->
                    <div class="fixed-income-item">
                        <label>Name:</label>
                        <input type="text" name="fixed_income_name[]" required>

                        <label>Owner:</label>
                        <select name="fixed_income_owner[]">
                            <option value="User">User</option>
                            <option value="Spouse">Spouse</option>
                        </select>

                        <label>Base Amount (monthly):</label>
                        <input type="number" step="0.01" name="fixed_income_amount[]" required>

                        <label>Start Year (YYYY):</label>
                        <input type="text" name="fixed_income_start[]" required>

                        <label>Annual COLA?</label>
                        <select name="fixed_income_cola[]" class="cola-toggle">
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>

                        <div class="cola-rate-section" style="display: none;">
                            <label>COLA Rate (%):</label>
                            <input type="number" step="0.1" name="fixed_income_cola_rate[]">
                        </div>

                        <label>Payment Duration:</label>
                        <select name="fixed_income_duration[]" class="duration-toggle">
                            <option value="life">For Life</option>
                            <option value="fixed">Fixed Term</option>
                        </select>

                        <div class="term-years-section" style="display: none;">
                            <label>Number of Years (Fixed Term):</label>
                            <input type="number" name="fixed_income_term_years[]">
                        </div>

                        <label>Spouse Benefit (%):</label>
                        <input type="number" step="0.1" name="fixed_income_spouse_benefit[]" required>

                        <button type="button" onclick="removeFixedIncomeItem(this)">Remove</button>
                    </div>
                </div>
                <button type="button" onclick="addFixedIncomeItem()">Add Fixed Income Item</button>
            </fieldset>
            <button type="submit">Save Fixed Income</button>
        </form>
    </div>
</section>

<script>
// Add a new fixed income item
function addFixedIncomeItem() {
    const container = document.getElementById('fixed-income-items');
    const newItem = document.createElement('div');
    newItem.classList.add('fixed-income-item');
    newItem.innerHTML = `
        <label>Name:</label>
        <input type="text" name="fixed_income_name[]" required>

        <label>Owner:</label>
        <select name="fixed_income_owner[]">
            <option value="User">User</option>
            <option value="Spouse">Spouse</option>
        </select>

        <label>Base Amount (monthly):</label>
        <input type="number" step="0.01" name="fixed_income_amount[]" required>

        <label>Start Year (YYYY):</label>
        <input type="text" name="fixed_income_start[]" required>

        <label>Annual COLA?</label>
        <select name="fixed_income_cola[]" class="cola-toggle">
            <option value="no">No</option>
            <option value="yes">Yes</option>
        </select>

        <div class="cola-rate-section" style="display: none;">
            <label>COLA Rate (%):</label>
            <input type="number" step="0.1" name="fixed_income_cola_rate[]">
        </div>

        <label>Payment Duration:</label>
        <select name="fixed_income_duration[]" class="duration-toggle">
            <option value="life">For Life</option>
            <option value="fixed">Fixed Term</option>
        </select>

        <div class="term-years-section" style="display: none;">
            <label>Number of Years (Fixed Term):</label>
            <input type="number" name="fixed_income_term_years[]">
        </div>

        <label>Spouse Benefit (%):</label>
        <input type="number" step="0.1" name="fixed_income_spouse_benefit[]" required>

        <button type="button" onclick="removeFixedIncomeItem(this)">Remove</button>
    `;
    container.appendChild(newItem);

    // Re-attach event listeners for the new item
    attachCOLAListeners(newItem);
    attachDurationListeners(newItem);
}

// Remove a fixed income item
function removeFixedIncomeItem(button) {
    const item = button.parentNode;
    item.parentNode.removeChild(item);
}

// Toggle display of COLA Rate field
function attachCOLAListeners(item) {
    const colaSelect = item.querySelector('.cola-toggle');
    const colaRateSection = item.querySelector('.cola-rate-section');
    function toggleCOLA() {
        if (colaSelect.value === 'yes') {
            colaRateSection.style.display = 'block';
        } else {
            colaRateSection.style.display = 'none';
        }
    }
    colaSelect.addEventListener('change', toggleCOLA);
    toggleCOLA(); // Initialize on load
}

// Toggle display of Term Years field
function attachDurationListeners(item) {
    const durationSelect = item.querySelector('.duration-toggle');
    const termYearsSection = item.querySelector('.term-years-section');
    function toggleDuration() {
        if (durationSelect.value === 'fixed') {
            termYearsSection.style.display = 'block';
        } else {
            termYearsSection.style.display = 'none';
        }
    }
    durationSelect.addEventListener('change', toggleDuration);
    toggleDuration(); // Initialize on load
}

// Attach listeners for the default item on page load
document.addEventListener('DOMContentLoaded', function() {
    const defaultItems = document.querySelectorAll('.fixed-income-item');
    defaultItems.forEach(item => {
        attachCOLAListeners(item);
        attachDurationListeners(item);
    });
});
</script>
