<template>
	<el-row>
	  <el-col :span="12" v-for="(product, index) in products" :key="product.sku">
	    <el-card>
	    	<img :src="product.image" class="image">
	        <span>{{ product.name }}</span>
	        <span>{{ product.price | dolares }}</span>
	        <div class="bottom clearfix">
	        	<el-button type="info" @click='addToCart(product)'>Agregar</el-button>
	        </div>
	    </el-card>
	  </el-col>
	</el-row>
</template>

<script>
import {Store} from '../store/Store'

export default {
  data() {
    return {
    	products: Store.$data.products
    };
  },
  created() {
      this.getProducts();
  },
  methods: {
    getProducts() {
      axios.get('/api/products').then((res) => {
          //console.log('res', res.data)
          this.products = res.data;
      });
    },
  	addToCart(product){
  		Store.addToCart(product)
  	}
  }
}
</script>
<style>
  .image {
    width: 100%;
    display: block;
  }
</style>
