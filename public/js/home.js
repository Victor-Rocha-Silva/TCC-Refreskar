document.addEventListener("DOMContentLoaded", function () {
    const timeElement = document.getElementById("current-time");

    function updateTime() {
        const now = new Date();
        const options = {
            weekday: "long",
            year: "numeric",
            month: "long",
            day: "numeric",
        };
        const formattedDate = now.toLocaleDateString("pt-BR", options);
        timeElement.textContent = formattedDate;
    }

    updateTime();
});
