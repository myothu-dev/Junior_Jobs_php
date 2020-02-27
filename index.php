<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script src="assets/js/vue.js"></script>
	<script src="assets/js/axios.min.js"></script>
</head>
<body>
	<div class="container">
		<job-list :job_data="categories"></job-list>
	</div>
</body>
<script src="components/job-list.js"></script>
<script type="text/javascript">
	const element = new Vue({
		el:'.container',
		data: {
			categories:[],
		},
		mounted() {
			this.getJobs();
		},
		methods: {
			getJobs() {
				axios.get('http://junior_jobs.local/app/Controllers/read_job.php').then((response)=> {
					element.categories = response.data;
				}).catch((error)=> {
					console.log(error);
				});
			}
		}
	});
</script>
</html>