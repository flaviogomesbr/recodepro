module.exports = server => {
    Comments = require('../models/comentarios');

    server.post('/comentarios', async (req, res) => {
        const { nome, mensagem } = req.body;
        const result = await Comments.create({ nome, mensagem });
        res.send(result)
    })

    server.get('/comentarios', async (req, res) => {
        const result = await Comments.find();
        res.send(result)
    })
}    