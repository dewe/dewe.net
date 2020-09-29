const express = require('express')
const app = express()

app.use(express.static('public', {
  redirect: true,
  maxAge: 7200000
}))

app.use(function (req, res, next) {
  res.status(404).send("Sorry can't find that!")
})

app.get('/easify', (req, res) => { res.redirect('/framsteget'); });
app.get('/dropjaw', (req, res) => { res.redirect('/framsteget'); });

const port = process.env.PORT || 3000

app.listen(port, function() {
  console.log(`Server listening on port ${port}`)
})
