<template>
    <div>
        <div class="flex justify-around">
            Navigation Bar
            <button @click="goToList()">
                GroundsList
            </button>
            <button @click="goToCreate()">
                GroundCreate
            </button>
        </div>
    </div>
</template>
<script>
export default {
    name:"Navigation",
    data() {
    },
    methods: {
        goToList() {
            this.$router.push("/list");
        },
        goToCreate() {
            this.$router.push("/create");
        }
    }
}
</script>