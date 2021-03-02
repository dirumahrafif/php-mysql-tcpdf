<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen Laporan Customer</title>
</head>
<body>
    <form action="" method="POST">
        <input type="submit" name="html" value="Tampilkan Data Customer"/>
        <input type="submit" name="pdf" value="Download PDF"/>
    </form>

    <?php 
    if(isset($_POST['html'])){
        include("html.php");
    }
    if(isset($_POST['pdf'])){
        header("location:pdf.php");
    }
    ?>
</body>
</html>