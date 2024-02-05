const linkedinURL = document.querySelector(".linkedin-icon")
const refferenceURL = document.querySelector(".refference-new-window")


linkedinURL.addEventListener("click", () => {
    window.open("https://www.linkedin.com/company/loqsh/about/", "new-window");
})

refferenceURL.addEventListener("click", () => {
    window.open("https://src.taxservice.am/en/taxpayerSearchSystemPage/112", "new-window");
})


const burgerButton = document.querySelector(".menu__icon")
const menu = document.querySelector(".menu__itmes")
const body = document.querySelector(".body")

burgerButton.addEventListener("click", () => {
    burgerButton.classList.toggle("_active")
    menu.classList.toggle("_active")
    body.classList.toggle("_lock")
})
