<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="" class="btn btn-warning">Add Article</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h6><?= $title; ?></h6>
            <div class="list-group">
                <?php foreach ($tbl_article as $data) : ?>
                    <a href="#" class="list-group-item list-group-item-action"><?= $data['title']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>