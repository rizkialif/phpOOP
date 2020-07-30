var loadFile = function(event) {
    var output = document.getElementById('imgPreview');
    output.src = URL.createObjectURL(event.target.files[0]);
    URL.revokeObjectURL();
};

$(document).ready(function () {
            
    /* 
        Sidebar
     */

    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $("#sidebarCollapse").on("click", function () {
        $("#sidebar, #content").toggleClass("active");
        $(".collapse.in").toggleClass("in");
        $("a[aria-expanded=true]").attr("aria-expanded", "false");
    });

    /* 
        DataTable
     */

    $("#dataTable").DataTable({
        language: {
            "sEmptyTable":	 "Tidak ada data yang tersedia pada tabel ini",
            "sProcessing":   "Sedang memproses...",
            "sLengthMenu":   "Tampilkan _MENU_ entri",
            "sZeroRecords":  "Tidak ditemukan data yang sesuai",
            "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
            "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
            "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
            "sInfoPostFix":  "",
            "sSearch":       "Cari:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Pertama",
                "sPrevious": "Sebelumnya",
                "sNext":     "Selanjutnya",
                "sLast":     "Terakhir"
            }
        }
    });

    /* 
        WYSIWYG
     */

    $("#editor").editor();
    $("#editor2").editor();


     /* 
        Datetime
     */

    $("#datetime").datetimepicker({ format: 'yyyy-mm-dd HH:MM', footer: true, modal: true });

});