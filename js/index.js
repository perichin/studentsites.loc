var item = $('#slider-list li:first');
var screenWidth = $(document).width();
// console.log(screenWidth);

var pageFunction = function() {
    $('#form-holder').fadeIn('fast');
    $('#student-form').show("slide", {
        direction: "up"
    }, 250, function() {
        $('#submit-form').animate({
            fontSize: '28px'
        }, 300, function() {
            $('#submit-form').animate({
                fontSize: '24px'
            }, 300, function() {
                console.log('all done!');
            });
        });
    });
}

var pulsateCheck = function() {
    item.animate({
        backgroundSize: '0px',
        fontSize: '0px'
    }, 300, function() {
        item.animate({
            backgroundSize: '30px',
            fontSize: '20px'
        })
        item = item.next('li');
        if (item[0] !== undefined) {
            item.fadeIn(pulsateCheck());
        } else {
            setTimeout(function() {
                pageFunction();
            }, 850);
        }
    })
}

$(window).load(function() {
    if (screenWidth >= 768) {
        $('#slider1').fadeIn({
            duration: 750,
            queue: false
        });
        $('.slider-headline').fadeIn({
            duration: 750,
            queue: false
        });
        item.fadeIn(pulsateCheck());
    }
})

// form validation
$('#student-form').validate({
    rules: {
        first_name: {
            required: true,
        },
        last_name: {
            required: true,
        },
        email: {
            required: true,
            email: true
        },
        phone_home_visible: {
            required: true,
        },
        zip: {
            required: true,
        },
        state: {
            required: true,
        }
    }
})

// zipcode change -> trigger automatic state select
$('#zip').on('blur', function() {
    if ($(this).valid() == true) {
        var client = new XMLHttpRequest();
        var zipcode = $(this).val();
        client.open("GET", "http://api.zippopotam.us/us/" + zipcode, true);
        client.onreadystatechange = function() {
            if (client.readyState == 4) {
                var response = jQuery.parseJSON(client.responseText);
                if (!jQuery.isEmptyObject(response)) {
                    var geodata = response['places'];
                    var state = geodata[0]['state abbreviation'];
                    $('#state').val(state);
                    $('#submit-form').focus();
                } else {
                    $('#state').val('');
                    $('#zip').val('').focus();
                }
            };
        };
        client.send();
    }
    else{
        $('#state').val('');
        $('#zip').focus();
    }
})

// date/phone masking
$('#phone_home_visible').mask('(999) 999-9999');

$('#submit-form').on('click', function(e) {
    if ($('#student-form').valid()) {
        e.preventDefault();
        $(this).parent('div').hide();
        $('#lookingfor').fadeIn();
        var rawPhone = $('#phone_home_visible').val().replace(/\D/g, '');
        $('#phone_home').val(rawPhone);
        $('#phone_home_visible').removeAttr('name');
        $('#student-form').submit();
    }
})
