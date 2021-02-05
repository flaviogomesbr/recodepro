module.exports = function () {
    
    this.getProducts = function(conn, callback){
        conn.query("SELECT * FROM produto JOIN categorias ON produto.id_categoria = categorias.id_categoria", callback);
    }

    this.getMessages = function(conn, callback) {
        conn.query("SELECT * FROM comentarios", callback);
    }
    
    this.sentMessages = function(content, callback) {
        conn.query("INSERT INTO comentarios set ?", content);
    }
    
    return this
}