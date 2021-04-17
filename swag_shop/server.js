const { response } = require('express');
var express = require('express'); 
var app = express(); 
// var bodyParser = require('body-parser'); 
var mongoose = require('mongoose');
var db = mongoose.connect('mongodb://localhost/swag-shop');

var Product = require('./model/product'); 
var WishList = require('./model/wishlist'); 

app.use(express.json()); 
app.use(express.urlencoded({extended:false})); 

// Send message for default URL
// app.get('/', (req, res) => res.send('Hello World with Express'));
app.get('/', function(req, res){
    res.send('Hello World!'); 
}); 

app.get('/wishlist',function(request,response){ 
    WishList.find({}, function(err, wishLists) { 
        if (err){ 
            response.status(500).send({error:"Could not fetch wish list!"}); 
        } 
        else { 
            response.send(wishLists); 
        }
    }); 

}); 

app.post('/wishlist',function(request,response){ 
    var wishList = new WishList(); 
    wishList.title = request.body.title; 

    wishList.save(function(err, newWishList){ 
        if (err){ 
            response.status(500).send({error:"Could not create a new wish list!"}); 
        }
        else{ 
            response.send(newWishList); 
        }
    }); 
}); 


app.put('/wishlist/product/add',function(request,response){ 
    Product.findOne({_id: request.body.productId}, function(err, product) { 
        if (err){
            response.status(500).send({error:"Could not add item to wish list!"}); 
        }
        else { 
            WishList.updateOne(
            // WishList.update(
                {_id: request.body.wishListId}, 
                {$addToSet: {products: product._id}}, function(err, wishList){ 
                    if (err){ 
                        response.status(500).send({error:"Could not create a new wish list!"}); 
                    }
                    else{ 
                        response.send(wishList); 
                    }
                });
        }
    }) 
}); 

app.post('/product',function(request,response){ 
    var product = new Product(); 
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


app.get('/product',function(request,response){ 
    Product.find({}, function(err, products){ 
        if (err){ 
            response.status(500).send({error: "Could not fetch products"});
        }
        else { 
            response.send(products);
        } 
    }); 
}); 


app.listen(3000,function(){ 
    console.log("SWAG Shop API running on port 3000....");
});  

