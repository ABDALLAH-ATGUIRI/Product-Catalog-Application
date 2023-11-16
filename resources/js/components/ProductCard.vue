<template>
    <div class="product">
        <figure>
            <img
                src="https://raw.githubusercontent.com/itbruno/productpreview/master/assets/img/t-shirt.jpg"
                alt="Product Image"
                class="product-image"
            />
        </figure>

        <div class="product-description">
            <div class="info">
                <h1>LOREM IPSUM</h1>
                <p>
                    Lorem Ipsum is simply dummy printing and typesetting
                    industry
                </p>
            </div>

            <div class="price">89 DH</div>
        </div>
    </div>
</template>
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
}
.info {
    width: 70%;
    padding: 15px;
    color: #aaa;
    font-size: 0.8em;
}

.info > p {
    font-size: 18px;
}
.price {
    width: 30%;
    float: left;
    color: #9bb6aa;
    font-size: 2.5em;
    position: relative;
    text-align: center;
}
</style>
