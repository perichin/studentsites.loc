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

$.validator.addMethod("validPhoneFirst", function (phone_number, element) {
    phone_number_first = phone_number.substr(1,1);
    return this.optional(element) || phone_number_first != 0 && phone_number_first != 1
}, "Required");

$.validator.addMethod("validPhoneLast4", function (phone_number, element) {
   phone_number_first = phone_number.substr(phone_number.length -4);
   return this.optional(element) || phone_number_first != "0000";
}, "Required");

$.validator.addMethod("validEmail", function (email, element) {
    return this.optional(element) || email.match(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$/);
}, "Required");

$.validator.addMethod("maskedPhone", function (phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.length > 9 &&
    phone_number.match(/^((\()?\d{3}(\))?(|\s)?\d{3}(-|\s)\d{4})|\(_{3}\) (_{3})(_{4})|\(\s{3}\) (\s{3})-(\s{4})|\(\) -$/);
}, "Required");

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
            email: true,
            validEmail: true
        },
        phone_home_visible: {
            required: true,
            validPhoneFirst: true,
            validPhoneLast4: true,
            maskedPhone: true
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
