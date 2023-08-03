const express = require("express");
const app = express();
const port = 3000;
const request = require("request");
const bodyParser = require("body-parser");

app.use(bodyParser.json());

// GET
app.get("/", (req, res) => {
  request(
    "http://localhost/tubes/index.php/user",
    function (error, response, body) {
      if (error) {
        res.status(400).send("Error");
      } else {
        res.send(body);
      }
    }
  );
});

// POST
app.post("/create", (req, res) => {
  const options = {
    uri: "http://localhost/tubes/index.php/user/create",
    method: "POST",
    json: req.body,
  };

  request(options, function (error, response, body) {
    if (error) {
      res.status(400).send("Error");
    } else {
      res.send(body);
    }
  });
});

// PUT
app.put("/update/:id", (req, res) => {
  const id = req.params.id;
  const options = {
    uri: `http://localhost/tubes/index.php/user/update/${id}`,
    method: "PUT",
    json: req.body,
  };

  request(options, function (error, response, body) {
    if (error) {
      res.status(400).send("Error");
    } else {
      res.send(body);
    }
  });
});

// DELETE
app.delete("/delete/:id", (req, res) => {
  const id = req.params.id;
  const options = {
    uri: `http://localhost/tubes/index.php/user/delete/${id}`,
    method: "DELETE",
  };

  request(options, function (error, response, body) {
    if (error) {
      res.status(400).send("Error");
    } else {
      res.send(body);
    }
  });
});

app.listen(port, () => console.log("App Starting"));
