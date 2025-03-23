<?php
// templates/pages/investment-income.php
?>
<section class="mb-4">
  <h2>Investment Income</h2>
  <div id="investmentAccordion">
    <!-- Investment Income Item (example) -->
    <div class="card mb-3 investment-item">
      <div class="card-header" id="investmentHeading1">
        <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#investmentCollapse1" aria-expanded="true" aria-controls="investmentCollapse1">
          <!-- Summary: Replace with dynamic calculation: "Adam's Traditional - $699,254" -->
          <span class="investment-summary">Adam's Traditional - $699,254</span>
        </button>
      </div>
      <div id="investmentCollapse1" class="collapse" aria-labelledby="investmentHeading1" data-bs-parent="#investmentAccordion">
        <div class="card-body">
          <!-- Investment Income Form Fields -->
          <form>
            <div class="mb-3">
              <label>Name:</label>
              <input type="text" name="investment_name[]" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Account Owner:</label>
              <select name="investment_owner[]" class="form-select">
                <option value="User">User</option>
                <option value="Spouse">Spouse</option>
              </select>
            </div>
            <div class="mb-3">
              <label>Account Type:</label>
              <select name="investment_account_type[]" class="form-select">
                <option value="Traditional">Traditional</option>
                <option value="Roth">Roth</option>
              </select>
            </div>
            <div class="mb-3">
              <label>Current Balance ($):</label>
              <input type="number" step="0.01" name="investment_balance[]" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Monthly Contribution ($):</label>
              <input type="number" step="0.01" name="investment_contribution[]" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Investment Start Year (YYYY):</label>
              <input type="text" name="investment_start[]" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Expected Annual Growth Rate (%):</label>
              <input type="number" step="0.1" name="investment_growth[]" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>After-Retirement Growth Rate (%):</label>
              <input type="number" step="0.1" name="investment_after_growth[]" class="form-control" required>
            </div>
            <!-- The computed total and RMD amount are calculated and displayed elsewhere -->
          </form>
        </div>
      </div>
    </div>
    <!-- Repeat similar blocks for additional investment items -->
  </div>
  <button type="button" class="btn btn-primary" onclick="addInvestmentItem()">Add Investment Income Item</button>
</section>

<script>
// Example function for dynamic addition (similar to fixed income)
function addInvestmentItem() {
  const accordion = document.getElementById('investmentAccordion');
  const newItem = accordion.firstElementChild.cloneNode(true);
  // Ensure you update IDs appropriately for new items.
  accordion.appendChild(newItem);
}
</script>
