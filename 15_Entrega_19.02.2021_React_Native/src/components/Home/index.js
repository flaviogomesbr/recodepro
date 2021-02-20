import React from "react";
import {
    Text,
    View,
    StatusBar,
    Image,
    ScrollView,
    TouchableOpacity
} from "react-native";

import imageHome from "../../imgs/imageHome.jpg";
import styles from "./styles";

function Home({navigation}) {

    function linkLogar() {
        navigation.navigate("Login")
    }

    return (

        <ScrollView style={{fontFamily: "monospace"}}>
            <StatusBar />

            <View style={styles.cartImage}>
                <Image source={imageHome} style={styles.imageHome} />
                <Text style={{textAlign: "center", padding:"6%", fontSize: 30, color: "white"}}>🐙 polvodev app 👩🏽‍💻</Text>
            </View>

            <View style={styles.cardContainer}>
                <View style={styles.card}>
                    <View style={styles.cardText}>
                        <Text style={{ fontSize: 25, fontWeight: 'bold' }}>
                            login
                        </Text>
                        <Text style={{ fontSize: 20, textAlign: 'center' }}>
                            clique abaixo para acessar
                        </Text>
                    </View>
                    <View style={styles.botaoCard}>
                        <TouchableOpacity style={styles.btn} onPress={linkLogar}
                        ><Text style={styles.texto} onPress={linkLogar}>Logar</Text></TouchableOpacity>
                    </View>
                </View>
            </View>

            {/* <Cart h1="LOGIN" txt="Clique aqui e realize seu login!"/> */}

        </ScrollView>
    );
}

export default Home;
