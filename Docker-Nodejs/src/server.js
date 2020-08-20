const mongoose = require("mongoose");

mongoose.connect('mongdb://mongo/mymongoDataBase',{ useNewUrlParser: true, useUnifiedTopology:true } )
        .then(()=>{
            console.log('Mongodb is connected', db.connection.host);        
        }).catch(()=>{
            console.error(err)
        })