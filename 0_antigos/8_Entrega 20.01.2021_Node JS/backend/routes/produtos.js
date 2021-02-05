module.exports = function(app) {
    app.get('/produto', function(req, res){
        const connection = app.config.database();
        const query = app.models.getContent;

        query.getProducts(connection, 
            function(error, results, fields){
                console.log(error, results);
                res.json(results);
            })
    })
}