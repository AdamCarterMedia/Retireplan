<?php
// templates/layout/header.php
// This header uses Bootstrap's card and nav tabs for a modern look.
?>
<?php
echo "<!-- TESTING HEADER.PHP -->";
?>
<div class="card text-center my-4">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" id="data-tab" data-bs-toggle="tab" href="#tab-data" aria-current="true">Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="grid-tab" data-bs-toggle="tab" href="#tab-grid">Grid</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="assumptions-tab" data-bs-toggle="tab" href="#tab-assumptions">Assumptions</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h1 class="card-title">
      <?php echo isset($config['app_name']) ? htmlspecialchars($config['app_name']) : 'Retireplan'; ?>
    </h1>
    <p class="card-text">
      <strong>Legal Disclaimer:</strong> The Retirement Planner tool is provided for estimation purposes only and does not constitute professional financial or tax advice. All projections are based on current data and assumptions that may change over time. Please consult a certified financial advisor and tax professional before making any decisions.
    </p>
  </div>
</div>
