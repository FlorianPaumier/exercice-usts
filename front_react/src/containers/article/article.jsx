import React, { Component } from "react";
import "../../components/res_style.css";
import { connect } from "react-redux";
import { showArticles } from "../../redux/actions";
import Navbar from "../../components/navbar";
import Container from "react-bootstrap/Container";
class Article extends Component {
  constructor(props) {
    super(props);
    this.state = {
      content: "",
      postTime: ""
    };
    this.props.showArticles(this.state);
  }

  render() {
    const path = this.props.location.pathname.split("/");
    const length = path.length;
    const id = path[length - 1];
    var article = "";
    if (this.props.articles) {
      article = this.props.articles.data[id - 1];
    }
    console.log(article);

    return (
      <div>
        <Navbar />
        <Container className="index_body">
          {article ? (
            <div>
              <h1 className="text-center">{article._title}</h1>
              <h3 className="text-center">
                {"Category: " + article._category._name}
              </h3>
              <img
                src={"Images/" + article._image}
                alt="photo"
                className="mx-auto d-block"
              />
              <div
                className="Container"
                dangerouslySetInnerHTML={{ __html: article._content }}
              />
            </div>
          ) : null}
        </Container>
      </div>
    );
  }
}

export default connect(
  state => ({ articles: state.articles }),
  { showArticles }
)(Article);
