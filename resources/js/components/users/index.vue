<template>
    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>

            </tbody>
        </table>

    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'

export default {
    name: 'index',
    data () {

        return {}
    },
    methods: {
        ...mapActions([
            'fetchUsers',
        ]),
    },
    computed: mapGetters(['allUsers']),
    created () {
        this.fetchUsers()
    },
}
</script>

<style scoped>

</style>
