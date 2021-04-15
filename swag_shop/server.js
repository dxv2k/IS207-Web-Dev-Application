var express = require('express'); 
var app = express(); 
var bodyParser = require('body-parser'); 
var mongoose = require('mongoose');
var db = mongoose.connect('mongodb://localhost/swag-shop');

var Product = require('./model/product'); 
var WishList = require('./model/wishlist'); 

app.use(bodyParser.json()); 
app.use(bodyParser.urlencoded({extended:false})); 
// app.use(express.json()); 
// app.use(express.urlencoded({extended:false})); 


app.listen(3000,function(){ 
    console.log("SWAG Shop API running on port 3000....");
});  



app.post('/proudct',function(request,response){ 
    // var product = new Proudct({
    //     title: requbodyParserest.body.titleprice
    // }); 
    var product = new Proudct()
    // Below this in
    product.title = request.body.title; 
    product.price = request.body.price; 
    product.save(function(err, savedProduct){ 
        if (err){ 
            response.status(500).send({error:"Could not save product"}); 
        }
        else{ 
            response.status(200).send(savedProduct); 
            // or use this: response.send(savedProduct); 
        }
    }); 
}); 

