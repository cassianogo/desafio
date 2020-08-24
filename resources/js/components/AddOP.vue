<template>
    <div>
        <h3 class="text-center">Depositar valor</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addValue">
                    <div class="form-group">
                        <label>Depositar</label>
                        <input type="number" class="form-control" v-model="operacoes.saldo">
                    </div>
                    <button type="submit" class="btn btn-primary">Depositar</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                operacoes: {}
            }
        },
        methods: {
            addValue() {
                this.axios
                    .post('http://127.0.0.1:8000/api/operacoes', this.operacoes)
                    .then(response => (
                        this.$router.push({name: 'home'})
                    ))
                    .catch(error => console.log(error))
            }
        }
    }
</script>