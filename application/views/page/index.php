<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#"><img src="<?=base_url();?>assets/images/logo-spn.png" alt=""></a>
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <?php
            $this->load->view('include/menu');
        ?>
    </div>
</nav>

<!--Hilight-->
<section id="hilight" class="d-flex flex-column justify-content-center align-items-center">
    <h1>Lorem ipsum dolor sit.</h1>
    <p>amet consectetur adipisicing elit. Consectetur assumenda impedit tenetur dolor illum corporis placeat reprehenderit excepturi hic ratione veniam repellat explicabo nulla, id officia culpa inventore dolorem dicta?</p>
</section>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-lg-4">
            <img src="<?=base_url();?>assets/images/intro1.jpg" alt="" class="img-fluid rounded-circle">
            <h2 class="text-center mt-3">Social</h2>
        </div>
        <div class="col-lg-4">
            <img src="<?=base_url();?>assets/images/intro2.jpg" alt="" class="img-fluid rounded-circle">
            <h2 class="text-center mt-3">Process</h2>
        </div>
        <div class="col-lg-4">
            <img src="<?=base_url();?>assets/images/intro3.jpg" alt="" class="img-fluid rounded-circle">
            <h2 class="text-center mt-3">Connection</h2>
        </div>
    </div>
</div>