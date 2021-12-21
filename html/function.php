<div class="flex justify-center mt-8">
  <div class="max-w-2xl rounded-lg shadow-xl bg-gray-50">
<?php

function parse_csv($file) {
  $row = 1;
  if (($handle = fopen($file, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      $num = count($data);
      echo '<div class="m-4">';
      $row++;
      for ($c=0; $c < $num; $c++) {
        echo $data[$c] . "\n";
      }
      echo '</div>';
    }
    fclose($handle);
  }
}
?>
</div>
</div>