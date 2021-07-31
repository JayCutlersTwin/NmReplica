
    const submitBtn = document.getElementById("SUBMITENQUIRY");

    // Name validation Changes
    const NameInput = document.getElementById("NAME");

    function checkIfValidName(NameValue) {
        const re = /^[a-zA-Z]+[ a-zA-Z]*$/;
        return re.test(NameValue);
    }
    function validateName() {
        var NameValue = document.getElementById("NAME").value;

        if (checkIfValidName(NameValue)) {
            NameInput.style.borderColor = "#ccc";
        } else {
            NameInput.style.borderColor = "red";
            console.log("Must contain only letters and spaces");
            return false;
        }
    }
    submitBtn.addEventListener("click", validateName);

    NameInput.addEventListener("focusin", (event) => {
        var NameValue = document.getElementById("NAME").value;
        if (NameValue == "" || NameValue == " ") {
            NameInput.style.borderColor = "#5bc0de";
        } else if (checkIfValidName(NameValue)){
            NameInput.style.borderColor = "#5bc0de";
        } else {
            NameInput.style.borderColor = "red";
            return false;
        }
    });

    NameInput.addEventListener("focusout", (event) => {
        var NameValue = document.getElementById("NAME").value;
        if (checkIfValidName(NameValue)) {
            NameInput.style.borderColor = "#ccc";
        } else {
            NameInput.style.borderColor = "red";
            return false;
        }
    });
    NameInput.addEventListener("input", (event) => {
        var NameValue = document.getElementById("NAME").value;
        if (checkIfValidName(NameValue)) {
            NameInput.style.borderColor = "#5bc0de";
        } else {
            NameInput.style.borderColor = "red";
            return false;
        }
    });

    //EMAIL
    const EmailInput = document.getElementById("EMAIL");

    function checkIfValidEmail(EmailValue) {
        const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return re.test(EmailValue);
    }
    function validateEmail() {
        var EmailValue = document.getElementById("EMAIL").value;

        if (checkIfValidEmail(EmailValue)) {
            EmailInput.style.borderColor = "#ccc";
        } else {
            EmailInput.style.borderColor = "red";
            return false;
        }
    }
    submitBtn.addEventListener("click", validateEmail);

    EmailInput.addEventListener("focusin", (event) => {
        var EmailValue = document.getElementById("EMAIL").value;
        if (EmailValue == "" || EmailValue == " ") {
            EmailInput.style.borderColor = "#5bc0de";
        } else if (checkIfValidEmail(EmailValue)){
            EmailInput.style.borderColor = "#5bc0de";
        } else {
            EmailInput.style.borderColor = "red";
            return false;
        }
    });

    EmailInput.addEventListener("focusout", (event) => {
        var EmailValue = document.getElementById("EMAIL").value;
        if (checkIfValidEmail(EmailValue)) {
            EmailInput.style.borderColor = "#ccc";
        } else {
            EmailInput.style.borderColor = "red";
            return false;
        }
    });
    // EmailInput.addEventListener("input", (event) => {
    //     var EmailValue = document.getElementById("EMAIL").value;
    //     if (checkIfValidEmail(EmailValue)) {
    //         EmailInput.style.borderColor = "#5bc0de";
    //     } else {
    //         EmailInput.style.borderColor = "red";
    //     }
    // });

    //PHONE
    const PhoneInput = document.getElementById("NUMBER");

    function checkIfValidPhone(PhoneValue) {
        const re = /^[0-9]*$/;
        return re.test(PhoneValue);
    }
    function validatePhone() {
        var PhoneValue = document.getElementById("NUMBER").value;

        if (checkIfValidPhone(PhoneValue)) {
            PhoneInput.style.borderColor = "#ccc";
        } else {
            PhoneInput.style.borderColor = "red";
            return false;
        }
    }
    submitBtn.addEventListener("click", validatePhone);

    PhoneInput.addEventListener("focusin", (event) => {
        var PhoneValue = document.getElementById("NUMBER").value;
        if (checkIfValidPhone(PhoneValue)) {
            PhoneInput.style.borderColor = "#5bc0de";
        } else if (checkIfValidPhone(PhoneValue)){
            PhoneInput.style.borderColor = "#5bc0de";
        } else {
            PhoneInput.style.borderColor = "red";
            return false;
        }
    });

    PhoneInput.addEventListener("focusout", (event) => {
        var PhoneValue = document.getElementById("NUMBER").value;
        if (checkIfValidPhone(PhoneValue)) {
            PhoneInput.style.borderColor = "#ccc";
        } else {
            PhoneInput.style.borderColor = "red";
            return false;
        }
    });
    PhoneInput.addEventListener("input", (event) => {
        var PhoneValue = document.getElementById("NUMBER").value;
        if (checkIfValidPhone(PhoneValue)) {
            PhoneInput.style.borderColor = "#5bc0de";
        } else {
            PhoneInput.style.borderColor = "red";
            return false;
        }
    });

    //SUBJECT
    const SubjectInput = document.getElementById("SUBJECT");

    function checkIfValidSubject(SubjectValue) {
        const re = /^[a-zA-Z0-9 ]*$/;
        return re.test(SubjectValue);
    }
    function validateSubject() {
        var SubjectValue = document.getElementById("SUBJECT").value;

        if (checkIfValidSubject(SubjectValue)) {
            SubjectInput.style.borderColor = "#ccc";
        } else {
            SubjectInput.style.borderColor = "red";
            return false;
        }
    }
    submitBtn.addEventListener("click", validateSubject);

    SubjectInput.addEventListener("focusin", (event) => {
        var SubjectValue = document.getElementById("SUBJECT").value;
        if (SubjectValue == "" || SubjectValue == " ") {
            SubjectInput.style.borderColor = "#5bc0de";
        } else if (checkIfValidSubject(SubjectValue)){
            SubjectInput.style.borderColor = "#5bc0de";
        } else {
            SubjectInput.style.borderColor = "red";
            return false;
        }
    });

    SubjectInput.addEventListener("focusout", (event) => {
        var SubjectValue = document.getElementById("SUBJECT").value;
        if (checkIfValidSubject(SubjectValue)) {
            SubjectInput.style.borderColor = "#ccc";
        } else {
            SubjectInput.style.borderColor = "red";
            return false;
        }
    });
    SubjectInput.addEventListener("input", (event) => {
        var SubjectValue = document.getElementById("SUBJECT").value;
        if (checkIfValidSubject(SubjectValue)) {
            SubjectInput.style.borderColor = "#5bc0de";
        } else {
            SubjectInput.style.borderColor = "red";
            return false;
        }
    });

    //MESSAGE
    const MessageInput = document.getElementById("MESSAGE");

    function checkIfValidMessage(MessageValue) {
        const re = /^[a-zA-Z0-9 ]*$/;
        return re.test(MessageValue);
    }
    function validateMessage() {
        var MessageValue = document.getElementById("MESSAGE").value;

        if (checkIfValidMessage(MessageValue)) {
            MessageInput.style.borderColor = "#ccc";
        } else {
            MessageInput.style.borderColor = "red";
            return false;
        }
    }
    submitBtn.addEventListener("click", validateMessage);

    MessageInput.addEventListener("focusin", (event) => {
        var MessageValue = document.getElementById("MESSAGE").value;
        if (MessageValue == "" || MessageValue == " ") {
            MessageInput.style.borderColor = "#5bc0de";
        } else if (checkIfValidMessage(MessageValue)){
            MessageInput.style.borderColor = "#5bc0de";
        } else {
            MessageInput.style.borderColor = "red";
            return false;
        }
    });

    MessageInput.addEventListener("focusout", (event) => {
        var MessageValue = document.getElementById("MESSAGE").value;
        if (checkIfValidMessage(MessageValue)) {
            MessageInput.style.borderColor = "#ccc";
        } else {
            MessageInput.style.borderColor = "red";
            return false;
        }
    });
    MessageInput.addEventListener("input", (event) => {
        var MessageValue = document.getElementById("MESSAGE").value;
        if (checkIfValidMessage(MessageValue)) {
            MessageInput.style.borderColor = "#5bc0de";
        } else {
            MessageInput.style.borderColor = "red";
            return false;
        }
    });


    if (document.getElementById('NOTIFICATION')) {
        console.log('Element does exist');
        const notification = document.getElementById('NOTIFICATION');
        const close = document.getElementById('CLOSE');
            close.addEventListener('click', function() {
                notification.style.display = 'none';
            });
    } else {
        console.log("Element doesn't exist");
    }


    if (document.getElementById('THISISERROR')) {
        console.log('Element does exist');
        const not = document.getElementById('THISISERROR');
        const closeBTN = document.getElementById('CLOSEBTN');
            closeBTN.addEventListener('click', function() {
                not.style.display = 'none';
            });
    } else {
        console.log("Element doesn't exist");
    }
