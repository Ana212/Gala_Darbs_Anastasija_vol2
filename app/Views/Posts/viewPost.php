<!-- BREADCRUMBS -->
<div>
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                        <li class="breadcrumb-item"><a href="?page=posts">Posts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Post</li>
                </ol>
        </nav>
</div>
<!-- ... -->

<div class="container">
        <h2><?php echo $post->title; ?></h2>
        <div class="row">
                <div class="col-6">

                        <img src="<?php echo $post->image; ?>" alt="">
                </div>
                <div class="col-6">
                        <p><?php echo $post->text; ?></p>
                        <p><?php echo $post->bonustext; ?></p>
                </div>
        </div>
</div>
</div>