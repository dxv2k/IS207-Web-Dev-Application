// Create blueprint for the database 
var mongoose = require('mongoose');
var Schema = mongoose.Schema; 

var product = new Schema({ 
    title: String, 
    price: Number, 
    likes: {type: Number, default:0}     
});

module.exports = mongoose.model('Product', product); 