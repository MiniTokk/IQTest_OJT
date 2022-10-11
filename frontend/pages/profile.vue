<template class="align-self-md-center">
	<div class="p-5 m-auto">
		<p class="align-self-center text-bold text-justify">Profile</p>
		<p><b>User Name</b> : {{ $auth.user.name }}</p>
		<p><b>User Email</b> : {{ $auth.user.email }}</p>

		<div class="mt-5">
			<button type="button" class="p-2  btn-danger rounded" @click="logout">Logout</button>
	
		</div>
	</div>
</template>
<script>

	export default{
		middleware:'auth',

		methods:{
			async logout(){
				this.$nuxt.$loading.start();
				this.$auth.logout();
				this.$nuxt.$loading.finish();
				this.$router.push('/login');
			}
		}
	}
</script>