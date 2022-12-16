new Vue({
	el: '#app',
	data: {
		dischi: [],
		urlApi: location.href + 'api.php',
	},
	created() {
		axios.get(this.urlApi)
			.then(axiosResponse => {
				console.log(axiosResponse);
				this.dischi = axiosResponse.data
			});
	}
})