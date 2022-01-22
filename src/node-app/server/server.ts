import express from "express";

const server = express();

server.get("/test", (req, res) => {
  res.send("test");
});

server.listen(3000, () => {
  console.log(`Server running on http://localhost:3000`);
});
