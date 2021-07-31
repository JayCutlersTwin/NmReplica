const outOfHoursDescription = document.getElementById('OUT-OF-HOURS-DESCRIPTION');
const headingAndArrow = document.getElementById('HEADING-AND-ARROW');

const toggleDescription = event => {
    outOfHoursDescription.classList.toggle("HIDE");
}

headingAndArrow.addEventListener('click', toggleDescription);
