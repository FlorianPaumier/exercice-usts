import React, { Component } from "react";
import Header from "../../components/navbar";

export default class Logout extends Component {
  componentWillMount() {
    const getToken = localStorage.getItem("jwToken");

    if (getToken) {
      localStorage.removeItem("jwToken");
      this.props.history.replace("/");
    }
  }

  render() {
    return (
      <div>
        <Header />
        <h1>You haven't login yet, you shouldn't be here. </h1>
      </div>
    );
  }
}
