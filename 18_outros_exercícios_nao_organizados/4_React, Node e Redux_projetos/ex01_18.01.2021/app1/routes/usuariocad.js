module.exports = function(app) {
    
    app.get('/usuariocad', function(req, res){
        res.render('pages/usuariocad');
    });

    app.post('/usuario/salvar', function(req, res){
        var usuario = req.body;
        var connection = app.config.database();
        var usuarioModel = app.models.conteudoModel;

        usuarioModel.setUsuario(usuario, connection, function(error, results){

        });

        usuarioModel.getUsuarios(connection, 
            function(error,results,fields){
                console.log(error,results);
                res.render('pages/usuarios',{dados:results});
            });
    })

}