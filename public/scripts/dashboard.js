$(document).ready(function () {
    $('#dashboard').DataTable({
        search: {
            return: true,
        },
        lengthMenu: [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, 100,'All'],
        ],
    });
});
