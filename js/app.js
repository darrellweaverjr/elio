// Website Cookie -----------------------
// ----------------------------------------
// setThisCookie()

tnaSetThisCookie = function(name, days) {
  var d = new Date();
  d.setTime(d.getTime() + 1000 * 60 * 60 * 24 * days);
  document.cookie = name + "=true;path=/;expires=" + d.toGMTString() + ';';
};
// checkForThisCookie()
tnaCheckForThisCookie = function(name) {
  if (document.cookie.indexOf(name) === -1) {
    return false;
  } else {
    return true;
  }
};

// Cookie notification
$(function() { // All content must be placed within this IIFE.
  $('#mega-menu-pull-down').show();
  if (!tnaCheckForThisCookie("dontShowCookieNotice")) {
    $('<div class="cookieNotice"><div class="container-fluid"><div class="row"><div class="col-md-9">This website uses cookies to enhance user experience and to analyze performance and traffic on our website. We also share information about your use of our site with our social media, advertising and analytics partners. For more information about our cookie use and how to control your privacy <a href="https://www.wynnlasvegas.com/cookie-notice" class="cookie-notitce">Click Here</a></div><div class="col-md-3"><a title="Accept Cokies" href="#" id="cookieCutter" class="btn btn-danger accept-cookies-btn">Accept Cookies</a></div>').css({
      padding: '20px 10px',
      "text-align": "left",
      backgroundColor: '#FFF',
      position: 'fixed',
      left: 0,
      bottom: 0,
      'font-size': '14px',
      width: '100%',
      display: 'none'
    }).appendTo('body');

    setTimeout(function() {
      $('.cookieNotice').slideDown(1000);
    }, 1000);
  }

});

// Binding to document (event delegation)
$(document).on('click', '#cookieCutter', function(e) {
  e.preventDefault();
  tnaSetThisCookie('dontShowCookieNotice', 365);
  $('.cookieNotice').hide();
});
// ----------------------------------------

$(document).ready(function () {

  $('.vipplus-ticket-box').hover(function() {
        $(this).find('.redirect-vipplus-rollover').show();
        $(this).find('.redirect-tm-red-orange').hide();
    }, function() {
        $(this).find('.redirect-tm-red-orange').show();
        $(this).find('.redirect-vipplus-rollover').hide();
  });

  $('.vip-ticket-box').hover(function() {
        $(this).find('.redirect-vip-rollover').show();
        $(this).find('.redirect-tm-orange').hide();
    }, function() {
        $(this).find('.redirect-tm-orange').show();
        $(this).find('.redirect-vip-rollover').hide();
  });

  $('.ga-ticket-box-1').hover(function() {
        $(this).find('.redirect-ga-rollover-1').show();
        $(this).find('.redirect-tm-sm').hide();
    }, function() {
        $(this).find('.redirect-tm-sm').show();
        $(this).find('.redirect-ga-rollover-1').hide();
  });

  $('.ga-ticket-box-2').hover(function() {
        $(this).find('.redirect-ga-rollover-2').show();
        $(this).find('.redirect-tm-sm-2').hide();
    }, function() {
        $(this).find('.redirect-tm-sm-2').show();
        $(this).find('.redirect-ga-rollover-2').hide();
  });

    // set up the jquery numeric only function
    jQuery.fn.ForceNumericOnly = function (size) {
        return this.each(function ()
        {
            $(this).keypress(function (e)
            {
                var key = e.charCode || e.keyCode || 0;
                var ctrlKey = (e.ctrlKey ? true : false);
                if (ctrlKey && (key === 118 || key === 99 || key === 114)) {
                    // ctrl-c, ctrl-v, ctrl-r
                    return true;
                }
                // allow backspace, tab, delete, arrows, numbers and keypad numbers ONLY
                // home, end, period, and numpad decimal
                if (key === 8 ||
                        key === 9 ||
                        key === 35 ||
                        key === 36 ||
                        key === 37 ||
                        key === 39 ||
                        key === 46
                        )
                    return true;
                if (size && $(this).val().length >= size) {
                    $(this).val($(this).val().substr(0, 5));
                    return false;
                }
                return ((e.shiftKey === false && key >= 48 && key <= 57));
            });
        });
    };

    var formatPhone = function () {
        var val = phone.val().replace(/\D/g, "");
        /*if (val.length > 0 && (val.substr(0,1) === "1" || val.substr(0,1) === "0")) {
        val = val.substr(1);
        }*/
        val = val.replace(/^[01]+/, "");
        if (val.length === 0) {
            phone.val("");
            return;
        }
        else if (val.length <= 3) {
            phone.val("(" + val);
        } else if (val.length <= 6) {
            phone.val("(" + val.substr(0, 3) + ") " + val.substr(3));
        } else {
            phone.val("(" + val.substr(0, 3) + ") " + val.substr(3, 3) + "-" + val.substr(6));
        }
    };

    var currentTarget = null;
    var errorBox = $("#error_box");
    var frontPageForm = $("#contest_form");
    if (frontPageForm.length) {
    // only run this code if the front page form actually exists
    var form = frontPageForm;
    form.validate({
        submitHandler: function (form) {
            $.ajax({
                type: $(form).attr('method'),
                url: $(form).attr('action'),
                data: $(form).serialize(),
                dataType: 'json'
            })
            .done(function (response) {
                if (response.status === "success") {
                    var profileURL = (typeof profileURL !== 'undefined') ? profileURL : 'default';
                    window.location.href = "thank-you.php?profile="+profileURL;
                    console.log(profileURL);
                } else {
                    window.alert("AN ERROR OCCURRED");
                }
            });
              return false; // required to block normal submit since you used ajax
          },
          rules: {
            fname: {
                required: true
            },
            lname: {
                required: true
            },
            email: {
                required: true,
                email: true,
                pattern: /@.+\..+/
            },
            phone: {
                pattern: /^\(\d{3}\) \d{3}-\d{4}$/
            }
          },
          messages: {
            fname: {
                required: "Please enter your first name",
                minlength: "Abbreviated names aren't accepted"
            },
            lname: {
                required: "Please enter your surname",
                minlength: "Abbreviated names aren't accepted"
            },
            email: {
                required: "Please enter a valid email address",
                email: "The address you have entered is invalid",
                pattern: "The address you have entered is invalid"
            },
            phone: {
                required: "Please include your contact number",
                pattern: "Must be a 10-digit number"
            }
          },
          showErrors: function (errorMap, errorList) {
            $("input, select").parent().removeClass("error");
            if (0 !== this.numberOfInvalids()) {
                var firstError = errorList[0];
                // not sure why but gets number of invalids != 0
                // while having no errors in list
                if (typeof firstError !== 'undefined') {
                    var elem = firstError.element;
                    currentTarget = elem;
                    var offset = $(elem).offset();
                    errorBox.css("left", offset.left - 15);
                    errorBox.css("top", offset.top + $(elem).height() + 35);
                    errorBox.html(firstError.message);
                    errorBox.show();
                    // $(elem).focus();
                    // add error to all element classes
                    for (var x in errorList) {
                        var obj = errorList[x];
                        $(obj.element).parent().addClass("error");
                    }
                }
            } else {
                errorBox.hide();
            }
        }
    });
  }

  var phone = $("#phone");
      phone.ForceNumericOnly();
      phone.keyup(formatPhone);
      phone.change(formatPhone);
      phone.bind("paste", formatPhone);

  $("input").focus(function () {
      if (this !== currentTarget &&
            (this.type === "text" ||
            this.type === "email" ||
            this.type === "tel")) {
        errorBox.hide();
      }
  });

  $("input,select").change(function () {
      errorBox.hide();
  });

});
