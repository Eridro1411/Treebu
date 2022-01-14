<template>
    <div class="w-screen flex flex-col items-center">
        Grounds List
        <div @click="goToDetail(ground)" v-for="(ground, index) in grounds" :key="index">
            <img :src="ground.photo" alt="">
            <p> Comune: {{ground.common}}</p>
            <p> Foglio catastale: {{ground.cadastral_sheet}}</p>
            <p> Mappa catastale: {{ground.cadastral_map}}</p>
            <p> Dimensione: {{ground.dimension}} ettari</p>
            <p> Tipo di terreno: {{ground.type_ground}}</p>
            <p> Irrigazione: {{ground.irrigation}}</p>
            <p> Tipo di Offerta: {{ground.offer_type}}</p>
            <p> Canone: {{ground.offer_fee}} €<span v-if="ground.offer_type == 'Affitto'">/Mese</span></p>
            <p v-if="ground.availability == '1'">Disponibilità: <span v-if="ground.availability == '1'">Si</span> <span v-if="ground.availability == '0'">No</span></p>
        </div>
    </div>
</template>
<script>
import axios from "axios"
export default {
    name:"GroundsList",
    data() {
        return {
            grounds: []
        }
    },
    async mounted() {
        let response = await axios.get("http://127.0.0.1:8000/api/list");
        this.grounds = response.data;
    },
    methods: {
        goToDetail(ground) {
            this.$router.push("/detail/"+ ground.id)
        }
    }

}
</script>