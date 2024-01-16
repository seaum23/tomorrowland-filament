const timeInput = document.querySelectorAll('.time-only-hour');

timeInput.forEach((ele) => {
    ele.addEventListener('input', (e) => {
        let hour = e.target.value.split(':')[0]
        e.target.value = `${hour}:00`
    })
})
