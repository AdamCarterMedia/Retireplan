<?php
// templates/pages/fixed-income.php
?>
<section class="mb-4">
  <h2>Fixed Income</h2>
  <div id="fixedIncomeAccordion">
    <!-- Fixed Income Item (Example) -->
    <div class="card mb-3 fixed-income-item">
      <div class="card-header" id="fixedIncomeHeading1">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#fixedIncomeCollapse1" aria-expanded="true" aria-controls="fixedIncomeCollapse1">
          <!-- Summary: You can update this dynamically with calculated values -->
          <span class="fixed-income-summary">Fixed Income Item Summary</span>
        </button>
      </div>
      <div id="fixedIncomeCollapse1" class="accordion-collapse collapse show" aria-labelledby="fixedIncomeHeading1" data-bs-parent="#fixedIncomeAccordion">
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="fixed_income_name_1">Name:</label>
              <input type="text" id="fixed_income_name_1" name="fixed_income_name[]" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="fixed_income_owner_1">Owner:</label>
              <select id="fixed_income_owner_1" name="fixed_income_owner[]" class="form-select">
                <option value="User">User</option>
                <option value="Spouse">Spouse</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="fixed_income_amount_1">Base Amount (monthly):</label>
              <input type="number" step="0.01" id="fixed_income_amount_1" name="fixed_income_amount[]" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="fixed_income_start_1">Start Year (YYYY):</label>
              <input type="text" id="fixed_income_start_1" name="fixed_income_start[]" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="fixed_income_cola_1">Annual COLA?</label>
              <select id="fixed_income_cola_1" name="fixed_income_cola[]" class="form-select cola-toggle">
                <option value="no">No</option>
                <option value="yes">Yes</option>
              </select>
            </div>
            <div class="mb-3 cola-rate-section" style="display: none;">
              <label for="fixed_income_cola_rate_1">COLA Rate (%):</label>
              <input type="number" step="0.1" id="fixed_income_cola_rate_1" name="fixed_income_cola_rate[]" class="form-control">
            </div>
            <div class="mb-3">
              <label for="fixed_income_duration_1">Payment Duration:</label>
              <select id="fixed_income_duration_1" name="fixed_income_duration[]" class="form-select duration-toggle">
                <option value="life">For Life</option>
                <option value="fixed">Fixed Term</option>
              </select>
            </div>
            <div class="mb-3 term-years-section" style="display: none;">
              <label for="fixed_income_term_years_1">If Fixed Term, Number of Years:</label>
              <input type="number" id="fixed_income_term_years_1" name="fixed_income_term_years[]" class="form-control">
            </div>
            <div class="mb-3">
              <label for="fixed_income_spouse_benefit_1">Spouse Benefit Percentage:</label>
              <input type="number" step="0.1" id="fixed_income_spouse_benefit_1" name="fixed_income_spouse_benefit[]" class="form-control" required>
            </div>
            <!-- You may include a remove button for dynamic removal if needed -->
          </form>
        </div>
      </div>
    </div>
  </div>
  <button type="button" class="btn btn-primary" onclick="addFixedIncomeItem()">Add Fixed Income Item</button>
</section>

<script>
// Function to attach COLA listener to a fixed income item.
function attachCOLAListeners(item) {
    const colaSelect = item.querySelector('.cola-toggle');
    const colaRateSection = item.querySelector('.cola-rate-section');
    if (colaSelect && colaRateSection) {
        function toggleCOLA() {
            if (colaSelect.value === 'yes') {
                colaRateSection.style.display = 'block';
            } else {
                colaRateSection.style.display = 'none';
            }
        }
        colaSelect.addEventListener('change', toggleCOLA);
        toggleCOLA(); // Initialize on page load.
    }
}

// Function to add a new fixed income item.
function addFixedIncomeItem() {
    const accordion = document.getElementById('fixedIncomeAccordion');
    const firstItem = accordion.querySelector('.fixed-income-item');
    const newItem = firstItem.cloneNode(true);

    // Clear values in the cloned item.
    const inputs = newItem.querySelectorAll('input');
    inputs.forEach(input => {
        input.value = '';
    });
    const selects = newItem.querySelectorAll('select');
    selects.forEach(select => {
        select.selectedIndex = 0;
    });

    // You would normally generate unique IDs for each new item here.
    // For now, the cloned item is appended as-is.
    accordion.appendChild(newItem);
    attachCOLAListeners(newItem);
}

// Attach COLA listeners for the default item.
document.addEventListener('DOMContentLoaded', function() {
    const fixedIncomeItems = document.querySelectorAll('.fixed-income-item');
    fixedIncomeItems.forEach(item => {
        attachCOLAListeners(item);
    });
});
</script>
