<?php require_once __DIR__ . '/../header.php'; ?>
<?php //dd($task)?>
    <main class="container">
        <div class="row">
            <form class="created" id="update-task" data-id="<?=$idTask?>">
                <div class="form-group">
                    <label for="title">Заголовок задачи</label>
                    <input type="text" class="form-control" id="title" required>
                </div>
                <div class="form-group">
                    <label for="discription">Описание задачи</label>
                    <textarea class="form-control" id="discription" rows="3" ></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Статус</label>
                    <select class="form-control" id="status" required>
                        <?php foreach ($status_list as $id => $status) { ?>
                            <option value="<?= $id;?>"><?= $status;?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group row justify-content-between">
                    <button type="button" class="btn btn-secondary col-5 cancel">Отмена</button>
                    <button type="submit" class="btn btn-primary col-5">Сохранить</button>
                </div>
            </form>
            <script>
                $('#title').val('<?= $task->getTitle();?>');
                $('#discription').text('<?=$task->getDescription();?>');
                $('#status').val('<?=$task->getStatus();?>');
            </script>
        </div>
        <?php require_once __DIR__ . '/commentsList.php'; ?>

    </main>
<?php require_once __DIR__ . '/../footer.php'; ?>