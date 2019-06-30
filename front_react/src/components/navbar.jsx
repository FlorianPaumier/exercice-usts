import React, { Component } from "react";
import { Navbar, Nav, Row, Col } from "react-bootstrap";
import "./res_style.css";
import jwt_decode from "jwt-decode";
export default class Hearder extends Component {
  constructor(props) {
    super(props);
    this.state = {
      userName: ""
    };
  }
  componentDidMount() {
    const getToken = localStorage.getItem("jwToken");
    if (getToken) {
      const decodeToken = jwt_decode(getToken);
      const userName = decodeToken.email;
      this.setState({ userName: userName });
    }
  }

  render() {
    return (
      <Navbar bg="light" expand="lg" className="customeNav">
        <Navbar.Brand className="text-center" href="#/">
          USTS-BLOG
        </Navbar.Brand>
        {this.state.userName ? (
          <Nav className="offset-1">
            <h3>{" Hello, " + this.state.userName}</h3>
            <Col>
              <Nav.Link href="#/logout"> Logout</Nav.Link>
            </Col>
          </Nav>
        ) : (
          <Nav>
            <Col>
              <Nav.Link href="#/register"> Register</Nav.Link>
            </Col>
            <Col>
              <Nav.Link href="#/login">Login</Nav.Link>
            </Col>
          </Nav>
        )}
      </Navbar>
    );
  }
}
