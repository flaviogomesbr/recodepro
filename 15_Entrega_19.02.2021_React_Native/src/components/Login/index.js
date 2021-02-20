import React from "react";
import {
    Text,
    View,
    Image,
    TouchableOpacity,
    Alert
} from "react-native";

import { TextInput } from "react-native-gesture-handler";
import bannerLogin from '../../imgs/login.jpg'
import styles from "./styles";

function Login() {

    function autenticacao() {
        Alert.alert("Usuario", "Login realizado!")
    }

    return (
        <View style={styles.caixa}>

            <View>
                <Text style={styles.titulo}>
                    login
                </Text>
            </View>
            
            <View style={styles.inputs}>
                <TextInput
                placeholder="usuário"
                style={styles.input}
                />
                <TextInput
                placeholder="senha"
                secureTextEntry={true}
                style={styles.input}
                />

                <TouchableOpacity style={styles.btn} onPress={autenticacao}>
                    <Text style={styles.texto}>entrar</Text>
                </TouchableOpacity>
                <Text style={{color: "white"}}>cadastre-se aqui!</Text>


            </View>
            {/* style={{borderWidth: 2,borderColor: "#20232a"}} */}
            <View style={styles.cartImage}>

                <Image source={bannerLogin} style={styles.image} />
                    
            </View>
        </View>

    );
}

export default Login;