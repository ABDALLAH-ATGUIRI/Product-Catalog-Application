<template lang="">
    <div id="app">
        <div class="filter-bar">
            <select v-model="filterForm.category_id">
                <template v-for="category in categories">
                    <optgroup
                        v-if="category.parent_id === null"
                        :label="category.name"
                    >
                        <template v-for="subCategory in categories">
                            <option
                                v-if="
                                    subCategory.parent_id &&
                                    subCategory.parent_id == category.id
                                "
                                :value="subCategory.id"
                            >
                                {{ subCategory.name }}
                            </option>
                        </template>
                    </optgroup>
                </template>
            </select>

            <input
                v-model="filterForm.product_name"
                type="text"
                placeholder="Product Name"
            />

            <label for="minPrice">Min Price:</label>
            <input
                v-model.number="filterForm.min_prix"
                type="number"
                id="minPrice"
                min="0"
            />

            <label for="maxPrice">Max Price:</label>
            <input
                v-model.number="filterForm.max_prix"
                type="number"
                id="maxPrice"
                min="0"
            />

            <button @click="searchProducts">Search</button>
        </div>
    </div>
</template>
<script setup>
import { onMounted, ref } from "vue";

const categories = ref([]);
const filterForm = ref([]);

onMounted(() => {
    fetch("/api/categories")
        .then((response) => response.json())
        .then((data) => {
            categories.value = data.categories;
        })
        .catch((error) => {
            console.error("Error fetching categories:", error);
        });
});

const searchProducts = () => {
    console.log(filterForm.value)
    fetch(`/api/product/search`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ search: filterForm.value }),
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
        })
        .catch((error) => {
            console.error("Error fetching products:", error);
        });
};
</script>

<style scoped>
.filter-bar {
    background-color: #333;
    color: white;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3rem;
}

.filter-bar select,
.filter-bar input {
    margin-right: 10px;
    padding: 5px;
    font-size: 16px;
}

.filter-bar button {
    padding: 8px 15px;
    font-size: 16px;
    background-color: #4caf50;
    color: white;
    border: none;
    cursor: pointer;
}

.product-list {
    margin: 20px;
    padding: 10px;
    background-color: white;
    border-radius: 8px;
}

.product {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
}
</style>
