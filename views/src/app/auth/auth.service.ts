import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';


@Injectable({
  providedIn: 'root'
})
export class AuthService {

  private apiUrl = "http://127.0.0.1:8000";
  data: any = {};

  constructor(private http: HttpClient) { }

  login(data): Observable<any> {
    const url = this.apiUrl + "/login";
    return this.http.post(url, data);
  }

  register(data): Observable<any> {
    const url = this.apiUrl + "/register";
    return this.http.post(url, data);  
  }
}
