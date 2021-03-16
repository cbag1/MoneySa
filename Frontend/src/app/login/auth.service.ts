import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class AuthService {
  private _userIsAuthenticated = false;
  constructor(private http: HttpClient) { }

  get userIsAuthenticated() {
    return this._userIsAuthenticated;
  }

  login(data) {

    return this.http.post(`http://localhost:8000/api/login`, data)
    .pipe(
      map(response => {
        // login successful if there's a jwt token in the response
        if (response) {
          
          localStorage.setItem('jwt', JSON.stringify(response));
          this._userIsAuthenticated = true;
          return response;
        }
      })
    );
  }

  getUser(id: string) {

    return this.http.get(`http://localhost:8000/api/users/${id}/agence`);
  }

  getClient(id: string) {

    return this.http.get(`http://localhost:8000/api/client-agence/user/${id}`);
  }

  logout() {
    this._userIsAuthenticated = false;
  }

}
