<template>
    <div class="row m-t-40 m-b-40 ">
        <div class="col-16 col-m-4 p-r-20">
            <div class="row middle-items m-b-28  m-t-40">
                <span class="selected m-r-16"></span>
                <i>SELECCIONADO</i>
            </div>
            <div class="row middle-items m-b-28 ">
                <span class=" m-r-16"></span>
                <i>DISPONIBLE</i>
            </div>
            <div class="row middle-items m-b-28 ">
                <span class="reserve16 m-r-16"></span>
                <i>RESERVADO</i>
            </div>
            <div class="row middle-items m-b-28 ">
                <span class="not-available m-r-16"></span>
                <i>NO DISPONIBLE</i>
            </div>
            <p class="p-t-40">
                * La opción permite crear una reversa de una o varias casillas por 24 horas mientras el usuario
                genera el pago.
            </p>
            <p>Pasadas las 24 horas sin registrar el pago, las casillas quedan automáticamente
                disponibles. </p>
        </div>

        <div class="col-16 col-m-8 row ">

            <div class="is-text-center Lottery-board " v-for="number in numbersLocal" :key="number">
            <span :class="  number.state ? 'not-available'  : (number.select ? 'selected': '' )" @click="selectItem(number)">
                {{(number.n < 10) ? '0' + number.n  : number.n}}
            </span>
            </div>
        </div>

        <div class="col-16 col-m-4 pad-20">
            <div class="is-text-center m-t-20">
                <form action="">
                    <h3>DATOS PARTICIPANTE</h3>
                    <p class="Lottery-form-p">Para evitar suplantación y poder hacer entrega del premio, es
                        necesario diligenciar el
                        siguiente formulario:</p>
                    <div class="m-t-12 m-b-12">
                        <input type="text" placeholder="Nombre">
                        <input type="text" placeholder="Cédula de ciudadanía ">
                        <input type="text" placeholder="Correo electrónico">
                        <input type="text" placeholder="Celular">
                    </div>
                    <h3>SUB TOTAL</h3>
                    <div>
                        <span v-for="select in selected" class="selected">{{select}}</span>
                        <hr>
                        <h3>TOTAL</h3>
                        <p class=""><b>${{price}}</b></p>
                        <button class="m-t-12 button button-page">COMPRAR</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</template>

<script>

    export default {
        name: "Numbers",
        props: ['numbers', 'lotteries'],
        data: function () {
            return {
                selected: [],
                numbersLocal: this.numbers,
                price: 0
            }
        },
        computed: {
            validateDate: function () {


            }
        },
        methods: {
            selectItem(item) {
                if(item.state)
                    return;
                if(this.selected.includes(item.n) ){
                    this.selected.splice( this.selected.indexOf(item.n), 1);
                    item.select = false
                    this.price = this.selected.length * 10000;
                    return
                }
                item.select = true
                this.selected.push(item.n)
                this.price = this.selected.length * 10000;
            }
        }
    }
</script>

<style scoped >
@media (min-width: 720px){

    .pad-20 {
        padding-left: 20px
    }
}

</style>
