"use strict";
$(document).ready(function() {
    $("#select21").select2({
        theme: "bootstrap",
        placeholder: "single select"
    });
    $("#select22").select2({
        theme: "bootstrap",
        placeholder: "multi select"
    });

    $('#select24').select2({
        allowClear: true,
        theme: "bootstrap",
        placeholder: "select"
    });
    $('#select25').select2({
        allowClear: true,
        theme: "bootstrap",
        placeholder: "select"
    });

    $('#select26').select2({
        placeholder: "select",
        theme: "bootstrap"
    });
});
