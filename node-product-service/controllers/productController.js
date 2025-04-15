const productService = require('../services/productService');

exports.getAllProducts = async (req, res) => {
    const products = await productService.getAllProducts();
    res.json(products);
};

exports.getProductById = async (req, res) => {
    const product = await productService.getProductById(req.params.id);
    if (product) {
        res.json(product);
    } else {
        res.status(404).json({ message: 'Product not found' });
    }
};