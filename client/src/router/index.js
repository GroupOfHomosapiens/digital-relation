import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../views/Home.vue';
import Login from '../views/Login.vue';
import Menu from '../views/Menu.vue';
import RelationOrder from '../views/RelationOrder.vue';
import Layout from '../views/pages/user/layout.vue';
import Index from '../views/pages/user/index.vue';
import User from '../views/pages/user/user.vue';
import NotFound from '../views/NotFound.vue';

Vue.use(VueRouter);

const routes = [
	{
		path: '/',
		name: 'Baş sahypa',
		component: Home,
	},
	{
		path: '/login',
		name: 'Login  ',
		component: Login,
	},
	{
		path: '/menu',
		name: 'Menu',
		component: Menu,
	},
	{
		path: '/gatnashyk-nyzam',
		name: 'Gatnshyk-nyzam',
		component: RelationOrder,
	},
	{
		path: '/user',
		component: Layout,
		children: [
			{ path: '', component: Index },
			{ path: ':id', component: User },
		],
		// children: [
		// { path: '/', component: Index },
		// { path: ':id', component: User },
		// ],
	},
	{
		path: '*',
		name: 'Not Found',
		component: NotFound,
	},
];

const router = new VueRouter({
	mode: 'history',
	routes,
});

router.beforeEach((to, from, next) => {
	document.title = `${to.name} |  ${process.env.VUE_APP_TITLE}`;
	next();
});

export default router;
