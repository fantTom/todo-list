$('#created-task').on('submit', function (e) {
    e.preventDefault();
    var data = "title=" + $('#title').val() + "&discription=" + $('#discription').val() + '&status=' + $('#status').val();
    $.ajax({
        url: '/task/save',
        type: 'GET',
        data: data,
        success: function (result) {
            document.location.href = "/admin";
        }
    });
});

$('#update-task').on('submit', function (e) {
    e.preventDefault();
    var data = "title=" + $('#title').val() + "&discription=" + $('#discription').val() + '&status=' + $('#status').val();
    $.ajax({
        url: '/task/save/' + $(this).data('id'),
        type: 'GET',
        data: data,
        success: function (result) {
            document.location.href = "/admin";
        }
    });
});

$('#created-comment').on('submit', function (e) {
    e.preventDefault();
    var data = "task=" + $('form').data('task') + "&text=" + $('#text').val();
    $.ajax({
        url: '/comment/save',
        type: 'GET',
        data: data,
        success: function (result) {
            history.go(-1);
        }
    });
});
$('#update-comment').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
        url: '/comment/save/' + $(this).data('id'),
        type: 'GET',
        data: "text=" + $('#text').val(),
        success: function (result) {
            history.go(-1);
        }
    });
});

$('.cancel').on('click', function (e) {
    e.preventDefault();
    // document.location.href = "/admin";
    history.go(-1)
});

$('#add-task').on('click', function (e) {
    e.preventDefault();
    document.location.href = "/task/created";
});

$('#add-comment').on('click', function (e) {
    e.preventDefault();

    var id = $('form').data('id');
    document.location.href = "/comment/created/" + id;

});

$('.task').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    document.location.href = "/task/update/" + id;
});
$('.comment ').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    document.location.href = "/comment/update/" + id;
});