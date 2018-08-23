//Variables to Use
var express 	= require("express");
var app 		= express();
var path 		= require("path");
var port 		= process.env.PORT || 5000;
var bodyParser 	= require('body-parser');

//What the App Uses
app.use(express.static(path.join(__dirname, '/public')));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

//Set Variables
app.set('views', __dirname + '/public/views');

//Start
app.listen(port);
console.log("Server running at localhost:" + port);

//Homepage
app.route('/').get(function(req,res){
	res.render(path.join(__dirname+"/views/pages/index"));
});