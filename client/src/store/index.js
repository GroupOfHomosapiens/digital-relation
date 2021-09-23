import Vue from 'vue';
import Vuex from 'vuex';
import createPersistedState from 'vuex-persistedstate';

Vue.use(Vuex);

export default new Vuex.Store({
	state: {
		user: {},
	},
	mutations: {
		SET_USER(state, user) {
			state.user = user;
		},
	},
	actions: {
		fetchUser({ commit }) {
			axios
				.get('/auth/user')
				.then(res => {
					commit('SET_USER', res.data);
					return res.data;
				})
				.catch(err => {
					return err;
				});
		},
	},
	plugins: [createPersistedState()],
	modules: {},
});
