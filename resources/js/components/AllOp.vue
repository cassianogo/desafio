<template>
    <div>
        <h3 class="text-center">Todas Operações</h3><br/>
 
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Saldo</th>
                <th>Opções</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="operacoes in operacoes" :key="operacoes.id">
                <td>{{ operacoes.id }}</td>
                <td>R$ {{ operacoes.saldo }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <!-- <router-link :to="{name: 'edit', params: { id: operacoes.id }}" class="btn btn-primary">Edit
                        </router-link> -->
                        <button class="btn btn-success" @click="deletePost(operacoes.id)">Sacar</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Saldo: R$ {{saldo}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                operacoes: [],
                saldo: 0,
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/operacoes')
                .then(response => {
                    this.operacoes = response.data;
                });
            this.axios
                .get('http://localhost:8000/api/saldofinal')
                .then(response => {
                    this.saldo = response.data;
                });                    
        },
        methods: {
            deletePost(id) {
                this.axios
                    .delete(`http://localhost:8000/api/operacoes/${id}`)
                    .then(response => {
                        let i = this.operacoes.map(item => item.id).indexOf(id);
                        this.saldo = this.saldo - this.operacoes[i].saldo;
                        this.operacoes.splice(i, 1);
                    });
            }
        }
    }
</script>