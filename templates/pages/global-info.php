<!-- Tax Filing Status Dropdown using Bootstrap -->
<div class="dropdown mb-3">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="taxFilingDropdown" data-bs-toggle="dropdown" aria-expanded="false">
    Select Filing Status
  </button>
  <ul class="dropdown-menu" aria-labelledby="taxFilingDropdown">
    <li><a class="dropdown-item" href="#" data-value="single">Single</a></li>
    <li><a class="dropdown-item" href="#" data-value="married_filing_jointly">Married Filing Jointly</a></li>
    <li><a class="dropdown-item" href="#" data-value="head_of_household">Head of Household</a></li>
    <li><a class="dropdown-item" href="#" data-value="married_filing_separately">Married Filing Separately</a></li>
  </ul>
</div>
<input type="hidden" name="tax_filing_status" id="tax_filing_status">
