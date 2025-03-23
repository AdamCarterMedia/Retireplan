<?php
// templates/pages/grid.php
?>
<section class="simulation-grid my-4">
  <div class="card">
    <div class="card-header">
      <h2>Simulation Results</h2>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped" id="results-grid">
          <thead>
            <tr>
              <th style="position: relative;">Year
                <div class="resizer"></div>
              </th>
              <th style="position: relative;">Budget Total
                <div class="resizer"></div>
              </th>
              <th style="position: relative;">Fixed Income
                <div class="resizer"></div>
              </th>
              <th style="position: relative;">Investment Total
                <div class="resizer"></div>
              </th>
              <th style="position: relative;">Monthly Tax
                <div class="resizer"></div>
              </th>
              <th style="position: relative;">Withdrawal
                <div class="resizer"></div>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Example dummy data for demonstration purposes.
            for ($year = 2025; $year <= 2035; $year++) {
              echo "<tr>";
              echo "<td>" . $year . "</td>";
              echo "<td>$" . number_format(1000 + ($year - 2025) * 50, 2) . "</td>";
              echo "<td>$" . number_format(500 + ($year - 2025) * 10, 2) . "</td>";
              echo "<td>$" . number_format(20000 + ($year - 2025) * 500, 2) . "</td>";
              echo "<td>$" . number_format(300 + ($year - 2025) * 5, 2) . "</td>";
              echo "<td>$" . number_format(400 + ($year - 2025) * 20, 2) . "</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<style>
/* CSS for the resizer element */
.resizer {
  width: 5px;
  cursor: col-resize;
  position: absolute;
  right: 0;
  top: 0;
  height: 100%;
  user-select: none;
}
</style>

<script>
// JavaScript to enable column resizing
document.querySelectorAll('#results-grid th').forEach(function(th) {
  const resizer = th.querySelector('.resizer');
  if (!resizer) return; // Skip if no resizer is present

  resizer.addEventListener('mousedown', function(e) {
    const startX = e.pageX;
    const startWidth = th.offsetWidth;

    function onMouseMove(e) {
      const newWidth = startWidth + (e.pageX - startX);
      th.style.width = newWidth + 'px';
    }

    function onMouseUp() {
      document.removeEventListener('mousemove', onMouseMove);
      document.removeEventListener('mouseup', onMouseUp);
    }

    document.addEventListener('mousemove', onMouseMove);
    document.addEventListener('mouseup', onMouseUp);
  });
});
</script>
