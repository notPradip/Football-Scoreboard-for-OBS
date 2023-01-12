<?php function sec($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$siteTitle = "Football Scoreboard for OBS";
?>