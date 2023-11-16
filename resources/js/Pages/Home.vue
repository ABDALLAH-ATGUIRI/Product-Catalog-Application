<template>
    <main role="main">
        <search-bar></search-bar>
        <div class="catalog">
            <div v-for="item in 5" :key="item">
                <product-card></product-card>
            </div>
        </div>
        <pagination-bar
            :items="['', '', '', '','']"
            :itemsPerPage="10"
        ></pagination-bar>
    </main>
</template>

<script setup>
import ProductCard from "../components/ProductCard.vue";
import SearchBar from "../components/SearchBar.vue";
import PaginationBar from "../components/PaginationBar.vue";
</script>

<style scoped>
main {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.catalog {
    display: flex;
    gap: 10px;
}
</style>
