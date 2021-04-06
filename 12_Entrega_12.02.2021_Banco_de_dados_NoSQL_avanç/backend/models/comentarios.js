const { Schema, model } = require('mongoose')

const CommentSchema = new Schema({
    nome: {
        type: String
    },
    mensagem: {
        type: String
    }
})

schemaModel = model('comment', CommentSchema)

module.exports = schemaModel;
