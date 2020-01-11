<template>
    <div>
        <div class="Nav-mobile hide-desktop row middle-items justify-center" :class="{open: open}">
           <div class="Nav-mobileContainer">
                <figure class="logo-mobile ">
                    <a href="/"><img :src="logo" alt=""></a>
                </figure>
                <ul class="is-list-less  justify-center">
                    <li><a class="Nav-link" href="">INICIO</a></li>
                    <li><a class="Nav-link" href="">¿QUIÉNES SOMOS?</a></li>
                    <li><a class="Nav-link" href="">REGLAS DE JUEGO</a></li>
                    <li><a class="Nav-link" href="">CONTACTO</a></li>
                </ul>
           </div>
        </div>

        <div class="hide-desktop">
            <div class="Menu-mobile " :class="{open: open}" @click="open = !open">
                <span></span><span></span><span></span>
            </div>
        </div>
    </div>
</template>

<script>


    export default {
        name: "NavVue",
        props: ['logo'],
        data: function () {
            return {
                open:false
            }
        },

    }
</script>
