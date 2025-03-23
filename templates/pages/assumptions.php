<?php
// templates/pages/assumptions.php
?>
<section class="assumptions">
    <h2>Future Assumptions</h2>
    <div class="assumptions-disclaimer">
        <p>
            <strong>Note:</strong> The state income tax rates and other tax assumptions provided below are approximate estimates for general income tax calculations.
            Some states have more complex taxation policies, including local taxes and special exemptions.
            Please consult official sources or a tax professional for precise information.
        </p>
    </div>
    <form id="assumptions-form" method="post">
        <fieldset>
            <legend>Federal Tax Brackets & Rates</legend>
            <?php
            $defaultTaxBrackets = require __DIR__ . '/../../config/tax_brackets.php';
            foreach ($defaultTaxBrackets as $status => $brackets) {
                echo "<h3>" . ucfirst(str_replace('_', ' ', $status)) . ":</h3>";
                foreach ($brackets as $bracket) {
                    echo '<div class="tax-bracket">';
                    echo 'Threshold: <input type="number" name="assumption[tax_brackets][' . $status . '][]" value="' . htmlspecialchars($bracket['threshold']) . '"> ';
                    echo 'Rate: <input type="number" step="0.1" name="assumption[tax_rates][' . $status . '][]" value="' . htmlspecialchars($bracket['rate']) . '">';
                    echo '</div>';
                }
            }
            ?>
        </fieldset>
        <fieldset>
            <legend>State Income Tax</legend>
            <label>State Income Tax Rate (%):</label>
            <input type="number" name="assumption[state_tax_rate]" required>
        </fieldset>
        <fieldset>
            <legend>Inflation</legend>
            <label>Average Yearly Inflation Rate (%):</label>
            <input type="number" step="0.1" name="assumption[inflation_rate]" required>
        </fieldset>
        <fieldset>
            <legend>RMD Calculation Parameters</legend>
            <?php
            $rmdFactors = require __DIR__ . '/../../config/rmd_tables.php';
            foreach ($rmdFactors as $age => $factor) {
                echo '<div class="rmd-factor">';
                echo 'Age ' . htmlspecialchars($age) . ': <input type="number" step="0.1" name="assumption[rmd_factors][' . htmlspecialchars($age) . ']" value="' . htmlspecialchars($factor) . '">';
                echo '</div>';
            }
            ?>
        </fieldset>
    </form>
    <div class="assumptions-footer">
        <p>
            <strong>Legal Disclaimer:</strong> The Retirement Planner tool is provided for estimation purposes only and does not constitute professional financial or tax advice. All projections are based on current data and assumptions that may change over time. Users are strongly advised to consult a certified financial advisor and tax professional before making any decisions.
        </p>
    </div>
</section>
