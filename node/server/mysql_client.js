function mysqlClient() {
	var mysql  = require('/usr/local/node/lib/node_modules/mysql');
	
	var client = mysql.createPool({
	    host: 'localhost',
	    user: 'web_kary',
	    password: 'Web_kary123',
	    database: 'blog',
	    port: 3306,
	});

	this.query  = function(sql, callback) {
		client.getConnection(function (err, con) {
			if (err) throw err;
			con.query(sql, function (err, results) {
				if (err) throw err;
				callback(results);
				con.release();
			});
		});
	}

}
module.exports = mysqlClient;