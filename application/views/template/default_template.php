<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CI Sample</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        $this->load->view('include/head');
    ?>
</head>
<body>
    <?php
        $this->load->view($content);
    ?>

    <?php
        $this->load->view('include/foot');
    ?>
</body>
</html>