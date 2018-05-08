<template>
    <p><b>Total: {{ totalCost | dolares }} {{ totalCost | pesos }}</b></p>
</template>

<script>
import {Store} from '../store/Store'

export default {
	computed: {
        totalCost(){
          return Store.totalCost
        }
	}
}
</script>
