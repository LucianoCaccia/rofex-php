
<?php
if (empty($modal['id'])) {
    $modal['id'] = 'autoridades';
}
if (empty($modal['title'])) {
    $modal['title'] = 'Foo modal title';
}
if (empty($modal['summary'])) {
    $modal['summary'] = 'Bar summary';
}
if (empty($modal['body'])) {
    $modal['body'] = '';
}
if (empty($modal['image'])) {
    $modal['image'] = '';
}
?>

<!-- Card -->
<div class="card">
    <?php if (!empty($modal['image'])): ?>
        <div class="p-2">
            <!-- <img src="./img/avatar-default.png" class="card-img-top img-fluid rounded-circle" alt=""> -->
            <img src="<?php echo $modal['image']; ?>" class="card-img-top" alt="<?php echo $modal['title']; ?>">
        </div>
    <?php endif; ?>
    <div class="card-body">
    <h5 class="card-title"><?php echo $modal['title']; ?></h5>
    <p class="card-text"><?php echo $modal['summary']; ?></p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $modal['id']; ?>">Ir a Bio</a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="<?php echo $modal['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrars">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row">
                    <?php if (!empty($modal['image'])): ?>
                        <div class="col-sm-5">
                            <img src="<?php echo $modal['image']; ?>" class="card-img-top" alt="<?php echo $modal['title']; ?>">
                        </div>
                    <?php endif; ?>
                    <div class="col-sm-7">
                        <h3><?php echo $modal['title']; ?></h3>
                        <h4><?php echo $modal['summary']; ?></h4>
                        <p class="text-muted d-flex"><?php echo $modal['body']; ?></p>
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Volver a autoridades</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
