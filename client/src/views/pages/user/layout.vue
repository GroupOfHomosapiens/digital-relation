<template>
	<section>
		<header>
			<router-link to="/about" class="mx-3">About</router-link>
			<router-link to="/user/1" class="mx-3">User 1</router-link>
			<router-link to="/user/2" class="mx-3">User 2</router-link>
		</header>
		<v-main>
			<router-view :key="$route.fullPath" />
		</v-main>
		<h3>
			footer
		</h3>
	</section>
</template>

<style scoped>
.router-link-exact-active {
	color: red;
	text-decoration: none;
}
</style>
