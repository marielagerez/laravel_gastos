 <template>
 <div>
           <h2>Lista de Gastos</h2>
           <table>

                  <tr v-for="gasto in arrayGastos"  >
                    <td v-text="gasto.id"></td>
                    <td v-text="gasto.descripcion"></td>
                    <td v-text="gasto.concepto"></td>
                    <td v-text="gasto.fecha"></td>
                    <td>
                    <button class="btn" @click="loadFieldsUpdate(gasto)>Modificar</button>
                    <button class="btn" @click="deleteGastos(gasto)>Modificar</button>
                    </td>
                    </tr>

               </table>
           
      </div>
     
</template> 
<script>
    export default {
        data(){
            return{
                descripcion:"",
                concepto:"",
                fecha:"",
                update:0,
                arrayGastos:[],

            }
        },
        methods:{
            getGastos(){
                let me=this;
                let url = "/gastos/lista"
                axios.get(url).then(function (response){
                    me.arrayGastos = response.data;
                })
                .catch(function(error){console.log(error);});
            },
            saveGastos(){
                let me = this;
                let url = "/gastos/store"
                axios.post(url,{
                    "descripcion":this.descripcion,
                    "concepto":this.concepto,
                    "fecha":this.fecha 
                }).then(function(response){
                    me.getGastos();
                    me.clearFields();
                })
                .catch(function(error){console.log(error);})
            },
            
            loadFieldsUpdate(data){
                this.update=data.id
                let me=this;
                let url="/gastos/edit/"+this.update;
                axios.get(url).then(function(response){
                   me.descripcion=response.data.descripcion,
                   me.concepto=response.data.concepto,
                  me.fecha=response.data.fecha
                })
                .catch(function(error){
                    console.log(error);
                });
            },
            deleteGastos(data){
                let met = this;
                let gasto_id=data.id;
                if (true){
                    axios.delete("/gastos/delete/"+gasto_id
                    ).then(function(response){
                        me.getGastos();
                    });
                } 
            },
            clearFields(){
                this.descripcion='';
                this.concepto='';
                this.fecha='';
                this.update=0;
            }
        },
        mounted() {
            this.getGastos();
            
        }
    }
</script>
