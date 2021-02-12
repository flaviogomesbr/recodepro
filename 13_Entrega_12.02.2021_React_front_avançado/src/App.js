import './App.css';
import { lazy, Suspense } from 'react';


const Imagem = lazy(()=> import('./code-splitting/Imagem'));
const Slogan = lazy(()=> import('./code-splitting/Slogan'));
const Rodape = lazy(()=> import('./code-splitting/Rodape'));


function App() {
  return (
    <div className="App">
      <header className="App-header">
        


          <Suspense fallback={
           <p>🧘🏼‍♀️ Carregando...Um momento! 🧘🏼‍♀️</p>
          }>
           <Imagem />
           </Suspense>
           

           <Suspense fallback={
          <p>🧘🏼‍♀️🧘🏼‍♀️ Carregando...Um momento! 🧘🏼‍♀️🧘🏼‍♀️</p>}>
           <Slogan />
           </Suspense>


           <Suspense fallback={
          <p>🧘🏼‍♀️🧘🏼‍♀️ Carregando...Um momento! 🧘🏼‍♀️🧘🏼‍♀️🧘🏼‍♀️</p>}>
           <Rodape />
           </Suspense>
        
      </header>
    </div>
  );
}

export default App;
