$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Come on, You have a name, Don't you?",
                    minlength: "Your name must consist of at least 2 characters"
                },
                subject: {
                    required: "Come on, You have a subject, Don't you?",
                    minlength: "Your subject must consist of at least 4 characters"
                },
                email: {
                    required: "No email equals no message",
                    email: "Please enter a valid email"
                },
                message: {
                    required: "Um...yea, You have to write something to send this form.",
                    minlength: "Thats all? Add some more words"
                }
            }
        })
    })
        
 })(jQuery)
})