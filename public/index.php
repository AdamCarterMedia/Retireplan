<?php
// public/index.php

// Load global configuration
$config = require __DIR__ . '/../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($config['app_name']); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include __DIR__ . '/../templates/layouts/header.php'; ?>

    <!-- Tab Content Container -->
    <div class="tab-content">
    <div class="tab-pane fade show active" id="tab-data">
  <div class="accordion" id="dataAccordion">
      
    <!-- Global Information Accordion Item -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="globalInfoHeading">
        <button class="accordion-button" type="button" data-bs-toggle="collapse"
          data-bs-target="#globalInfoCollapse" aria-expanded="true" aria-controls="globalInfoCollapse">
          Global Information
        </button>
      </h2>
      <div id="globalInfoCollapse" class="accordion-collapse collapse show" aria-labelledby="globalInfoHeading" data-bs-parent="#dataAccordion">
        <div class="accordion-body">
          <?php include __DIR__ . '/../templates/pages/global-info.php'; ?>
        </div>
      </div>
    </div>
    
    <!-- Budget Accordion Item -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="budgetHeading">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#budgetCollapse" aria-expanded="false" aria-controls="budgetCollapse">
          Budget Information
        </button>
      </h2>
      <div id="budgetCollapse" class="accordion-collapse collapse" aria-labelledby="budgetHeading" data-bs-parent="#dataAccordion">
        <div class="accordion-body">
          <?php include __DIR__ . '/../templates/pages/budget.php'; ?>
        </div>
      </div>
    </div>
    
    <!-- Fixed Income Accordion Item -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="fixedIncomeHeading">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#fixedIncomeCollapse" aria-expanded="false" aria-controls="fixedIncomeCollapse">
          Fixed Income
        </button>
      </h2>
      <div id="fixedIncomeCollapse" class="accordion-collapse collapse" aria-labelledby="fixedIncomeHeading" data-bs-parent="#dataAccordion">
        <div class="accordion-body">
          <?php include __DIR__ . '/../templates/pages/fixed-income.php'; ?>
        </div>
      </div>
    </div>
    
    <!-- Investment Income Accordion Item -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="investmentHeading">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#investmentCollapse" aria-expanded="false" aria-controls="investmentCollapse">
          Investment Income
        </button>
      </h2>
      <div id="investmentCollapse" class="accordion-collapse collapse" aria-labelledby="investmentHeading" data-bs-parent="#dataAccordion">
        <div class="accordion-body">
          <?php include __DIR__ . '/../templates/pages/investment-income.php'; ?>
        </div>
      </div>
    </div>
    
    <!-- Social Security Accordion Item -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="socialSecurityHeading">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#socialSecurityCollapse" aria-expanded="false" aria-controls="socialSecurityCollapse">
          Social Security
        </button>
      </h2>
      <div id="socialSecurityCollapse" class="accordion-collapse collapse" aria-labelledby="socialSecurityHeading" data-bs-parent="#dataAccordion">
        <div class="accordion-body">
          <?php include __DIR__ . '/../templates/pages/social-security.php'; ?>
        </div>
      </div>
    </div>
    
    <!-- Withdrawal Strategy Accordion Item -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="withdrawalHeading">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#withdrawalCollapse" aria-expanded="false" aria-controls="withdrawalCollapse">
          Withdrawal Strategy
        </button>
      </h2>
      <div id="withdrawalCollapse" class="accordion-collapse collapse" aria-labelledby="withdrawalHeading" data-bs-parent="#dataAccordion">
        <div class="accordion-body">
          <?php include __DIR__ . '/../templates/pages/withdrawal-strategy.php'; ?>
        </div>
      </div>
    </div>
    
  </div> <!-- end accordion -->
</div>
        <div class="tab-pane fade" id="tab-grid">
            <?php include __DIR__ . '/../templates/pages/grid.php'; ?>
        </div>
        <div class="tab-pane fade" id="tab-assumptions">
            <?php include __DIR__ . '/../templates/pages/assumptions.php'; ?>
        </div>
    </div>

    <?php include __DIR__ . '/../templates/layouts/footer.php'; ?>

    <!-- Include Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Your custom JS files (tabs.js, collapse.js, tooltip.js) can be included if needed -->
    <!-- If you're now using Bootstrap's tabs, you may not need your custom tabs.js -->
    <script src="assets/js/collapse.js"></script>
    <script src="assets/js/tooltip.js"></script>
</body>
</html>
