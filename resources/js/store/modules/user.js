import axios from 'axios'

const state = {
    users: [],

}
const getters = {
    allUsers: (state) => {
        return state.users
    },
    dogs: (state) => {
        return state.dogs
    },

}
const actions = {
    async fetchUsers ({ commit }) {
        const response = await axios.get('/api/users')
        commit('setUsers', response.data)
    },
}
const mutations = {
    setUsers: (state, users) => (state.users = users),
}

export default {
    state,
    getters,
    actions,
    mutations,
}
