<!-- js -->
<!-- js -->
<script src="<?= base_url('asset/deskapp-master/') ?>vendors/scripts/script.js"></script>
<script src="<?= base_url('asset/deskapp-master/') ?>src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/deskapp-master/') ?>src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
<script src="<?= base_url('asset/deskapp-master/') ?>src/plugins/datatables/media/js/dataTables.responsive.js"></script>
<script src="<?= base_url('asset/deskapp-master/') ?>src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
<!-- buttons for Export datatable -->
<script src="<?= base_url('asset/deskapp-master/') ?>src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
<script src="<?= base_url('asset/deskapp-master/') ?>src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
<script src="<?= base_url('asset/deskapp-master/') ?>src/plugins/datatables/media/js/button/buttons.print.js"></script>
<script src="<?= base_url('asset/deskapp-master/') ?>src/plugins/datatables/media/js/button/buttons.html5.js"></script>
<script src="<?= base_url('asset/deskapp-master/') ?>src/plugins/datatables/media/js/button/buttons.flash.js"></script>
<script src="<?= base_url('asset/deskapp-master/') ?>src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
<script src="<?= base_url('asset/deskapp-master/') ?>src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
<script>
    console.log = function() {}
    $("#bahanbaku").on('change', function() {

        $(".stok_supp").html($(this).find(':selected').attr('data-stok_supp'));
        $(".stok_supp").val($(this).find(':selected').attr('data-stok_supp'));


        $(".toko").html($(this).find(':selected').attr('data-toko'));
        $(".toko").val($(this).find(':selected').attr('data-toko'));

        $(".harga").html($(this).find(':selected').attr('data-harga'));
        $(".harga").val($(this).find(':selected').attr('data-harga'));

    });
</script>
<script>
    console.log = function() {}
    $("#bb").on('change', function() {

        $(".sisa").html($(this).find(':selected').attr('data-sisa'));
        $(".sisa").val($(this).find(':selected').attr('data-sisa'));


        $(".tgl").html($(this).find(':selected').attr('data-tgl'));
        $(".tgl").val($(this).find(':selected').attr('data-tgl'));

    });
</script>
<script>
    console.log = function() {}
    $("#retur").on('change', function() {

        $(".stok").html($(this).find(':selected').attr('data-stok'));
        $(".stok").val($(this).find(':selected').attr('data-stok'));


    });
</script>
<script>
    $('document').ready(function() {
        $('.data-table').DataTable({
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false,
            }],
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "language": {
                "info": "_START_-_END_ of _TOTAL_ entries",
                searchPlaceholder: "Search"
            },
        });
        $('.data-table-export').DataTable({
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false,
            }],
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "language": {
                "info": "_START_-_END_ of _TOTAL_ entries",
                searchPlaceholder: "Search"
            },
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'pdf', 'print'
            ]
        });
        var table = $('.select-row').DataTable();
        $('.select-row tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });
        var multipletable = $('.multiple-select-row').DataTable();
        $('.multiple-select-row tbody').on('click', 'tr', function() {
            $(this).toggleClass('selected');
        });
    });
</script>

</body>

</html>