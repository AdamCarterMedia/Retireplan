<?php
// templates/pages/social-security.php
?>
<section class="collapsible">
    <h2 class="collapsible-header">Social Security</h2>
    <div class="collapsible-content">
        <form id="social-security-form" method="post">
            <fieldset>
                <legend>Primary Social Security</legend>
                <label>Start Year (YYYY):</label>
                <input type="text" name="primary_ss_start" required>
                <label>Monthly Benefit ($):</label>
                <input type="number" step="0.01" name="primary_ss_amount" required>
            </fieldset>

            <fieldset>
                <legend>Spouse Social Security (if applicable)</legend>
                <label>Start Year (YYYY):</label>
                <input type="text" name="spouse_ss_start">
                <label>Monthly Benefit ($):</label>
                <input type="number" step="0.01" name="spouse_ss_amount">
            </fieldset>
            <p class="note">
                Social Security benefits are adjusted annually based on the assumed inflation rate.
            </p>
            <button type="submit">Save Social Security Info</button>
        </form>
    </div>
</section>
