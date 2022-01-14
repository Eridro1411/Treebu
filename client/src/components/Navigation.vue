<template>
    <div>
        <div class="flex flex-col text-center bg-green-200">
            <h1 class="text-3xl m-2">Treebu</h1>
            <div class="flex justify-around text-xl bg-green-400">
                <button @click="goToList()">
                GroundsList
            </button>
            <button @click="goToCreate()">
                GroundCreate
            </button>
            </div>
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