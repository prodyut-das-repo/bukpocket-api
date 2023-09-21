const express = require("express");
const bodyParser = require("body-parser");
const app = express();
const mysql = require("mysql");

app.use(bodyParser.json());
// app.use(
//   cors({
//     origin: [
//       "http://localhost:3000",
//       "https://bukpocket-api.onrender.com/",
//       "http://bukpocket-api.onrender.com/",
//     ],
//     credentials: true,
//   })
// );
app.use(function (req, res, next) {
  // res.header("Access-Control-Allow-Origin", "*");
  const allowedOrigins = [
    "http://localhost:3000",
    "https://bukpocket-api.onrender.com/",
    "http://bukpocket-api.onrender.com/",
  ];
  const origin = req.headers.origin;
  if (allowedOrigins.includes(origin)) {
    res.setHeader("Access-Control-Allow-Origin", origin);
  }
  res.header(
    "Access-Control-Allow-Headers",
    "Origin, X-Requested-With, Content-Type, Accept, Authorization"
  );
  res.header("Access-Control-Allow-credentials", true);
  res.header("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE, UPDATE");
  next();
});
const conn = mysql.createConnection({
  host: "bukpocketmedia.com",
  user: "u706939526_bukpocket" /* MySQL User */,
  password: "*S|IIfTT4c5" /* MySQL Password */,
  database: "u706939526_bukpocket" /* MySQL Database */,
});

conn.connect((err) => {
  if (err) {
    console.log(err);
  }
  console.log("Mysql Connected with App...");
});
conn.query("SET session wait_timeout=28800");
/**
 * Get All Items
 *
 * @return response()
 */

app.get("/api/items", (req, res) => {
  let sqlQuery = "SELECT * FROM leads";
  let query = conn.query(sqlQuery, (err, results) => {
    if (err) throw err;
    res.send(apiResponse(results));
    console.log(results);
  });
});

/**

 * Create New Item

 *

 * @return response()

 */

app.post("/api/items", (req, res) => {
  let data = {
    name: req.body.name,
    email: req.body.email,
    phone: req.body.phone,
    message: req.body.message,
  };
  let sqlQuery = "INSERT INTO leads SET ?";
  let query = conn.query(sqlQuery, data, (err, results) => {
    if (err) throw err;
    res.send(apiResponse(results));
  });
});

/**
 * API Response
 *
 * @return response()
 */

function apiResponse(results) {
  return JSON.stringify({ status: 200, error: null, response: results });
}

/*------------------------------------------

--------------------------------------------

Server listening

--------------------------------------------

--------------------------------------------*/

app.listen(process.env.PORT || 2000, () => {
  console.log("Server started on port ", process.env.PORT || 5000);
});
