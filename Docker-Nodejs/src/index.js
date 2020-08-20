const express = require('express');
const app = express();
var routers = require('./routers/routers');

app.use(routers);

require('./server');
app.listen(3000, ()=>{
    console.log('EL servidor esta corriendo')
});
