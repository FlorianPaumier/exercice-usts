import React, { Component } from "react";
import { Form, Button } from "react-bootstrap";
import { Redirect } from "react-router-dom";
import { connect } from "react-redux";
import { login } from "../../redux/actions";
import jwt_decode from "jwt-decode";
import Header from "../../components/navbar";

class Login extends Component {
  constructor(props) {
    super(props);
    this.state = {
      username: "",
      password: "",
      token: ""
    };
  }

  changeHandler = event => {
    let stateName = event.target.name;
    let newValue = event.target.value;
    this.setState({ [stateName]: newValue });
  };

  submitHandler = event => {
    this.props.login(this.state);
  };

  toRegister = event => {
    this.props.history.replace("/register");
  };

  componentWillMount() {
    const getToken = localStorage.getItem("jwToken");
    if (getToken) {
      const decodeToken = jwt_decode(getToken);
      const currentTime = Date.now() / 1000;
      if (decodeToken.exp >= currentTime) {
        this.props.history.replace("/");
      }
    }
  }
  render() {
    // console.log(this.state);
    const { msg, redirectTo } = this.props.user;
    if (redirectTo) {
      this.props.history.replace("/");
    }
    return (
      <div>
        <Header />
        <div className="container mx-auto login_form">
          {msg ? <h1> {msg}</h1> : null}
          <Form className="container my-3 d-block">
            <Form.Group controlId="form_register_email">
              <Form.Control
                name="username"
                type="email"
                placeholder="Email : "
                onChange={this.changeHandler.bind(this)}
              />
            </Form.Group>
            <Form.Group controlId="form_register_psw">
              <Form.Control
                name="password"
                type="password"
                placeholder="Password :"
                onChange={this.changeHandler.bind(this)}
              />
            </Form.Group>
            <Button
              className="btn-block"
              onClick={this.submitHandler.bind(this)}
            >
              LOGIN
            </Button>
            <Button className="btn-block" onClick={this.toRegister}>
              REGISTER
            </Button>
          </Form>
        </div>
      </div>
    );
  }
}

export default connect(
  state => ({ user: state.user }),
  { login }
)(Login);
