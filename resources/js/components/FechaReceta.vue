<template>
<div>
    <p><span class="text-danger fw-bolder">Fecha: </span>{{formatearFecha}}</p>
</div>
</template>
<script>
export default {
    props: ['fecha'],
    computed:{
        formatearFecha() {
            return moment(this.fecha).locale('es').format('DD [de] MMMM [del] YYYY');
        }
    }
};
</script>
