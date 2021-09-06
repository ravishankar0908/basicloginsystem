const username = document.getElementById("username")
const password = document.getElementById("password")
const form = document.getElementById("form")
const errorusername = document.getElementById("errorusername")
const errorpassword = document.getElementById("errorpassword")
const checkbox1 = document.getElementById("checkbox1")
const checbox1label = document.getElementById("checkbox1label")

form.addEventListener("submit", (event) => {
    if (username.value === "" || password.value === "") {
        event.preventDefault()
        username.style.border = "2px solid red"
        errorusername.innerHTML = "Enter the password"
        errorusername.style.color = "red"
        errorusername.style.fontSize = "small"

        password.style.border = "2px solid red"
        errorpassword.innerHTML = "Enter the password"
        errorpassword.style.color = "red"
        errorpassword.style.fontSize = "small"
    }

    if (username.value != "") {
        username.style.border = "2px solid green"
        errorusername.innerHTML = ""
    }

    if (password.value != "") {
        password.style.border = "2px solid green"
        errorpassword.innerHTML = ""
    }

    username.addEventListener("input", (event) => {
        if (username.value === "") {
            event.preventDefault()
            username.style.border = "2px solid red"
            errorusername.innerHTML = "Enter the password"
            errorusername.style.color = "red"
            errorusername.style.fontSize = "small"
        }

        if (username.value != "") {
            username.style.border = "2px solid green"
            errorusername.innerHTML = ""
        }
    })

    password.addEventListener("input", (event) => {
        if (password.value === "") {
            event.preventDefault()
            password.style.border = "2px solid red"
            errorpassword.innerHTML = "Enter the password"
            errorpassword.style.color = "red"
            errorpassword.style.fontSize = "small"
        }

        if (password.value != "") {
            password.style.border = "2px solid green"
            errorpassword.innerHTML = ""
        }
    })
})

checkbox1.addEventListener("click", () => {
    if (checkbox1.checked) {
        password.type = "text"
        checkbox1label.innerHTML = "hide password"
    } else {
        password.type = "password"
        checkbox1label.innerHTML = "show password"
    }
})