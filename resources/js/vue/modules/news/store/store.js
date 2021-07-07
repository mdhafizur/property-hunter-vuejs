export default {
  namespaced: true,
  state: {
    news: {
      id: 1,
    },
  },
  getters: {
    getnews(state) {
      return state.news.id;
    },
  },
  actions: {},
  mutations: {},
};
