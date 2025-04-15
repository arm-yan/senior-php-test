const productData = require('../data/productData');

exports.getAllProducts = async () => {
    return productData.products;
};

exports.getProductById = async (id) => {
    return productData.products.find(product => product.id === id);
};