<?php
// templates/pages/withdrawal-strategy.php
?>
<section class="collapsible">
    <h2 class="collapsible-header">Withdrawal Strategy</h2>
    <div class="collapsible-content">
        <form id="withdrawal-strategy-form" method="post">
            <fieldset>
                <legend>Global Withdrawal Settings</legend>
                
                <label>Withdrawal Start Year (YYYY):</label>
                <input type="text" name="withdrawal_start_year" required>
                
                <label>Withdrawal Percentage (%):</label>
                <input type="number" step="0.1" name="withdrawal_percentage" required>
                
                <label>Increase with Inflation?</label>
                <select name="increase_with_inflation" required>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
            </fieldset>
            <button type="submit">Save Withdrawal Strategy</button>
        </form>
    </div>
</section>
