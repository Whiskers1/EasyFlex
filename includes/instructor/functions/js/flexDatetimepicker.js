$(document).ready(function () {
    $("#datetimepickerstart").datetimepicker({
        language: 'da',
        autoclose: true,
        todayBtn: true,
        weekStart: 1,
        minuteStep: 1,
        daysOfWeekDisabled: [0,6],
        pickerPosition: "bottom-left"
    });
    $("#datetimepickerend").datetimepicker({
        language: 'da',
        autoclose: true,
        todayBtn: true,
        weekStart: 1,
        minuteStep: 1,
        daysOfWeekDisabled: [0,6],
        pickerPosition: "bottom-left"
    });
});