import { reqHome, reqRegister, reqLogin } from "../api/index";
import { RECEIVE_ARTICLES, AUTH_SUCCESS, ERROR_MSG } from "./action-type";
import setAuthToken from "../utils/setAuthToken.js";

//synchronize function to receive user information
const receiveArticles = articles => ({
  type: RECEIVE_ARTICLES,
  data: articles
});
//synchronize function for AUTH_SUCCESS
const authSuccess = user => ({ type: AUTH_SUCCESS, data: user });

//synchronize function for ERROR_MSG
const errorMsg = msg => ({ type: ERROR_MSG, data: msg });

/* 
asynchronous  action for register
*/
export const register = user => {
  const { username, password, confirm_password } = user;
  if (password !== confirm_password) {
    //form check in front-end
    return errorMsg("Confirm_password isn't identical to password");
  }
  return async dispatch => {
    //send asynchronous register request
    //once we use keyword "await", this function must add keyword "async"
    const response = await reqRegister({ username, password });
    console.log(response);

    const result = response.data;
    if (response.status === 200) {
      //code 0, register success
      //dispacher success action
      const { token } = result;
      console.log("token:  ", token);
      localStorage.setItem("jwToken", token);
      // setAuthToken(token);
      dispatch(authSuccess(result));
    } else {
      //code 1, register failed
      //dispacher failed action
      dispatch(errorMsg(result.msg));
    }
  };
};

/* 
asynchronous  action for Login
*/
export const login = user => {
  const { username, password } = user;
  if (!username) {
    return errorMsg("email is required");
  }
  if (!password) {
    //form check in front-end
    return errorMsg("password is required");
  }
  return async dispatch => {
    const response = await reqLogin({ username, password });
    const result = response.data;
    if (response.status === 200) {
      //code 0, register success
      //dispacher success action
      const { token } = result;
      console.log("token:  ", token);
      localStorage.setItem("jwToken", token);
      // setAuthToken(token);
      dispatch(authSuccess(result));
    } else {
      //code 1, register failed
      //dispacher failed action
      dispatch(errorMsg(result.msg));
    }
  };
};

//asynchronous  action for Uspace get Info
export const showArticles = () => {
  console.log("article action in");
  return async dispatch => {
    const response = await reqHome();
    console.log(response);
    const result = response.data;
    if (result.code === 0) {
      dispatch(receiveArticles(result.data));
    } else {
      dispatch(receiveArticles(result.msg));
    }
  };
};
