$(document).ready(function () {
    $("#datetimepicker").datetimepicker({
        format: "dd/mm/yyyy - hh:ii",
        language: 'da',
        autoclose: true,
        todayBtn: true,
        weekStart: 1,
        daysOfWeekDisabled: [0,6],
        pickerPosition: "bottom-left"
    });
});