/**
 * Created by Dell on 18/01/2017.
 */
$(document).ready(function () {

    $('#addCar').submit(function(e) {
        e.preventDefault();
        var data = $(this).serializeArray();
        var formatData = {};
        console.log(data);
        for(var i=0; i < data.length; i++) {
            console.log(data[i]);
            formatData[data[i]['name']] = data[i]['value'];
        }
        addCar(formatData);
    })

    var addCar = function(credentials) {
        $.ajax({
            method: 'POST',
            url: 'Back/back.php',
            data: credentials,
            success: function(response) {
                console.log("response", response);
                if(response.success) {
                    alert("Voiture crée GG");
                }
            }
        })
    }
})