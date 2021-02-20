import React from "react";
import {
    Text,
    ScrollView,
    View,
    Image
} from "react-native";

import CartNews from './cart';

import styles from './styles';

import newsImage from '../../imgs/newsImage.jpg';

import newsImage1 from '../../imgs/news/news1.png';
import newsImage2 from '../../imgs/news/news2.png';
import newsImage3 from '../../imgs/news/news3.png';
import newsImage4 from '../../imgs/news/news4.png';

function Noticias() {
    return (
        <ScrollView>
            <View style={styles.cartImage}>

                <Image style={styles.image} source={newsImage} />
                
            </View>

            <View style={{borderWidth: 0.5, opacity: 0.5, borderLeftWidth: 0,borderRightWidth: 0,borderTopWidth: 0, borderColor: "#20232a", padding: 40, alignItems: "center", justifyContent: "center"}}> 
                <Text style={{fontSize: 30}}>notícias 📰 </Text>
            </View>

            <View style={styles.cardContainer}>
                <CartNews link='https://www.tecmundo.com.br/software/208475-machine-learning-larga-escala-apache-spark.htm' title="Machine Learning em larga escala com Apache Spark" img={newsImage3}/>
                <CartNews link='https://www.tecmundo.com.br/seguranca/204965-sony-realizara-hackathon-focado-musica-brasil-veja-premios.htm' title="Sony realizará hackathon focado em música no Brasil; veja prêmios" img={newsImage2}/>
                <CartNews link='https://www.tecmundo.com.br/mercado/209615-quintoandar-cria-programa-formacao-tecnologica-negros.htm' title="QuintoAndar cria programa de formação tecnológica para negros" img={newsImage1}/>
                <CartNews link='https://www.tecmundo.com.br/software/207670-blockchain-preparar-sistema-tecnologia.htm' title="Blockchain: como preparar um sistema para essa tecnologia" img={newsImage4}/>
            </View>
        </ScrollView>

    );
}

{/* style={{borderWidth: 2,borderColor: "#20232a"}} */}

export default Noticias;


