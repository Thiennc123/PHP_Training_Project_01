<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Name" name="name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
            </div>

            <div class="form-group col-md-6">
                <label for="inputPassword4">Image</label>
                <input type="file" class="form-control" placeholder="Image" name="upload-file" id="upload-file" onchange="getImagePreview(event)">
            </div>

            <div id="preview">

            </div>

        </div>

        <button type="submit" class="btn btn-primary">Add </button>
    </form>

    <?php


    if (isset($_FILES["upload-file"])) {

        $file_name = $_FILES["upload-file"]["name"];
        $file_type = $_FILES["upload-file"]["type"];
        $tmp_name = $_FILES["upload-file"]["tmp_name"];
        $file_size = $_FILES["upload-file"]["size"];
        $ext = explode(".", $file_name);
        $file_ext = strtolower(end($ext));

        $arr_ext = array('jpg', 'png');

        if (!in_array($file_ext, $arr_ext)) {
            echo "Fail Format";
            exit();
        }

        if ($file_size > 1091520) {
            echo " File size over";
            exit();
        }

        $moved = move_uploaded_file($tmp_name, "assets/images/" . $file_name);

        /*if ($moved) {
            echo "Successfully uploaded";
        } else {
            echo "Not uploaded because of error #" . $_FILES["file"]["error"];
        }*/
    }
    ?>
</div>


<script type="text/javascript">
    function getImagePreview(event) {
        var image = URL.createObjectURL(event.target.files[0]);
        var imageDiv = document.getElementById("preview");
        var newImg = document.createElement("img");
        imageDiv.innerHTML = '';
        newImg.width = '300';
        newImg.width = '300';
        newImg.src = image;
        imageDiv.appendChild(newImg);
    }
</script>