/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-11
 * Time: 08:53
 */

$(document).ready(function () {
    $('#dtUserList').DataTable({
    });
    $('#dtFlexLog').DataTable({
        paging: false,
        info: false
    });
    $('#dtFlexReport').DataTable({

    });
    $('#dtFlexCode').DataTable({
        columnDefs: [
            { width: "10%", targets: 0 },
            { width: "30%", targets: 1 }
        ],
        paging: false,
        info: false
    });
});