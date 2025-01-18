/* ------- CORE BELIEFS SECTION ------ */
const beliefs = document.querySelectorAll(".belief");

beliefs.forEach(belief => {
    belief.addEventListener("click", () => {
        belief.classList.toggle("active");
    });
});


