$(document).ready(function() {
    $('.datepicker').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy",
        language: 'es'
    });


    // FOR DEMO PURPOSE
    $('#fechainicial').on('change', function() {
        var pickedDate = $('input').val();
        $('#pickedDate').html(pickedDate);
    });
});