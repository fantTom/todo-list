<?php require_once __DIR__ . '/../header.php'; ?>

    <main class="container">
        <button type="button" id="add-task" class="btn btn-secondary">Добавить задачу</button>
        <div class="row">
            <?php foreach ($tasks as $key => $task) { ?>
                <div class="col-4">
                    <span class="name-column">
                        <?= $key; ?>
                    </span>
                    <div class="tasks">
                        <?php foreach ($task as $key => $value) {   ?>
                            <a class="task" data-id="<?= $key?>">
                                <span class="title">
                                    <?= $value['title'] ?>
                                </span>
<!--                                <span class="description">-->
<!--                                    --><?//= $value['description']; ?>
<!--                                </span>-->
                            </a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
<?php require_once __DIR__ . '/../footer.php'; ?>