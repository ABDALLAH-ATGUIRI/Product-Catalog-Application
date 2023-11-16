<template>
    <main role="main">
        <search-bar></search-bar>
        <div v-if="products.products.length > 0" class="catalog">
            <div v-for="item in products.products" :key="item">
                <product-card :info="item"></product-card>
            </div>
        </div>
        <div v-else class="empty-data">
            <p>not found products</p>
        </div>
        <pagination-bar
            :items="['', '', '', '', '']"
            :itemsPerPage="10"
        ></pagination-bar>
    </main>
</template>

<script setup>
import ProductCard from "../../components/ProductCard.vue";
import SearchBar from "../../components/SearchBar.vue";
import PaginationBar from "../../components/PaginationBar.vue";

const props = defineProps(["products"]);
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

.empty-data {
    height: 800px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.empty-data > p {
    color: rgb(160, 160, 160);
    font-weight: 300;
    font-size: 12px;
}
</style>
