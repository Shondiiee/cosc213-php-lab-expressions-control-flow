<?php
$score = filter_input(INPUT_GET, 'score', FILTER_VALIDATE_INT);
$score = $score ?? null;

function letter_grade(?int $s): ?string {
  if ($s === null || $s < 0 || $s > 100) return null;
  if ($s >= 90) return 'A';
  if ($s >= 80) return 'B';
  if ($s >= 70) return 'C';
  if ($s >= 60) return 'D';
  return 'F';
}
$grade = letter_grade($score);
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Grade Calculator</title></head>
<body>
  <h1>Grade Calculator</h1>
  <form>
    <label>Score (0–100):
      <input name="score" type="number" min="0" max="100"
             value="<?= htmlspecialchars($score !== null ? (string)$score : '') ?>">
    </label>
    <button>Compute</button>
  </form>

  <?php if ($score === null): ?>
    <p>Enter a score to see the letter grade.</p>
  <?php elseif ($grade === null): ?>
    <p>Invalid score. Please enter 0–100.</p>
  <?php else: ?>
    <p>Your grade is <strong><?= $grade ?></strong>.</p>
    <?php if ($grade === 'F'): ?>
      <p>Consider office hours for support.</p>
    <?php endif; ?>
  <?php endif; ?>
</body>
</html>
