const express = require("express");
const bodyParser = require("body-parser");
const app = express();
const mysql = require("mysql");

app.use(bodyParser.json());
const cors = require('cors');
app.use(cors({
    origin: "*"
}));
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
