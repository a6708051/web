var http = require('http');
var url = require('url');
var express = require('/usr/local/node/lib/node_modules/express');
//var cookieParser = require('/usr/local/node/lib/node_modules/cookie-parser');
//var session = require('/usr/local/node/lib/node_modules/cookie-session');
var mysqlClient  = require('./mysql_client.js');
mysql = new mysqlClient();




var app = express();

app.set('view engine', 'ejs');

//设置跨域访问
app.all('*', function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "X-Requested-With");
    res.header("Access-Control-Allow-Methods","PUT,POST,GET,DELETE,OPTIONS");
    res.header("X-Powered-By",' 3.2.1')
    res.header("Content-Type", "application/json;charset=utf-8");
    next();
});

app.get('/', function(req, res) {
    handle(req, res);
});

app.get('/details', function(req, res) {
	res.render('details');
});


app.listen(8888);


var handle = function (req, res) {
	mysql.query("select * from blog_article where status>0 order by sort_id,id desc", function(rows) {
		var result = [];
		for(var key in rows) {
			var rv = {"id":rows[key].id, "title":rows[key].title, "content":rows[key].content};
			result.push(rv);
		}
		json(res, result);
	});
}

var json = function(res, data) {

	if(typeof data === "string") {
		res.write(data);
	} else {
		res.write(JSON.stringify(data));
	}

	res.end();
};


