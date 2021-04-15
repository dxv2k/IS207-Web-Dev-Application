// Create blueprint for the database 
var mongoose = require('mongoose');
var Schema = mongoose.Schema; 

var ObjectId = mongoose.Schema.Types.ObjectId; 

// Relationship database
var wishList = new Schema({ 
    title: {type: String, default: "Cool Wish List"}, 
    products:[{type: ObjectId, ref: 'Proudct'}]  
}); 


module.exports = mongoose.model('WishList', wishList); 
