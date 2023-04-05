<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <form action="index.php" method="post" class="was-validated">
            <div class="mb-3">
                <br>
                <br>
                <label for="isi">Text Convert</label>
                <input type="hidden" name="hasil" id="hasil" class="form-control">
                <textarea rows="6" class="form-control" id="isi" name="isi" required><?php if ($_POST) {
            echo $hasil;
        } ?></textarea>
                 <button  id="delete" class="btn btn-block btn-primary ">delete</button>
                 <button  id="paste" class="btn btn-block btn-primary ">paste</button>
            </div>
            <button type="submit" id="convert" class="btn btn-block btn-primary ">convert</button>
            
        </form>
        <br>
        <label for="hasiltranslite">Hasil Convert</label>
        <textarea rows="6" class="form-control" id="hasiltranslite" name="hasiltranslite"><?php if ($_POST) {
            echo $translite;
        } ?></textarea>
        
        <input row="6" type="hidden" name="hasilend" id="hasilend" class="form-control"
        value="<?=$translite 
        ?>"
        > 
        
    </div>

</body>