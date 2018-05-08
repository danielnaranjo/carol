<template>
    <p><b>Peso a facturar: {{ pesoTotal }}</b></p>
</template>

<script>
import {Store} from '../store/Store'

export default {
	computed: {
        pesoTotal(){
          return Store.pesoTotal
        }
	}
}
</script>
