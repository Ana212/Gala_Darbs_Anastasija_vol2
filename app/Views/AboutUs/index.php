<!-- BREADCRUMBS -->
<div>
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
        </nav>
</div>
<!-- ... -->







<div class="container" style="overflow: hidden;">
    <h2>About us</h2>
    <div class="row">

    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Water</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
    </ul>
</div>

<!-- teksta un bilžu daļa -->

<div class="container">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active foo" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div><img class="zoo" src="images/catt.png" alt="" id="water">
                <p> <?php
                    foreach ($articles as $article) {
                        echo '<div>
                    <br>' . $article->text . ' </div>';
                    }
                    ?></p>
            </div>
        </div>


        <div class="tab-pane fade foo" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div><img class="zoo" src="images/hydro.png" alt="" id="grass">
                <p> <?php
                    foreach ($articles as $article) {
                        echo '<div>
                    <br>' . $article->text . ' </div>';
                    }
                    ?></p>
            </div>
        </div>

        <div class="tab-pane fade foo" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div><img class="zoo" src="images/tac.png" alt="" id="soil">
                <p> <?php
                    foreach ($articles as $article) {
                        echo '<div>
                    <br>' . $article->text . ' </div>';
                    }
                    ?></p>
            </div>
        </div>

        <!-- karte-->

    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="mapouter mb-3">
                            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=R%C4%ABga&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com">find ip net</a></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 600px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 600px;
                                }
                            </style>
                        </div>
                    </div>
                    <div class="col">
                        <p>
                            <h3>Adress:</h3>
                        </p>
                        <p>Kr.Barona street 44-21</p>
                        <p>
                            <h3>E-mail:</h3>
                        </p>
                        <p>fooo@bar.ou</p>
                        <p>
                            <h3>Phone:</h3>
                        </p>
                        <p>+371 12345678</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>