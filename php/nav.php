<?php
$pages = [
  "day1.html",
  "day2.html",
  "day3.html",
  "day4.html"
];
$page_name = [
  "Day 1",
  "Day 2",
  "Day 3",
  "Day 4"
];

if(basename(htmlspecialchars($_SERVER['PHP_SELF'])) == "index.html") {
  $prefix_index = "./";
  $prefix = "pages/";
} else {
  $prefix_index = "../";
  $prefix = "./";
}

echo '<nav><ul>';

echo "<li><a href='{$prefix_index}index.html'>Home</a></li>";
for($i = 0; $i < count($pages); $i++){
    echo "<li><a href='{$prefix}{$pages[$i]}' >{$page_name[$i]}</a></li>";
}
echo '</ul></nav>';
?>
