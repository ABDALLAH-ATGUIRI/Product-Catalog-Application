<template>
    <div class="product">
        <figure>
            <img
                :src="`http://127.0.0.1:8000/storage/${info.image}`"
                alt="Product Image"
                class="product-image"
            />
        </figure>
        <div class="product-description">
            <div class="info">
                <h1>{{ info.name }}</h1>
                <p>{{ info.description }}</p>
            </div>

            <div class="price">{{ info.price }}<br />DH</div>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({ info: { type: Array, required: true } });
</script>

<style lang="css" scoped>
/* Titles */
h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: 400;
    color: #31353d;
    margin: 0;
}
img {
    max-width: 100%;
    height: 300px;
}
figure {
    margin: 0;
    line-height: 0;
}
.product {
    background: #fff;
    max-width: 300px;
    position: relative;
    z-index: 15;
    margin: 0 auto;
    border: #9bb6aa 2px solid;
}
.product-description {
    width: 100%;
    position: relative;
    z-index: 15;
    background: #fff;
    display: flex;
    flex-direction: row;
    align-items: center;
}
.info {
    width: 70%;
    padding: 15px;
    color: #aaa;
    font-size: 0.8em;
}

.info > p {
    font-size: 18px;
    margin: 0;
}
.price {
    width: 30%;
    float: left;
    color: #9bb6aa;
    font-size: 2em;
    position: relative;
    text-align: center;
}
</style>
