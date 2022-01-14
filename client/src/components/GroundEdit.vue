<template>
  <div >
    Ground Edit

    <div v-for="field in fields" :key="field.code">
      {{ field.label }}
      <input
        v-if="field.type == 'text'"
        type="text"
        class="border"
        v-model="newGround[field.code]"
      />
      <input
        v-if="field.type == 'number'"
        type="number"
        class="border"
        v-model="newGround[field.code]"
      />
      <select
        v-if="field.type == 'select'"
        class=""
        v-model="newGround[field.code]"
      >
        <option v-for="option in field.options" :key="option.code">
          {{ option.label }}
        </option>
      </select>
      <input
        v-if="field.type == 'checkbox'"
        type="checkbox"
        v-model="newGround[field.code]"
      />
    </div>
    <div>
      <button @click="GroundEdit()">Aggiungi terreno</button>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  name: "GroundEdit",
  data() {
    return {
      fields: [
        {
          label: "Comune",
          code: "common",
          type: "text",
        },
        {
          label: "Foto aerea",
          code: "photo",
          type: "text",
        },
        {
          label: "Dimensione area",
          code: "dimension",
          type: "number",
        },
        {
          label: "Foglio catastale",
          code: "cadastral_sheet",
          type: "text",
        },
        {
          label: "Mappa catastale",
          code: "cadastral_map",
          type: "text",
        },
        {
          label: "Tipologia terreno",
          code: "type_ground",
          type: "select",
          options: [
            {
              label: "Argilloso",
              code: "clay",
            },
            {
              label: "Sabbioso",
              code: "sand",
            },
            {
              label: "Ghiaioso",
              code: "gravel",
            },
            {
              label: "Tufo",
              code: "tuff",
            },
          ],
        },
        {
          label: "Irrigazione",
          code: "irrigation",
          type: "select",
          options: [
            {
              label: "Scorrimento",
              code: "scroll",
            },
            {
              label: "pozzo",
              code: "water_well",
            },
            {
              label: "Canale",
              code: "chanel",
            },
            {
              label: "Senza acqua",
              code: "no_water",
            },
          ],
        },
        {
          label: "Tipo di offerta",
          code: "offer_type",
          type: "select",
          options: [
            {
              label: "Vendita",
              code: "sell",
            },
            {
              label: "Affitto",
              code: "rent",
            },
            {
              label: "Gratuito",
              code: "free",
            },
          ],
        },
        {
          label: "Canone offerta",
          code: "offer_fee",
          type: "number",
        },
        {
          label: "Disponibilità",
          code: "availability",
          type: "checkbox",
        },
      ],
      newGround: {
        common:"",
        photo:"",
        dimension:0,
        cadastral_sheet:"",
        cadastral_map:"",
        type_ground:"sand",
        irrigation:"",
        offer_type:"rent",
        offer_fee:0,
        availability: true,
      },
    };
  },
  async mounted() {
    let response = await axios.get(
      "http://127.0.0.1:8000/detail/" + this.$route.params.id
    );
    this.newGround = response.data;
  },
  methods: {
      async GroundEdit() {
          await axios.put("http://127.0.0.1:8000/edit" + this.$route.params.id);
          this.$router.push("/detail/"+ this.$route.params.id)
      }
  }
};
</script>
