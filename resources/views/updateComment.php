<?php require_once __DIR__ . '/../header.php'; ?>

    <main class="container">
        <div class="row">
            <form class="created" id="update-comment" data-id="<?= $comment->getId(); ?>">

                <div class="form-group">
                    <label for="text">Коментарий</label>
                    <textarea class="form-control" id="text" rows="3"></textarea>
                </div>

                <div class="form-group row justify-content-between">
                    <button type="button" class="btn btn-secondary col-5 cancel">Отмена</button>
                    <button type="submit" class="btn btn-primary col-5">Сохранить</button>
                </div>
            </form>

            <script>
                $('#text').text('<?=$comment->getText();?>');
            </script>
        </div>
    </main>
<?php require_once __DIR__ . '/../footer.php'; ?>