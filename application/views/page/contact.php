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

<div class="jumbotron jumbotron-fluid">
    <div class="container mt-5">
        <h1 class="display-5 pt-3 text-center">Google Map API</h1>
    </div>
    
</div>
<div id="map"></div>
