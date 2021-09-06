const password1 = document.getElementById("password1");
const password2 = document.getElementById("password2");
const errorpassword2 = document.getElementById("errorpassword2");
const checkbox1 = document.getElementById("checkbox1");
const checkbox1label = document.getElementById("checkbox1label");
const errorfname = document.getElementById("errorfname");
const errorlname = document.getElementById("errorlname");
const username = document.getElementById("username");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const date = document.getElementById("date");
const errorphone = document.getElementById("errorphone");
const btnsubmit = document.getElementById("btnsubmit");
const form = document.getElementById("form");
const errorcheckbox = document.getElementById("errorcheckbox");


form.addEventListener("submit", (event) => {
    if (username.value === "" || email.value === "" || phone.value === "" || date.value === "" || password1.value === "" || password2.value === "") {
        event.preventDefault()
        username.style.border = "2px solid red"
        errorfname.innerHTML = "Enter the username"
        errorfname.style.color = "red"
        errorfname.style.fontSize = "small"

        email.style.border = "2px solid red"
        errorlname.innerHTML = "Enter the your email"
        errorlname.style.color = "red"
        errorlname.style.fontSize = "small"

        phone.style.border = "2px solid red"
        errorphone.innerHTML = "Enter your phone number"
        errorphone.style.color = "red"
        errorphone.style.fontSize = "small"

        date.style.border = "2px solid red"
        errordate.innerHTML = "Enter your date of birth"
        errordate.style.color = "red"
        errordate.style.fontSize = "small"

        password1.style.border = "2px solid red"
        errorpassword1.innerHTML = "Enter the password"
        errorpassword1.style.color = "red"
        errorpassword1.style.fontSize = "small"

        password2.style.border = "2px solid red"
        errorpassword2.innerHTML = "Enter the password"
        errorpassword2.style.color = "red"
        errorpassword2.style.fontSize = "small"
    }

    if (username.value != "") {
        username.style.border = "2px solid green"
        errorfname.innerHTML = ""
    }

    if (email.value != "") {
        email.style.border = "2px solid green"
        errorlname.innerHTML = ""
    }

    if (date.value != "") {
        date.style.border = "2px solid green"
        errordate.innerHTML = ""
    }

    if (password1.value != "") {
        password1.style.border = "2px solid green"
        errorpassword1.innerHTML = ""
    }

    if (password2.value != "") {
        password2.style.border = "2px solid green"
        errorpassword2.innerHTML = ""
    }

    if (password1.value != password2.value) {
        event.preventDefault()
        password1.style.border = "2px solid red"
        password2.style.border = "2px solid red"
        errorpassword2.innerHTML = "password does not match"
        errorpassword2.style.color = "red"
        errorpassword2.style.fontSize = "small"
    }

    if (phone.value === "") {
        event.preventDefault()
        phone.style.border = "2px solid red"
        errorphone.innerHTML = "Enter your phone number"
        errorphone.style.color = "red"
        errorphone.style.fontSize = "small"
    }

    if (phone.value.length > 10) {
        event.preventDefault()
        phone.style.border = "2px solid red"
        errorphone.innerHTML = "phone number must be less than 10 digits"
        errorphone.style.color = "red"
        errorphone.style.fontSize = "small"
    }

    if (phone.value != "") {
        phone.style.border = "2px solid green"
        errorphone.innerHTML = ""
    }

    if (checkbox2.checked) {
        errorcheckbox.innerHTML = ""
    } else {
        event.preventDefault()
        errorcheckbox.innerHTML = "Accept the terms and condition"
        errorcheckbox.style.color = "red"
        errorcheckbox.style.fontSize = "small"
    }

    username.addEventListener("input", () => {
        if (username.value === "") {
            username.style.border = "2px solid red"
            errorfname.innerHTML = "Enter the username"
            errorfname.style.color = "red"
            errorfname.style.fontSize = "small"
        } else {
            username.style.border = "2px solid green"
            errorfname.innerHTML = ""
        }
    })

    email.addEventListener("input", () => {
        if (email.value === "") {
            email.style.border = "2px solid red"
            errorlname.innerHTML = "Enter the your email"
            errorlname.style.color = "red"
            errorlname.style.fontSize = "small"
        } else {
            email.style.border = "2px solid green"
            errorlname.innerHTML = ""
        }
    })

    phone.addEventListener("input", () => {
        if (phone.value === "") {
            phone.style.border = "2px solid red"
            errorphone.innerHTML = "Enter your phone number"
            errorphone.style.color = "red"
            errorphone.style.fontSize = "small"
        } else {
            phone.style.border = "2px solid green"
            errorphone.innerHTML = ""
        }
    })

    date.addEventListener("input", () => {
        if (date.value === "") {
            date.style.border = "2px solid red"
            errordate.innerHTML = "Enter your date of birth"
            errordate.style.color = "red"
            errordate.style.fontSize = "small"
        } else {
            date.style.border = "2px solid green"
            errordate.innerHTML = ""
        }
    })

    password1.addEventListener("input", () => {
        if (password1.value === "") {
            password1.style.border = "2px solid red"
            errorpassword1.innerHTML = "Enter the password"
            errorpassword1.style.color = "red"
            errorpassword1.style.fontSize = "small"
        } else {
            password1.style.border = "2px solid green"
            errorpassword1.innerHTML = ""
        }
    })
})

checkbox1.addEventListener("click", () => {

    if (checkbox1.checked) {
        password1.type = "text"
        password2.type = "text"
        checkbox1label.innerHTML = "hide password"
    } else {
        password1.type = "password"
        password2.type = "password"
        checkbox1label.innerHTML = "show password"
    }
})

checkbox2.addEventListener("click", () => {
    if (checkbox2.checked) {
        errorcheckbox.innerHTML = ""
    } else {
        errorcheckbox.innerHTML = "Accept the terms and condition"
        errorcheckbox.style.color = "red"
        errorcheckbox.style.fontSize = "small"
    }
})