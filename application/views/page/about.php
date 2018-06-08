<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#"><img src="<?=base_url();?>assets/images/logo-spn.png" alt=""></a>
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <?php
            $this->load->view('include/menu')
        ?>
    </div>
</nav>
<div class="jumbotron mt-5">
    <h1 class="pt-3 text-center">รายชื่อกระทรวง</h1>
    
</div>

<div class="container-fluid">
    <table class="table table-bordered">
        <thead>
            <tr class="bg-primary">
                <th>ลำดับ</th>
                <th>ชื่อภาษาไทย</th>
                <th>ชื่อภาษาอังกฤษ</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($file_data as $row) { ?>
            <tr>
                <td><?=$row[0]?></td>
                <td><?=$row[1]?></td>
                <td><?=$row[2]?></td>
            </tr>
        <?php  } ?>
        </tbody>
    </table>
</div>