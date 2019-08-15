<template>
    <div class="products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="section_title text-center">Ecommerce</div>
				</div>
			</div>
			<div class="row page_nav_row">
				<div class="col">
					<div class="page_nav">
						<ul class="d-flex flex-row align-items-start justify-content-center">
							<li class="active"><a>Women</a></li>
							<li><a>Men</a></li>
							<li><a>Kids</a></li>
							<li><a>Home Deco</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row products_row">

				<!-- Product -->
				<Homeproduct-component
				v-for="(producto) in productos"
				:key="producto.id"
				:producto="producto"
				>
				</Homeproduct-component>			

			</div>
			<div class="row load_more_row">
				<div class="col">
					<div class="button load_more ml-auto mr-auto"><a href="#">Ver más productos</a></div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
		data(){
			return {				
				productos:[],
			}
		},
        mounted() {
			console.log('Component ProductosHome.')
			this.obtenerTodosPoductos();
		},
		methods:{
			obtenerTodosPoductos(){
				axios.get('/productsHome').then((response)=>{
					console.log(response.data)
					this.productos = response.data;

				});
			},
			mostrar(nombre){
				switch (nombre) {
					case "mostrar1":
						mostrar1:true;
						mostrar2:false;
						mostrar3:false;
						mostrar4:false;
						break;
					case "mostrar2":
						mostrar1:false;
						mostrar2:true;
						mostrar3:false;
						mostrar4:false;
						break;
					case "mostrar3":
						mostrar1:false;
						mostrar2:false;
						mostrar3:true;
						mostrar4:false;
						break;
					case "mostrar4":
						mostrar1:false;
						mostrar2:false;
						mostrar3:false;
						mostrar4:true;
						break;
					default:
						mostrar1:true;
						mostrar2:false;
						mostrar3:false;
						mostrar4:false;
						break;
				}

			}
		}
    }
</script>