<?php require_once 'include/headers.php';


?>

<?php 
    if(isset($_POST["submit"])){
        $data = $_POST["data"];
        if($_POST["width"]!= ""){
            $width = $_POST["width"];
        }else{
            $width = "250";
        }

        if($_POST["height"]!= ""){
            $height = $_POST["height"];
        }else{
            $height = "250";
        }
        $url = "https://chart.googleapis.com/chart?cht=qr&chs={$width}x{$height}&chl={$data}";
        $output["img"] = $url;
    }else{
        unset($_POST);
    }
?>

<div class="container mt-5 py-5">
    <div class="row">
        <div class="col-md-5 col-12 mx-auto py-5shadow">
        <h2>STRAP QR CODE GENERATOR</h2>
        <?php if(isset($output)){?>
    <div class="mb-3">
        <img src="<?php echo $output["img"]?>" alt="QR Code" width="100%" height="100%">
        <a class="btn btn-success mt-3" href="<?php echo $output["img"]?>" download>Download</a>
    </div>
<?php }?>
            <form action="/qr" method="POST">
                <div class="form-group mb-3">
                    <label class="form-label" for="data">Data</label>
                    <input type="text" id="data" name="data" class="form-control">
                </div>
                <div class="form-group row">
                    <div class="col-6">
                    <label class="form-label" for="data">Width</label>
                    <input type="text" id="width" name="width" class="form-control">
                    </div>
                    <div class="col-6">
                    <label class="form-label" for="data">Height</label>
                    <input type="text" id="heiht" name="height" class="form-control">
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" name="submit" value="Genrate" class="btn w-100 btn-outline-success">Generate</button>
                </div>
            </form>
        </div>
    </div>

</div>


<?php require_once 'include/footers.php'?>
