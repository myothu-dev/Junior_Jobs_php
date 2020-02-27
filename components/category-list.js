Vue.component('category-list',{
	props:['category_data'],
	template:`
		<div>
		<div class="row mt-4">
			<div class="col-md-12">
				<input type="text" class="form-control" placeholder="Search Job by Title" v-model="filterCategory">
			</div>
		</div>
		<div class="row mt-4" v-for="catList in chunkCategories">
			<div class="col-md-4 " v-for="cat in catList">
				<div class="card card-default">
					<div class="card-header">
						<h3>{{cat.name}}</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 img-reponsive">
								<img :src="cat.Cover">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<ul class="list-unstyled">
									<li>Job Title</li>
									<li>Job Title MM</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="list-unstyled">
									<li>{{cat.name}}</li>
									<li>{{cat.name_mm}}</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button class="btn btn-success">Add to Read</button>
					</div>
				</div>
			</div>
		</div>
		</div>
		`,
		data: ()=>{
			return{
				filterCategory:''
			}
		},
		computed: {
			chunkCategories() {
				let i,j,chunkCategories=[],chunk=4;
				for(i=0,j=0;i<this.searachableCategories.length;i+=chunk,j++) {
					chunkCategories[i] = this.searachableCategories.slice(i,i+chunk);
				}
				return chunkCategories;
			},
			searachableCategories() {
				let categories = this.category_data;
				return categories.filter((result)=> {
					return result.name.toLowerCase().includes(this.filterCategory.toLowerCase());
				});
			}
		}
});

