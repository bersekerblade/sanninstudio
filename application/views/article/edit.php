<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $tbl_article['id']; ?>">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" class="form-control" id="" placeholder="Fill Title Here" name="title" value="<?= $tbl_article['title']; ?>">
                    <div class="form-text text-warning"><?= form_error('title') ?></div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Content</label>
                    <textarea class="form-control" id="" rows="3" placeholder="Fill Content Here" name="content"><?= $tbl_article['content']; ?></textarea>
                    <div class="form-text text-warning"><?= form_error('content') ?></div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>