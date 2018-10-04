$(document).ready(function () {
    $("#datetimepicker").datetimepicker({
        language: 'da',
        autoclose: true,
        todayBtn: true,
        weekStart: 1,
        minuteStep: 1,
        daysOfWeekDisabled: [0,6],
        pickerPosition: "bottom-left"
    });
    $('#datetimepicker').datetimepicker("setDate", new Date());

});