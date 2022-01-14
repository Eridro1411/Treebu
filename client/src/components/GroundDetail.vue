<template>
    <div>
        Ground Detail 
        <div class="flex w-screen">
            <img :src="ground.photo" alt="">
            <div>
                <p>Comune del terreno: {{ground.common}}</p>
                <p>Foglio catastale: {{ground.cadastral_sheet}}</p>
                <p>Mappa catastale: {{ground.cadastral_map}}</p>
                <p>Dimensioni terreno: {{ground.dimension}}</p>
                <p>Tipologia terrno: {{ground.type_ground}}</p>
                <p>Irrigazione: {{ground.irrigation}}</p>
                <p>Tipo di offerta: {{ground.offer_type}}</p>
                <p>Canone: {{ground.offer_fee}} €<span v-if="ground.offer_type == 'Affitto'" >/Mese</span></p>
                <p>Disponibilità: <span v-if="ground.availability == 1"> Si</span> <span v-if="ground.availability == 0"> No</span></p>
            </div>
            <button @click="goToEdit(ground)">
                modifica
            </button>
        </div>
    </div>
</template>
<script>
import axios from "axios"
export default {
    name:"GroundDetail",
    data() {
        return {
            ground: {}
        }
    },
    async mounted() {

        let response = await axios.get("http://127.0.0.1:8000/api/detail/" + this.$route.params.id);
        this.ground = response.data;
    },
    methods: {
        goToEdit(ground) {
            this.$router.push("/edit/"+ ground.id)
        }
    }
}
</script>