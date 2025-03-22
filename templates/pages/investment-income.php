<?php
// templates/pages/investment-income.php
?>
<section class="collapsible">
    <h2 class="collapsible-header">Investment Income</h2>
    <div class="collapsible-content">
        <form id="investment-income-form" method="post">
            <fieldset>
                <legend>Investment Accounts</legend>
                <div id="investment-items">
                    <!-- A single investment item is shown by default -->
                    <div class="investment-item">
                        <label>Name:</label>
                        <input type="text" name="investment_name[]" required>

                        <label>Account Owner:</label>
                        <select name="investment_owner[]">
                            <option value="User">User</option>
                            <option value="Spouse">Spouse</option>
                        </select>

                        <label>Account Type:</label>
                        <select name="investment_account_type[]">
                            <option value="Traditional">Traditional</option>
                            <option value="Roth">Roth</option>
                        </select>

                        <label>Current Balance ($):</label>
                        <input type="number" step="0.01" name="investment_balance[]" required>

                        <label>Monthly Contribution ($):</label>
                        <input type="number" step="0.01" name="investment_contribution[]" required>

                        <label>Investment Start Year (YYYY):</label>
                        <input type="text" name="investment_start[]" required>

                        <label>Expected Annual Growth Rate (%):</label>
                        <input type="number" step="0.1" name="investment_growth[]" required>

                        <label>After-Retirement Growth Rate (%):</label>
                        <input type="number" step="0.1" name="investment_after_growth[]" required>

                        <!-- A field or display for "Computed Total" might be shown dynamically in the results,
                             so we won't add it here. -->

                        <button type="button" onclick="removeInvestmentItem(this)">Remove</button>
                    </div>
                </div>
                <button type="button" onclick="addInvestmentItem()">Add Investment Item</button>
            </fieldset>
            <button type="submit">Save Investment Income</button>
        </form>
    </div>
</section>

<script>
// Add a new investment item
function addInvestmentItem() {
    const container = document.getElementById('investment-items');
    const newItem = document.createElement('div');
    newItem.classList.add('investment-item');
    newItem.innerHTML = `
        <label>Name:</label>
        <input type="text" name="investment_name[]" required>

        <label>Account Owner:</label>
        <select name="investment_owner[]">
            <option value="User">User</option>
            <option value="Spouse">Spouse</option>
        </select>

        <label>Account Type:</label>
        <select name="investment_account_type[]">
            <option value="Traditional">Traditional</option>
            <option value="Roth">Roth</option>
        </select>

        <label>Current Balance ($):</label>
        <input type="number" step="0.01" name="investment_balance[]" required>

        <label>Monthly Contribution ($):</label>
        <input type="number" step="0.01" name="investment_contribution[]" required>

        <label>Investment Start Year (YYYY):</label>
        <input type="text" name="investment_start[]" required>

        <label>Expected Annual Growth Rate (%):</label>
        <input type="number" step="0.1" name="investment_growth[]" required>

        <label>After-Retirement Growth Rate (%):</label>
        <input type="number" step="0.1" name="investment_after_growth[]" required>

        <button type="button" onclick="removeInvestmentItem(this)">Remove</button>
    `;
    container.appendChild(newItem);
}

// Remove an investment item
function removeInvestmentItem(button) {
    const item = button.parentNode;
    item.parentNode.removeChild(item);
}
</script>
