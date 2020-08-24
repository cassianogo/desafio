<template>
    <div>
        <h3 class="text-center">Editar Valor</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateValue">
                    <div class="form-group">
                        <label>Saldo</label>
                        <input type="text" class="form-control" v-model="operacoes.saldo">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
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
        created() {
            this.axios
                .get(`http://localhost:8000/api/operacoes/${this.$route.params.id}/edit`)
                .then((response) => {
                    this.operacoes = response.data;
                });
        },
        methods: {
            updateValue() {
                this.axios
                    .put(`http://localhost:8000/api/operacoes/${this.$route.params.id}`, this.operacoes)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>