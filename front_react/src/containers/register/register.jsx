import React, { Component } from "react";
import { Container, Row, Form, Col, Button } from "react-bootstrap";
import { connect } from "react-redux";
import { register } from "../../redux/actions";
import { showArticles } from "../../redux/actions";
import jwt_decode from "jwt-decode";
import Header from "../../components/navbar";
class Register extends Component {
  constructor(props) {
    super(props);
    this.state = {
      username: "",
      password: "",
      confirm_password: ""
    };
  }

  handleRegister = event => {
    this.props.register(this.state);
    console.log(this.props.register);
  };

  handleChange = event => {
    var newValue = event.target.value;
    var toChangeKey = event.target.name;
    this.setState({ [toChangeKey]: newValue });
    //     //special presentation variable js [state]
    //     //take [name] as parameter, the real 'string' will  be the states.
  };

  handleRouteToLogin = () => {
    //console.log(this.props.history.location);
    this.props.history.replace("/login");
  };
  componentWillMount() {
    document.body.style.background = "#ffffff";
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
    const { msg, redirectTo } = this.props.user;
    if (redirectTo) {
      console.log(redirectTo);
      this.props.history.replace("/");
    }

    return (
      <div>
        <Header />
        <Container>
          <div className="mx-auto col-6 border border-dark my-3">
            <h1 className="text-center"> Register </h1>
            {msg ? <p className="error-msg">{msg}</p> : null}
            <Form className="my-3">
              <Form.Group as={Row} controlId="formPlaintextEmail">
                <Form.Label column sm="4">
                  Email
                </Form.Label>
                <Col sm="8">
                  <Form.Control
                    name="username"
                    type="email"
                    placeholder="email@example.com"
                    onChange={this.handleChange.bind(this)}
                  />
                </Col>
              </Form.Group>
              <Form.Group as={Row} controlId="formPlaintextPassword">
                <Form.Label column sm="4">
                  Password
                </Form.Label>
                <Col sm="8">
                  <Form.Control
                    name="password"
                    type="password"
                    placeholder="Password"
                    onChange={this.handleChange.bind(this)}
                  />
                </Col>
              </Form.Group>
              <Form.Group as={Row} controlId="formPlaintextPassword">
                <Form.Label column sm="4">
                  Confirm Password
                </Form.Label>
                <Col sm="8">
                  <Form.Control
                    name="confirm_password"
                    type="password"
                    placeholder="confirm_password"
                    onChange={this.handleChange.bind(this)}
                  />
                </Col>
              </Form.Group>
              <Button
                variant="primary"
                size="lg"
                block
                onClick={this.handleRegister}
              >
                Register
              </Button>
              <br />
              <Row className="mx-auto">
                <Button
                  variant="outline-secondary"
                  onClick={this.handleRouteToLogin.bind(this)}
                  block
                >
                  Login
                </Button>
              </Row>
            </Form>
          </div>
        </Container>
      </div>
    );
  }
}

export default connect(
  state => ({ user: state.user, articles: state.articles }),
  { register, showArticles } //-> the asynchronous action for this component
)(Register);
