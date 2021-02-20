import React from "react";
import {
    Text,
    View,
    TouchableOpacity
} from "react-native";

import styles from "./styles";

function cart(props) {

    return (

        <View style={styles.cardContainer}>
            <View style={styles.card}>
                <View style={styles.cardText}>
                    <Text style={{ fontSize: 35, fontWeight: 'bold' }}>
                        {props.h1}
                    </Text>
                    <Text style={{ fontSize: 25, textAlign: 'center' }}>
                        {props.txt}
                    </Text>
                </View>
                <View style={styles.botaoCard}>
                    <TouchableOpacity style={styles.btn} 
                    ><Text style={styles.texto} >Acessar</Text></TouchableOpacity>
                </View>
            </View>
        </View>

    );
}

export default cart;