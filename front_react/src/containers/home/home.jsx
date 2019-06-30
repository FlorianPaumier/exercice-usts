import React, { Component, useImperativeHandle } from "react";
import "../../components/res_style.css";
import Container from "react-bootstrap/Container";
import { connect } from "react-redux";
import { showArticles } from "../../redux/actions";
import Header from "../../components/navbar";
import jwt_decode from "jwt-decode";

function strip_preview(article) {
  var div = document.createElement("div");
  div.innerHTML = article;
  var preview = div.textContent || div.innerText || "";
  return preview.substr(0, 150);
}

class Home extends Component {
  constructor(props) {
    super(props);
    this.state = {
      userName: "",
      content: "",
      postTime: ""
    };
    this.props.showArticles(this.state);
  }

  render() {
    const articles = this.props.articles.data;
    var articleItems = "";
    var articleTxt = "";
    if (Array.isArray(articles)) {
      articleItems = articles.map(article => (
        <div key={article.id}>
          <a href={"http://localhost:3000/#/article/" + article.id}>
            <h1>{article._title}</h1>
            <div>{strip_preview(article._content) + "..."}</div>
            <br />
          </a>
        </div>
      ));
    }
    return (
      <div>
        <Header />
        <Container className="index_body">{articleItems}</Container>
      </div>
    );
  }
}

export default connect(
  state => ({ articles: state.articles }),
  { showArticles }
)(Home);
