document.getElementById('modeSwitch').addEventListener('click',() =>{
    if (document.documentElement.getAttribute('data-bs-theme') == 'dark') {
        document.documentElement.setAttribute('data-bs-theme','light')
    }
    else {
        document.documentElement.setAttribute('data-bs-theme','dark')
    }
})
const isDarkMode = $('html').attr('data-bs-theme') === 'dark';
const $switchElement = $('#modeSwitch');
$switchElement.prop('checked', isDarkMode);
$(document).on('themechange', function(event) {
    $switchElement.prop('checked', event.detail.theme === 'dark');
});
const forms = document.querySelectorAll(".needs-validation");
    Array.from(forms).forEach((form) => {
    form.addEventListener("submit", (event) => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add("was-validated");
        }, false
    );
});