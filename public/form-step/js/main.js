$(function(){
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Quay lại',
            next : 'Tiếp theo',
            finish : 'Đặt Tour',
            current : ''
        },
        onStepChanging: function (event, currentIndex, newIndex) { 
            var fullname = $('#first_name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var address = $('#address').val();

            var start_date = new Date($('#start_date').val());
            var customer = $('#customer').val();
            var children = $('#children').val();
            var baby = $('#baby').val();
            var note = $('#note').val();

            var date = start_date.getDate()+'-'+(start_date.getMonth()+1)+'-'+start_date.getFullYear()

            $('#fullname-val').text(fullname);
            $('#email-val').text(email);
            $('#phone-val').text(phone);
            $('#address-val').text(address);

            $('#start_date-val').text(date);
            $('#customer-val').text(customer);
            $('#children-val').text(children);
            $('#baby-val').text(baby);
            $('#note-val').text(note);


            return true;
        },
        onFinishing: function (event, currentIndex) {
            $('#frmBooking').submit();
            return true;
            }
    });
    $("#date").datepicker({
        dateFormat: "MM - DD - yy",
        showOn: "both",
        buttonText : '<i class="zmdi zmdi-chevron-down"></i>',
    });
});
