<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <img class="card-img-top" src="/kanye-west.jpg" alt="Card image cap">

            </div>
            <div class="col-md-8">
                <div class="card" style="width: 500px;height: 100%">
                    <div class="card-body">
                        <h5 class="card-title mb-5">Kanye Quotes</h5>
                        <div class="loader" v-if="quotes.length ==0"></div>
                        <p class="card-text" v-for="(quote,index) in quotes">{{(index+1)+'- '+quote}}</p>
                        <a class="btn btn-primary float-end" @click.prevent="fetchData">Refresh</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "QuoteComponent",
    data() {
        return {
            quotes: [],
            stop:false
        }
    },
    methods:
        {
            fetchData() {
                this.quotes=[];
                if(!this.stop)
                {
                    axios.get('/api/kanye-quotes').then((data)=>{
                        this.quotes=data.data;
                        this.stop=false
                    }).catch(()=>{
                        alert('error');
                    })

                }
                this.stop=true;


            },


        },
        created() {
        this.fetchData();

        }
}
</script>

<style scoped>
.loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 250px;
    height: 250px;
    animation: spin 2s linear infinite;
    margin-left: 25%;

}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
