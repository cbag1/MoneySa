import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class DepotService {

  constructor(private http: HttpClient) { }


  addTransaction(data) {
    return this.http.post('http://localhost:8000/api/transaction', data);
  }

  getTransaction() {
    return this.http.get('http://localhost:8000/api/transaction');
  }

}
