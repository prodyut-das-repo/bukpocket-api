const express = require("express");
const bodyParser = require("body-parser");
const app = express();
const mysql = require("mysql");

app.use(bodyParser.json());
const conn = mysql.createConnection({
  host: "bukpocketmedia.com",
  user: "u706939526_bukpocket" /* MySQL User */,
  password: "*S|IIfTT4c5" /* MySQL Password */,
  database: "u706939526_bukpocket" /* MySQL Database */,
});

conn.connect((err) => {
  if (err) throw err;
  console.log("Mysql Connected with App...");
});

/**
 * Create New Item
 *
 * @return response()
 */

app.post("/api/items", (req, res) => {
  let data = { name: req.body.name, email: req.body.email, phone: req.body.phone, message: req.body.message };
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
app.listen(process.env.PORT || 5000, () => {
  console.log("Server started on port ", process.env.PORT || 5000);
});