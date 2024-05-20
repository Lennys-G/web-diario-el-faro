/* Reloj */
function updateDateTime() {
    const date = new Date();
    const getCurrentDate = date.toLocaleString();

    const showCurrentDate = document.getElementById("currentDate");
    showCurrentDate.innerHTML = getCurrentDate;
}
setInterval(updateDateTime, 1000);

console.log("Hola mundo");
