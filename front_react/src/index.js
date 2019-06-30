import React from "react";
import ReactDOM from "react-dom";
import "bootstrap/dist/css/bootstrap.min.css";
import * as serviceWorker from "./serviceWorker";
import { HashRouter as Router, Route, NavLink, Switch } from "react-router-dom";
import { Provider } from "react-redux";
import { Navbar } from "react-bootstrap";
import store from "./redux/store";
import Home from "./containers/home/home";
import Article from "./containers/article/article";
import Register from "./containers/register/register";
import Login from "./containers/login/login";
import Logout from "./containers/logout/logout";

ReactDOM.render(
  <Provider store={store}>
    <Router>
      <Switch>
        <Route exact path="/register" component={Register} />
        <Route exact path="/login" component={Login} />
        <Route exact path="/logout" component={Logout} />
        <Route exact path="/" component={Home} />
        <Route exact path="/article/:id" component={Article} />
      </Switch>
    </Router>
  </Provider>,
  document.getElementById("root")
);

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: https://bit.ly/CRA-PWA
serviceWorker.unregister();
