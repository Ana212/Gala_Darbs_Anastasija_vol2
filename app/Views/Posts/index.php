<!-- BREADCRUMBS -->
<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Posts</li>
        </ol>
    </nav>
</div>

<!-- ... -->

<div class="container">
    <?php
    foreach ($posts as $post) {
        echo '<div class="row">
            <div class="col-3">
            <img src="' . $post->image . '">
            
            </div>
            <div class="col-6">
                    <a href="?page=post&id=' . $post->id . '">' . $post->title . '</a> 
                    <br>' . $post->text . '
                    </div>
        </div>';
    }
    ?>
</div>
<br>

