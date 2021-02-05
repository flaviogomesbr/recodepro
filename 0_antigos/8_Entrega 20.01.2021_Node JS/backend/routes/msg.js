module.exports = function(app) {
    app.get('/msg', function(req, res){
        const connection = app.config.database();
        const query = app.models.getContent;

        query.getMessages(connection, 
            function(error, results, fields){
                console.log(error, results);
                res.json(results);
            })
    })
}