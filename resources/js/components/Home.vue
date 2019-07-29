<template>
    <form action="/solicitar-acceso" class="Home-form row justify-center" >
        <input type="hidden" name="_token" :value="token">
        <label class="col-m-3 m-r-8 col-4">
            <select name="day" v-model="day">
                <option value="">Día</option>
                <option v-for="day in days" :value="day">{{day}}</option>
            </select>
        </label>
        <label class="col-m-5 col-6  m-r-8 ">
            <select name="month" v-model="month">
                <option value="">Mes</option>
                <option v-for="(month, index ) in months" :value="index">{{month}}</option>
            </select>
        </label>
        <label class="col-m-3 col-4">
            <select name="year" v-model="year">
                <option value="">Año</option>
                <option v-for="year in years" :value="year">{{year}}</option>
            </select>
        </label>
        <label class="col-10 m-t-12">
            <select v-model="city">
                <option value="">Selecciona la ciudad</option>
                <option value="1">Bogotá</option>
            </select>
        </label>
        <p class="col-16 is-text-center m-t-12">
            <input type="checkbox" id="test3" v-model="check">
            <label for="test3">Acepto <a href="" class="Home-link">Términos y condiciones</a></label>
        </p>
        <button type="submit" :disabled="validateDate" class="button-submit m-t-12">ENTRAR</button>
    </form>
</template>

<script>
    import {getYears, getMonths, getDays} from '../Services/dates';

    export default {
        name: "Home",
        props: ['token '],
        data: function () {
            return {
                year: '',
                month: '',
                day: '',
                city: '',
                check: '',
                years: getYears(),
                months: getMonths(),
                days: getDays(),
            }
        },
        computed: {

            validateDate: function () {


                if (this.year === '' || this.month === '' || this.day === '')
                    return true;

                if (!this.city)
                    return true;

                if (!this.check)
                    return true;

                return (new Date(this.year + 18, this.month - 1, this.day) > new Date())


            }
        },
        methods: {}
    }
</script>

<style scoped>

</style>
