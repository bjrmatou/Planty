document.addEventListener("DOMContentLoaded", function() {
    const blocs = document.querySelectorAll(".bloc-nbfr");

    blocs.forEach(bloc => {
        const zonenbr = bloc.querySelector(".zonenbr");
        const zoneplus = bloc.querySelector(".zoneplus");
        const zonemoins = bloc.querySelector(".zonemoins");

        zoneplus.addEventListener("click", function() {
            const input = zonenbr.querySelector("input");
            const currentValue = parseInt(input.value) || 0;
            input.value = currentValue + 1;
        });

        zonemoins.addEventListener("click", function() {
            const input = zonenbr.querySelector("input");
            const currentValue = parseInt(input.value) || 0;
            if (currentValue > 0) {
                input.value = currentValue - 1;
            }
        });
    });
});