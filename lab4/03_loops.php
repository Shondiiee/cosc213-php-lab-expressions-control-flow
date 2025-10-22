<?php
// 1) for — print multiples of 7 up to 70
for ($i = 7; $i <= 70; $i += 7) {
  echo $i, ' ';
}
echo PHP_EOL;

// 2) while — sum numbers until > 100
$sum = 0; $n = 1;
while ($sum <= 100) {
  $sum += $n;
  $n++;
}
echo "First n where sum>100 is $n, sum=$sum\n";

// 3) do...while — ensure at least one iteration
$count = 0;
do {
  $count++;
} while ($count < 1);
echo "do...while ran $count time(s)\n";

// 4) foreach — iterate associative array
$cart = ['pen'=>1.2, 'notebook'=>2.5, 'bag'=>12.0, 'gum'=>0.5];
$subtotal = 0.0;
foreach ($cart as $item=>$price) {
  if ($price < 1.0) continue; // skip small items
  $subtotal += $price;
}
echo "Subtotal (skip < 1): $subtotal\n";

// 5) Challenge — FizzBuzz 1..30, skip 13
for ($i = 1; $i <= 30; $i++) {
  if ($i === 13) continue;
  $out = '';
  if ($i % 3 === 0) $out .= 'Fizz';
  if ($i % 5 === 0) $out .= 'Buzz';
  echo $out !== '' ? $out : $i, PHP_EOL;
}

// 6) Stretch — Multiplication Table (1–10)
// Print a title for the table
echo "<h3>Multiplication Table (1–10)</h3>";

// Start the HTML table
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";

// --- Header Row ---
// This prints the top row showing numbers 1 to 10
echo "<tr>";
echo "<th>x</th>"; // top-left corner label
for ($col = 1; $col <= 10; $col++) {
  echo "<th>$col</th>";
}
echo "</tr>";

// --- Table Body ---
// Outer loop → rows
for ($row = 1; $row <= 10; $row++) {
  echo "<tr>"; // start a new row

  // First cell in each row shows the row number
  echo "<th>$row</th>";

  // Inner loop → columns
  for ($col = 1; $col <= 10; $col++) {
    $product = $row * $col; // multiply row × column
    echo "<td>$product</td>"; // print the result
  }

  echo "</tr>"; // end of this row
}

// End of table
echo "</table>";
