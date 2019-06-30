import ajax from "./ajax";

export const reqHome = () => ajax("http://localhost:8000/home");
export const reqRegister = user =>
  ajax("http://localhost:8000/api/register", user, "POST");
// jie kou qing qiu han shu
export const reqLogin = user =>
  ajax("http://localhost:8000/api/login_check", user, "POST");
