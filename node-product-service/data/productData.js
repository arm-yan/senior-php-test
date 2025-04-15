const { v4: uuidv4 } = require('uuid');

exports.products = [
    { id: uuidv4(), name: 'iPhone 15', price: 1200 },
    { id: uuidv4(), name: 'Samsung Galaxy S23', price: 1000 },
    { id: uuidv4(), name: 'Xiaomi Mi 13', price: 700 }
];