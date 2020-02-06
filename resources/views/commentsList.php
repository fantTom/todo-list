<button type="button" id="add-comment" class="btn btn-secondary">Добавить коментарий</button>
<div class="comments-list">
    <?php foreach ($comment as $com) { ?>
        <a class="comment col-6" data-id="<?= $com->getId(); ?>">
            <span class="text"> <?= $com->getText(); ?></span>
            <span class="date"> <?= date_format($com->date_created ? $com->date_created : new DateTime('-3 days'), 'Y-m-d H:i:s'); ?></span>
        </a>

    <?php } ?>

</div>

<?php
//echo '<pre>' . print_r($comment, 1) . '</pre>';
//?>

