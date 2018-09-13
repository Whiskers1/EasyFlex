$(document).ready(function () {
    $(".form_datetime").datetimepicker({
        format: "dd/mm/yyyy - hh:ii",
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom-left"
    });
});