<template lang="">
    <div class="search-bar">
        <input type="text" class="search-input" placeholder="Search..." />
        <select class="filter-select">
            <option value="">Filter by Category</option>
            <option value="category1">Category 1</option>
            <option value="category2">Category 2</option>
            <option value="category3">Category 3</option>
        </select>
        <select class="sort-select">
            <option value="">Sort by</option>
            <option value="name-asc">Name (A-Z)</option>
            <option value="name-desc">Name (Z-A)</option>
            <option value="price-asc">Price (Low to High)</option>
            <option value="price-desc">Price (High to Low)</option>
        </select>
    </div>
</template>
<style scoped>
.search-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    margin-top: 20px;
}

.search-input {
    flex-grow: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.filter-select,
.sort-select {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.product-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.product {
    border: 1px solid #ccc;
    margin-bottom: 10px;
    padding: 10px;
}

.pagination {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

.pagination-item {
    margin-right: 5px;
}
</style>
