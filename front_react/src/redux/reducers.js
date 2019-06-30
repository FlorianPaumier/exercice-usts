import { combineReducers } from "redux";
import { RECEIVE_ARTICLES, AUTH_SUCCESS, ERROR_MSG } from "./action-type";

const initArticle = {
  getData: "false",
  data: "",
  msg: ""
};

function articles(state = initArticle, action) {
  switch (action.type) {
    case RECEIVE_ARTICLES:
      return { data: action.data, getData: "true" };
    case ERROR_MSG:
      return { ...state, msg: action.data };
    case AUTH_SUCCESS:
      return { data: action.data, getData: "true" };
    default:
      return state;
  }
}

const initUser = {
  email: "",
  msg: "",
  redirectTo: ""
};

function user(state = initUser, action) {
  switch (action.type) {
    case AUTH_SUCCESS:
      return { data: action.data, redirectTo: "true" };
    case ERROR_MSG:
      return { ...state, msg: action.data };

    default:
      return state;
  }
}

// export user object { user: { } }

export default combineReducers({ articles, user });
