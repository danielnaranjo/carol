<template>
	<el-table
    :data="cart"
    stripe
    style="width: 100%">
    	<el-table-column
			prop="details.name"
			label="Producto"></el-table-column>
		<el-table-column
			label="Precio">
			<template slot-scope='scope'>
				{{ scope.row.details.price | dolares }}
			</template>
		</el-table-column>
		<el-table-column
			prop="quantity"
			label="Cantidad"></el-table-column>
		<el-table-column
    		label="">
    		<template slot-scope="scope">
    			<el-button type="success" icon="plus" @click='addToCart(scope.row.details)' size="mini"></el-button>
    			<el-button type="danger" icon="minus" @click='removeFromCart(scope.row.details.sku)' size="mini"></el-button>
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
