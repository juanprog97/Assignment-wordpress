const express = require("express");
const app = express();
const port = 5000;

app.get("/", (req, res) => {
  res.send("Hi Api Commerce!!");
});

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});

app.get("/pricing-details", (req, res) => {
  res.json({
    monthly: 3800,
    year: 10000,
  });
});
