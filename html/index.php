<?php include 'template/header.php';?>

<div class="flex justify-center mt-8">
  <div class="max-w-2xl rounded-lg shadow-xl bg-gray-50">
    <form action="upload.php" method="POST" enctype="multipart/form-data">
      <div class="m-4">
          <label class="inline-block mb-2 text-gray-500">File Upload</label>
          <div class="flex items-center justify-center w-full">
          <!-- <label for="formFileLg" class="form-label inline-block mb-2 text-gray-700">Example</label> -->
          <input class="form-control
            block
            w-full
            px-2
            py-1.5
            text-xl
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            id="formFileLg" type="file" name="uploadedFile">
          </div>
        </div>
      <div class="flex justify-center p-2">
          <button type="submit" name="uploadBtn" class="w-full px-4 py-2 text-white bg-blue-500 rounded shadow-xl">Upload</button>
      </div>
    </form>
  </div>
</div>
<?php include 'template/footer.php';?>
