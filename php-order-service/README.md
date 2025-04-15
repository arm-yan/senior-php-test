# 📦 Order Service (PHP)

A simple PHP-based RESTful Order Service. It communicates with the Node.js Product Service to:
- Create orders with product price fetched via HTTP
- Store orders in-memory
- Retrieve all orders

---

## 📁 Project Structure

```
php-order-service/
├── public/
│   └── index.php
├── Controller/
│   └── OrderController.php
├── Service/
│   └── OrderService.php
├── DTO/
│   └── OrderDTO.php
├── Storage/
│   └── OrderStorage.php
├── HttpClient/
│   └── ProductClient.php
└── composer.json
```

---

## 🛠 Setup Instructions

```bash
# Clone the repo
git clone https://github.com/arm-yan/senior-php-test.git .
cd php-order-service

# Install dependencies
composer install
```

---

## 🚀 Running the Server

```bash
php -S localhost:8000 -t public
```

Server will run on: `http://localhost:8000`

---

## 🧪 Example API Requests

### ✅ Create Order

```bash
curl -X POST http://localhost:8000/orders -H "Content-Type: application/json" -d '{"productId": "PRODUCT_ID_FROM_NODE_SERVICE", "quantity": 3}'
```

---

### ✅ Get All Orders

```bash
curl http://localhost:8000/orders
```

---

## 🔗 Dependencies

- PHP 8+
- Guzzle HTTP Client

---

## 📬 Notes

Make sure your Node.js Product Service is running at:
```
http://localhost:3000/products
```

---

## 🧼 License

MIT