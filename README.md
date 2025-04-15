# 🧩 Product & Order Service

A simple microservice-style project built with:
- Node.js Product Service (Express.js)
- PHP Order Service (plain PHP + Guzzle)

The Product Service provides product information.
The Order Service creates and stores orders by fetching product data from the Product Service.

---

## 📦 Services

### 1. [Product Service (Node.js)](./node-product-service/)

> REST API to fetch products from in-memory storage.

#### Endpoints:
- `GET /products` — Get all products
- `GET /products/{id}` — Get product by ID

#### Run:
```bash
cd node-product-service
npm install
npm start
```

Runs at: `http://localhost:3000`

---

### 2. [Order Service (PHP)](./php-order-service/)

> REST API to create and fetch orders using the Product Service.

#### Endpoints:
- `POST /orders` — Create new order (productId & quantity)
- `GET /orders` — Get all orders

#### Run:
```bash
cd php-order-service
composer install
php -S localhost:8000 -t public
```

Runs at: `http://localhost:8000`

---

## 🧬 Project Structure

```
senior-php-test/
├── product-service/     # Node.js Product Service
└── order-service/       # PHP Order Service
```

---

## 💡 Notes

- Ensure Product Service is running before creating orders in Order Service.
- Communication between services is via REST API over HTTP.

---

## 🧼 License

MIT