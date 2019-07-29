export {getMonths, getYears, getDays};

function getYears() {
    let yearInit = new Date().getFullYear() - 100;
    return Array.from({length: 100}, (_, i) => yearInit + i);
}

function getDays() {
    let days = 1;
    return Array.from({length: 31}, (_, i) => days + i);
}

function getMonths() {
    return ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre']
}
