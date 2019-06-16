<template>
    <form action="" class="Home-form row justify-center">
        <label class="col-m-5 col-6  m-r-8 ">
            <select name="month">
                <option value="">Mes</option>
                <option v-for="month in months" :value="month">{{month}}</option>
            </select>
        </label>
        <label class="col-m-3 m-r-8 col-4">
            <select name="day">
                <option value="">Día</option>
                <option v-for="day in days" :value="day">{{day}}</option>
            </select>
        </label>
        <label class="col-m-3 col-4">
            <select name="year">
                <option value="">Año</option>
                <option v-for="year in years" :value="year">{{year}}</option>
            </select>
        </label>
        <label class="col-10 m-t-12">
            <select name="city">
                <option value="">Selecciona la ciudad</option>
            </select>
        </label>
        <p class="col-16 is-text-center m-t-12">
            <input type="checkbox" id="test3" checked="">
            <label for="test3">Acepto <a href="" class="Home-link">Términos y condiciones</a></label>
        </p>
        <button type="submit" class="button-submit m-t-12">ENTRAR</button>

    </form>
</template>

<script>
    import {getYears, getMonths, getDays} from '../Services/dates';
    export default {
        name: "Home",
        data: function () {
            return {
                years: getYears(),
                months: getMonths(),
                days: getDays(),
            }
        },
    }
</script>

<style scoped>

</style>
