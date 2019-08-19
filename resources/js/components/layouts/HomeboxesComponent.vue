<template>
    <div class="boxes">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">

						<!-- Box -->
						<Homebox-component
							v-for="(box) in boxes"
							:key="box.id"
							:box="box"
							:url="url"
						>
						</Homebox-component>

					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
		data(){
			return {
				boxes:[],
				url:"",
			}
		},
        mounted() {
			console.log('Component mounted Boxes')
			this.obtenBoxes();
		},
		methods:{
			obtenBoxes(){
				axios.get('/boxesHome').then((response)=>{
					this.boxes = response.data.boxes;
					this.url = response.data.url_path;
				});
			},
		}
		
    }
</script>
