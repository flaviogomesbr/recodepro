const db = require('mysql');

const connDb = function(){
    console.log("Database on!");
    return(conn = db.createConnection({
            host: 'localhost',
            user: 'root',
            password: '',
            database: 'fseletro'
        }))
}

module.exports = function() {
    return connDb;
}
