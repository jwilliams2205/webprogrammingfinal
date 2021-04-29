import Home from './components/Home';
import Login from './components/Login';
import Signup from './components/Signup';
import Navcontrol from './components/Navcontrol';
import {BrowserRouter, Route, Switch} from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css'
import './App.css'

function App() {
  return (
    <>
      <BrowserRouter>
        <Navcontrol />
        <Switch>
          <Route path = '/login' component = {Login}/>
          <Route path = '/signup' component = {Signup}/>
          <Route path = '/' component = {Home}/>
        </Switch>
      </BrowserRouter>
      </>
  );
}

export default App;
