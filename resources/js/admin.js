$(document).ready(function () {
    $('.admin #sidebarCollapse').on('click', function () {
        $('.admin #sidebar').toggleClass('active');
        $('#list-tab li .submenu-list.show').toggleClass('show');
    });

    //

    $('#category-table thead tr').clone(true).appendTo('#category-table thead');
    $('#category-table thead tr:eq(1) th').each(function (i) {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');

        $('input', this).on('keyup change', function () {
            if (categTable.column(i).search() !== this.value) {
                categTable
                    .column(i)
                    .search(this.value)
                    .draw();
            }
        });
    });


    var categTable = $('#category-table').DataTable({
        'aoColumnDefs': [
            {
                'bSortable': false,
                'bSearchable': false,
                'aTargets': ['nosort', -1]
            }
        ],
        // initComplete: function () {
        //     this.api().columns().every( function () {
        //         var column = this;
        //         var select = $('<select><option value=""></option></select>')
        //             .appendTo( $(column.footer()).empty() )
        //             .on( 'change', function () {
        //                 var val = $.fn.dataTable.util.escapeRegex(
        //                     $(this).val()
        //                 );

        //                 column
        //                     .search( val ? '^'+val+'$' : '', true, false )
        //                     .draw();
        //             } );

        //         column.data().unique().sort().each( function ( d, j ) {
        //             select.append( '<option value="'+d+'">'+d+'</option>' );
        //         } );
        //         console.log(column.data());

        //     } );
        // },
        orderCellsTop: true,
        fixedHeader: true
    });

    //

    $('#post-table thead tr').clone(true).appendTo('#post-table thead');
    $('#post-table thead tr:eq(1) th').each(function (i) {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');

        $('input', this).on('keyup change', function () {
            if (postTable.column(i).search() !== this.value) {
                postTable
                    .column(i)
                    .search(this.value)
                    .draw();
            }
        });
    });

    var postTable = $('#post-table').DataTable({
        'aoColumnDefs': [
            {
            'bSortable': false,
            'bSearchable': false,
            'aTargets': ['nosort', -1]
            }
        ],
        'orderCellsTop': true,
        'fixedHeader': true
    });

    //

    $('#user-table thead tr').clone(true).appendTo('#user-table thead');
    $('#user-table thead tr:eq(1) th').each(function (i) {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');

        $('input', this).on('keyup change', function () {
            if (userTable.column(i).search() !== this.value) {
                userTable
                    .column(i)
                    .search(this.value)
                    .draw();
            }
        });
    });

    var userTable = $('#user-table').DataTable({
        'aoColumnDefs': [
            {
            'bSortable': false,
            'bSearchable': false,
            'aTargets': ['nosort', -1]
            }
        ],
        'orderCellsTop': true,
        'fixedHeader': true
    });

    //

    $(document).on('click', '.delete-post', function () {
        var postID = $(this).attr('data-delete');
        var postDet = $(this).closest('tr').find('.post-what')[0].innerText;
        $('#del-det').text(postDet);
        $('#app-id').val(postID);
        $('#post-delete-modal').modal('show');
    });

    $(document).on('click', '.approve-post', function () {
        var postID = $(this).attr('data-approve');
        var postDet = $(this).closest('tr').find('.post-what')[0].innerText;
        $('#appr-det').text(postDet);
        $('#appr-id').val(postID);
        $('#post-approve-modal').modal('show');
    });

    $(document).on('click', '.repost-post', function () {
        var postID = $(this).attr('data-repost');
        var postDet = $(this).closest('tr').find('.post-what')[0].innerText;
        $('#rep-det').text(postDet);
        $('#rep-id').val(postID);
        $('#post-repost-modal').modal('show');
    });
});
