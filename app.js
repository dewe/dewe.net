const express = require('express')
const app = express()

app.use(express.static('public', {
  redirect: true,
  maxAge: 7200000
}))

const port = process.env.PORT || 3000

app.listen(port, function() {
  console.log(`Server listening on port ${port}`)
})
