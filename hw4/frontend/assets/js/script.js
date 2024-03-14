// Add event stuff
let
    addEvent            = document.getElementById("addEvent"),
    addEventModalTitle  = addEvent.querySelector(".modal-title"),
    daysRows            = document.querySelectorAll('table tbody tr td')
    addEventEventDate   = addEvent.querySelector("input[name='event_date'")

daysRows.forEach(day => {
    day.onclick = () => {
        let date = day.getAttribute("hw-date")
        addEventModalTitle.innerText = "Add event to " + date
        addEventEventDate.value = date
        day.setAttribute("data-bs-toggle", "modal");
        day.setAttribute("data-bs-target", "#addEvent");
    }
})

// Edit event stuff
let
    editEvent           = document.getElementById("editEvent"),
    editEventModalTitle = editEvent.querySelector(".modal-title"),
    editEventEventName  = editEvent.querySelector("input[name='event_name'"),
    editEventEventDate  = editEvent.querySelector("input[name='event_date'"),
    editEventEventId    = editEvent.querySelector("input[name='event_id'"),
    eventsRows          = document.querySelectorAll(".custom-event")

eventsRows.forEach(event => {
    event.onclick = (e) => {
        e.preventDefault()
        let 
            date = event.getAttribute("event-date"),
            id = event.getAttribute("event-id")
        editEventModalTitle.innerText = "Editing event " + date
        editEventEventDate.value = date
        editEventEventId.value = id
        editEventEventName.value = event.innerText
        event.setAttribute("data-bs-toggle", "modal");
        event.setAttribute("data-bs-target", "#editEvent");
    }
})

let 
    monthSelector   = document.querySelector("select[name='monthSelector'"),
    yearSelector    = document.querySelector("select[name='yearSelector'"),
    currentMonth
                = parseInt(monthSelector.value) + 1,
    currentYear
                = parseInt(document.querySelector("select[name='yearSelector'").value)

monthSelector.onchange = () => {
    let newmonth = parseInt(monthSelector.value) + 1
    window.location.href = "/" + newmonth                    + "/" + currentYear
}

yearSelector.onchange = () => {
    let newyear = parseInt(yearSelector.value)
    window.location.href = "/" + currentMonth + "/" + newyear
}