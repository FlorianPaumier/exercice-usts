import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})

export class ArticleService {

  private apiUrl = "http://127.0.0.1:8000";
  data: any = {};

  constructor(private http: HttpClient) { }

  getAllData(): Observable<any> {
    return this.http.get(this.apiUrl);
  }

  getCategory(): Observable<any> {
    const url = this.apiUrl + "/category/";
    return this.http.get(url);
  }

  createArticle(data): Observable<any> {
    const url = this.apiUrl + "/create";
    data.email = localStorage.getItem("email");
    return this.http.post(url,data);
  }

  createCategorie(data): Observable<any> {
    const url = this.apiUrl + "/category";
    return this.http.post(url,data);
  }

  findOneById(id:string): Observable<any> {
    const url = this.apiUrl + "/article/" + id;
    return this.http.get(url);
  }

  updateArticle(id, data): Observable<any> {
    const url = this.apiUrl + "/edit/" + id;
    data.email = localStorage.getItem("email");
    return this.http.post(url, data);
  }

  deleteArticle(id): Observable<any> {
    const url = this.apiUrl + "/delete/" + id;
    return this.http.delete(url);
  }
}
