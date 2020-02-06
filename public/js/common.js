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
        url: '/task/save/'+ $(this).data('id'),
        type: 'GET',
        data: data,
        success: function (result) {
            document.location.href = "/admin";
        }
    });
});


$('.cancel').on('click', function (e) {
    e.preventDefault();
    document.location.href = "/admin";
});

$('#add-task').on('click', function (e) {
    e.preventDefault();
    document.location.href = "/task/created";
});

$('.task').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    document.location.href = "/task/update/" + id;
});