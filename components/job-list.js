Vue.component('job-list',{
	props:['job_data'],
	template:`
		<div>
		<div class="row mt-4">
			<div class="col-md-12">
				<input type="text" class="form-control" placeholder="Search Job by Title" v-model="filterJob">
			</div>
		</div>
		<div class="row mt-4" v-for="jobList in chunkJobs">
			<div class="col-md-4 " v-for="job in jobList">
				<div class="card card-default">
					<div class="card-header">
						<h3>{{job.name}}</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 img-reponsive">
								<img :src="job.Cover">
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
									<li>{{job.name}}</li>
									<li>{{job.name_mm}}</li>
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
				filterJob:''
			}
		},
		computed: {
			chunkJobs() {
				let i,j,chunkJobs=[],chunk=3;
				for(i=0,j=0;i<this.searachableJobs.length;i+=chunk,j++) {
					chunkJobs[i] = this.searachableJobs.slice(i,i+chunk);
				}
				return chunkJobs;
			},
			searachableJobs() {
				let jobs = this.job_data;
				return jobs.filter((result)=> {
					return result.name.toLowerCase().includes(this.filterJob.toLowerCase());
				});
			}
		}
});

