$(document).ready(function () {

    // $('.admin .active .lig-i').on('click', function () {
    //     // $('.admin #sidebar').toggleClass('active');
    //     alert('asdasdasdasd');
    // });

    $('.admin #sidebarCollapse').on('click', function () {
        $('.admin #sidebar').toggleClass('active');
    });


    $('#category-table').DataTable({
        'aoColumnDefs': [{
             'bSortable': false,
             'aTargets': ['nosort']
         }]
     });

     $('#post-table').DataTable({
        'aoColumnDefs': [{
             'bSortable': false,
             'aTargets': ['nosort']
         }]
     });
});
