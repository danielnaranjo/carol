<template>
	<el-table
    :data="cart"
    stripe
    style="width: 100%">
    	<el-table-column
			prop="details.name"
			label="Producto"></el-table-column>
		<el-table-column
			label="USD">
			<template slot-scope='scope'>
				{{ scope.row.details.price | usd }}
			</template>
		</el-table-column>
        <el-table-column
			prop="details.weight"
			label="Peso"></el-table-column>
		<el-table-column
			prop="quantity"
			label="Cant."></el-table-column>
		<el-table-column
    		label="">
    		<template slot-scope="scope">
    			<i class="el-icon-plus" @click='addToCart(scope.row.details)'></i>
    			<i class="el-icon-minus" @click='removeFromCart(scope.row.details.sku)'></i>
    		</template>
    	</el-table-column>
	</el-table>
</template>

<script>
import {Store} from '../store/Store'

export default {
	computed: {
		cart(){
			return Store.$data.cart
		},
        totalCost(){
          return Store.totalCost
        },
        pesoTotal(){
          return Store.pesoTotal
        }
	},
	methods: {
		removeFromCart(sku){
			Store.removeFromCart(sku)
		},
		addToCart(product){
			Store.addToCart(product);
		}
	}
}
</script>
