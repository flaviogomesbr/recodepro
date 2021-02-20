import {
    StyleSheet,
} from "react-native";

const styles = StyleSheet.create({
    cartImage: {
        width: "100%", 
        backgroundColor: "black",
    },
    image: {
        width: "100%", 
        height: 150,
        backgroundColor: "black",
    },
    cartNews: {
        width: "100%", 
        height: 150,
        backgroundColor: "black",
    },
    cardContainer: {
        width: "100%",
        padding: 10,
        justifyContent: "center",
        alignItems: "center",
        backgroundColor: "black",
    },

    newsImage: {
        width: "100%", 
        height: 150,
        borderTopRightRadius: 10,
        borderTopLeftRadius: 10
    },
    card: {
        borderRadius: 10,
        borderWidth: 2,
        borderColor: "darkslategrey",
        marginBottom: 20
    },
    cartInfos:{
        alignItems: "center",
        padding: 10,
    },
    cardText: {
        alignItems: "center",
        color: "black",
    },
    botaoCard: {
        width: "80%",
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
    }
})

export default styles;