
<?php
// templates/pages/global-info.php
?>
<section class="collapsible">
    <h2 class="collapsible-header">Global Information</h2>
    <div class="collapsible-content">
        <form id="global-info-form" method="post">
            <!-- Basic Personal Information -->
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Date of Birth (YYYY or MM/YYYY):</label>
            <input type="text" name="dob" required>

            <label>Retirement Year (YYYY):</label>
            <input type="text" name="retirement_year" required>

            <label>Expected Lifespan (Age):</label>
            <input type="number" name="expected_lifespan" required>

            <!-- Spouse Information -->
            <label>Spouse?</label>
            <select name="has_spouse">
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>

            <div id="spouse-fields" style="display: none;">
                <label>Spouse Name:</label>
                <input type="text" name="spouse_name">

                <label>Spouse Date of Birth (YYYY or MM/YYYY):</label>
                <input type="text" name="spouse_dob">

                <label>Spouse Retirement Year (YYYY):</label>
                <input type="text" name="spouse_retirement_year">

                <label>Spouse Expected Lifespan (Age):</label>
                <input type="number" name="spouse_expected_lifespan">

                <label>Spouse Annual Pre‑Tax Earnings ($):</label>
                <input type="number" name="spouse_pre_tax">
            </div>

            <!-- Earnings & Tax Information -->
            <label>User Annual Pre‑Tax Earnings ($):</label>
            <input type="number" name="user_pre_tax" required>

            <label>State of Residence:</label>
            <select name="state_of_residence" required>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>

            <label>State Income Tax Rate (%):</label>
            <input type="number" step="0.1" name="state_tax_rate" required>

            <label>Social Security Tax Rate (%):</label>
            <input type="number" step="0.1" name="ss_tax_rate" required>

            <!-- Tax Filing Status -->
            <label>Tax Filing Status:</label>
            <select name="tax_filing_status" required>
                <option value="single">Single</option>
                <option value="married_filing_jointly">Married Filing Jointly</option>
                <option value="head_of_household">Head of Household</option>
                <option value="married_filing_separately">Married Filing Separately</option>
            </select>
            
            <!-- Submit Button -->
            <button type="submit">Save Global Information</button>
        </form>
    </div>
</section>

<script>
    // Toggle spouse fields based on "Spouse?" selection
    document.addEventListener('DOMContentLoaded', function() {
        const hasSpouseSelect = document.querySelector('select[name="has_spouse"]');
        const spouseFields = document.getElementById('spouse-fields');

        function toggleSpouseFields() {
            spouseFields.style.display = (hasSpouseSelect.value === 'yes') ? 'block' : 'none';
        }

        hasSpouseSelect.addEventListener('change', toggleSpouseFields);
        toggleSpouseFields(); // Run on page load.
    });
</script>
