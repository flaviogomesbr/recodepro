import { StyleSheet } from "react-native"
const styles = StyleSheet.create({
    caixa: {
        height: "100%",
        width: "100%",
        backgroundColor: 'black',
        justifyContent:"center",
        alignItems: "center",
        padding: 10,
    },
    titulo: {
        color: "white",
        fontSize: 32
    },    
    inputs: {
        padding: 10,
        margin: 10,
        width: "100%",
        borderWidth: 1,
        borderColor: "white"

    },
    input: {
        backgroundColor: "white",
        width: "100%",
        padding: 8,
        marginTop: 12,
        borderRadius: 4
    },
    btn: {
        backgroundColor: "#4895ef",
        width: "100%",
        marginTop: 12,
        padding: 8,
        borderRadius: 5
    },
    texto: {
        fontSize: 18,
        color: "white",
        textAlign: "center"
    },
    cartImage: {
        width: "100%", 
        height: "50%",
        alignItems:"center",
        justifyContent:"center",
        borderRadius: 5,
        marginTop:15,
    },
    image: {
        width: "94%", 
        height: "110%",
        borderRadius: 5,
    }
});

export default styles;