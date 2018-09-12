/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-11
 * Time: 08:53
 */

$(document).ready(function () {
    $('#dtFlexSaldo').DataTable({
        paging: false,
        info: false,
    });
    $('#dtFlexLog').DataTable({
        columnDefs: [
            { "width": "30%", "targets": 1 }
        ],
        searching: false,
        paging: false,
        info: false
    });
});