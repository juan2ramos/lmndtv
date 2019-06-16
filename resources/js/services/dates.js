export {getMonths, getYears, getDays};

function getYears() {
    let yearInit = new Date().date.getFullYear() - 100;
    return Array.from({length: 100}, (_, i) => yearInit + i);
}

function getDays() {
    var d = new Date("February 30");
    console.log(d)
}

function getMonths() {
    return ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre']
}
