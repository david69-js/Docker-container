'use strict'

const { Router }= require('express');
const app = Router()

app.get('/', (req, res) =>{
    return res.status(200).send('Hello Word121qwsw');
})

module.exports = app;