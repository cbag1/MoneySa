import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class TransactionService {

  constructor(private http: HttpClient) { }

  getTransaction(code: string) {

    return this.http.get(`http://localhost:8000/api/transaction/code/${code}`);
  }

  updateTransaction(id: number, data) {

    return this.http.put(`http://localhost:8000/api/transaction/${id}`, data);
  }

  updateClient(id: number, data) {

    return this.http.put(`http://localhost:8000/api/client/${id}`, data);
  }

  getTransactionByUser(id: number) {

    return this.http.get(`http://localhost:8000/api/transaction/agent/${id}`);
  }

  

  getFrais(nbr: string) {
    // console.log(nbr);
    let tableaufrais = {
      "0-5000": 425,
      "5000-10000": 850,
      "10000-15000": 1270,
      "15000-20000": 1695,
      "20000-50000": 2500,
      "50000-60000": 3000,
      "60000-75000": 4000,
      "75000-120000": 5000,
      "120000-150000": 6000,
      "150000-200000": 7000,
    }

    for (var i in tableaufrais) {
      let sep = i.split("-");
      // console.log(+sep[0]);
      if (+sep[0] <= +nbr && +sep[1] > +nbr) {
        return tableaufrais[i];
      }
    }
  }


}
