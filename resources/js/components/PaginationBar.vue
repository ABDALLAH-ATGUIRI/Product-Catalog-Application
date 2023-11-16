<template>
    <div>
        <!-- Pagination controls -->
        <div>
            <button @click="prevPage" :disabled="currentPage === 1">
                Previous
            </button>
            <span>Page {{ currentPage }} of {{ totalPages }}</span>
            <button @click="nextPage" :disabled="currentPage === totalPages">
                Next
            </button>
        </div>
    </div>
</template>

<script setup>
import { ref, computed } from "vue";

const props = defineProps(["items", "itemsPerPage"]);
const currentPage = ref(1);

const totalPages = computed(() =>
    Math.ceil(props.items.length / props.itemsPerPage)
);

const nextPage = () => {
    if (currentPage.value < totalPages.value) {
        currentPage.value++;
    }
};

const prevPage = () => {
    if (currentPage.value > 1) {
        currentPage.value--;
    }
};
</script>

<style scoped>
</style>
