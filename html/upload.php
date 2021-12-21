<?php include 'template/header.php';?>
<?php include 'function.php';?>
<div class="flex justify-center mt-8">
  <div class="max-w-2xl rounded-lg shadow-xl bg-gray-50">
    <?php
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["uploadedFile"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      if($imageFileType != "csv" ) {
        echo "Sorry, only CSV files are allowed.";
        $uploadOk = 0;
      }

      if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
      }

      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $target_file)) {
          #echo "The file ". htmlspecialchars( basename( $_FILES["uploadedFile"]["name"])). " has been uploaded.";
          parse_csv($target_file);
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    ?>
  </div>
</div>
<?php include 'template/footer.php';?>