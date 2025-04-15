# 🛒 Product Service (Node.js)

A simple Node.js-based RESTful service to manage products. It supports:
- Fetching all available products
- Fetching a specific product by ID

Products are stored in-memory with `uuid`-based IDs.

---

## 📁 Project Structure

```
node-product-service/
├── app.js
├── package.json
├── routes/
├── controllers/
├── services/
└── data/
```

---

## 🛠 Setup Instructions

```bash
# Clone the repo
git clone <your-repo-url>
cd node-product-service

# Install dependencies
npm install
```

---

## 🚀 Running the Server

```bash
# Start the server
npm start
```

Server will run on: `http://localhost:3000`

---

## 🧪 Example API Requests

### ✅ Get All Products

```bash
curl http://localhost:3000/products
```

**Response:**
```json
[
  {
    "id": "UUID",
    "name": "iPhone 15",
    "price": 1200
  },
  ...
]
```

---

### ✅ Get Product by ID

```bash
curl http://localhost:3000/products/<product-id>
```

**Response:**
```json
{
  "id": "UUID",
  "name": "iPhone 15",
  "price": 1200
}
```

**If Not Found:**
```json
{
  "message": "Product not found"
}
```

---

## 📬 Postman Example

- Method: **GET**
- URL: `http://localhost:3000/products`
- URL: `http://localhost:3000/products/<id>`

---

## ✅ Dependencies

- express
- uuid

---

## 🧼 License

MIT