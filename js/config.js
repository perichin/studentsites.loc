var siteName = window.location.hostname;
// console.log(siteName);

var d = new Date();
var year = d.getFullYear();

function loadJsCssFile(filename, filetype) {
    if (filetype === "js"){ //if filename is a external JavaScript file
        var fileref = document.createElement('script')
        fileref.setAttribute("type","text/javascript")
        fileref.setAttribute("src", filename)
    }
    else if (filetype === "css") { //if filename is an external CSS file
        var fileref = document.createElement("link")
        fileref.setAttribute("rel", "stylesheet")
        fileref.setAttribute("type", "text/css")
        fileref.setAttribute("href", filename)
    }
    if (typeof fileref != "undefined")
        document.getElementsByTagName("head")[0].appendChild(fileref)
}

function getCustomCssJs(filetype) {
    $.ajax({
        url:"config/" + siteName + "/custom." + filetype,
        type:"HEAD",
        error: function()
        {
            console.log("no custom " + filetype + " file")
            //file not exists
        },
        success: function()
        {
            loadJsCssFile("config/" + siteName + "/custom." + filetype, filetype)
            //file exists
        }
    });
}

getCustomCssJs('css')
getCustomCssJs('js')

$.getJSON('./config/' + siteName + '/' + 'config.json', function(data) {

    // console.log(data);
    document.title = data['title'];

    // header
    $('#logo-txt').text(data['title']);
    $('#logo-txt-mobile').text(data['abbr']);
    $('.phone-link').attr('href', 'tel:' + data['phone']).append(data['phone']);

    if(data['phone'] === ""){
        $('#nav-phone').remove();
        $('.phone-span').remove();
    }

    // footer
    $('#copyright').html("&copy; " + data['alias'] + ' ' + year);
    // $('#address').text(data['title'] + " " + data['address1'] + " " + data['address2']);
    $('#address').text(data['address1'] + " " + data['address2']);
    
    // index
    $('.disclaimer').html(data['tcpa']);
    $('.slider-headline').html(data['heading1'] + '<br /><span>' + data['heading2'] + '.</span>');

    // form
    $('#list_id').val(data['listId']);
    $('#submit-form').text(data['submitText']);

    // privacy
    $('.alias-span').text(data['alias']);

    // terms
    $('.title-span').text(data['title']);
    $('.title-span-abbr').text(data['alias']);
    $('.title-abbr').text(data['abbr']);

    // contact
    $('#contact-title').text(data['title']);
    $('#contact-address1').text(data['address1']);
    $('#contact-address2').text(data['address2']);

});
