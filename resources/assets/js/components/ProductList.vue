<template>
	<el-row :gutter="10">
	  <el-col :span="8" v-for="(product, index) in products" :key="product.sku">
	    <el-card :body-style="{ padding: '0px' }" class="separador">
	    	<img :src="product.image" class="image">
	        <!-- <span>{{ product.name }}</span>
	        <span>{{ product.price | dolares }}</span>
	        <div class="bottom clearfix">
	        	<el-button type="info" @click='addToCart(product)'>Agregar</el-button>
	        </div> -->
            <div style="padding: 14px;">
                <span>{{ product.name }}</span>
                <p>{{product.weight | gramos}}</p>
                <div class="bottom clearfix">
                  <time class="time">{{ product.price | dolares }}</time>
                  <el-button type="text" class="button" @click='addToCart(product)'>Agregar</el-button>
                </div>
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
  .time {
    font-size: 13px;
    color: #999;
  }
  .bottom {
    margin-top: 13px;
    line-height: 12px;
  }
  .button {
    padding: 0;
    float: right;
  }
  .image {
    width: 100%;
    display: block;
  }
  .clearfix:before,
  .clearfix:after {
      display: table;
      content: "";
  }
  .clearfix:after {
      clear: both
  }
  .separador {
      margin-bottom: 10px;
  }
</style>
